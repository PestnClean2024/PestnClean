@extends('layouts.client')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/components/product.css') }}">
@endpush

@section('content')
    <section>

        <div class="div-product">
            <div class="div-product-text">
                <p class="p-product">Danh mục sản phẩm</p>

                @foreach($categories as $category)
                <a href="{{ route('shop.index', ['category_id' => $category->id]) }}" class="div-product-a">
                    <div class="product-text display">
                        <span class="text">{{ $category->title }}</span> <span class="color-top bold">
                            <img src="/FePestsClean/resources/images/product/product-chevron-right.png"
                                alt=""></span>
                    </div>
                </a>
                @endforeach

            </div>

            <div class="div-banner">
                <div class="div-product-img">
                    <img src="/FePestsClean/resources/images/product/product-horz.png" alt="" class="img-banner">
                </div>
                <div class="div-gird">
                    <div class="div-product-gird"></div>
                    <div class="div-product-gird"></div>
                    <div class="div-product-gird"></div>
                    <div class="div-product-gird"></div>
                    <div class="div-product-gird"></div>
                </div>
            </div>
        </div>

        <div class="div-contact-cell">
            <div class="div-contact">
                <p class="p-product">Phương thức liên hệ</p>
                <div class="div-zl-fb-call">
                    <div class="div-fb boder-product">
                        <a href="#" class="font-text"><img
                                src="/FePestsClean/resources/images/product/product-icon-fb.png" alt="">
                            Facebook</a>
                    </div>
                    <div class="div-zl boder-product">
                        <a href="#" class="font-text"><img
                                src="/FePestsClean/resources/images/product/product-Zalo-logo.png" alt=""> Zalo</a>
                    </div>
                    <div class="div-call boder-product">
                        <a href="#" class="font-text" href="tel:+0909 123 456"><img
                                src="/FePestsClean/resources/images/product/product-icon-zl.png" alt=""> 0909 123
                            456</a>
                    </div>
                </div>
            </div>

            <div class="div-cell">
                <div class="div-cell-display div-contact-cell">
                    <input type="text" name="" id="" placeholder="Tìm Kiếm sản phẩm"
                        class="product-input"><i class="i-color fa-solid fa-magnifying-glass"></i>
                    <p class="product-text-p">Sắp xếp theo:</p>
                    <select id="cars" name="cars" class="p-select">
                        <option value="volvo">Phù hợp nhất</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                    <button class="product-btn-img"><a href="product-fillter.php"><img
                                src="/FePestsClean/resources/images/product/product-Vector.png" alt=""></a></button>
                </div>
                <div class="product-cell-add">
                    <p class="span-cell">ĐANG GIẢM GIÁ</p>
                    <p><a href="#" class="p-add">Xem thêm</a></p>
                </div>
            </div>
        </div>

        <div class="div-img-3">
            <div class="img-3">
                <a href="#"><img src="/FePestsClean/resources/images/product/product-1.png" alt=""
                        class="img-1"></a>
                <a href="#"><img src="/FePestsClean/resources/images/product/product-1.png" alt=""
                        class="img-1 img-2"></a>
                <a href="#"><img src="/FePestsClean/resources/images/product/product-1.png" alt=""
                        class="img-1 img-2"></a>
            </div>

            <div class="grid-cols-1  gap-4 ">

                <div class="grid">

                    <div class="border-div rounded-lg  bg-card">
                        <a href="/FePestsClean/resources/views/client/product-fillter.php">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted1">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <span class="bg-primary-sp text-sm"><img
                                        src="/FePestsClean/resources/images/product/product-fire.png"
                                        alt="">-15%</span>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>

                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted1">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <span class="bg-primary-sp  text-sm"><img
                                        src="/FePestsClean/resources/images/product/product-fire.png"
                                        alt="">-15%</span>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>

                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted1">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <span class="bg-primary-sp  text-sm"><img
                                        src="/FePestsClean/resources/images/product/product-fire.png"
                                        alt="">-15%</span>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>

                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted1">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <span class="bg-primary-sp text-sm"><img
                                        src="/FePestsClean/resources/images/product/product-fire.png"
                                        alt="">-15%</span>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>
                </div>

                <div class="div-hot-text">
                    <p class="span-cell">ĐANG BÁN CHẠY</p>
                    <p><a href="#" class="p-add">Xem thêm</a></p>
                </div>

                <div class="grid div-gird">
                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted1">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <span class="text-smt">ĐANG BÁN CHẠY</span>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>

                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted1">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <span class="text-smt">ĐANG BÁN CHẠY</span>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>

                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted1">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <span class="text-smt">ĐANG BÁN CHẠY</span>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>

                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted1">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <span class="text-smt">ĐANG BÁN CHẠY</span>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>
                </div>

                <div class="div-hot-text">
                    <p class="span-cell">TẤT CẢ SẢN PHẨM</p>
                    <p class=""><a href="#" class="p-add">Xem thêm</a></p>
                </div>

                <div class="grid div-gird">

                    {{-- @foreach($products as $product)
                    <div class="border-div rounded-lg  bg-card">
                        <a href="{{ route('shop.details', ['id' => $product->id]) }}">
                            <img aria-hidden="true" alt=""
                                src="{{ asset('uploads/products/' . $product->main_image) }}" style="height: 50px; object-fit: cover;" />
                            <div class="mt-2">
                                <span class="text-muted1">{{ $product->category_id }}</span>
                                <h2 class="font-bold">{{ $product->name }}</h2>
                                <p class="text-muted color-top">{{ $product->price }} ₫</p>
                                <p class="text-color ">{{ $product->price }} ₫</p>
                                <div class="text-div">
                                    <span class="text-sp">Hè Sang</span>
                                    <span class="text-smtn">Mới</span>
                                </div>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>
                    @endforeach --}}



                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted1">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <div class="text-div">
                                    <span class="text-sp">Hè Sang</span>
                                    <span class="text-smtn">Mới</span>
                                </div>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>

                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted1">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <div class="text-div">
                                    <span class="text-sp">Hè Sang</span>
                                    <span class="text-smtn">Mới</span>
                                </div>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>

                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted1">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <div class="text-div">
                                    <span class="text-sp">Hè Sang</span>
                                    <span class="text-smtn">Mới</span>
                                </div>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>
                </div>

                <div class="grid div-gird-top">
                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted1">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <div class="text-div">
                                    <span class="text-sp">Hè Sang</span>
                                    <span class="text-smtn">Mới</span>
                                </div>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>

                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted1">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <div class="text-div">
                                    <span class="text-sp">Hè Sang</span>
                                    <span class="text-smtn">Mới</span>
                                </div>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>

                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted1">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <div class="text-div">
                                    <span class="text-sp">Hè Sang</span>
                                    <span class="text-smtn">Mới</span>
                                </div>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>

                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted1">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <div class="text-div">
                                    <span class="text-sp">Hè Sang</span>
                                    <span class="text-smtn">Mới</span>
                                </div>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>
                </div>

                <div class="grid div-gird-top">
                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <div class="text-div">
                                    <span class="text-sp">Hè Sang</span>
                                    <span class="text-smtn">Mới</span>
                                </div>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>

                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <div class="text-div">
                                    <span class="text-sp">Hè Sang</span>
                                    <span class="text-smtn">Mới</span>
                                </div>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>

                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product/product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <div class="text-div">
                                    <span class="text-sp">Hè Sang</span>
                                    <span class="text-smtn">Mới</span>
                                </div>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>

                    <div class="border-div rounded-lg  bg-card">
                        <a href="#">
                            <img aria-hidden="true" alt=""
                                src="/FePestsClean/resources/images/product//product-img-horz.png" />
                            <div class="mt-2">
                                <span class="text-muted">Dung dịch hóa chất</span>
                                <h2 class="font-bold">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621...</h2>
                                <p class="text-muted color-top">100.000 ₫ - 150.000 ₫</p>
                                <p class="text-color ">100.000 ₫ - 150.000 ₫</p>
                                <div class="text-div">
                                    <span class="text-sp">Hè Sang</span>
                                    <span class="text-smtn">Mới</span>
                                </div>
                            </div>
                        </a>
                        <button class="bg-secondary rounded">Giỏ hàng</button>
                    </div>
                </div>

                <div class="div-link">
                    <span class="span-link link-b"><a href="#">
                            << /a></span>
                    <span class="span-link "><a href="#">1</a></span>
                    <span class="span-link "><a href="#">2</a></span>
                    <span class="span-link "><a href="#">3</a></span>
                    <span class="span-link "><a href="#">4</a></span>
                    <span class="span-link "><a href="#">...</a></span>
                    <span class="span-link "><a href="#">10</a></span>
                    <span class="span-link link-b"><a href="#">></a></span>
                </div>
            </div>
        </div>
        </div>
    </section>

    @include('layouts.include.client.banner-carousel')
    @include('layouts.include.client.notify-product')
@endsection
