@extends('layouts.client')

@push('css')
@endpush

@section('content')
    <section class="user order-setting">
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
                        <h7><a href="">Đơn mua</a></h7>
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
                <div class="article-order mb-5">
                    <div class="article-order-title mb-5 align-items-center">
                        <h1>ĐƠN MUA</h1>
                    </div>
                    <div class="article-order-content">
                        <div class="item">
                            <img src="../../images/Account/sp1.png" alt="" width="80px">
                            <p class="item-name">Hoá chất 3M™ Stainless Steel Cleaner & Polish 621ml (21OZ)</p>
                            <p class="item-size">Kích thước: M</p>
                            <p class="item-price">80.000đ</p>
                            <p class="item-quantity">2</p>
                            <p class="item-total">160.000đ</p>
                        </div>
                        <div class="item">
                            <img src="../../images/Account/sp1.png" alt="" width="80px">
                            <p class="item-name">Hoá chất 3M™ Stainless Steel Cleaner & Polish 621ml (21OZ)</p>
                            <p class="item-size">Kích thước: M</p>
                            <p class="item-price">80.000đ</p>
                            <p class="item-quantity">2</p>
                            <p class="item-total">160.000đ</p>
                        </div>
                        <div class="item">
                            <img src="../../images/Account/sp1.png" alt="" width="80px">
                            <p class="item-name">Hoá chất 3M™ Stainless Steel Cleaner & Polish 621ml (21OZ)</p>
                            <p class="item-size">Kích thước: M</p>
                            <p class="item-price">80.000đ</p>
                            <p class="item-quantity">2</p>
                            <p class="item-total">160.000đ</p>
                        </div>
                    </div>
                </div>
                <div class="article-notify mb-5">
                    <div class="article-notify-title mb-5 align-items-center">
                        <h1>THÔNG BÁO</h1>
                    </div>
                    <div class="article-notify-content">
                        <div class="item">
                            <img src="../../images/Account/sp1.png" alt="" width="80px">
                            <div class="item-name">
                                <p>Hoá chất 3M™ StainlesSs Steel Cleaner & Polish 621ml (21OZ) Đang giảm giá 50%</p>
                                <p class="text-detail">Vui lòng cập nhật để xem chi tiết sản phẩm</p>
                            </div>
                            <div>
                                <button class="btn-detail">Xem chi tiết</button>
                            </div>
                        </div>
                        <div class="item">
                            <img src="../../images/Account/sp1.png" alt="" width="80px">
                            <div class="item-name">
                                <p>Hoá chất 3M™ StainlesSs Steel Cleaner & Polish 621ml (21OZ) Đang giảm giá 50%</p>
                                <p class="text-detail">Vui lòng cập nhật để xem chi tiết sản phẩm</p>
                            </div>
                            <div>
                                <button class="btn-detail">Xem chi tiết</button>
                            </div>
                        </div>
                        <div class="item">
                            <img src="../../images/Account/sp1.png" alt="" width="80px">
                            <div class="item-name">
                                <p>Hoá chất 3M™ StainlesSs Steel Cleaner & Polish 621ml (21OZ) Đang giảm giá 50%</p>
                                <p class="text-detail">Vui lòng cập nhật để xem chi tiết sản phẩm</p>
                            </div>
                            <div>
                                <button class="btn-detail">Xem chi tiết</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article-sale mb-5">
                    <div class="article-sale-title mb-5 align-items-center">
                        <h1>KHUYẾN MÃI | DÀNH RIÊNG CHO BẠN</h1>
                    </div>
                    <div class="article-sale-content mb-5">
                        <div class="item">
                            <div class="item-left">
                                <p class="fw-bold">Giảm giá</p>
                                <p class="sale">50%</p>
                                <p class="saled">Đã dùng hết 55%</p>
                            </div>
                            <div class="item-center">
                                <div class="line">
                                    <div class="border">
                                    </div>
                                </div>
                            </div>
                            <div class="item-right">
                                <p class="title text-white">Hè sang</p>
                                <p class="fw-bold fs-4">KHÁCH HÀNG MỚI</p>
                                <button class="submit">Lưu</button>
                                <p>Đơn tối thiểu 130k</p>
                                <a href="#" class="link">Điều kiện</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-left">
                                <p class="fw-bold">Giảm giá</p>
                                <p class="sale">50%</p>
                                <p class="saled">Đã dùng hết 55%</p>
                            </div>
                            <div class="item-center">
                                <div class="line">
                                    <div class="border">
                                    </div>
                                </div>
                            </div>
                            <div class="item-right">
                                <p class="title text-white">Hè sang</p>
                                <p class="fw-bold fs-4">KHÁCH HÀNG MỚI</p>
                                <button class="submit">Lưu</button>
                                <p>Đơn tối thiểu 130k</p>
                                <a href="#" class="link">Điều kiện</a>
                            </div>
                        </div>
                        <div class="item saved">
                            <div class="item-left">
                                <p class="fw-bold">Giảm giá</p>
                                <p class="sale">50%</p>
                                <p class="saled">Đã dùng hết 55%</p>
                            </div>
                            <div class="item-center">
                                <div class="line">
                                    <div class="border">
                                    </div>
                                </div>
                            </div>
                            <div class="item-right">
                                <p class="title text-white">Hè sang</p>
                                <p class="fw-bold fs-4">KHÁCH HÀNG MỚI</p>
                                <button class="submit">Đã lưu</button>
                                <p>Đơn tối thiểu 130k</p>
                                <a href="#" class="link">Điều kiện</a>
                            </div>
                        </div>
                        <div class="item saved">
                            <div class="item-left">
                                <p class="fw-bold">Giảm giá</p>
                                <p class="sale">50%</p>
                                <p class="saled">Đã dùng hết 55%</p>
                            </div>
                            <div class="item-center">
                                <div class="line">
                                    <div class="border">
                                    </div>
                                </div>
                            </div>
                            <div class="item-right">
                                <p class="title text-white">Hè sang</p>
                                <p class="fw-bold fs-4">KHÁCH HÀNG MỚI</p>
                                <button class="submit">Đã lưu</button>
                                <p>Đơn tối thiểu 130k</p>
                                <a href="#" class="link">Điều kiện</a>
                            </div>
                        </div>
                        <div class="item saved expired" style="opacity: 0.5;">
                            <div class="item-left">
                                <p class="fw-bold">Giảm giá</p>
                                <p class="sale">50%</p>
                                <p class="saled">Đã dùng hết 55%</p>
                            </div>
                            <div class="item-center">
                                <div class="line">
                                    <div class="border">
                                    </div>
                                </div>
                            </div>
                            <div class="item-right">
                                <p class="title text-white">Hè sang</p>
                                <p class="fw-bold fs-4">KHÁCH HÀNG MỚI</p>
                                <button class="submit">Hết lượt sử dụng</button>
                                <p>Đơn tối thiểu 130k</p>
                                <a href="#" class="link">Điều kiện</a>
                            </div>
                        </div>
                        <div class="item saved">
                            <div class="item-left">
                                <p class="fw-bold">Giảm giá</p>
                                <p class="sale">50%</p>
                                <p class="saled">Đã dùng hết 55%</p>
                            </div>
                            <div class="item-center">
                                <div class="line">
                                    <div class="border">
                                    </div>
                                </div>
                            </div>
                            <div class="item-right">
                                <p class="title text-white">Hè sang</p>
                                <p class="fw-bold fs-4">KHÁCH HÀNG MỚI</p>
                                <button class="submit">Lưu</button>
                                <p>Đơn tối thiểu 130k</p>
                                <a href="#" class="link">Điều kiện</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
