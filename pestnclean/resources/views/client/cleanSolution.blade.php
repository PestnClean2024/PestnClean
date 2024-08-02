@extends('layouts.client')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/components/cleaningSolution.css') }}">
@endpush

@section('content')
    <section class="cleaning-solution-header">
        <div class="headline">
            <h1 class="title">GIẢI PHÁP VỆ SINH</h1>
            <a href="#" class="btn-header">Khám phá ngay</a>
        </div>
    </section>

    <section class="cleaning-solution-services">
        <div class="row">
            <div class="col-md-4 service-items">
                <img src="{{ asset('fontend/images/cleaningSolution/service-layer-1.svg') }}" alt=""
                    class="img-fluid">
                <h5 class="title">Sản phẩm, thiết bị vệ sinh khử khuẩn</h5>
                <p class="description">Hơn 50+ sản phẩm xà phòng khử khuẩn và các thiết bị vệ sinh hiện đại</p>
            </div>
            <div class="col-md-4 service-items">
                <img src="{{ asset('fontend/images/cleaningSolution/service-layer-2.svg') }}" alt=""
                    class="img-fluid">
                <h5 class="title">Máy khuếch tán tinh dầu, thiết bị tạo hương</h5>
                <p class="description">Các dòng máy chuyên dụng, đáp ứng cho mọi loại hình kinh doanh, diện tích không
                    gian,...</p>
            </div>
            <div class="col-md-4 service-items">
                <img src="{{ asset('fontend/images/cleaningSolution/service-layer-3.svg') }}" alt=""
                    class="img-fluid">
                <h5 class="title">Bộ sưu tập tinh dầu hương thơm độc quyền</h5>
                <p class="description">Bộ sưu tập tinh dầu của bạn thật ấn tượng, mỗi lọai mang một hương thơm quyến rũ, độc
                    đáo.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 service-items">
                <img src="{{ asset('fontend/images/cleaningSolution/service-layer-4.svg') }}" alt=""
                    class="img-fluid">
                <h5 class="title">Dịch vụ cho thuê trọn gói 24/7</h5>
                <p class="description">Cung cấp giải pháp hương thơm chuyên nghiệp với hình thức cho thuê </p>
            </div>
            <div class="col-md-4 service-items">
                <img src="{{ asset('fontend/images/cleaningSolution/service-layer-5.svg') }}" alt=""
                    class="img-fluid">
                <h5 class="title">Dịch vụ tiếp thị mùi hương</h5>
                <p class="description">Tư vấn và cung cấp dịch vụ Scent Marketing độc quyền cho các doanh nghiệp trong nhiều
                    lĩnh vực</p>
            </div>
            <div class="col-md-4 service-items">
                <img src="{{ asset('fontend/images/cleaningSolution/service-layer-6.svg') }}" alt=""
                    class="img-fluid">
                <h5 class="title">Giải pháp vệ sinh tích hợp</h5>
                <p class="description">Dịch vụ toàn diện, chi phí hợp lý, linh hoạt được tư vấn cụ thể theo nhu cầu</p>
            </div>
        </div>
    </section>

    <section class="service-cleaning-our-services">
        <div class="headline">
            <h1 class="title" style="font-size: 56px;">Các giải pháp vệ sinh tại PestnClean</h1>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-5">
                    <div class="card-img img1">
                        <div class="wrapper">
                            <h2 class="service-name">Giải pháp vệ sinh, khử khuẩn</h2>
                            <a href="#" class="btn-view-more">Xem thêm <img
                                    src="{{ asset('fontend/images/images/serviceCleaning/arrow-right.svg') }}"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card-img img2">
                        <div class="wrapper">
                            <h2 class="service-name">Giải pháp mùi hương</h2>
                            <a href="#" class="btn-view-more">Xem thêm <img
                                    src="{{ asset('fontend/images/images/serviceCleaning/arrow-right.svg') }}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-cleaning-process">
        <div class="headline">
            <h1 class="title">QUY TRÌNH GIẢI PHÁP VỆ SINH</h1>
        </div>
        <img src="{{ asset('fontend/images/cleaningSolution/service-cleaning-process.png') }}" class="img-fluid"
            alt="">
    </section>

    <section class="cleaning-solution-special">
        <div class="headline">
            <h1 class="title">GIẢI PHÁP CHO CÁC NGÀNH HÀNG</h1>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-3 card-item">
                    <div class="wrapper">
                        <h6 class="number">01</h6>
                        <img src="{{ asset('fontend/images/cleaningSolution/purple-line.png') }}" class="img-fluid">
                        <h1 class="title">KHÁCH SẠN & RESORTS</h1>
                    </div>
                </div>
                <div class="col-md-3 card-item">
                    <div class="wrapper">
                        <h6 class="number">02</h6>
                        <img src="{{ asset('fontend/images/cleaningSolution/purple-line.png') }}" class="img-fluid">
                        <h1 class="title">TOÀ NHÀ VĂN PHÒNG</h1>
                    </div>
                </div>
                <div class="col-md-3 card-item">
                    <div class="wrapper">
                        <h6 class="number">03</h6>
                        <img src="{{ asset('fontend/images/cleaningSolution/purple-line.png') }}" class="img-fluid">
                        <h1 class="title">TRUNG TÂM THƯƠNG MẠI</h1>
                    </div>
                </div>
                <div class="col-md-3 card-item">
                    <div class="wrapper">
                        <h6 class="number">04</h6>
                        <img src="{{ asset('fontend/images/cleaningSolution/purple-line.png') }}" class="img-fluid">
                        <h1 class="title">SPA - THẨM MỸ VIỆN</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 card-item">
                    <div class="wrapper">
                        <h6 class="number">05</h6>
                        <img src="{{ asset('fontend/images/cleaningSolution/purple-line.png') }}" class="img-fluid">
                        <h1 class="title">SHOP THỜI TRANG</h1>
                    </div>
                </div>
                <div class="col-md-3 card-item">
                    <div class="wrapper">
                        <h6 class="number">06</h6>
                        <img src="{{ asset('fontend/images/cleaningSolution/purple-line.png') }}" class="img-fluid">
                        <h1 class="title">PHÒNG GYM</h1>
                    </div>
                </div>
                <div class="col-md-3 card-item">
                    <div class="wrapper">
                        <h6 class="number">07</h6>
                        <img src="{{ asset('fontend/images/cleaningSolution/purple-line.png') }}" class="img-fluid">
                        <h1 class="title">RẠP CHIẾU PHIM - TRUNG TÂM HỘI NGHỊ</h1>
                    </div>
                </div>
                <div class="col-md-3 card-item">
                    <div class="wrapper">
                        <h6 class="number">08</h6>
                        <img src="{{ asset('fontend/images/cleaningSolution/purple-line.png') }}" class="img-fluid">
                        <h1 class="title">KHÔNG GIAN GIA ĐÌNH</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cleaning-solution-benefits">
        <div class="content">
            <div class="row">
                <div class="col-md-5">
                    <div class="video">
                        <!-- <iframe src="https://www.youtube.com/embed/jIJuvKK0hho" frameborder="0" allowfullscreen></iframe> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="title">LỢI ÍCH KHI SỬ DỤNG GIẢI PHÁP VỆ SINH</h1>
                    <ul class="description">
                        <li>Đảm bảo môi trường sạch sẽ, an toàn cho sức khỏe</li>
                        <li>Tác động tích cực đến tinh thần khách hàng, giữ khách hàng ở lại lâu hơn và tăng mức độ hài lòng
                        </li>
                        <li>Thúc đẩy sự sáng tạo, tinh thần làm việc và giảm bớt sự căng thẳng ở các nhân viên</li>
                        <li>Tạo sự khác biệt và nâng cao nhận diện thương hiệu - Brand Awareness, thúc đẩy kinh doanh hiệu
                            quả</li>
                        <li>Tránh chi phí và các rủi ro phát sinh do không tuân thủ các quy định pháp lý, quy định về an
                            toàn, tiêu chuẩn ngành.</li>
                    </ul>
                    <a href="#" class="btn-contact">Liên hệ với chúng tôi <img
                            src="{{ asset('fontend/images/serviceCleaning/arrow-right.svg') }}"></a>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.include.client.banner-carousel')
    @include('layouts.include.client.notify-service')
@endsection
