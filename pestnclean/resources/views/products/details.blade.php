<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <h1>Product Details</h1>

    @if ($product)
        <div>
            <h2>{{ $product->name }}</h2>
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Price:</strong> ${{ $product->price }}</p>
        </div>

        <form id="add-to-cart-form" action="{{ route('cart.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">

            <div class="form-group">
                <label for="size">Size:</label>
                <select name="size" id="size" class="form-control" onchange="updateQuantity()">
                    @foreach ($sizes as $sizes)
                    <option value="{{ $sizes->size }}" data-quantity="{{ $sizes->quantity }}">{{ $sizes->size }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group hidden" id="quantity-group">
                @if (session('error'))
                    <div>{{ session('error') }}</div>
                @endif
                <label for="quantity">Quantity (available: <span id="available-quantity"></span>):</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="1" min="1"
                    onchange="validateQuantity()">
            </div>
            @if (Route::has('login'))
                @auth
                    <input type="hidden" name="user_id" value="{{ session('user')->id }}">
                    <button type="submit" id="add-to-cart-button" class="btn btn-primary" disabled>Add to Cart</button>
                @else
                    <p>Đăng nhập hoặc đăng kí để thêm sản phẩm vào giỏ hàng</p>
                @endauth
            @endif
        </form>
    @else
        <p>Product not found.</p>
    @endif

    <h2>Product Images</h2>
    <img src="{{ asset('uploads/products/' . $product->main_image) }}" alt="">
    @if ($productImg->isNotEmpty())
        <div>
            @foreach ($productImg as $image)
                <img src="{{ asset('uploads/products/' . $image->image_path) }}" alt="Product Image"
                    style="width:200px;height:auto;">
            @endforeach
        </div>
    @else
        <p>No images available for this product.</p>
    @endif

    <h1>Feedback for {{ $product->name }}</h1>

    <!-- Display existing feedback -->
    <div>
        <h2>Customer Feedback</h2>
        @if ($feedbacks->isNotEmpty())
            @foreach ($feedbacks as $feedback)
                <div>
                    <p><strong>User:</strong> {{ $feedback->user->fullname }}</p>
                    <p><strong>Rating:</strong> {{ $feedback->rating }}/5</p>
                    <p>{{ $feedback->content }}</p>
                </div>
            @endforeach
            {{ $feedbacks->links() }}
        @else
            <p>No feedback available for this product.</p>
        @endif
    </div>

    <!-- Feedback form -->
    <div>
        <h2>Leave a Feedback</h2>
        @if (Route::has('login'))
            @auth
                <form action="{{ route('feedback.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="user_id" value="{{ session('user')->id }}">

                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea name="content" id="content" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="rating">Rating:</label>
                        <select name="rating" id="rating" class="form-control" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                </form>
            @else
                <p>Please <a href="{{ route('login') }}">log in</a> to leave feedback.</p>
            @endauth
        @endif
    </div>

    <script>
        function updateQuantity() {
            const sizeSelect = document.getElementById('size');
            const quantityGroup = document.getElementById('quantity-group');
            const availableQuantitySpan = document.getElementById('available-quantity');
            const addToCartButton = document.getElementById('add-to-cart-button');

            const selectedOption = sizeSelect.options[sizeSelect.selectedIndex];
            const availableQuantity = selectedOption.getAttribute('data-quantity');

            availableQuantitySpan.textContent = availableQuantity;
            document.getElementById('quantity').max = availableQuantity;

            quantityGroup.classList.remove('hidden');
            addToCartButton.disabled = false;
        }

        function validateQuantity() {
            const quantityInput = document.getElementById('quantity');
            const addToCartButton = document.getElementById('add-to-cart-button');
            const maxQuantity = parseInt(quantityInput.max, 10);
            const currentQuantity = parseInt(quantityInput.value, 10);

            if (currentQuantity > maxQuantity) {
                alert('The quantity exceeds the available stock.');
                quantityInput.value = maxQuantity;
                addToCartButton.disabled = true;
            } else {
                addToCartButton.disabled = false;
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            updateQuantity();
        });
    </script>
</body>

</html>
