@extends('layouts.client')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/components/product-information-cart.css') }}">
    <script src="{{ asset('fontend/js/components/product-information-cart.js') }}"></script>
@endpush

@section('content')
    <section>
        <div class="div-cart">

            <div class="div-cart-product">
                <p class="p-cart">Sản phẩm</p>
                <img src="/FePestsClean/resources/images/product/product-chevron-right.png" alt="" class="img-cart">
                <p class="p-cart-div">Hóa chất 3M™ Stainless Steel Cleaner & Polish 621ml (21Oz)</p>
                <img src="/FePestsClean/resources/images/product/product-chevron-right.png" alt="" class="img-cart">
                <p class="p-cart-info p-color-blue">Thanh toán</p>
            </div>

            <div>
                <div class="div-text">
                    <p class="cart-text-info">ĐIỀN THÔNG TIN</p>
                </div>
                <div class="div-cart-product div-dap">
                    <div class="div-cart-product">
                        <p class="sp-cart-info"><img
                                src="/FePestsClean/resources/images/product-information-cart/product-information-cart.png"
                                alt=""></p>
                        <p class="p-text-info">Giỏ hàng</p>
                    </div>
                    <hr class="hr-cart">
                    <div class="div-cart-product">
                        <p class="sp-cart-p-info">2</p>
                        <p class="p-text-2-info">Điền thông tin</p>
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
                            <button class="div-btn-cart-product"
                                onclick="redirectTo('/FePestsClean/resources/views/client/pop-up.php')">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="container-info">
            <h2 class="title-info-max">NHẬP THÔNG TIN</h2>
            <hr class="hr-info top-1">
            <form>
                <div class="from-info-flex top-1">
                    <div class="form-group-info info-with">
                        <label for="name" class="label-info">Tên của bạn *</label>
                        <input type="text" id="name" name="name" class="input-info top-min"
                            placeholder="filled">
                    </div>
                    <div class="form-group-info info-with">
                        <label for="email" class="label-info">Email của bạn *</label>
                        <input type="email" id="email" name="email" class="input-info top-min"
                            placeholder="filled">
                    </div>
                </div>
                <div class="form-group-info top-1">
                    <label for="phone" class="label-info">Số điện thoại *</label>
                    <div class="phone-group-info">
                        <select id="phone-code" name="phone-code" class="select-info top-min">
                            <option value="+84">+84</option>
                            <!-- Thêm các mã quốc gia khác nếu cần -->
                        </select>
                        <input type="text" id="phone" name="phone" class="input-info top-min"
                            placeholder="Eg: 988 523 146">
                    </div>
                </div>
                <div class="form-group-info top-1">
                    <label for="service" class="label-info ">Dịch Vụ</label>
                    <select id="service" name="service" class="select-info top-min">
                        <option value="">Please Select</option>
                    </select>
                </div>
                <div class="form-group-info">
                    <label for="interest" class="label-info">Bạn đang quan tâm</label>
                    <select id="interest" name="interest" class="select-info top-min">
                        <option value="">Please Select</option>
                    </select>
                </div>
                <div class="form-group-info top-1">
                    <label for="additional-info" class="label-info">Thông tin thêm</label>
                    <input type="text" id="additional-info" name="additional-info" class="input-info-max top-min"
                        placeholder="filled">
                </div>
                <h3 class="label-info top-1">Địa chỉ giao hàng *</h3>
                <div class="form-group-info">
                    <label for="address" class="title-info top-1">Địa chỉ*</label>
                    <input type="text" id="address" name="address" class="input-info top-1 "
                        placeholder="Điền địa chỉ của bạn">
                </div>
                <div class="form-group-info top-1">
                    <label for="city" class="label-info">Thành phố/ Tỉnh</label>
                    <input type="text" id="city" name="city" class="input-info top-min"
                        placeholder="Điền thành phố/ tỉnh của bạn">
                </div>

                <div class="flex top-1">
                    <h2 class="label-info with">Thông tin xuất hoá đơn *</h2>
                    <button class="toggle-button-info active-info" id="toggleButtonInfo">
                        <div class="slider-info"></div>
                    </button>
                </div>

                <div class="from-info-flex">
                    <div class="info-with">
                        <label for="company-name" class="title-info">Nhập tên công ty*</label>
                        <input type="text" id="company-name" name="company-name" class="input-info top-1 top-min"
                            placeholder="Điền địa chỉ của bạn">
                    </div>
                    <div class="info-with">
                        <label for="tax-code" class="title-info">Nhập mã số thuế*</label>
                        <input type="text" id="tax-code" name="tax-code" class="input-info top-1 "
                            placeholder="Điền địa chỉ của bạn">
                    </div>
                </div>
                <div class="form-group-info">
                    <label for="company-address" class="title-info top-1">Nhập địa chỉ công ty</label>
                    <input type="text" id="company-address" name="company-address" class="input-info top-1 "
                        placeholder="Điền thành phố/ tỉnh của bạn">
                </div>
                <h2 class="label-info top-1">Phương thức thanh toán *</h2>
                <div class="flex top-min">
                    <p class="info-text">Giá giảm đang được giữ, vui lòng thanh toán trong </p><span
                        class="timer-info">15:39</span>
                </div>
                <div class="payment-method-info top-1">
                    <label class="radio-container-info gap-info-p">
                        <input type="radio" name="payment-method" value="bank-transfer" checked>
                        <span class="checkmark-info"></span>
                        <img src="/FePestsClean/resources/images/product-information-cart/horz.png" alt=""
                            class="img-info">
                        <span class="inf-sp">
                            Thanh toán chuyển khoản Ngân hàng/ Ví điện tử Momo, ZaloPay
                        </span>
                    </label>

                    <label class="radio-container-info top-1">
                        <input type="radio" name="payment-method" value="cash">
                        <span class="checkmark-info"></span>
                        <span class="flex">
                            <p class="sp-with-info">
                            <p class="sp-with-info-min"><span class="p-sp-info">$</span></p>
                            </p>
                            <span class="infoma">Thanh toán tiền mặt</span>
                        </span>

                    </label>
                </div>

                <div class="flex top-1">
                    <h2 class="label-info with">Thanh toán tiền cọc (30% giá trị đơn hàng)</h2>
                    <button class="toggle-button-info" id="toggleButtonInfo">
                        <div class="slider-info"></div>
                    </button>
                </div>

                <p class="info-text">Tiền cọc (<a href="#" class="p-a-info">Xem thêm</a>)</p>

                <div class="deposit-info top-1 ">
                    <input type="checkbox" name="agree-terms" id="agree-terms">
                    <label for="agree-terms">Tôi đã đọc và đồng ý với <a href="#" class="p-a-info">điều khoản</a>
                        và <a href="#" class="p-a-info">điều kiện</a> của Pestnclean</label>
                </div>

                <hr class="hr-info">
                <button type="" class="btn-submit-info">Điền lại</button>
            </form>
            <hr class="hr-info-max">
        </div>

    </section>

    @include('layouts.include.client.banner-carousel')
    @include('layouts.include.client.notify-service')
@endsection
