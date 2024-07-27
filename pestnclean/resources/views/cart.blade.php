<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <h1>Cart Items</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div>{{ session('error') }}</div>
    @endif

    @if ($cartItems->isEmpty())
        <p>No items in your cart.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->product_id }}</td>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->size }}</td>
                        <td>
                            <form action="{{ route('cart.update', $item->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" name="action" value="decrease">-</button>
                                {{ $item->quantity }}
                                <button type="submit" name="action" value="increase">+</button>
                            </form>
                        </td>
                        <td>{{ $item->total_price }}</td>
                        <td>
                            <form action="{{ route('cart.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
