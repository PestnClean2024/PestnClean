@extends('layouts.client')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/components/blog.css') }}">
@endpush

@section('content')
    <!-- Header -->
    <section class="container-fluid p-0">
        <div class="blog-header-content">
            <h1>Bài viết</h1>
            <p>Khám phá ngay</p>
        </div>
    </section>

    <section class="container-fluid p-0 mt-5">
        <div class="tabs-content">
            <!-- Tabs Menu -->
            <ul class="nav justify-content-around p-2">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Khám phá</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Đời sống</a>
                </li>
            </ul>
            <!-- Tab Contents -->
            <div class="tab-content">
                <div class="newest-blog-container">
                    <h4 class="blog-headline">TIN TỨC MỚI NHẤT</h4>
                    <div class="blog-content mt-4">
                        <div class="main-blog">
                            <img src="{{ asset('fontend/images/Blog/5-2-image.png') }}">
                            <div class="text-container">
                                <p class="d-m-y-text">Sunday , 1 Jan 2023</p>
                                <h5>UX review presentations UX review presentationsUX review presentationsUX review
                                    presentations</h5>
                                <p class="supporting-text">How do you create compelling presentations that wow your
                                    colleagues and impress your managers? How do you create compelling presentations that
                                    wow your colleagues and impress your managers?How do you create compelling presentations
                                    that wow your colleagues and impress your managers?</p>
                            </div>
                        </div>
                        <div class="other-blog ms-4">
                            <div class="mb-2 blog-card">
                                <img src="{{ asset('fontend/images/Blog/1-1-image.png') }}">
                                <div class="blog-card-text-container">
                                    <p class="blog-card-d-m-y-text">Sunday , 1 Jan 2023</p>
                                    <p class="blog-card-title"> UX review presentations UX review presentations UX review
                                        presentations</p>
                                    <p class="blog-card-supporting-text">Linear helps streamline software projects, sprints,
                                        tasks, and bug tracking. Here's how to get...</p>
                                </div>
                            </div>
                            <div class="mb-2 blog-card">
                                <img src="{{ asset('fontend/images/Blog/1-1-image.png') }}">
                                <div class="blog-card-text-container">
                                    <p class="blog-card-d-m-y-text">Sunday , 1 Jan 2023</p>
                                    <p class="blog-card-title"> UX review presentations UX review presentations UX review
                                        presentations</p>
                                    <p class="blog-card-supporting-text">Linear helps streamline software projects, sprints,
                                        tasks, and bug tracking. Here's how to get...</p>
                                </div>
                            </div>
                            <div class="mb-2 blog-card">
                                <img src="{{ asset('fontend/images/Blog/1-1-image.png') }}">
                                <div class="blog-card-text-container">
                                    <p class="blog-card-d-m-y-text">Sunday , 1 Jan 2023</p>
                                    <p class="blog-card-title"> UX review presentations UX review presentations UX review
                                        presentations</p>
                                    <p class="blog-card-supporting-text">Linear helps streamline software projects, sprints,
                                        tasks, and bug tracking. Here's how to get...</p>
                                </div>
                            </div>
                            <div class="mb-2 blog-card">
                                <img src="{{ asset('fontend/images/Blog/1-1-image.png') }}">
                                <div class="blog-card-text-container">
                                    <p class="blog-card-d-m-y-text">Sunday , 1 Jan 2023</p>
                                    <p class="blog-card-title"> UX review presentations UX review presentations UX review
                                        presentations</p>
                                    <p class="blog-card-supporting-text">Linear helps streamline software projects, sprints,
                                        tasks, and bug tracking. Here's how to get...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recommend-blog-container">
                    <h4 class="recommend-blog-headline">TIN TỨC NỔI BẬT</h4>
                    <div class="recommend-blog-card">
                        <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                        <div class="recommend-blog-card-text">
                            <p class="recommend-blog-card-d-m-y-text">Olivia Rhye - 1 Jan 2023</p>
                            <p class="recommend-blog-card-title">UX review presentations UX review presentationsUX review
                                presentationsUX review presentations</p>
                            <p class="recommend-blog-card-supporting-text">A grid system is a design tool used to arrange
                                content on a webpage. It is a series of vertical and horizontal lines that create a matrix
                                of intersecting points, which can be used to align and organize page elements. Grid systems
                                are used to create a consistent look and feel across a website, and can help to make the
                                layout more visually appealing and easier to navigate.A grid system is a design tool used to
                                arrange content on a webpage. It is a series of vertical and horizontal lines that create a
                                matrix of intersecting points, which can be used to align and organize page elements. Grid
                                systems are used to create a consistent look and feel across a website, and can help to make
                                the layout more visually appealing and easier to navigate.A grid system is a design tool
                                used to arrange content on a webpage. It is a series of vertical and horizontal lines that
                                create a matrix of intersecting points, which can be used to align and organize page
                                elements. Grid systems are used to create a consistent look and feel across a website, and
                                can help to make the layout more visually appealing and easier to navigate.</p>
                        </div>
                    </div>
                </div>
                <div class="all-blog-container">
                    <h4>TẤT CẢ TIN TỨC</h4>
                    <div class="row">
                        <div class="col normal-blog-card">
                            <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                            <div class="normal-blog-card-text-container">
                                <p class="normal-blog-card-author">Alec Whitten • 1 Jan 2023</p>
                                <p class="normal-blog-card-title">UX review presentations UX review presentations UX review
                                    presentations</p>
                                <p class="normal-blog-card-supporting">Like to know the secrets of transforming a 2-14 team
                                    into a 3x Super Bowl winning Dynasty?</p>
                            </div>
                        </div>
                        <div class="col normal-blog-card">
                            <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                            <div class="normal-blog-card-text-container">
                                <p class="normal-blog-card-author">Alec Whitten • 1 Jan 2023</p>
                                <p class="normal-blog-card-title">UX review presentations UX review presentations UX review
                                    presentations</p>
                                <p class="normal-blog-card-supporting">Like to know the secrets of transforming a 2-14 team
                                    into a 3x Super Bowl winning Dynasty?</p>
                            </div>
                        </div>
                        <div class="col normal-blog-card">
                            <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                            <div class="normal-blog-card-text-container">
                                <p class="normal-blog-card-author">Alec Whitten • 1 Jan 2023</p>
                                <p class="normal-blog-card-title">UX review presentations UX review presentations UX review
                                    presentations</p>
                                <p class="normal-blog-card-supporting">Like to know the secrets of transforming a 2-14 team
                                    into a 3x Super Bowl winning Dynasty?</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col normal-blog-card">
                            <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                            <div class="normal-blog-card-text-container">
                                <p class="normal-blog-card-author">Alec Whitten • 1 Jan 2023</p>
                                <p class="normal-blog-card-title">UX review presentations UX review presentations UX review
                                    presentations</p>
                                <p class="normal-blog-card-supporting">Like to know the secrets of transforming a 2-14 team
                                    into a 3x Super Bowl winning Dynasty?</p>
                            </div>
                        </div>
                        <div class="col normal-blog-card">
                            <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                            <div class="normal-blog-card-text-container">
                                <p class="normal-blog-card-author">Alec Whitten • 1 Jan 2023</p>
                                <p class="normal-blog-card-title">UX review presentations UX review presentations UX review
                                    presentations</p>
                                <p class="normal-blog-card-supporting">Like to know the secrets of transforming a 2-14 team
                                    into a 3x Super Bowl winning Dynasty?</p>
                            </div>
                        </div>
                        <div class="col normal-blog-card">
                            <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                            <div class="normal-blog-card-text-container">
                                <p class="normal-blog-card-author">Alec Whitten • 1 Jan 2023</p>
                                <p class="normal-blog-card-title">UX review presentations UX review presentations UX review
                                    presentations</p>
                                <p class="normal-blog-card-supporting">Like to know the secrets of transforming a 2-14 team
                                    into a 3x Super Bowl winning Dynasty?</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col normal-blog-card">
                            <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                            <div class="normal-blog-card-text-container">
                                <p class="normal-blog-card-author">Alec Whitten • 1 Jan 2023</p>
                                <p class="normal-blog-card-title">UX review presentations UX review presentations UX review
                                    presentations</p>
                                <p class="normal-blog-card-supporting">Like to know the secrets of transforming a 2-14 team
                                    into a 3x Super Bowl winning Dynasty?</p>
                            </div>
                        </div>
                        <div class="col normal-blog-card">
                            <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                            <div class="normal-blog-card-text-container">
                                <p class="normal-blog-card-author">Alec Whitten • 1 Jan 2023</p>
                                <p class="normal-blog-card-title">UX review presentations UX review presentations UX review
                                    presentations</p>
                                <p class="normal-blog-card-supporting">Like to know the secrets of transforming a 2-14 team
                                    into a 3x Super Bowl winning Dynasty?</p>
                            </div>
                        </div>
                        <div class="col normal-blog-card">
                            <img src="{{ asset('fontend/images/Blog/3-2-image.png') }}">
                            <div class="normal-blog-card-text-container">
                                <p class="normal-blog-card-author">Alec Whitten • 1 Jan 2023</p>
                                <p class="normal-blog-card-title">UX review presentations UX review presentations UX review
                                    presentations</p>
                                <p class="normal-blog-card-supporting">Like to know the secrets of transforming a 2-14 team
                                    into a 3x Super Bowl winning Dynasty?</p>
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
    </section>
    @include('layouts.include.client.banner-carousel')
    @include('layouts.include.client.notify-news')
@endsection
