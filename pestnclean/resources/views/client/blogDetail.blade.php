@extends('layouts.client')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/components/blogDetail.css') }}">
@endpush

@section('content')
    <section class="container-fluid p-0">
        <div class="blog-detail-header-link-container">
            <p class="origin-link">Blog</p>
            <img src="{{ asset('fontend/images/blog_detail/chevron-right.svg') }}">
            <a href="#" class="current-link">Vì sao nên chọn dịch vụ giặt thảm của PestnClean?</a>
        </div>
    </section>

    <section class="container-fluid p-0 mt-5">
        <div class="blog-content-container">
            <div class="blog-detail-content-container">
                <img src="{{ asset('fontend/images/blog_detail/template-word.png') }}">
                <img src="{{ asset('fontend/images/blog_detail/template-word2.png') }}">
                <div class="relative-blog-container">
                    <p class="relative-blog-title">TIN TỨC LIÊN QUAN</p>
                    <div class="relative-blog-card">
                        <img src="{{ asset('fontend/images/blog_detail/relative-blog-card-img.png') }}">
                        <div class="relative-blog-card-text-container">
                            <p class="blog-card-heading">Làm thơm phòng ngủ với 5 mẹo đơn giản sau đây</p>
                            <p class="blog-card-time">Tháng Ba 27, 2024<span class="blog-card-author">Nguyen Duy</span></p>
                            <p class="blog-card-supporting">Việc làm thơm phòng ngủ không chỉ mang lại cảm giác thoải mái mà
                                còn có tác động tích cực đến sức khỏe của bạn. Một mùi hương dễ chịu và thư giãn sẽ giúp bạn
                                tăng cường giấc ngủ, đem lại sự sảng khoái và tinh thần sảng khoái mỗi khi bạn bước vào căn
                                phòng của mình.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="other-stuff-column">
                <div class="blog-tag-container">
                    <p class="blog-tag-title">Danh mục bài viết</p>
                    <div class="tag-card-container">
                        <p class="tag-text">KHÁM PHÁ</p>
                        <img src="{{ asset('fontend/images/blog_detail/chevron-right.svg') }}">
                    </div>
                    <div class="tag-card-container">
                        <p class="tag-text">ĐỜI SỐNG</p>
                        <img src="{{ asset('fontend/images/blog_detail/chevron-right.svg') }}">
                    </div>
                </div>
                <div class="blog-recommend-container">
                    <p class="blog-recommend-title">BÀI VIẾT ĐỀ XUẤT</p>
                    <div class="blog-card mb-3">
                        <img src="{{ asset('fontend/images/blog_detail/chevron-right.svg') }}">
                        <div class="blog-card-text-container">
                            <p class="blog-card-title">UX review presentations UX review presentations UX review
                                presentations</p>
                            <p class="blog-card-supporting-text">Linear helps streamline software projects, sprints, tasks,
                                and bug tracking. Here’s how to get...</p>
                        </div>
                    </div>
                    <div class="blog-card mb-3">
                        <img src="{{ asset('fontend/images/blog_detail/chevron-right.svg') }}">
                        <div class="blog-card-text-container">
                            <p class="blog-card-title">UX review presentations UX review presentations UX review
                                presentations</p>
                            <p class="blog-card-supporting-text">Linear helps streamline software projects, sprints, tasks,
                                and bug tracking. Here’s how to get...</p>
                        </div>
                    </div>
                    <div class="blog-card mb-3">
                        <img src="{{ asset('fontend/images/blog_detail/chevron-right.svg') }}">
                        <div class="blog-card-text-container">
                            <p class="blog-card-title">UX review presentations UX review presentations UX review
                                presentations</p>
                            <p class="blog-card-supporting-text">Linear helps streamline software projects, sprints, tasks,
                                and bug tracking. Here’s how to get...</p>
                        </div>
                    </div>
                    <div class="blog-card mb-3">
                        <img src="{{ asset('fontend/images/blog_detail/chevron-right.svg') }}">
                        <div class="blog-card-text-container">
                            <p class="blog-card-title">UX review presentations UX review presentations UX review
                                presentations</p>
                            <p class="blog-card-supporting-text">Linear helps streamline software projects, sprints, tasks,
                                and bug tracking. Here’s how to get...</p>
                        </div>
                    </div>
                </div>
                <div class="contact-method-container mt-4">
                    <p class="contact-method-title">Phương thức liên hệ</p>
                    <div class="social-media-container mt-4">
                        <div class="social-media-card">
                            <img src="{{ asset('fontend/images/blog_detail/facebook-icon.svg') }}">
                            <p class="social-media-name">Facebook</p>
                        </div>
                        <div class="social-media-card">
                            <img src="{{ asset('fontend/images/blog_detail/zalo-icon.svg') }}">
                            <p class="social-media-name">Zalo</p>
                        </div>
                        <div class="social-media-card">
                            <img src="{{ asset('fontend/images/blog_detail/phone-icon.svg') }}">
                            <p class="social-media-name">0909 123 456</p>
                        </div>
                    </div>
                </div>
                <img class="ad-img mt-5" src="{{ asset('fontend/images/blog_detail/ad-image.png') }}">
            </div>
        </div>
    </section>

    <section class="container-fluid p-0 mt-4">
        <div class="recommend-blog-container">
            <p class="recommend-blog-title">BÀI VIẾT ĐỀ XUẤT</p>
            <div class="tabs-content-container">
                <ul class="nav nav-pills nav-justified nav-tabs" id="blogTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="khampha-tab" data-bs-toggle="tab"
                            data-bs-target="#khampha-tab-pane" type="button" role="tab"
                            aria-controls="khampha-tab-pane" aria-selected="true">Khám phá</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="doisong-tab" data-bs-toggle="tab" data-bs-target="#doisong-tab-pane"
                            type="button" role="tab" aria-controls="doisong-tab-pane" aria-selected="false">Đời
                            sống</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="khampha-tab-pane" role="tabpanel"
                        aria-labelledby="khampha-tab" tabindex="0">
                        <div class="row">
                            <div class="col normal-blog-card">
                                <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                                <div class="normal-blog-card-text-container">
                                    <p class="normal-blog-card-author">Alec Whitten • 1 Jan 2023</p>
                                    <p class="normal-blog-card-title">UX review presentations UX review presentations UX
                                        review presentations</p>
                                    <p class="normal-blog-card-supporting">Like to know the secrets of transforming a 2-14
                                        team into a 3x Super Bowl winning Dynasty?</p>
                                </div>
                            </div>
                            <div class="col normal-blog-card">
                                <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                                <div class="normal-blog-card-text-container">
                                    <p class="normal-blog-card-author">Alec Whitten • 1 Jan 2023</p>
                                    <p class="normal-blog-card-title">UX review presentations UX review presentations UX
                                        review presentations</p>
                                    <p class="normal-blog-card-supporting">Like to know the secrets of transforming a 2-14
                                        team into a 3x Super Bowl winning Dynasty?</p>
                                </div>
                            </div>
                            <div class="col normal-blog-card">
                                <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                                <div class="normal-blog-card-text-container">
                                    <p class="normal-blog-card-author">Alec Whitten • 1 Jan 2023</p>
                                    <p class="normal-blog-card-title">UX review presentations UX review presentations UX
                                        review presentations</p>
                                    <p class="normal-blog-card-supporting">Like to know the secrets of transforming a 2-14
                                        team into a 3x Super Bowl winning Dynasty?</p>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Search results pages">
                            <ul class="pagination justify-content-center gap-2">
                                <li class="page-item">
                                    <a class="page-link disabled" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="tab-pane fade show" id="doisong-tab-pane" role="tabpanel" aria-labelledby="doisong-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col normal-blog-card">
                                <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                                <div class="normal-blog-card-text-container">
                                    <p class="normal-blog-card-author">Alec Whitten • 1 Jan 2023</p>
                                    <p class="normal-blog-card-title">UX review presentations UX review presentations UX
                                        review presentations</p>
                                    <p class="normal-blog-card-supporting">Like to know the secrets of transforming a 2-14
                                        team into a 3x Super Bowl winning Dynasty?</p>
                                </div>
                            </div>
                            <div class="col normal-blog-card">
                                <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                                <div class="normal-blog-card-text-container">
                                    <p class="normal-blog-card-author">Alec Whitten • 1 Jan 2023</p>
                                    <p class="normal-blog-card-title">UX review presentations UX review presentations UX
                                        review presentations</p>
                                    <p class="normal-blog-card-supporting">Like to know the secrets of transforming a 2-14
                                        team into a 3x Super Bowl winning Dynasty?</p>
                                </div>
                            </div>
                            <div class="col normal-blog-card">
                                <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                                <div class="normal-blog-card-text-container">
                                    <p class="normal-blog-card-author">Alec Whitten • 1 Jan 2023</p>
                                    <p class="normal-blog-card-title">UX review presentations UX review presentations UX
                                        review presentations</p>
                                    <p class="normal-blog-card-supporting">Like to know the secrets of transforming a 2-14
                                        team into a 3x Super Bowl winning Dynasty?</p>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center gap-1">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.include.client.banner-carousel')
    @include('layouts.include.client.notify-news')
@endsection
