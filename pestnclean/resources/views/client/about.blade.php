@extends('layouts.client')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/components/abouts.css') }}">
@endpush

@section('content')
    <section class="abouts-page-header">
        <div class="headline">
            <h1 class="title">VỀ CHÚNG TÔI</h1>
            <a href="#" class="btn-header">Khám phá ngay</a>
        </div>
    </section>

    <section class="abouts-page-title">
        <h1 class="title">Hành trình chinh phục niềm tin khách hàng của PestnClean</h1>
    </section>

    <section class="abouts-page-journey">
        <div class="first">
            <div class="row">
                <div class="col-md-5 images">
                    <img src="{{ asset('fontend/images/About/example-img.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2 class="title">3/2022 - 10/2022 <br> Khởi đầu sứ mệnh</h2>
                    <ul class="description">
                        <li><span class="highlight">Ra đời với sứ mệnh cao cả: </span>Mang đến dịch vụ kiểm soát côn trùng,
                            vệ sinh và giải pháp mùi hương chất lượng.</li>
                        <li><span class="highlight">Tập trung vào dịch vụ cốt lõi: </span>Cung cấp các dịch vụ ở TP.HCM.
                        </li>
                        <li><span class="highlight">Đội ngũ nhân viên chuyên nghiệp: </span>Đạt giấy chứng nhận SUMITOMO,
                            Xterm,...</li>
                        <li><span class="highlight">Sử dụng hóa chất an toàn: </span>Được Bộ Y tế cấp phép.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="second">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title">10/2022 - 08/2023 <br> Nâng tầm dịch vụ</h2>
                    <ul class="description">
                        <li><span class="highlight">Mở rộng lĩnh vực</span></li>
                        <li><span class="highlight">Mang đến giải pháp mùi hương độc đáo: </span>Hợp tác với các nhà cung
                            cấp AROMA, Initial,..</li>
                        <li><span class="highlight">Đầu tư vào công nghệ: </span>Trang thiết bị hiện đại</li>
                    </ul>
                </div>
                <div class="col-md-5 images">
                    <img src="{{ asset('fontend/images/About/example-img.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="third">
            <div class="row">
                <div class="col-md-4 images">
                    <img src="{{ asset('fontend/images/About/example-img.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <h2 class="title">08/2023 - 07/2024 <br> Vươn xa hơn nữa</h2>
                    <ul class="description">
                        <li><span class="highlight">Mở rộng thị trường: </span>Mở rộng sang Vũng Tàu, Đồng Nai, Bình
                            Dương,.. </li>
                        <li><span class="highlight">Nâng cao chất lượng dịch vụ không ngừng: </span>Mở rộng và đào tạo đội
                            ngũ nhân viên chuyên nghiệp hơn.</li>
                        <li><span class="highlight">Đa dạng hóa sản phẩm: </span>Sử dụng các thiết bị, hóa chất mới.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="abouts-page-vision">
        <div class="row">
            <div class="col-md-6 images">
                <div class="img-items">
                    <img src="{{ asset('fontend/images/About/example-img2.png') }}" alt="">
                </div>
                <div class="img-items">
                    <img src="{{ asset('fontend/images/About/example-img2.png') }}" alt="">
                </div>
                <div class="img-items">
                    <img src="{{ asset('fontend/images/About/example-img2.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 content">
                <h1 class="title">TẦM NHÌN</h1>
                <p class="description"><span class="hightlight">PestnClean </span>khát vọng trở thành đối tác đáng tin cậy,
                    đồng hành cùng quá trình phát triển của các doanh nghiệp trong ngành Hotels & Resorts, F&B Retail và Nhà
                    máy. Phấn đấu đạt mục tiêu xây dựng thương hiệu hàng đầu trong ngành Dịch vụ vệ sinh và Kiểm soát côn
                    trùng – Đem lại hệ sinh thái toàn diện, bền vững.</p>
            </div>
        </div>
    </section>

    <section class="abouts-page-mission">
        <div class="row">
            <div class="col-md-6 content">
                <h1 class="title">SỨ MỆNH</h1>
                <p class="description"><span class="hightlight">“ Nâng cao chất lượng môi trường làm việc, đảm bảo giá trị
                        kinh doanh hiệu quả bền vững ”.</span> PestnClean tin rằng việc cung cấp mô hình dịch vụ giải pháp
                    toàn diện về vệ sinh và kiểm soát côn trùng sẽ mang lại những giá trị tốt đẹp cho công việc kinh doanh
                    của khách hàng, đối tác và xã hội. Giúp khách hàng và đối tác nâng cao chất lượng môi trường sống và làm
                    việc, đáp ứng đầy đủ các tiêu chuẩn ngành và đủ điều kiện pháp lý để đảm bảo quá trình kinh doanh hiệu
                    quả, nâng cao danh tiếng thương hiệu.</p>
            </div>
            <div class="col-md-6 images">
                <img src="{{ asset('fontend/images/About/example-img3.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="abouts-core-values">
        <div class="headline">
            <h1 class="title">GIÁ TRỊ CỐT LÕI</h1>
        </div>
        <div class="content">
            <div class="row justify-content-between">
                <div class="card col-md-3">
                    <img src="{{ asset('fontend/images/About/example-card.png') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="title">Giải quyết tất cả vấn đề vệ sinh, côn trùng khách hàng gặp phải</h3>
                    </div>
                </div>
                <div class="card col-md-3">
                    <img src="{{ asset('fontend/images/About/example-card.png') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="title">Dịch vụ với trang thiết bị hiện đại, chuyên giàu kinh nghiệm</h3>
                    </div>
                </div>
                <div class="card col-md-3">
                    <img src="{{ asset('fontend/images/About/example-card.png') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="title">Chăm sóc, hỗ trợ tư vấn khách hàng tận tâm 24/7</h3>
                    </div>
                </div>
                <div class="card col-md-3">
                    <img src="{{ asset('fontend/images/About/example-card.png') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="title">Xây dựng hệ sinh thái toàn diện, bền vững và đảm bảo sức khoẻ</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.include.client.banner-carousel')
    @include('layouts.include.client.notify-service')
@endsection
