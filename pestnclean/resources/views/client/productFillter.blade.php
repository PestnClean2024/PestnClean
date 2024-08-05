@extends('layouts.client')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/components/product-fillter.css') }}">
@endpush

@section('content')
    <section>

        <div class="div-product">
            <div class="div-product-text div-fillter">
                <div class="div-fillter-menu">
                    <div class="div-flex ">
                        <p class="div-fiter filter-color">Bộ lọc</p>
                        <img src="/FePestsClean/resources/images/product/product-Vector.png" alt="" class="img-fiter">
                    </div>

                    <hr class="hr-filter">

                    <div class="div-filter-all">
                        <div>
                            <div class="div-flex">
                                <p class="filter-color">Danh mục</p>
                                <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png" alt=""
                                    class="img-filter-2">
                            </div>

                            <div>

                                <div class="div-flex filter-top">
                                    <p class="filter-size filter-with">Kiểm soát côn trùng</p>
                                    <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                        alt="" class="img-filter-3">
                                </div>

                                <hr class="hr-filter">

                                <a href="#">
                                    <div class="div-flex-no">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">Mối</p>
                                    </div>
                                </a>

                                <div class="div-flex">
                                    <div class="div-flex-no">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">Thiết bị máy móc</p>
                                    </div>
                                    <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                        alt="" class="img-filter-3">
                                </div>

                                <hr class="hr-filter hr-filter-top">

                                <div>
                                    <a href="#">
                                        <div class="div-flex-no filter-with-248">
                                            <input type="checkbox" name="" id="">
                                            <p class="filter-size-16">Đèn</p>
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="div-flex-no filter-with-248">
                                            <input type="checkbox" name="" id="">
                                            <p class="filter-size-16">Máy phun xịt</p>
                                        </div>
                                    </a>
                                </div>

                                <div>
                                    <div class="div-flex filter-top-1">
                                        <div class="div-flex-no">
                                            <input type="checkbox" name="" id="">
                                            <p class="filter-size-16">Hoá Chất Diệt Côn Trùng</p>
                                        </div>
                                        <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                            alt="" class="img-filter-3">
                                    </div>

                                    <hr class="hr-filter hr-filter-top">

                                    <div>
                                        <div class="div-flex-no filter-with-248">
                                            <input type="checkbox" name="" id="">
                                            <p class="filter-size-16">Dạng dung dịch</p>
                                        </div>
                                        <div class="div-flex-no filter-with-248">
                                            <input type="checkbox" name="" id="">
                                            <p class="filter-size-16">Dạng bả</p>
                                        </div>
                                        <div class="div-flex-no filter-with-248">
                                            <input type="checkbox" name="" id="">
                                            <p class="filter-size-16">Dạng bột</p>
                                        </div>
                                        <div class="div-flex-no filter-with-248">
                                            <input type="checkbox" name="" id="">
                                            <p class="filter-size-16">Dạng gel</p>
                                        </div>
                                        <div class="div-flex-no filter-with-248">
                                            <input type="checkbox" name="" id="">
                                            <p class="filter-size-16">Dạng keo</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="div-flex filter-top-1">
                                    <div class="div-flex-no">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">Bẫy côn trùng</p>
                                    </div>
                                    <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                        alt="" class="img-filter-3">
                                </div>

                            </div>

                            <div>

                                <div class="div-flex filter-top">
                                    <p class="filter-size filter-with">Vệ sinh công nghiệp</p>
                                    <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                        alt="" class="img-filter-3">
                                </div>

                                <div class="div-flex filter-top-1">
                                    <div class="div-flex-no">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">Máy vệ sinh công nghiệp</p>
                                    </div>
                                    <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                        alt="" class="img-filter-3">
                                </div>

                                <hr class="hr-filter hr-filter-top">

                                <div>
                                    <div class="div-flex-no filter-with-248">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">Máy chà sàn</p>
                                    </div>
                                    <div class="div-flex-no filter-with-248">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">Máy hút bụi</p>
                                    </div>
                                    <div class="div-flex-no filter-with-248">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">Máy lau sàn</p>
                                    </div>
                                    <div class="div-flex-no filter-with-248">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">Máy giặt thảm giặt ghế.</p>
                                    </div>
                                </div>

                                <div>

                                    <div class="div-flex filter-top-1">
                                        <div class="div-flex-no">
                                            <input type="checkbox" name="" id="">
                                            <p class="filter-size-16">Dụng cụ vệ sinh</p>
                                        </div>
                                        <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                            alt="" class="img-filter-3">
                                    </div>

                                    <hr class="hr-filter hr-filter-top">

                                    <div>
                                        <div class="div-flex-no filter-with-248">
                                            <input type="checkbox" name="" id="">
                                            <p class="filter-size-16">Xe quét rác công nghiệp</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="filter-top-1">
                                    <div class="div-flex">
                                        <p class="filter-color ">Giải pháp vệ sinh</p>
                                        <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                            alt="" class="img-filter-2">
                                    </div>

                                    <div>

                                        <div class="div-flex filter-top-1">
                                            <div class="div-flex-no">
                                                <input type="checkbox" name="" id="">
                                                <p class="filter-size-16">Giải Pháp Mùi Hương</p>
                                            </div>
                                            <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                                alt="" class="img-filter-3">
                                        </div>

                                        <hr class="hr-filter hr-filter-top">

                                        <div>
                                            <div class="div-flex-no filter-with-248">
                                                <input type="checkbox" name="" id="">
                                                <p class="filter-size-16">Máy Khuếch Tán</p>
                                            </div>
                                            <div class="div-flex-no filter-with-248">
                                                <input type="checkbox" name="" id="">
                                                <p class="filter-size-16">Tinh Dầu</p>
                                            </div>
                                            <div class="div-flex-no filter-with-248">
                                                <input type="checkbox" name="" id="">
                                                <p class="filter-size-16">KODO</p>
                                            </div>
                                            <div class="div-flex-no filter-with-248">
                                                <input type="checkbox" name="" id="">
                                                <p class="filter-size-16">VIETOIL</p>
                                            </div>
                                            <div class="div-flex-no filter-with-248">
                                                <input type="checkbox" name="" id="">
                                                <p class="filter-size-16">BIZSCENT</p>
                                            </div>
                                            <div class="div-flex-no filter-with-248">
                                                <input type="checkbox" name="" id="">
                                                <p class="filter-size-16">MICROAROMA</p>
                                            </div>
                                        </div>

                                        <div>

                                            <div class="div-flex filter-top-1">
                                                <div class="div-flex-no">
                                                    <input type="checkbox" name="" id="">
                                                    <p class="filter-size-16">Thiết bị Vệ Sinh</p>
                                                </div>
                                                <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                                    alt="" class="img-filter-3">
                                            </div>

                                            <hr class="hr-filter hr-filter-top">

                                            <div>
                                                <div class="div-flex-no filter-with-248">
                                                    <input type="checkbox" name="" id="">
                                                    <p class="filter-size-16">Thiết bị đựng xà phòng</p>
                                                </div>
                                                <div class="div-flex-no filter-with-248">
                                                    <input type="checkbox" name="" id="">
                                                    <p class="filter-size-16">Thiết bị rửa tay sát khuẩn</p>
                                                </div>
                                                <div class="div-flex-no filter-with-248">
                                                    <input type="checkbox" name="" id="">
                                                    <p class="filter-size-16">Máy sấy tay</p>
                                                </div>
                                                <div class="div-flex-no filter-with-248">
                                                    <input type="checkbox" name="" id="">
                                                    <p class="filter-size-16">Hộp giấy lau tay</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div>

                                            <div class="div-flex filter-top-1">
                                                <div class="div-flex-no">
                                                    <input type="checkbox" name="" id="">
                                                    <p class="filter-size-16">Vệ sinh không khí</p>
                                                </div>
                                                <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                                    alt="" class="img-filter-3">
                                            </div>

                                            <hr class="hr-filter hr-filter-top">

                                            <div>
                                                <div class="div-flex-no filter-with-248">
                                                    <input type="checkbox" name="" id="">
                                                    <p class="filter-size-16">Máy lọc không khí</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div>

                                            <div class="div-flex filter-top-1">
                                                <div class="div-flex-no">
                                                    <input type="checkbox" name="" id="">
                                                    <p class="filter-size-16">Giải pháp bảo vệ sàn</p>
                                                </div>
                                                <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                                    alt="" class="img-filter-3">
                                            </div>

                                            <hr class="hr-filter hr-filter-top">

                                            <div>
                                                <div class="div-flex-no filter-with-248">
                                                    <input type="checkbox" name="" id="">
                                                    <p class="filter-size-16">Thảm kiểm soát bụi</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div>
                                <hr class="hr-filter hr-filter-top">
                                <div class="div-flex filter-top">
                                    <p class="filter-size filter-with">Thiết kế & thi công cây cảnh</p>
                                    <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                        alt="" class="img-filter-3">
                                </div>
                            </div>

                        </div>

                        <div>

                            <hr class="hr-filter hr-filter-top">
                            <div class="div-flex">
                                <p class="filter-color ">Giá cả</p>
                                <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                    alt="" class="img-filter-2">
                            </div>

                            <hr class="hr-filter">

                            <div class="div-flex">
                                <button class="filter-btn">Tối thiểu</button><span class="filter-sp">-</span>
                                <button class="filter-btn">Tối đa</button>
                                <div class="container-filter">
                                    <div class="arrow-right"></div>
                                </div>
                            </div>
                            <div class="div-flex filter-top-1">
                                <p class="filter-size-16 ">100.000 đ - 200. 000 đ <span>X</span></p>
                            </div>
                        </div>

                        <div>

                            <div class="div-flex">
                                <p class="filter-color ">Dung tích</p>
                                <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                    alt="" class="img-filter-2">
                            </div>

                            <hr class="hr-filter">

                            <div class="div-flex">
                                <div class="">
                                    <div class="div-flex-filter">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">50ml</p>
                                    </div>
                                    <div class="div-flex-filter">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">100ml</p>
                                    </div>
                                    <div class="div-flex-filter">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">590ml</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="div-flex-no">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">1l</p>
                                    </div>
                                    <div class="div-flex-no">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">5l</p>
                                    </div>
                                    <div class="div-flex-no">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">20l</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div>

                            <div class="div-flex filter-top-3">
                                <p class="filter-color ">Giói</p>
                                <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                    alt="" class="img-filter-2">
                            </div>

                            <hr class="hr-filter">

                            <div class="div-flex">
                                <div class="">
                                    <div class="div-flex-filter">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">10gram</p>
                                    </div>
                                    <div class="div-flex-filter">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">20gram</p>
                                    </div>
                                    <div class="div-flex-filter">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">1oogram</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="div-flex-no">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">500gram</p>
                                    </div>
                                    <div class="div-flex-no">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">Giói 20 viên</p>
                                    </div>
                                    <div class="div-flex-no">
                                        <input type="checkbox" name="" id="">
                                        <p class="filter-size-16">khác</p>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div>

                            <div class="div-flex filter-top-3">
                                <p class="filter-color ">Khích Thước</p>
                                <img src="/FePestsClean/resources/images/product-fillter/fillter-Vector.png"
                                    alt="" class="img-filter-2">
                            </div>

                            <hr class="hr-filter">

                            <div class="div-flex">
                                <button class="filter-a-m-l">S</button>
                                <button class="filter-a-m-l">M</button>
                                <button class="filter-a-m-l">L</button>
                                <button class="filter-a-m-t">Tất Cả</button>
                            </div>
                        </div>

                    </div>

                </div>
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

                <div class="div-hot-text">
                    <p class="span-cell-1">Giải pháp vệ sinh</p>
                    <p class="filter-top-1">Sắp xếp theo :</p>
                    <select id="cars" name="cars" class="p-select">
                        <option value="volvo">Phù hợp nhất</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                    <button class="filter-btn-img"><a href="#"><img
                                src="/FePestsClean/resources/images/product/product-Vector.png"
                                alt=""></a></button>
                    <input type="text" name="" id="" class="product-input-filter"><i
                        class="filter-i-color fa-solid fa-magnifying-glass"></i>
                </div>
                <div>
                    <p class="filter-color-p">103 mặt hàng được tìm thấy theo "dung dịch hoá chất" chỉ trong Dịch vụ vệ
                        sinh</p>
                    <div class="div-flex-fiter">
                        <p>Lọc theo:</p>
                        <button class="fiter-btn-p">50 ml x</button>
                        <button class="fiter-btn-p1">dungdichhoachat x</button>
                        <button class="fiter-btn-p2">100000đ đến 200000đ</button>
                        <p class="underline-text">xóa hết</p>
                    </div>
                </div>

                <div class="grid div-gird">
                    <div class="border-div rounded-lg  bg-card">
                        <a href="/FePestsClean/resources/views/client/product-cart.php">
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
