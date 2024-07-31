@extends('layouts.client')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/components/serviceCleaning.css') }}">
@endpush

@section('content')
    <section class="service-cleaning-header">
        <div class="headline">
            <h1 class="title">DỊCH VỤ VỆ SINH</h1>
            <a href="#" class="btn-header">Khám phá ngay</a>
        </div>
    </section>

    <section class="service-cleaning-abouts">
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title" style="font-size: 48px;">DỊCH VỤ VỆ SINH PESTNCLEAN</h1>
                    <p class="description">
                        <span class="text-underline">PestnClean</span> là công ty dịch vụ vệ sinh chuyên nghiệp, cung cấp
                        các dịch vụ vệ sinh công nghiệp và vệ sinh dân dụng chất lượng cao, được thiết kế linh hoạt nhằm đáp
                        ứng tối ưu yêu cầu của khách hàng, góp phần nâng cao chất lượng môi trường sống và làm việc, đáp ứng
                        đầy đủ các điều kiện pháp lý và tiêu chuẩn ngành để đảm bảo quá trình kinh doanh hiệu quả, nâng cao
                        danh tiếng thương hiệu.
                    </p>
                </div>
                <div class="col-md-5">
                    <div class="video">
                        <!-- <iframe src="https://www.youtube.com/embed/jIJuvKK0hho" frameborder="0" allowfullscreen></iframe> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-cleaning-services">
        <div class="headline">
            <h1 class="title" style="font-size: 56px;">CÁC DỊCH VỤ VỆ SINH CỦA PESTNCLEAN</h1>
            <p class="subtitle" style="font-size: 24px;">Các dịch vụ vệ sinh chuyên nghiệp của PestnClean, đáp ứng tối ưu
                yêu cầu của khách hàng trong nhiều lĩnh vực, nâng cao chất lượng môi trường sống và làm việc</p>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-5">
                    <div class="card-img img1">
                        <div class="wrapper">
                            <h2 class="service-name">VỆ SINH CÔNG NGHIỆP</h2>
                            <a href="#" class="btn-view-more">Xem thêm <img
                                    src="{{ asset('fontend/images/serviceCleaning/arrow-right.svg') }}"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card-img img2">
                        <div class="wrapper">
                            <h2 class="service-name">VỆ SINH NHÀ Ở</h2>
                            <a href="#" class="btn-view-more">Xem thêm <img
                                    src="{{ asset('fontend/images/serviceCleaning/arrow-right.svg') }}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-cleaning-process">
        <div class="headline">
            <h1 class="title">QUY TRÌNH DỊCH VỤ VỆ SINH PESTNCLEAN</h1>
        </div>
        <div class="content">
            <img src="{{ asset('fontend/images/serviceCleaning/services-process.png') }}" class="img-fluid" alt="">
        </div>
    </section>

    <section class="service-cleaning-special">
        <div class="headline">
            <h1 class="title">DỊCH VỤ VỆ SINH CHUYÊN BIỆT</h1>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-4 card-item">
                    <div class="wrapper">
                        <h6 class="number">01</h6>
                        <img src="{{ asset('fontend/images/serviceCleaning/green-line.png') }}" class="img-fluid">
                        <h1 class="title">VỆ SINH <br> NHÀ XƯỞNG</h1>
                    </div>
                </div>
                <div class="col-md-4 card-item">
                    <div class="wrapper">
                        <h6 class="number">02</h6>
                        <img src="{{ asset('fontend/images/serviceCleaning/green-line.png') }}" class="img-fluid">
                        <h1 class="title">VỆ SINH TOÀ NHÀ, BUILDING</h1>
                    </div>
                </div>
                <div class="col-md-4 card-item">
                    <div class="wrapper">
                        <h6 class="number">03</h6>
                        <img src="{{ asset('fontend/images/serviceCleaning/green-line.png') }}" class="img-fluid">
                        <h1 class="title">VỆ SINH <br> VĂN PHÒNG</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 card-item">
                    <div class="wrapper">
                        <h6 class="number">04</h6>
                        <img src="{{ asset('fontend/images/serviceCleaning/green-line.png') }}" class="img-fluid">
                        <h1 class="title">VỆ SINH SAU<br> XÂY DỰNG</h1>
                    </div>
                </div>
                <div class="col-md-4 card-item">
                    <div class="wrapper">
                        <h6 class="number">05</h6>
                        <img src="{{ asset('fontend/images/serviceCleaning/green-line.png') }}" class="img-fluid">
                        <h1 class="title"> <br> VỆ SINH THẢM</h1>
                    </div>
                </div>
                <div class="col-md-4 card-item">
                    <div class="wrapper">
                        <h6 class="number">06</h6>
                        <img src="{{ asset('fontend/images/serviceCleaning/green-line.png') }}" class="img-fluid">
                        <h1 class="title">VỆ SINH <br> TRẦN, SÀN</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 card-item">
                    <div class="wrapper">
                        <h6 class="number">07</h6>
                        <img src="{{ asset('fontend/images/serviceCleaning/green-line.png') }}" class="img-fluid">
                        <h1 class="title"> <br> VỆ SINH SOFA</h1>
                    </div>
                </div>
                <div class="col-md-4 card-item">
                    <div class="wrapper">
                        <h6 class="number">08</h6>
                        <img src="{{ asset('fontend/images/serviceCleaning/green-line.png') }}" class="img-fluid">
                        <h1 class="title">VỆ SINH <br> MÁY LẠNH</h1>
                    </div>
                </div>
                <div class="col-md-4 card-item">
                    <div class="wrapper">
                        <h6 class="number">09</h6>
                        <img src="{{ asset('fontend/images/serviceCleaning/green-line.png') }}" class="img-fluid">
                        <h1 class="title"> <br> DỌN DẸP NHÀ CỬA</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-cleaning-banner">
        <img src="{{ asset('fontend/images/serviceCleaning/services-banner.png') }}" alt="#" class="img-fluid">
    </section>
@endsection
