@extends('layouts.client')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/components/product-cart.css') }}">
@endpush

@section('content')
    <section>
        <div class="div-cart">

            <div class="div-cart-product">
                <p class="p-cart">Sản phẩm</p>
                <img src="/FePestsClean/resources/images/product/product-chevron-right.png" alt="" class="img-cart">
                <p class="p-cart-div">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621ml (21Oz)</p>
                <img src="/FePestsClean/resources/images/product/product-chevron-right.png" alt="" class="img-cart">
                <p class="p-cart p-color-blue">Giỏ hàng</p>
            </div>

            <div>
                <div class="div-text">
                    <p class="cart-text">GIỎ HÀNG</p>
                </div>
                <div class="div-cart-product div-dap">
                    <div class="div-cart-product">
                        <p class="sp-cart">1</p>
                        <p class="p-text">Giỏ hàng</p>
                    </div>
                    <hr class="hr-cart">
                    <div class="div-cart-product">
                        <p class="sp-cart-p">2</p>
                        <p class="p-text-2">Điền thông tin</p>
                    </div>
                </div>
            </div>

            <div class="div-cart-product div-cart-with">
                <div class="cart-div-1">
                    <div class="div-cart-product justify">
                        <p class="p-div-cart-text cart-p-with cart-color">Sản phẩm</p>
                        <p class="p-div-cart-text cart-p-with-1 p-center cart-color"><span class="p-center p-3">Giá</span>
                        </p>
                        <p class="p-div-cart-text cart-p-with-1 p-center cart-color"><span class="p-center p-2">Số
                                lượng</span></p>
                        <p class="p-div-cart-text cart-p-with-1 cart-color"><span class="cart-p-with-2 cart-color">Tạm
                                tính</span></p>
                    </div>

                    <hr class="hr-cart-product">

                    <div class="cart-div-img div-cart-product">
                        <img src="/FePestsClean/resources/images/product/product-img-horz.png" alt=""
                            class="cart-img-z">
                        <div class="div-cart-product cart-left">
                            <div class="d-btn">
                                <p class="p-div-cart-text cart-color">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621ml
                                    (21Oz)</p>
                                <button class="btn-cart cart-color-b">X xóa</button>
                            </div>
                            <p class="cart-size">Kích thước: M</p>
                        </div>
                        <p class="cart-size-tt tt-with cart-color">80.000đ</p>
                        <div class="div-btn-tt">
                            <button class="cart-size-tt btn-cart">-</button>
                            <span class="cart-size-tt cart-color">2</span>
                            <button class="cart-size-tt btn-cart cart-color-b">+</button>
                        </div>
                        <p class="cart-size-tt p-size-tt cart-color">160.000đ</p>

                    </div>

                    <div class="cart-div-img div-cart-product">
                        <img src="/FePestsClean/resources/images/product/product-img-horz.png" alt=""
                            class="cart-img-z">
                        <div class="div-cart-product cart-left">
                            <div class="d-btn">
                                <p class="p-div-cart-text cart-color">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621ml
                                    (21Oz)</p>
                                <button class="btn-cart cart-color-b">X xóa</button>
                            </div>
                            <p class="cart-size">Kích thước: M</p>
                        </div>
                        <p class="cart-size-tt tt-with cart-color">80.000đ</p>
                        <div class="div-btn-tt">
                            <button class="cart-size-tt btn-cart">-</button>
                            <span class="cart-size-tt cart-color">2</span>
                            <button class="cart-size-tt btn-cart cart-color-b">+</button>
                        </div>
                        <p class="cart-size-tt p-size-tt cart-color">160.000đ</p>

                    </div>

                    <div class="cart-div-img div-cart-product">
                        <img src="/FePestsClean/resources/images/product/product-img-horz.png" alt=""
                            class="cart-img-z">
                        <div class="div-cart-product cart-left">
                            <div class="d-btn">
                                <p class="p-div-cart-text cart-color">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621ml
                                    (21Oz)</p>
                                <button class="btn-cart cart-color-b">X xóa</button>
                            </div>
                            <p class="cart-size">Kích thước: M</p>
                        </div>
                        <p class="cart-size-tt tt-with cart-color">80.000đ</p>
                        <div class="div-btn-tt">
                            <button class="cart-size-tt btn-cart">-</button>
                            <span class="cart-size-tt cart-color">2</span>
                            <button class="cart-size-tt btn-cart cart-color-b">+</button>
                        </div>
                        <p class="cart-size-tt p-size-tt cart-color">160.000đ</p>

                    </div>
                    <hr class="hr-cart-product hr-cart-top">
                </div>

                <div class="cart-div-2">
                    <p class="p-div-cart-2 cart-color">THÔNG TIN THANH TOÁN</p>

                    <div class="cart-all-min">
                        <div>
                            <input type="text" name="" id="" placeholder="Nhập mã giảm giá ( Nếu có )"
                                class="input-cart">
                            <button class="btn-cart btn-with">Xác nhận</button>
                        </div>

                        <div class="cart-flex justify">
                            <div class="cart-flex">
                                <img src="/FePestsClean/resources/images/product-cart/product-cell.png" alt=""
                                    class="img-cell">
                                <p class="p-size-cart">123giamgia</p>
                            </div>
                            <p class="p-size-cart p-color-with">-25.000đ [X]</p>
                        </div>

                        <div class="cart-flex justify">
                            <p class="p-size-cart">Phí ship</p>
                            <p class="p-size-cart-2 cart-color">Miễn phí</p>
                        </div>

                        <div class="cart-flex justify">
                            <p class="p-size-cart">Tạm tính</p>
                            <p class="p-size-cart-2 cart-color">160.000đ</p>
                        </div>

                        <hr class="hr-cart-product-1">

                        <div class="cart-flex justify">
                            <p class="p-size-cart-2 cart-color">Tổng</p>
                            <p class="p-size-cart-3 cart-color">160.000đ</p>
                        </div>

                        <div>
                            <a href="/FePestsClean/resources/views/client/product-information-cart.php">
                                <button class="div-btn-cart-product">Đặt hàng</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper">
        <div class="product-others">
            <div class="title">
                <h1>SẢN PHẨM TƯƠNG TỰ</h1>
            </div>
            <div class="content text-center">
                <div class="row mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-mb-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img
                                                src="../../images/Details/z5668631216620_5895e2a8e5834fa631eb3dea80084723.jpg">
                                        </div>
                                        <div class="note1">HÈ SANG</div>
                                        <div class="note2">Mới</div>
                                        <div class="element">
                                            <p class="my-3 " style="font-size:14px;">Dung dịch hoá chất</p>
                                            <p class="element-title">Dung dịch đánh bóng sàn đá Ecolab NETTOCLAR RAPID
                                                2X5 LT giá
                                                rẻ</p>
                                            <div class="vote row my-3">
                                                <div class="star col-auto" style="color: rgb(235, 235, 0);">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-muted" style="font-size:14px;">Đã bán 123+</span>
                                                </div>
                                            </div>
                                            <p class="price">2.415.000 <span>đ</span></p>
                                            <button class="add-cart">Giỏ hàng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-mb-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img
                                                src="../../images/Details/z5668631217814_5d935941496ef981f74fbb726c6d21ca.jpg">
                                        </div>
                                        <div class="note1">HÈ SANG</div>
                                        <div class="note2">Mới</div>
                                        <div class="element">
                                            <p class="my-3 " style="font-size:14px;">Dung dịch hoá chất</p>
                                            <p class="element-title">Chất lau sàn khử trùng Ecolab JUSMIN FLESH 1 GAL
                                            </p>
                                            <div class="vote row my-3">
                                                <div class="star col-auto" style="color: rgb(235, 235, 0);">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-muted" style="font-size:14px;">Đã bán 123+</span>
                                                </div>
                                            </div>
                                            <p class="price">369.671 <span>đ</span></p>
                                            <button class="add-cart">Giỏ hàng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-mb-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img
                                                src="../../images/Details/z5668631217825_2a4f8dcc22394ed0f6a2cdbfa9f3aae6.jpg">
                                        </div>
                                        <div class="note1">HÈ SANG</div>
                                        <div class="note2">Mới</div>
                                        <div class="element">
                                            <p class="my-3 " style="font-size:14px;">Dung dịch hoá chất</p>
                                            <p class="element-title">Hoá chất phủ bóng sàn Ecolab VISION PLUS 5 GAL
                                                chính hãng</p>
                                            <div class="vote row my-3">
                                                <div class="star col-auto" style="color: rgb(235, 235, 0);">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-muted" style="font-size:14px;">Đã bán 123+</span>
                                                </div>
                                            </div>
                                            <p class="price">3.904.818 <span>đ</span></p>
                                            <button class="add-cart">Giỏ hàng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-mb-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img
                                                src="../../images/Details/z5668631216620_5895e2a8e5834fa631eb3dea80084723.jpg">
                                        </div>
                                        <div class="note1">HÈ SANG</div>
                                        <div class="note2">Mới</div>
                                        <div class="element">
                                            <p class="my-3 " style="font-size:14px;">Sản Phẩm Dịch Vụ Vệ Sinh
                                            </p>
                                            <p class="element-title">Dung dịch đánh bóng sàn đá Ecolab NETTOCLAR RAPID
                                                2X5 LT giá
                                                rẻ</p>
                                            <div class="vote row my-3">
                                                <div class="star col-auto" style="color: rgb(235, 235, 0);">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-muted" style="font-size:14px;">Đã bán 123+</span>
                                                </div>
                                            </div>
                                            <p class="price">2.415.000 <span>đ</span></p>
                                            <a href="/FePestsClean/resources/views/client/product-information-cart.php"><button
                                                    class="add-cart">Giỏ hàng</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-mb-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img
                                                src="../../images/Details/z5668631217814_5d935941496ef981f74fbb726c6d21ca.jpg">
                                        </div>
                                        <div class="note1">HÈ SANG</div>
                                        <div class="note2">Mới</div>
                                        <div class="element">
                                            <p class="my-3 " style="font-size:14px;">Dung dịch hoá chất</p>
                                            <p class="element-title">Chất lau sàn khử trùng Ecolab JUSMIN FLESH 1 GAL
                                            </p>
                                            <div class="vote row my-3">
                                                <div class="star col-auto" style="color: rgb(235, 235, 0);">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-muted" style="font-size:14px;">Đã bán 123+</span>
                                                </div>
                                            </div>
                                            <p class="price">369.671 <span>đ</span></p>
                                            <button class="add-cart">Giỏ hàng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-mb-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img
                                                src="../../images/Details/z5668631217825_2a4f8dcc22394ed0f6a2cdbfa9f3aae6.jpg">
                                        </div>
                                        <div class="note1">HÈ SANG</div>
                                        <div class="note2">Mới</div>
                                        <div class="element">
                                            <p class="my-3 " style="font-size:14px;">Sản Phẩm Dịch Vụ Vệ Sinh
                                            </p>
                                            <p class="element-title">Hoá chất phủ bóng sàn Ecolab VISION PLUS 5 GAL
                                                chính hãng</p>
                                            <div class="vote row my-3">
                                                <div class="star col-auto" style="color: rgb(235, 235, 0);">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-muted" style="font-size:14px;">Đã bán 123+</span>
                                                </div>
                                            </div>
                                            <p class="price">3.904.818 <span>đ</span></p>
                                            <button class="add-cart">Giỏ hàng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                            data-bs-slide="prev">
                            <span aria-hidden="true"><i class="fa-solid fa-angle-left"></i></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                            data-bs-slide="next">
                            <span aria-hidden="true"><i class="fa-solid fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    
    @include('layouts.include.client.banner-carousel')
    @include('layouts.include.client.notify-product')
@endsection
