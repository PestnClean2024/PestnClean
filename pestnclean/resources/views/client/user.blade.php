@extends('layouts.client')

@section('content')
    <section class="user">
        <div class="wrapper row mt-5">
            <div class="aside col-xl-3">
                <div class="aside-main">
                    <div>
                        <h5 style="color:#005ca9 ;" class="fw-bold py-3"><i class="fa-solid fa-user pe-2"></i> Tài
                            khoản của tôi</h5>
                    </div>
                    <div>
                        <p class="active"><a href="">Hồ sơ cá nhân</a></p>
                        <p><a href="">Địa chỉ</a></p>
                        <p><a href="">Đổi mật khẩu</a></p>
                        <p><a href="">Cài đặt thông báo</a></p>
                        <p><a href="">Những thiết lập riêng tư</a></p>
                    </div>
                </div>
                <hr>
                <div class="aside-sub">
                    <div>
                        <div class="icon"><i class="fa-solid fa-clipboard-list"></i></div>
                        <h7><a href="{{route('order')}}">Đơn mua</a></h7>
                    </div>

                    <div>
                        <div class="icon"><i class="fa-solid fa-bell"></i></div>
                        <h7><a href="">Thông báo</a></h7>
                    </div>

                    <div>
                        <div class="icon"><i class="fa-solid fa-ticket-simple"></i></div>
                        <h7><a href="">Kho voucher</a></h7>
                    </div>
                </div>
            </div>
            <div class="article col-xl-9 ps-5">
                <div class="article-info mb-5">
                    <div class="article-info-title mb-5 align-items-center">
                        <h1>HỒ SƠ CÁ NHÂN</h1>
                    </div>
                    <form action="">
                        <div class="form">
                            <div>
                                <label for="">Tên đăng nhập:</label>
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Tên đăng nhập">
                            </div>
                            <div>
                                <label for="">Tên:</label>
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Tên khách hàng">
                            </div>
                            <div>
                                <label for="">Email:</label>
                                <Span>vt*******@gmail.com</Span>
                                <a class="change" href="">Thay đổi</a>
                            </div>
                            <div>
                                <label for="">Số điện thoại:</label>
                                <Span>**********0354</Span>
                                <a class="change" href="">Thay đổi</a>
                            </div>
                            <div>
                                <label for="">Giới tính:</label>
                                <div class="d-flex gap-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gender1">
                                        <label class="form-check-label" for="gender1">
                                            Nam
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gender2"
                                            checked>
                                        <label class="form-check-label" for="gender2">
                                            Nữ
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gender3"
                                            checked>
                                        <label class="form-check-label" for="gender3">
                                            Khác
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="">Ngày sinh:</label>
                                <Span>**/03/****</Span>
                                <a class="change" href="">Thay đổi</a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="submit">Lưu ngay</button>
                        </div>
                    </form>
                </div>
                <div class="article-address mb-5">
                    <div class="article-address-title mb-5 d-flex align-items-center justify-content-between">
                        <h1>ĐỊA CHỈ CỦA TÔI</h1>
                        <button type="submit" class="submit">Thêm địa chỉ mới</button>
                    </div>
                    <div class="content">
                        <div class="item">
                            <div class="item-info">
                                <label for="">Khánh Vũ <span class="px-2"> | </span> +84 0123 456 789</label>
                                <p class="">
                                    <a href="" class="pe-2">Cập nhật</a>
                                    <a href="">Xoá</a>
                                </p>
                            </div>
                            <div class="item-address">
                                <label for="">Địa chỉ: ABC Đường ABC, Phường EDF, Thành phố GHJ, Tỉnh LZX</label>
                                <p>
                                    <button type="submit">Thiết lập mặc định</button>
                                </p>
                            </div>
                            <div class="item-note">
                                <span>Mặc định</span>
                            </div>
                        </div>
                        <hr>
                        <div class="item">
                            <div class="item-info">
                                <label for="">Khánh Vũ <span class="px-2"> | </span> +84 0123 456 789</label>
                                <p class="">
                                    <a href="" class="pe-2">Cập nhật</a>
                                    <a href="">Xoá</a>
                                </p>
                            </div>
                            <div class="item-address mb-5">
                                <label for="">Địa chỉ: ABC Đường ABC, Phường EDF, Thành phố GHJ, Tỉnh LZX</label>
                                <p>
                                    <button type="submit">Thiết lập mặc định</button>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="item">
                            <div class="item-info">
                                <label for="">Khánh Vũ <span class="px-2"> | </span> +84 0123 456 789</label>
                                <p class="">
                                    <a href="" class="pe-2">Cập nhật</a>
                                    <a href="">Xoá</a>
                                </p>
                            </div>
                            <div class="item-address mb-5">
                                <label for="">Địa chỉ: ABC Đường ABC, Phường EDF, Thành phố GHJ, Tỉnh LZX</label>
                                <p>
                                    <button type="submit">Thiết lập mặc định</button>
                                </p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="article-notify mb-5">
                    <div class="article-address-title mb-5 d-flex align-items-center">
                        <h1>Cài đặt thông báo</h1>
                    </div>
                    <div class="content">
                        <div class="item mb-5">
                            <div>
                                <h3 class="fw-bold">Email thông báo</h3>
                                <p>Thông báo và nhắc nhở quan trọng về tài khoản sẽ không thể bị tắt</p>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="name" checked>
                            </div>
                        </div>
                        <div class="item mb-5">
                            <div>
                                <h6 class="fw-bold">Cập nhật đơn hàng</h6>
                                <p>Cập nhật về tình trạng vận chuyển của tất cả các đơn hàng</p>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="name" checked>
                            </div>
                        </div>
                        <div class="item mb-5">
                            <div>
                                <h6 class="fw-bold">Khuyến mãi</h6>
                                <p>Cập nhật về các ưu đãi và khuyến mãi sắp tới</p>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="name" checked>
                            </div>
                        </div>
                        <div class="item mb-5">
                            <div>
                                <h6 class="fw-bold">Khảo sát</h6>
                                <p>Đồng ý nhận khảo sát để cho chúng tôi được lắng nghe bạn</p>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="name" checked>
                            </div>
                        </div>
                        <div class="item mb-5">
                            <div>
                                <h3 class="fw-bold">Thông báo SMS</h3>
                                <p>Thông báo và nhắc nhở quan trọng về tài khoản sẽ không thể bị tắt</p>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="name" checked>
                            </div>
                        </div>
                        <div class="item mb-5">
                            <div>
                                <h6 class="fw-bold">Khuyến mãi</h6>
                                <p>Cập nhật về các ưu đãi và khuyến mãi sắp tới</p>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="name" checked>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article-private pt-3">
                    <div class="article-address-title mb-5 d-flex align-items-center">
                        <h1>NHỮNG THIẾP LẬP RIÊNG TƯ</h1>
                    </div>
                    <div class="content">
                        <div class="item mb-5 d-flex justify-content-between">
                            <div>
                                <p class="fw-bold">Yêu cầu xoá tài khoản</p>
                            </div>
                            <div class="form-check form-switch">
                                <button class="submit">Xoá bỏ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
