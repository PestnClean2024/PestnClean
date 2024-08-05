@extends('layouts.client')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/components/contact.css') }}">
@endpush

@section('content')
    <section class="contact-page-header">
        <div class="headline">
            <h1 class="title">LIÊN HỆ</h1>
            <a href="#" class="btn-header">Khám phá ngay</a>
        </div>
    </section>

    <section class="contact-page-information">
        <div class="row justify-content-between">
            <div class="col-md-3 method">
                <h2 class="title">Phương thức liên hệ</h2>
                <ul class="list-unstyled">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <img src="{{ asset('fontend/images/Contact/facebook.svg') }}">
                            Facebook
                        </a>
                    </li>
                    <li class="nav-item mt-3 mb-3">
                        <a href="#" class="nav-link">
                            <img src="{{ asset('fontend/images/Contact/zalo.png') }}">
                            Zalo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <img src="{{ asset('fontend/images/Contact/phone.svg') }}">
                            0909 123 456
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 content">
                <h1 class="title">BẠN ĐANG QUAN TÂM?</h1>
                <form class="collect-info" method="POST">
                    <h6 class="headline">NHẬP THÔNG TIN</h6>
                    <hr>
                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="name">Tên của bạn</label>
                            <input type="text" class="form-control" placeholder="filled">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="email">Email của bạn</label>
                            <input type="email" class="form-control" placeholder="filled">
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label for="phone">Số điện thoại</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">+84 <img
                                        src="{{ asset('fontend/images/Footer/footerIcon-base.png') }}" alt=""
                                        class="icon-img"></span>
                                <input type="number" class="form-control" placeholder="Eg: 988 523 146"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label for="service">Dịch Vụ</label>
                            <select name="service" class="form-control">
                                <option value="">Please Select</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label for="bussiness-areas">Lĩnh vực kinh doanh</label>
                            <select name="bussiness-areas" class="form-control">
                                <option value="">Please Select</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label for="more-info">Thông tin thêm</label>
                            <textarea name="more-info" class="form-control" placeholder="filled"></textarea>
                        </div>
                        <div class="form-group col-md-12 mb-3 d-flex align-items-center">
                            <input type="checkbox" name="accept" class="me-3">
                            <span class="terms-of-service">Tôi đã đọc và đồng ý với <a href="#">điều khoản</a> và <a
                                    href="#">điều kiện</a> của Pestnclean</span>
                        </div>
                        <hr class="mb-3">
                        <div class="d-flex float-right justify-content-end">
                            <button class="btn btn-outline-primary">Làm lại</button>
                            <button class="btn btn-primary">Tiếp tục</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    @include('layouts.include.client.banner-carousel')
    @include('layouts.include.client.notify-service')
@endsection
