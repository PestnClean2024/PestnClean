@extends('layouts.client')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/components/landscapeDesign.css') }}">
@endpush

@section('content')
    <section class="landscape-design-header">
        <div class="headline">
            <h1 class="title">THIẾT KẾ & THI CÔNG CẢNH QUAN</h1>
            <a href="#" class="btn-header">Khám phá ngay</a>
        </div>
    </section>

    <section class="landscape-design-abouts">
        <div class="content">
            <div class="row">
                <div class="col-md-5">
                    <div class="video">
                        <!-- <iframe src="https://www.youtube.com/embed/jIJuvKK0hho" frameborder="0" allowfullscreen></iframe> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="title">DỊCH VỤ THIẾT KẾ & THI CÔNG CẢNH QUAN CỦA PESTNCLEAN</h1>
                    <p class="description">Thiết kế và thi công cảnh quan không chỉ mang lại vẻ đẹp cho không gian sống và
                        làm việc, mà còn tạo môi trường sống trong lành, giúp nâng cao chất lượng cuộc sống. PestnClean tự
                        hào là đơn vị cung cấp dịch vụ thiết kế và thi công cảnh quan chuyên nghiệp. Chúng tôi cam kết mang
                        lại những không gian xanh mát, hài hòa với tự nhiên, phù hợp với nhu cầu và sở thích của Quý khách
                        hàng.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="landscape-design-process">
        <div class="headline">
            <h1 class="title">QUY TRÌNH THI CÔNG CẢNH QUAN</h1>
        </div>
        <img src="{{ asset('fontend/images/landscapeDesign/landscape-design-process.png') }}" class="img-fluid"
            alt="">
    </section>

    <section class="landscape-design-our-services">
        <div class="headline">
            <h1 class="title">DỊCH VỤ THIẾT KẾ & THI CÔNG CẢNH QUAN</h1>
        </div>
        <div class="content">
            <div class="row">
                <div class="card-item col-md-4">
                    <img src="{{ asset('fontend/images/landscapeDesign/landscape-design-services-img1.png') }}"
                        class="img-fluid" alt="">
                    <div class="wrapper">
                        <h6 class="title">Thiết kế và Thi công Khuôn viên Xanh</h6>
                        <p class="description">Tạo và duy trì các khu vực cây xanh trong khuôn viên công ty, khu dân cư.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="view-more">
                            Xem thêm <img src="{{ asset('fontend/images/landscapeDesign/arrow-right.svg') }}">
                        </a>
                    </div>
                </div>
                <div class="card-item col-md-4">
                    <img src="{{ asset('fontend/images/landscapeDesign/landscape-design-services-img2.png') }}"
                        class="img-fluid" alt="">
                    <div class="wrapper">
                        <h6 class="title">Thiết kế và Thi công Vườn Hoa</h6>
                        <p class="description">Thiết kế và trồng các loại hoa đa dạng theo mùa, phù hợp với cảnh quan và yêu
                            cầu của khách hàng.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="view-more">
                            Xem thêm <img src="{{ asset('fontend/images/landscapeDesign/arrow-right.svg') }}">
                        </a>
                    </div>
                </div>
                <div class="card-item col-md-4">
                    <img src="{{ asset('fontend/images/landscapeDesign/landscape-design-services-img3.png') }}"
                        class="img-fluid" alt="">
                    <div class="wrapper">
                        <h6 class="title">Thiết kế và Thi công Hệ thống Tưới Tiêu Tự Động</h6>
                        <p class="description">Lắp đặt các hệ thống tưới tiêu tự động giúp duy trì độ ẩm cần thiết cho cây
                            trồng.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="view-more">
                            Xem thêm <img src="{{ asset('fontend/images/landscapeDesign/arrow-right.svg') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landscape-design-construction">
        <div class="headline">
            <h1 class="title">THI CÔNG CÂY CẢNH</h1>
            <p class="description">Thi công cây cảnh không chỉ mang lại không gian xanh mát mà còn góp phần tạo nên điểm
                nhấn thẩm mỹ cho khuôn viên. PestnClean cung cấp dịch vụ thi công cây cảnh với nhiều loại cây đa dạng, phù
                hợp với từng không gian và nhu cầu của khách hàng. Chúng tôi đảm bảo mỗi công trình thi công đều đạt tiêu
                chuẩn cao về chất lượng và thẩm mỹ.</p>
        </div>
        <div class="construction-list">
            <img src="{{ asset('fontend/images/landscapeDesign/landscape-design-construction-list.png') }}" alt=""
                class="img-fluid">
        </div>
        <div class="construction-steps">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('fontend/images/landscapeDesign/construction-step1.png') }}" alt=""
                        class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('fontend/images/landscapeDesign/construction-step2.png') }}" alt=""
                        class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('fontend/images/landscapeDesign/construction-step3.png') }}" alt=""
                        class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('fontend/images/landscapeDesign/construction-step4.png') }}" alt=""
                        class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('fontend/images/landscapeDesign/construction-step5.png') }}" alt=""
                        class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('fontend/images/landscapeDesign/construction-step6.png') }}" alt=""
                        class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('fontend/images/landscapeDesign/construction-step7.png') }}" alt=""
                        class="img-fluid">
                </div>
            </div>
        </div>
        <div class="construction-list">
            <img src="{{ asset('fontend/images/landscapeDesign/landscape-design-construction-list2.png') }}"
                alt="" class="img-fluid">
        </div>
    </section>

    @include('layouts.include.client.banner-carousel')
    @include('layouts.include.client.notify-service')
@endsection
