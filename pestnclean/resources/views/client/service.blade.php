@extends('layouts.client')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/components/service.css') }}">
@endpush

@section('content')
    <section class="container-fluid p-0">
        <div class="service-title-container">
            <h1>Dịch vụ của chúng tôi</h1>
            <h4>Khám phá ngay</h4>
        </div>
    </section>

    <section class="container-fluid p-0" style="margin-top: 80px">
        <div class="service-card-list">
            <div class="service-card-item">
                <div class="content-container">
                    <h4>DỊCH VỤ Kiểm soát côn trùng</h4>
                    <p>Dịch vụ kiểm soát côn trùng là một giải pháp chuyên nghiệp nhằm loại bỏ và ngăn chặn sự xuất hiện của
                        các loại côn trùng gây hại như mối, kiến, gián, chuột, ruồi và muỗi… trong không gian sống và làm
                        việc. Dịch vụ này bao gồm việc kiểm tra, đánh giá tình hình côn trùng, áp dụng các biện pháp xử lý
                        để duy trì môi trường sạch sẽ và an toàn, tránh những phiền toái mà côn trùng gây hại đem lại.</p>
                    <a href="#">Xem thêm</a>
                </div>
                <div class="img-container">
                    <img src="{{ asset('fontend/images/Service/card-item-img.png') }}">
                </div>
            </div>
            <div class="service-card-item-reverse">
                <div class="content-container">
                    <h4>DỊCH VỤ VỆ SINH
                        CÔNG NGHIỆ</h4>
                    <p>Vệ sinh công nghiệp bao gồm các công việc vệ sinh và làm sạch cho các không gian tòa nhà, nhà máy, xí
                        nghiệp, văn phòng, nhà hàng, khách sạn, nhà ở… bằng máy móc, thiết bị vệ sinh chuyên dụng. Người
                        thực hiện dịch vụ là các chuyên gia được đào tạo chuyên môn cùng với thiết bị hiện đại sẽ giúp việc
                        vệ sinh đạt hiệu quả cao nhất và tối ưu nhất cho không gian của bạn.</p>
                    <a href="#">Xem thêm</a>
                </div>
                <div class="img-container">
                    <img src="{{ asset('fontend/images/Service/card-item-img2.png') }}">
                </div>
            </div>
            <div class="service-card-item">
                <div class="content-container">
                    <h4>DỊCH VỤ GIẢI PHÁP
                        VỆ SINH</h4>
                    <p>PestnClean cung cấp giải pháp vệ sinh chuyên sâu cho các doanh nghiệp, nhà hàng, khách sạn... đảm bảo
                        rằng các loại vi sinh vật và nấm mốc được loại bỏ, mang đến môi trường sạch khuẩn. Ngoài ra, chúng
                        tôi còn cung cấp các mùi hương mang đến không gian đầy sức sống tươi trẻ, tăng cường sức khỏe và
                        tinh thần cho mọi người.</p>
                    <a href="#">Xem thêm</a>
                </div>
                <div class="img-container">
                    <img src="{{ asset('fontend/images/Service/card-item-img3.png') }}">
                </div>
            </div>
            <div class="service-card-item-reverse">
                <div class="content-container">
                    <h4>DỊCH VỤ THIẾT KẾ & THI CÔNG CẢNH QUAN</h4>
                    <p>Dịch vụ thiết kế & thi công cảnh quan là quá trình tạo ra và xây dựng các không gian ngoài trời như
                        sân vườn, công viên, khuôn viên nhà ở, và khu vực thương mại… Quá trình này bao gồm việc lên ý
                        tưởng, thiết kế chi tiết và thực hiện thi công để tạo nên một môi trường xanh, đẹp mắt và nhiều công
                        năng thú vị.</p>
                    <a href="#">Xem thêm</a>
                </div>
                <div class="img-container">
                    <img src="{{ asset('fontend/images/Service/card-item-img4.png') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid p-0">
        <div id="carouselServiceBanner" class="carousel slide" style="height: 700px; margin-bottom: 80px;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselServiceBanner" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carousel-service-img"
                        src="{{ asset('fontend/images/Service/service-banner.png') }}" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselServiceBanner"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselServiceBanner"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
@endsection
