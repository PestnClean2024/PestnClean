@extends('layouts.client')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/components/serviceBugControl.css') }}">
@endpush

@section('content')
    <section class="container-fluid p-0">
        <div class="blog-header-content">
            <h1>dịch vụ kiểm soát côn trùng</h1>
            <p>Khám phá ngay</p>
        </div>
    </section>

    <section class="container-fluid p-0 mt-5">
        <div class="service-bug-control-text-and-video-container">
            <div class="row">
                <div class="col">
                    <p class="headline">Dịch vụ Kiểm soát
                        côn trùng tại PestnClean
                    </p>
                    <p>
                        Việc tìm được một <span class="p-bold">công ty kiểm soát côn trùng</span> hiệu quả cho nhà ở, các cơ
                        sở, đơn vị kinh doanh là hết sức cần thiết. <span class="p-brand">PestnClean</span> tự hào là một
                        đơn vị có nhiều năm kinh nghiệm trong lĩnh vực kiểm soát côn trùng. Chúng tôi với đội ngũ nhân viên
                        lành nghề, được đào tạo kỹ càng về nhiều mặt (chuyên môn và thái độ phục vụ) cam kết sẽ cung cấp tới
                        Quý khách hàng một dịch vụ chất lượng nhất.
                    </p>
                </div>
                <div class="col">
                    <div class="video-container">
                        <div class="video-player">
                            <div class="embed-responsive embed-responsive-16by9 h-100">
                                <iframe class="embed-responsive-item w-100 h-100"
                                    src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid p-0 mt-5">
        <div class="service-bug-control-charts-container">
            <div class="row">
                <div class="col">
                    <div class="chart-image-and-text-container">
                        <img src="{{ asset('fontend/images/serviceBugControl/chart-image.png') }}">
                        <p>Thông thường</p>
                    </div>
                </div>
                <div class="col">
                    <div class="chart-image-and-text-container">
                        <img src="{{ asset('fontend/images/serviceBugControl/chart-image2.png') }}">
                        <p>Quy Trình</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid p-0 mt-5">
        <div class="service-bug-control-category-container">
            <p class="service-title">
                DỊCH VỤ KIỂM SOÁT CÔN TRÙNG THEO NGÀNH HÀNG
            </p>
            <div class="category-card-list-container">
                <div class="row mt-2">
                    <div class="col">
                        <div class="category-card"
                            style="
                    background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)),
                    url(`{{ asset('fontend/images/serviceBugControl/category-image.png') }});">
                            <h4>01</h4>
                            <div class="p-container-with-green-top-border">
                                <p>NHÀ HÀNG CHUỖI BÁN LẺ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-card"
                            style="
                    background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)),
                    url(`{{ asset('fontend/images/serviceBugControl/category-image2.png') }};">
                            <h4>02</h4>
                            <div class="p-container-with-green-top-border">
                                <p>
                                    VĂN PHÒNG, TOÀ NHÀ
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-card"
                            style="
                    background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)),
                    url(`{{ asset('fontend/images/serviceBugControl/category-image3.png') }};">
                            <h4>03</h4>
                            <div class="p-container-with-green-top-border">
                                <p>KHÁCH SẠN & RESORTS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="category-card"
                            style="
                    background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)),
                    url(`{{ asset('fontend/images/serviceBugControl/category-image4.png') }};">
                            <h4>04</h4>
                            <div class="p-container-with-green-top-border">
                                <p>CƠ SỞ CHẾ BIẾN THỰC PHẨM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-card"
                            style="
                    background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)),
                    url(`{{ asset('fontend/images/serviceBugControl/category-image5.png') }};">
                            <h4>05</h4>
                            <div class="p-container-with-green-top-border">
                                <p>NHÀ HÁT, RẠP CHIẾU PHIM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-card"
                            style="
                    background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)),
                    url(`{{ asset('fontend/images/serviceBugControl/category-image6.png') }};">
                            <h4>06</h4>
                            <div class="p-container-with-green-top-border">
                                <p>KHO BÃI & CHUỖI CUNG ỨNG</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid p-0 mt-5">
        <div class="service-bug-control-species-container">
            <p class="service-bug-control-species-title">
                DỊCH VỤ KIỂM SOÁT CÔN TRÙNG chuyên biệt
            </p>
            <p class="service-bug-control-species-supporting-text">
                Nhằm đảm bảo phục vụ được tất cả các nhu cầu đa dạng của khách hàng thì <span
                    class="service-bug-control-species-supporting-text-hightlight">các dịch vụ kiểm soát côn trùng của
                    PestnClean</span> cũng được phân chia rất cụ thể, tương ứng với từng trường hợp, từng ngành hàng để tăng
                hiệu suất cũng như hiệu quả khi tiến hành cung cấp dịch vụ đến khách hàng.
            </p>
            <div class="service-bug-control-species-card-list-container">
                <div class="row mt-5">
                    <div class="col service-bug-control-species-card-item">
                        <div class="card-item-top-content">
                            <img class="card-item-img" src="{{ asset('fontend/images/serviceBugControl/card-icon.svg') }}">
                            <p class="card-item-title">KIỂM SOÁT CÔN TRÙNG TÍCH HỢP</p>
                        </div>
                        <button class="card-item-more-button">
                            <p class="button-text">Xem thêm</p>
                            <img class="button-img" src="{{ asset('fontend/images/serviceBugControl/arrow-right.svg') }}">
                        </button>
                    </div>
                    <div class="col service-bug-control-species-card-item">
                        <div class="card-item-top-content">
                            <img class="card-item-img"
                                src="{{ asset('fontend/images/serviceBugControl/card-icon2.svg') }}">
                            <p class="card-item-title">KIỂM SOÁT MỐI</p>
                        </div>
                        <button class="card-item-more-button">
                            <p class="button-text">Xem thêm</p>
                            <img class="button-img" src="{{ asset('fontend/images/serviceBugControl/arrow-right.svg') }}">
                        </button>
                    </div>
                    <div class="col service-bug-control-species-card-item">
                        <div class="card-item-top-content">
                            <img class="card-item-img"
                                src="{{ asset('fontend/images/serviceBugControl/card-icon3.svg"') }}>
                            <p class="card-item-title">KIỂM
                            SOÁT CHUỘT</p>
                        </div>
                        <button class="card-item-more-button">
                            <p class="button-text">Xem thêm</p>
                            <img class="button-img" src="{{ asset('fontend//images/serviceBugControl/arrow-right.svg') }}">
                        </button>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col service-bug-control-species-card-item">
                        <div class="card-item-top-content">
                            <img class="card-item-img"
                                src="{{ asset('fontend/images/serviceBugControl/card-icon4.svg') }}">
                            <p class="card-item-title">KIỂM SOÁT RUỒI</p>
                        </div>
                        <button class="card-item-more-button">
                            <p class="button-text">Xem thêm</p>
                            <img class="button-img" src="{{ asset('fontend/images/serviceBugControl/arrow-right.svg') }}">
                        </button>
                    </div>
                    <div class="col service-bug-control-species-card-item">
                        <div class="card-item-top-content">
                            <img class="card-item-img"
                                src="{{ asset('fontend/images/serviceBugControl/card-icon5.svg') }}">
                            <p class="card-item-title">KIỂM SOÁT MUỖI</p>
                        </div>
                        <button class="card-item-more-button">
                            <p class="button-text">Xem thêm</p>
                            <img class="button-img"
                                src="{{ asset('fontend/images/serviceBugControl/arrow-right.svg') }}">
                        </button>
                    </div>
                    <div class="col service-bug-control-species-card-item">
                        <div class="card-item-top-content">
                            <img class="card-item-img"
                                src="{{ asset('fontend/images/serviceBugControl/card-icon6.svg') }}">
                            <p class="card-item-title">KIỂM SOÁT KIẾN</p>
                        </div>
                        <button class="card-item-more-button">
                            <p class="button-text">Xem thêm</p>
                            <img class="button-img"
                                src="{{ asset('fontend/images/serviceBugControl/arrow-right.svg') }}">
                        </button>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col service-bug-control-species-card-item">
                        <div class="card-item-top-content">
                            <img class="card-item-img"
                                src="{{ asset('fontend/images/serviceBugControl/card-icon7.svg') }}">
                            <p class="card-item-title">KIỂM SOÁT GIÁN</p>
                        </div>
                        <button class="card-item-more-button">
                            <p class="button-text">Xem thêm</p>
                            <img class="button-img"
                                src="{{ asset('fontend/images/serviceBugControl/arrow-right.svg') }}">
                        </button>
                    </div>
                    <div class="col service-bug-control-species-card-item">
                        <div class="card-item-top-content">
                            <img class="card-item-img"
                                src="{{ asset('fontend/images/serviceBugControl/card-icon8.svg') }}">
                            <p class="card-item-title">DỊCH VỤ KHỬ KHUẨN</p>
                        </div>
                        <button class="card-item-more-button">
                            <p class="button-text">Xem thêm</p>
                            <img class="button-img"
                                src="{{ asset('fontend/images/serviceBugControl/arrow-right.svg') }}">
                        </button>
                    </div>
                    <div class="col service-bug-control-species-card-item">
                        <div class="card-item-top-content">
                            <img class="card-item-img"
                                src="{{ asset('fontend/images/serviceBugControl/card-icon9.svg') }}">
                            <p class="card-item-title">DỊCH VỤ ĐÀO TẠO NHẬN THỨC</p>
                        </div>
                        <button class="card-item-more-button">
                            <p class="button-text">Xem thêm</p>
                            <img class="button-img"
                                src="{{ asset('fontend/images/serviceBugControl/arrow-right.svg') }}">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.include.client.banner-carousel')
@endsection
