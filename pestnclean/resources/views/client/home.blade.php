@extends('layouts.client')

@push('css')
    <link rel="stylesheet" href="{{ asset('fontend/css/components/home.css') }}">
@endpush

@section('content')
    {{-- <section class="container-fluid p-0">
        <!-- Carousel -->
        <div id="homeCarouselBanner" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#homeCarouselBanner" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#homeCarouselBanner" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#homeCarouselBanner" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#homeCarouselBanner" data-bs-slide-to="3"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner home-banner">
                <div class="carousel-item active">
                    <img src="{{ asset('fontend/images/Home/home-slider-banner2.png') }}" class="d-block w-100 img-home"
                        alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('fontend/images/Home/home-slider-banner1.png') }}" class="d-block w-100 img-home"
                        alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('fontend/images/Home/home-slider-banner3.png') }}" class="d-block w-100 img-home"
                        alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('fontend/images/Home/home-slider-banner4.png') }}" class="d-block w-100 img-home"
                        alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#homeCarouselBanner" data-bs-slide="prev">
                <div class="home-carousel-button-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                        fill="none">
                        <path d="M7.16663 16H25.8333" stroke="#868E96" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M7.16663 16L15.1666 24" stroke="#868E96" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M7.16663 16L15.1666 8" stroke="#868E96" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#homeCarouselBanner" data-bs-slide="next">
                <div class="home-carousel-button-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                        fill="none">
                        <path d="M7.45097 16H26.1176" stroke="#141718" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18.1176 24L26.1176 16" stroke="#141718" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18.1176 8L26.1176 16" stroke="#141718" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <span class="visually-hidden">Next</span>
                </div>
            </button>
        </div>
    </section>

    <!-- Services -->
    <section class="container-fluid p-0">
        <div class="services-container">
            <div class="texts-container">
                <h1>Giải pháp dành cho bạn</h1>
                <p>
                    PestnClean - Nâng tầm không gian sống của bạn! Chúng tôi cung cấp đa dạng dịch vụ chuyên nghiệp để tạo
                    ra môi trường sạch sẽ và thoải mái. Hãy đặt niềm tin vào chúng tôi để tận hưởng chất lượng sống và làm
                    việc tốt nhất mỗi ngày!
                </p>
            </div>
            <div class="row-container">
                <div class="column-selector">
                    <ul class="list-group w-100">
                        <li class="list-group-item d-flex align-items-center p-3 active" aria-current="true"><svg
                                xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                                fill="none">
                                <g clip-path="url(#clip0_952_2306)">
                                    <path
                                        d="M8.8983 11.075L10.3389 11.5556H10.5983L10.8883 10.1045C10.9283 9.90558 10.9883 9.68335 11.0666 9.44946L9.93941 7.19502L11.2616 3.22891C11.4166 2.76335 11.1655 2.26002 10.6994 2.10446L9.85663 1.82335C9.39108 1.6678 8.88719 1.91946 8.73219 2.38558L7.29385 6.70113C7.1449 7.14842 7.17946 7.63652 7.38997 8.05835L8.8983 11.075ZM32.3505 21.1878L29.42 16.7922C29.2576 16.5488 29.0377 16.3491 28.7798 16.211C28.5218 16.0729 28.2337 16.0006 27.9411 16.0006H23.6111L27.4439 14.6472C27.8189 14.5221 28.1417 14.2756 28.3611 13.9467L31.3389 9.47947C31.6111 9.07113 31.5005 8.51891 31.0922 8.24669L30.3527 7.75335C29.9444 7.48113 29.3922 7.59169 29.12 8.00002L26.3111 12.2128L22.95 13.3334H20.9444L20.3683 10.4528C20.2466 9.84335 19.4033 7.11113 16.5 7.11113C13.5966 7.11113 12.7533 9.84335 12.6316 10.4528L12.0555 13.3334H10.05L6.68941 12.2128L3.87997 8.00002C3.60774 7.59169 3.05608 7.48113 2.64719 7.75335L1.90774 8.24669C1.49941 8.51891 1.38885 9.07058 1.66108 9.47947L4.63885 13.9467C4.85827 14.2756 5.18099 14.5221 5.55608 14.6472L9.38885 16H5.05885C4.76616 16.0001 4.478 16.0724 4.21993 16.2105C3.96186 16.3486 3.74185 16.5482 3.57941 16.7917L0.64941 21.1878C0.377188 21.5961 0.487188 22.1484 0.896077 22.4206L1.63552 22.9139C2.04385 23.1861 2.59608 23.0756 2.8683 22.6672L5.53497 18.6672H8.14941L4.76997 24.0745C4.59342 24.357 4.49986 24.6835 4.49997 25.0167V29.3334C4.49997 29.8245 4.89774 30.2222 5.38885 30.2222H6.27774C6.76885 30.2222 7.16663 29.8245 7.16663 29.3334V25.2717L11.2822 18.6867C11.2261 19.4672 11.1666 20.2484 11.1666 21.0317C11.1666 23.98 13.4311 26.6667 16.5 26.6667C19.5689 26.6667 21.8333 23.98 21.8333 21.0317C21.8333 20.2484 21.7733 19.4672 21.7177 18.6867L25.8333 25.2717V29.3334C25.8333 29.8245 26.2311 30.2222 26.7222 30.2222H27.6111C28.1022 30.2222 28.5 29.8245 28.5 29.3334V25.0161C28.5 24.6828 28.4061 24.3561 28.23 24.0739L24.8505 18.6667H27.465L30.1316 22.6667C30.4039 23.075 30.9561 23.1856 31.3644 22.9134L32.1039 22.42C32.5127 22.1478 32.6227 21.5961 32.3505 21.1878ZM23.0605 7.19502L21.9333 9.44946C22.0116 9.68335 22.0716 9.90558 22.1116 10.1045L22.4016 11.5556H22.6611L24.1016 11.075L25.61 8.05835C25.7143 7.84952 25.7765 7.62218 25.793 7.3893C25.8095 7.15643 25.78 6.92259 25.7061 6.70113L24.2677 2.38558C24.1127 1.92002 23.6089 1.6678 23.1433 1.82335L22.3005 2.10446C21.835 2.26002 21.5833 2.76335 21.7383 3.22891L23.0605 7.19502Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2306">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>KIỂM SOÁT CÔN TRÙNG</li>
                        <li class="list-group-item d-flex align-items-center p-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="33" height="32" viewBox="0 0 33 32" fill="none">
                                <g clip-path="url(#clip0_952_2311)">
                                    <path
                                        d="M32.009 14.77C28.8679 11.4745 26.569 7.4567 25.3113 3.06392L25.3101 3.06059C25.0479 2.14503 24.1157 1.6017 23.199 1.83059L23.1951 1.8317C18.7991 2.92892 14.2007 2.92892 9.80458 1.8317L9.80069 1.83059C8.88403 1.6017 7.95181 2.14503 7.68958 3.06059L7.68847 3.06392C6.43125 7.4567 4.13236 11.4745 0.99125 14.77C0.33625 15.4573 0.33625 16.5434 0.99125 17.2306C4.13236 20.5261 6.43125 24.5439 7.68903 28.9367L7.69014 28.94C7.95236 29.8556 8.88458 30.3989 9.80125 30.17L9.80514 30.1689C14.2012 29.0717 18.7996 29.0717 23.1957 30.1689L23.1996 30.17C24.1163 30.3989 25.0485 29.8556 25.3107 28.94L25.3124 28.9334C26.5696 24.5423 28.8674 20.5267 32.0068 17.2323L32.009 17.23C32.664 16.5434 32.664 15.4567 32.009 14.77ZM20.8079 5.87281L19.5012 8.13614C17.5217 8.54836 15.4785 8.54836 13.499 8.13614L12.1924 5.87281C15.0505 6.27003 17.9498 6.27003 20.8079 5.87281ZM16.5001 13.3339L15.1985 11.0795C16.065 11.1445 16.9352 11.1445 17.8018 11.0795L16.5001 13.3339ZM17.3018 14.6667H17.2696L17.2535 14.6389L17.3018 14.6667ZM16.5001 18.6661L17.8024 20.9211C17.369 20.8889 16.9346 20.8661 16.5001 20.8661C16.0657 20.8661 15.6318 20.8889 15.1979 20.9211L16.5001 18.6661ZM12.889 12.4117L14.1907 14.6667H11.5868C12.0763 13.9484 12.5118 13.1945 12.889 12.4117ZM9.92292 24.7256C8.8465 22.083 7.42045 19.5968 5.68292 17.3334H8.18903C9.53458 18.8395 10.559 20.6134 11.1896 22.5311L9.92292 24.7256ZM8.18903 14.6667H5.68292C7.42045 12.4033 8.8465 9.91706 9.92292 7.27448L11.1901 9.46892C10.5574 11.3893 9.53582 13.1586 8.18903 14.6667ZM14.1907 17.3334L12.889 19.5884C12.5116 18.8054 12.0763 18.0516 11.5868 17.3334H14.1907ZM16.5001 25.7934C15.0585 25.7934 13.6213 25.9284 12.1924 26.1273L13.499 23.8645C15.4757 23.4523 17.524 23.4523 19.5012 23.8645L20.8079 26.1273C19.379 25.9284 17.9418 25.7934 16.5001 25.7934ZM20.1112 19.5884L18.8096 17.3334H21.4135C20.924 18.0516 20.4887 18.8054 20.1112 19.5884ZM18.809 14.6667L20.1112 12.4117C20.4887 13.1947 20.924 13.9484 21.4135 14.6667H18.809ZM23.0774 24.7256L21.8101 22.5311C22.4407 20.6134 23.4657 18.8395 24.8113 17.3334H27.3174C25.5798 19.5968 24.1538 22.083 23.0774 24.7256ZM24.8113 14.6667C23.4645 13.1586 22.4428 11.3893 21.8101 9.46892L23.0774 7.27448C24.1538 9.91706 25.5798 12.4033 27.3174 14.6667H24.8113Z"
                                        fill="#005CA9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2311">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>KIỂM SOÁT MỐI</li>
                        <li class="list-group-item d-flex align-items-center p-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="33" height="32" viewBox="0 0 33 32" fill="none">
                                <g clip-path="url(#clip0_952_2316)">
                                    <path
                                        d="M19.2269 10H9.77314C8.7749 9.99996 7.81271 10.3732 7.07559 11.0463C6.33848 11.7195 5.8797 12.644 5.78939 13.6381L4.51689 27.6381C4.46661 28.1916 4.53222 28.7495 4.70953 29.2762C4.88685 29.8029 5.17197 30.2869 5.54673 30.6973C5.92149 31.1077 6.37765 31.4355 6.88613 31.6598C7.39462 31.8841 7.94426 31.9999 8.50002 32H20.5C21.0558 32 21.6055 31.8842 22.1141 31.66C22.6227 31.4357 23.0789 31.1079 23.4537 30.6975C23.8285 30.2871 24.1137 29.8031 24.2911 29.2763C24.4684 28.7496 24.5341 28.1917 24.4838 27.6381L23.2113 13.6381C23.121 12.6439 22.6621 11.7193 21.9248 11.0461C21.1876 10.373 20.2252 9.99981 19.2269 10ZM14.5 26C12.43 26 10.75 24.3544 10.75 22.3281C10.75 20.7656 12.9813 17.6112 14 16.2488C14.0583 16.1712 14.1339 16.1083 14.2207 16.065C14.3076 16.0217 14.4033 15.9993 14.5003 15.9994C14.5974 15.9995 14.693 16.0222 14.7798 16.0657C14.8665 16.1092 14.9419 16.1723 15 16.25C16.0206 17.6125 18.25 20.7669 18.25 22.3294C18.25 24.3544 16.57 26 14.5 26ZM28.2069 5.87875L25.5 3.17125C24.7499 2.4213 23.7326 1.99999 22.6719 2H18.5C18.5 1.46957 18.2893 0.960859 17.9142 0.585786C17.5392 0.210714 17.0305 0 16.5 0L12.5 0C11.9696 0 11.4609 0.210714 11.0858 0.585786C10.7107 0.960859 10.5 1.46957 10.5 2V8H18.5V6H22.6719L25.3788 8.70687C25.4716 8.79976 25.5819 8.87344 25.7032 8.92371C25.8246 8.97398 25.9546 8.99985 26.086 8.99985C26.2173 8.99985 26.3474 8.97398 26.4687 8.92371C26.59 8.87344 26.7003 8.79976 26.7931 8.70687L28.2069 7.29313C28.2998 7.20026 28.3735 7.09001 28.4237 6.96867C28.474 6.84733 28.4999 6.71728 28.4999 6.58594C28.4999 6.4546 28.474 6.32454 28.4237 6.2032C28.3735 6.08186 28.2998 5.97161 28.2069 5.87875Z"
                                        fill="#005CA9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2316">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>VỆ SINH CÔNG NGHIỆP</li>
                        <li class="list-group-item d-flex align-items-center p-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="33" height="32" viewBox="0 0 33 32" fill="none">
                                <g clip-path="url(#clip0_952_2321)">
                                    <path
                                        d="M4.05576 19.0779V29.3335C4.05576 29.8224 4.45576 30.2224 4.94465 30.2224H28.0558C28.5447 30.2224 28.9447 29.8224 28.9447 29.3335V19.0779C28.5724 18.7724 26.4613 16.9501 16.5002 8.1668C6.49465 16.9946 4.41132 18.7835 4.05576 19.0779ZM21.5058 17.6168C23.0391 18.8946 23.1224 21.1835 21.7558 22.5668L17.0502 27.3224C16.7446 27.6279 16.2558 27.6279 15.9502 27.3224L11.2446 22.5668C9.87798 21.1835 9.95576 18.8946 11.4835 17.6168C12.8169 16.5057 14.8002 16.7057 16.0169 17.939L16.4946 18.4224L16.9724 17.939C18.1947 16.7057 20.178 16.5057 21.5058 17.6168ZM4.05576 19.0779V19.0612C4.05576 19.0612 3.90576 19.2001 4.05576 19.0779ZM32.2058 14.9057L28.9447 12.0279V4.44457C28.9447 3.95569 28.5447 3.55569 28.0558 3.55569H24.5002C24.0113 3.55569 23.6113 3.95569 23.6113 4.44457V7.3168L17.9835 2.35013C17.1335 1.58902 15.8613 1.58902 15.0113 2.35013L0.789094 14.9057C0.422427 15.2335 0.39465 15.7946 0.722427 16.1612L1.91132 17.4835C2.23909 17.8501 2.80021 17.8779 3.16687 17.5501L15.9113 6.3168C16.2447 6.02235 16.7502 6.02235 17.0891 6.3168L29.828 17.5557C30.1947 17.8835 30.7558 17.8557 31.0835 17.489L32.2724 16.1668C32.6002 15.7946 32.5724 15.2335 32.2058 14.9057ZM28.9447 19.0612V19.0779C29.1058 19.2057 28.9447 19.0612 28.9447 19.0612Z"
                                        fill="#005CA9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2321">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>VỆ SINH NHÀ Ở</li>
                        <li class="list-group-item d-flex align-items-center p-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="33" height="32" viewBox="0 0 33 32" fill="none">
                                <g clip-path="url(#clip0_952_2326)">
                                    <path
                                        d="M13.325 14.04L17.66 19.5C17.66 19.5 16.83 24.62 13.83 27.005C10.835 29.39 0.5 28.71 0.5 28.71C0.5 28.71 0.69 27.555 1.05 25.94L5.78 20.33C5.98 20.095 5.735 19.75 5.45 19.855L2.43 20.96C3.15 18.875 4.065 16.96 5.16 16.085C8.155 13.695 13.325 14.04 13.325 14.04ZM25.225 20.79C23.025 20.79 21.235 22.58 21.235 24.785C21.235 26.99 23.02 28.78 25.225 28.78C27.43 28.78 29.215 26.99 29.215 24.785C29.215 22.575 27.425 20.79 25.225 20.79ZM32.325 4.75005L31.335 3.50005C31.06 3.15505 30.56 3.10005 30.215 3.37005L18.59 12.265L16.885 10.115C16.63 9.79505 16.13 9.85505 15.955 10.225L14.69 12.955L19.025 18.415L21.965 17.795C22.365 17.71 22.535 17.235 22.28 16.915L20.575 14.77L32.2 5.87505C32.545 5.60005 32.6 5.09505 32.325 4.75005Z"
                                        fill="#005CA9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2326">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>GIẢI PHÁP VỆ SINH</li>
                        <li class="list-group-item d-flex align-items-center p-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="33" height="32" viewBox="0 0 33 32" fill="none">
                                <g clip-path="url(#clip0_952_2331)">
                                    <path
                                        d="M14.5 2C14.5 0.895625 13.6044 0 12.5 0H8.5C7.39563 0 6.5 0.895625 6.5 2V8H14.5V2ZM30.5 8C29.3956 8 28.5 8.89563 28.5 10C28.5 11.1044 29.3956 12 30.5 12C31.6044 12 32.5 11.1044 32.5 10C32.5 8.89563 31.6044 8 30.5 8ZM14.5 10H6.5C3.18625 10 0.5 12.6862 0.5 16V30C0.5 31.1044 1.39562 32 2.5 32H18.5C19.6044 32 20.5 31.1044 20.5 30V16C20.5 12.6862 17.8137 10 14.5 10ZM10.5 26C7.73875 26 5.5 23.7612 5.5 21C5.5 18.2388 7.73875 16 10.5 16C13.2612 16 15.5 18.2388 15.5 21C15.5 23.7612 13.2612 26 10.5 26ZM30.5 6C31.6044 6 32.5 5.10437 32.5 4C32.5 2.89563 31.6044 2 30.5 2C29.3956 2 28.5 2.89563 28.5 4C28.5 5.10437 29.3956 6 30.5 6ZM24.5 8C23.3956 8 22.5 8.89563 22.5 10C22.5 11.1044 23.3956 12 24.5 12C25.6044 12 26.5 11.1044 26.5 10C26.5 8.89563 25.6044 8 24.5 8ZM18.5 2C17.3956 2 16.5 2.89563 16.5 4C16.5 5.10437 17.3956 6 18.5 6C19.6044 6 20.5 5.10437 20.5 4C20.5 2.89563 19.6044 2 18.5 2ZM24.5 2C23.3956 2 22.5 2.89563 22.5 4C22.5 5.10437 23.3956 6 24.5 6C25.6044 6 26.5 5.10437 26.5 4C26.5 2.89563 25.6044 2 24.5 2ZM30.5 14C29.3956 14 28.5 14.8956 28.5 16C28.5 17.1044 29.3956 18 30.5 18C31.6044 18 32.5 17.1044 32.5 16C32.5 14.8956 31.6044 14 30.5 14Z"
                                        fill="#005CA9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2331">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>GIẢI PHÁP MÙI HƯƠNG</li>
                        <li class="list-group-item d-flex align-items-center p-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="33" height="32" viewBox="0 0 33 32" fill="none">
                                <g clip-path="url(#clip0_952_2336)">
                                    <path
                                        d="M6.9 28.8002H26.1V20.8002H6.9055L6.9 28.8002ZM14.1 24.0002H18.9C19.1122 24.0002 19.3157 24.0845 19.4657 24.2345C19.6157 24.3845 19.7 24.588 19.7 24.8002C19.7 25.0124 19.6157 25.2159 19.4657 25.3659C19.3157 25.5159 19.1122 25.6002 18.9 25.6002H14.1C13.8878 25.6002 13.6843 25.5159 13.5343 25.3659C13.3843 25.2159 13.3 25.0124 13.3 24.8002C13.3 24.588 13.3843 24.3845 13.5343 24.2345C13.6843 24.0845 13.8878 24.0002 14.1 24.0002ZM6.9 19.2002H26.0735L26.1 14.4002H6.9V19.2002ZM31.025 9.0502L17.4205 3.3837C17.1258 3.27243 16.8148 3.21043 16.5 3.2002C16.1837 3.20994 15.8711 3.27194 15.575 3.3837L1.975 9.0502C1.53863 9.23324 1.16595 9.54092 0.903582 9.93473C0.641219 10.3285 0.500835 10.791 0.5 11.2642L0.5 28.0002C0.5 28.2124 0.584285 28.4159 0.734315 28.5659C0.884344 28.7159 1.08783 28.8002 1.3 28.8002H4.5C4.71217 28.8002 4.91566 28.7159 5.06569 28.5659C5.21571 28.4159 5.3 28.2124 5.3 28.0002V14.4002C5.3 13.5207 6.0295 12.8002 6.9295 12.8002H26.0705C26.9705 12.8002 27.7 13.5207 27.7 14.4002V28.0002C27.7 28.2124 27.7843 28.4159 27.9343 28.5659C28.0843 28.7159 28.2878 28.8002 28.5 28.8002H31.7C31.9122 28.8002 32.1157 28.7159 32.2657 28.5659C32.4157 28.4159 32.5 28.2124 32.5 28.0002V11.2642C32.4992 10.791 32.3588 10.3285 32.0964 9.93473C31.8341 9.54092 31.4614 9.23324 31.025 9.0502Z"
                                        fill="#005CA9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2336">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>THI CÔNG CẢNH QUAN</li>
                        <li class="list-group-item d-flex align-items-center p-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="33" height="32" viewBox="0 0 33 32" fill="none">
                                <g clip-path="url(#clip0_952_2341)">
                                    <path
                                        d="M31.5 14.6875C30.8331 13.6875 29.9375 12.9581 28.8125 12.5H28.875C29.4169 11.5 29.6144 10.4688 29.4688 9.40625C29.3231 8.34375 28.8956 7.42688 28.1875 6.65625C27.4794 5.88562 26.6144 5.375 25.5938 5.125C24.5731 4.875 23.5419 4.97937 22.5 5.4375C22.3331 3.89563 21.6769 2.60437 20.5312 1.5625C19.3856 0.520625 18.0419 0 16.5 0C14.9581 0 13.6144 0.520625 12.4688 1.5625C11.3231 2.60437 10.6669 3.89563 10.5 5.4375C9.45813 4.97937 8.42688 4.875 7.40625 5.125C6.38562 5.375 5.52063 5.88562 4.8125 6.65625C4.10437 7.42688 3.67688 8.34375 3.53125 9.40625C3.38562 10.4688 3.60437 11.5 4.1875 12.5C3.0625 12.9581 2.16688 13.6875 1.5 14.6875C0.833125 15.6875 0.5 16.7919 0.5 18C0.5 19.6669 1.08312 21.0831 2.25 22.25C3.41687 23.4169 4.83313 24 6.5 24H14.5V27.5281L12.6069 30.5531C12.2744 31.2181 12.7581 32.0006 13.5013 32.0006H19.4988C20.2419 32.0006 20.7256 31.2181 20.3931 30.5531L18.5 27.5281V24H26.5C28.1669 24 29.5831 23.4169 30.75 22.25C31.9169 21.0831 32.5 19.6669 32.5 18C32.5 16.7919 32.1669 15.6875 31.5 14.6875Z"
                                        fill="#005CA9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2341">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>THI CÔNG CÂY CẢNH</li>
                    </ul>
                </div>
                <div class="section-images">
                    <div class="text-container-with-bg-image">
                        <div class="text-container">
                            <h5>
                                KIỂM SOÁT CÔN TRÙNG
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.
                            </p>
                            <a href="#">Xem thêm</a>
                        </div>
                    </div>
                    <div class="text-container-with-bg-image-blur">
                        <div class="text-container">
                            <h5>
                                KIỂM SOÁT MỐI
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <a href="#">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reasons -->
    <section class="container-fluid p-0">
        <div class="reasons-container">
            <h1>Vì sao chọn chúng tôi</h1>
            <div class="reasons-number-title-container">
                <div class="number-and-year-group">
                    <h1>5+</h1>
                    <p>Năm hoạt động</p>
                </div>
                <div class="number-and-year-group">
                    <h1>30+</h1>
                    <p>Năm hoạt động</p>
                </div>
                <div class="number-and-year-group">
                    <h1>199+</h1>
                    <p>Năm hoạt động</p>
                </div>
            </div>
            <div class="reasons-text-container">
                <p> <span>Với nhiều năm kinh nghiệm trong ngành, PestnClean tự hào là đơn vị hàng đầu trong lĩnh vực kiểm
                        soát côn trùng, dịch vụ vệ sinh, giải pháp vệ sinh và thi công cảnh quan.</span> Chúng tôi không
                    ngừng nỗ lực nâng cao chất lượng dịch vụ, áp dụng những công nghệ tiên tiến và an toàn nhất để đảm bảo
                    môi trường sống và làm việc của bạn luôn sạch sẽ và không có côn trùng gây hại.Đội ngũ chuyên gia của
                    chúng tôi đã tham gia nhiều dự án lớn nhỏ, từ những công trình dân dụng cho đến các khu công nghiệp, nhà
                    xưởng, văn phòng và khách sạn cao cấp. Chúng tôi hiểu rằng mỗi dự án đều có những yêu cầu riêng biệt và
                    luôn sẵn sàng tư vấn, thiết kế giải pháp phù hợp nhất để đáp ứng nhu cầu cụ thể của từng khách hàng.</p>
            </div>
            <div class="reasons-image-and-text-container">
                <div class="image-and-text-group">
                    <img src="{{ asset('fontend/images/Home/reason-image.png') }}" width="250" height="250">
                    <h4>Hỗ trợ 24/7</h4>
                    <p>
                        Hotline tư vấn và chăm sóc khách hàng của chúng tôi hoạt động 24/7, sẵn sàng hỗ trợ bạn bất cứ lúc
                        nào. Chúng tôi luôn sẵn sàng mang đến dịch vụ tận tình và nhanh chóng để đáp ứng mọi nhu cầu của
                        bạn.
                    </p>
                </div>
                <div class="image-and-text-group">
                    <img src="{{ asset('fontend/images/Home/reason-image2.png') }}" width="250" height="250">
                    <h4>ĐỘI NGŨ GIÀU
                        KINH NGHIỆM</h4>
                    <p>
                        Đội ngũ của chúng tôi bao gồm các chuyên gia với nhiều năm kinh nghiệm trong lĩnh vực của mình, đảm
                        bảo sự chuyên nghiệp và tinh thần trách nhiệm cao, cung cấp các giải pháp tối ưu nhất trong mỗi dự
                        án.
                    </p>
                </div>
                <div class="image-and-text-group">
                    <img src="{{ asset('fontend/images/Home/reason-image3.png') }}" width="250" height="250">
                    <h4>BÁO CÁO PHÂN TÍCH CHUẨN BRC, HACCP</h4>
                    <p>
                        Chúng tôi luôn tuân thủ các tiêu chuẩn chất lượng quốc tế như HRC, HACCP và ISO, đảm bảo rằng mọi
                        quy trình và hoạt động đều đáp ứng yêu cầu nghiêm ngặt về an toàn và chất lượng dịch vụ, sản phẩm.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Working picture -->
    <section class="container-fluid p-0">
        <div class="working-container">
            <h1>HÌNH ẢNH LÀM VIỆC</h1>
            <div class="tab-container">
                <ul class="nav nav-tabs nav-fill" style="border-bottom: none">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Tất cả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kiểm soát côn trùng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vệ sinh công nghiệp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giải pháp mùi hương</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thi công cảnh quan</a>
                    </li>
                </ul>
            </div>
            <div class="images-container">
                <div class="home-images-row-container">
                    <img class="img-thumbnail" src="{{ asset('fontend/images/Home/working-image.png') }}">
                    <img class="img-thumbnail" src="{{ asset('fontend/images/Home/working-image2.png') }}">
                    <img class="img-thumbnail" src="{{ asset('fontend/images/Home/working-image3.png') }}">
                    <img class="img-thumbnail" src="{{ asset('fontend/images/Home/working-image4.png') }}">
                </div>
                <div class="home-images-row-container">
                    <img class="img-thumbnail" src="{{ asset('fontend/images/Home/working-image5.png') }}">
                    <img class="img-thumbnail" src="{{ asset('fontend/images/Home/working-image6.png') }}">
                    <img class="img-thumbnail" src="{{ asset('fontend/images/Home/working-image7.png') }}">
                    <img class="img-thumbnail" src="{{ asset('fontend/images/Home/working-image8.png') }}">
                </div>
            </div>
        </div>
    </section>

    <!-- Prices -->
    <section class="container-fluid p-0">
        <div class="price-container">
            <h1>GIẢI THƯỞNG VÀ CHỨNG NHẬN</h1>
            <div class="list-group img-list">
                <a href="#" class="list-group-item" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <img src="{{ asset('fontend/images/Home/certificate.png') }}">
                    </div>
                </a>
                <a href="#" class="list-group-item" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <img src="{{ asset('fontend/images/Home/certificate.png') }}">
                    </div>
                </a>
                <a href="#" class="list-group-item" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <img src="{{ asset('fontend/images/Home/certificate.png') }}">
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Other Blog -->
    <section class="container-fluid p-0">
        <div class="other-blog-container">
            <div class="other-blog-title-container">
                <h1>Bài viết tham khảo</h1>
                <a>Xem thêm</a>
            </div>
            <div id="carouselListCard" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner home-other-blogs">
                    <div class="carousel-item padding-left-right-200 active">
                        <div class="card-list-container">
                            <div class="blog-card-item">
                                <img src="{{ asset('fontend/images/Home/blog-image.png') }}" alt="...">
                                <div class="card-item-content">
                                    <h5>Bảng giá vệ sinh công nghiệp PestnClean</h5>
                                    <a>Xem thêm</a>
                                </div>
                            </div>
                            <div class="blog-card-item">
                                <img src="{{ asset('fontend/images/Home/blog-image2.png') }}" alt="...">
                                <div class="card-item-content">
                                    <h5>6 Cách khử mùi hôi nhà vệ sinh mới nhất 2024</h5>
                                    <a>Xem thêm</a>
                                </div>
                            </div>
                            <div class="blog-card-item">
                                <img src="{{ asset('fontend/images/Home/blog-image3.png') }}" alt="...">
                                <div class="card-item-content">
                                    <h5>3 cách tạo mùi thơm cho xe ô tô bạn nên biết</h5>
                                    <a>Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselListCard"
                    data-bs-slide="prev">
                    <div class="home-carousel-button-container"><svg xmlns="http://www.w3.org/2000/svg" width="33"
                            height="32" viewBox="0 0 33 32" fill="none">
                            <path d="M7.16663 16H25.8333" stroke="#868E96" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.16663 16L15.1666 24" stroke="#868E96" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.16663 16L15.1666 8" stroke="#868E96" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg></div>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselListCard"
                    data-bs-slide="next">
                    <div class="home-carousel-button-container"><svg xmlns="http://www.w3.org/2000/svg" width="33"
                            height="32" viewBox="0 0 33 32" fill="none">
                            <path d="M7.45097 16H26.1176" stroke="#141718" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M18.1176 24L26.1176 16" stroke="#141718" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M18.1176 8L26.1176 16" stroke="#141718" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg></div>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section> --}}

    <!-- Carousel -->
    <section class="container-fluid p-0">
        <div id="homeCarouselBanner" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#homeCarouselBanner" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#homeCarouselBanner" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#homeCarouselBanner" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#homeCarouselBanner" data-bs-slide-to="3"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner home-banner">
                <div class="carousel-item active">
                    <img src="{{ asset('fontend/images/Home/home-slider-banner2.png') }}"
                        class="d-block w-100 img-home" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('fontend/images/Home/home-slider-banner1.png') }}"
                        class="d-block w-100 img-home" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('fontend/images/Home/home-slider-banner3.png') }}"
                        class="d-block w-100 img-home" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('fontend/images/Home/home-slider-banner4.png') }}"
                        class="d-block w-100 img-home" alt="">
                </div>
            </div>
            <div class="home-icons-contact-container">
                <button class="home-icon-contact-container">
                    <img src="{{ asset('fontend/images/Home/phone-icon.svg') }}">
                </button>
                <button class="home-icon-contact-container">
                    <img src="{{ asset('fontend/images/Home/zalo-icon.svg') }}">
                </button>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#homeCarouselBanner" data-bs-slide="prev">
                <div class="home-carousel-button-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                        fill="none">
                        <path d="M7.16663 16H25.8333" stroke="#868E96" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M7.16663 16L15.1666 24" stroke="#868E96" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M7.16663 16L15.1666 8" stroke="#868E96" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#homeCarouselBanner" data-bs-slide="next">
                <div class="home-carousel-button-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                        fill="none">
                        <path d="M7.45097 16H26.1176" stroke="#141718" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18.1176 24L26.1176 16" stroke="#141718" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18.1176 8L26.1176 16" stroke="#141718" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <span class="visually-hidden">Next</span>
                </div>
            </button>
        </div>
    </section>

    <!-- Services -->
    <section class="container-fluid p-0">
        <div class="services-container">
            <div class="texts-container">
                <h1>Giải pháp dành cho bạn</h1>
                <p>
                    PestnClean - Nâng tầm không gian sống của bạn! Chúng tôi cung cấp đa dạng dịch vụ chuyên nghiệp để tạo
                    ra môi trường sạch sẽ và thoải mái. Hãy đặt niềm tin vào chúng tôi để tận hưởng chất lượng sống và làm
                    việc tốt nhất mỗi ngày!
                </p>
            </div>
            <div class="row-container">
                <div class="column-selector">
                    <ul class="list-group w-100">
                        <li class="list-group-item d-flex align-items-center p-3 active" aria-current="true"><svg
                                xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                                fill="none">
                                <g clip-path="url(#clip0_952_2306)">
                                    <path
                                        d="M8.8983 11.075L10.3389 11.5556H10.5983L10.8883 10.1045C10.9283 9.90558 10.9883 9.68335 11.0666 9.44946L9.93941 7.19502L11.2616 3.22891C11.4166 2.76335 11.1655 2.26002 10.6994 2.10446L9.85663 1.82335C9.39108 1.6678 8.88719 1.91946 8.73219 2.38558L7.29385 6.70113C7.1449 7.14842 7.17946 7.63652 7.38997 8.05835L8.8983 11.075ZM32.3505 21.1878L29.42 16.7922C29.2576 16.5488 29.0377 16.3491 28.7798 16.211C28.5218 16.0729 28.2337 16.0006 27.9411 16.0006H23.6111L27.4439 14.6472C27.8189 14.5221 28.1417 14.2756 28.3611 13.9467L31.3389 9.47947C31.6111 9.07113 31.5005 8.51891 31.0922 8.24669L30.3527 7.75335C29.9444 7.48113 29.3922 7.59169 29.12 8.00002L26.3111 12.2128L22.95 13.3334H20.9444L20.3683 10.4528C20.2466 9.84335 19.4033 7.11113 16.5 7.11113C13.5966 7.11113 12.7533 9.84335 12.6316 10.4528L12.0555 13.3334H10.05L6.68941 12.2128L3.87997 8.00002C3.60774 7.59169 3.05608 7.48113 2.64719 7.75335L1.90774 8.24669C1.49941 8.51891 1.38885 9.07058 1.66108 9.47947L4.63885 13.9467C4.85827 14.2756 5.18099 14.5221 5.55608 14.6472L9.38885 16H5.05885C4.76616 16.0001 4.478 16.0724 4.21993 16.2105C3.96186 16.3486 3.74185 16.5482 3.57941 16.7917L0.64941 21.1878C0.377188 21.5961 0.487188 22.1484 0.896077 22.4206L1.63552 22.9139C2.04385 23.1861 2.59608 23.0756 2.8683 22.6672L5.53497 18.6672H8.14941L4.76997 24.0745C4.59342 24.357 4.49986 24.6835 4.49997 25.0167V29.3334C4.49997 29.8245 4.89774 30.2222 5.38885 30.2222H6.27774C6.76885 30.2222 7.16663 29.8245 7.16663 29.3334V25.2717L11.2822 18.6867C11.2261 19.4672 11.1666 20.2484 11.1666 21.0317C11.1666 23.98 13.4311 26.6667 16.5 26.6667C19.5689 26.6667 21.8333 23.98 21.8333 21.0317C21.8333 20.2484 21.7733 19.4672 21.7177 18.6867L25.8333 25.2717V29.3334C25.8333 29.8245 26.2311 30.2222 26.7222 30.2222H27.6111C28.1022 30.2222 28.5 29.8245 28.5 29.3334V25.0161C28.5 24.6828 28.4061 24.3561 28.23 24.0739L24.8505 18.6667H27.465L30.1316 22.6667C30.4039 23.075 30.9561 23.1856 31.3644 22.9134L32.1039 22.42C32.5127 22.1478 32.6227 21.5961 32.3505 21.1878ZM23.0605 7.19502L21.9333 9.44946C22.0116 9.68335 22.0716 9.90558 22.1116 10.1045L22.4016 11.5556H22.6611L24.1016 11.075L25.61 8.05835C25.7143 7.84952 25.7765 7.62218 25.793 7.3893C25.8095 7.15643 25.78 6.92259 25.7061 6.70113L24.2677 2.38558C24.1127 1.92002 23.6089 1.6678 23.1433 1.82335L22.3005 2.10446C21.835 2.26002 21.5833 2.76335 21.7383 3.22891L23.0605 7.19502Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2306">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>KIỂM SOÁT CÔN TRÙNG</li>
                        <li class="list-group-item d-flex align-items-center p-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="33" height="32" viewBox="0 0 33 32" fill="none">
                                <g clip-path="url(#clip0_952_2311)">
                                    <path
                                        d="M32.009 14.77C28.8679 11.4745 26.569 7.4567 25.3113 3.06392L25.3101 3.06059C25.0479 2.14503 24.1157 1.6017 23.199 1.83059L23.1951 1.8317C18.7991 2.92892 14.2007 2.92892 9.80458 1.8317L9.80069 1.83059C8.88403 1.6017 7.95181 2.14503 7.68958 3.06059L7.68847 3.06392C6.43125 7.4567 4.13236 11.4745 0.99125 14.77C0.33625 15.4573 0.33625 16.5434 0.99125 17.2306C4.13236 20.5261 6.43125 24.5439 7.68903 28.9367L7.69014 28.94C7.95236 29.8556 8.88458 30.3989 9.80125 30.17L9.80514 30.1689C14.2012 29.0717 18.7996 29.0717 23.1957 30.1689L23.1996 30.17C24.1163 30.3989 25.0485 29.8556 25.3107 28.94L25.3124 28.9334C26.5696 24.5423 28.8674 20.5267 32.0068 17.2323L32.009 17.23C32.664 16.5434 32.664 15.4567 32.009 14.77ZM20.8079 5.87281L19.5012 8.13614C17.5217 8.54836 15.4785 8.54836 13.499 8.13614L12.1924 5.87281C15.0505 6.27003 17.9498 6.27003 20.8079 5.87281ZM16.5001 13.3339L15.1985 11.0795C16.065 11.1445 16.9352 11.1445 17.8018 11.0795L16.5001 13.3339ZM17.3018 14.6667H17.2696L17.2535 14.6389L17.3018 14.6667ZM16.5001 18.6661L17.8024 20.9211C17.369 20.8889 16.9346 20.8661 16.5001 20.8661C16.0657 20.8661 15.6318 20.8889 15.1979 20.9211L16.5001 18.6661ZM12.889 12.4117L14.1907 14.6667H11.5868C12.0763 13.9484 12.5118 13.1945 12.889 12.4117ZM9.92292 24.7256C8.8465 22.083 7.42045 19.5968 5.68292 17.3334H8.18903C9.53458 18.8395 10.559 20.6134 11.1896 22.5311L9.92292 24.7256ZM8.18903 14.6667H5.68292C7.42045 12.4033 8.8465 9.91706 9.92292 7.27448L11.1901 9.46892C10.5574 11.3893 9.53582 13.1586 8.18903 14.6667ZM14.1907 17.3334L12.889 19.5884C12.5116 18.8054 12.0763 18.0516 11.5868 17.3334H14.1907ZM16.5001 25.7934C15.0585 25.7934 13.6213 25.9284 12.1924 26.1273L13.499 23.8645C15.4757 23.4523 17.524 23.4523 19.5012 23.8645L20.8079 26.1273C19.379 25.9284 17.9418 25.7934 16.5001 25.7934ZM20.1112 19.5884L18.8096 17.3334H21.4135C20.924 18.0516 20.4887 18.8054 20.1112 19.5884ZM18.809 14.6667L20.1112 12.4117C20.4887 13.1947 20.924 13.9484 21.4135 14.6667H18.809ZM23.0774 24.7256L21.8101 22.5311C22.4407 20.6134 23.4657 18.8395 24.8113 17.3334H27.3174C25.5798 19.5968 24.1538 22.083 23.0774 24.7256ZM24.8113 14.6667C23.4645 13.1586 22.4428 11.3893 21.8101 9.46892L23.0774 7.27448C24.1538 9.91706 25.5798 12.4033 27.3174 14.6667H24.8113Z"
                                        fill="#005CA9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2311">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>KIỂM SOÁT MỐI</li>
                        <li class="list-group-item d-flex align-items-center p-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="33" height="32" viewBox="0 0 33 32" fill="none">
                                <g clip-path="url(#clip0_952_2316)">
                                    <path
                                        d="M19.2269 10H9.77314C8.7749 9.99996 7.81271 10.3732 7.07559 11.0463C6.33848 11.7195 5.8797 12.644 5.78939 13.6381L4.51689 27.6381C4.46661 28.1916 4.53222 28.7495 4.70953 29.2762C4.88685 29.8029 5.17197 30.2869 5.54673 30.6973C5.92149 31.1077 6.37765 31.4355 6.88613 31.6598C7.39462 31.8841 7.94426 31.9999 8.50002 32H20.5C21.0558 32 21.6055 31.8842 22.1141 31.66C22.6227 31.4357 23.0789 31.1079 23.4537 30.6975C23.8285 30.2871 24.1137 29.8031 24.2911 29.2763C24.4684 28.7496 24.5341 28.1917 24.4838 27.6381L23.2113 13.6381C23.121 12.6439 22.6621 11.7193 21.9248 11.0461C21.1876 10.373 20.2252 9.99981 19.2269 10ZM14.5 26C12.43 26 10.75 24.3544 10.75 22.3281C10.75 20.7656 12.9813 17.6112 14 16.2488C14.0583 16.1712 14.1339 16.1083 14.2207 16.065C14.3076 16.0217 14.4033 15.9993 14.5003 15.9994C14.5974 15.9995 14.693 16.0222 14.7798 16.0657C14.8665 16.1092 14.9419 16.1723 15 16.25C16.0206 17.6125 18.25 20.7669 18.25 22.3294C18.25 24.3544 16.57 26 14.5 26ZM28.2069 5.87875L25.5 3.17125C24.7499 2.4213 23.7326 1.99999 22.6719 2H18.5C18.5 1.46957 18.2893 0.960859 17.9142 0.585786C17.5392 0.210714 17.0305 0 16.5 0L12.5 0C11.9696 0 11.4609 0.210714 11.0858 0.585786C10.7107 0.960859 10.5 1.46957 10.5 2V8H18.5V6H22.6719L25.3788 8.70687C25.4716 8.79976 25.5819 8.87344 25.7032 8.92371C25.8246 8.97398 25.9546 8.99985 26.086 8.99985C26.2173 8.99985 26.3474 8.97398 26.4687 8.92371C26.59 8.87344 26.7003 8.79976 26.7931 8.70687L28.2069 7.29313C28.2998 7.20026 28.3735 7.09001 28.4237 6.96867C28.474 6.84733 28.4999 6.71728 28.4999 6.58594C28.4999 6.4546 28.474 6.32454 28.4237 6.2032C28.3735 6.08186 28.2998 5.97161 28.2069 5.87875Z"
                                        fill="#005CA9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2316">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>VỆ SINH CÔNG NGHIỆP</li>
                        <li class="list-group-item d-flex align-items-center p-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="33" height="32" viewBox="0 0 33 32" fill="none">
                                <g clip-path="url(#clip0_952_2321)">
                                    <path
                                        d="M4.05576 19.0779V29.3335C4.05576 29.8224 4.45576 30.2224 4.94465 30.2224H28.0558C28.5447 30.2224 28.9447 29.8224 28.9447 29.3335V19.0779C28.5724 18.7724 26.4613 16.9501 16.5002 8.1668C6.49465 16.9946 4.41132 18.7835 4.05576 19.0779ZM21.5058 17.6168C23.0391 18.8946 23.1224 21.1835 21.7558 22.5668L17.0502 27.3224C16.7446 27.6279 16.2558 27.6279 15.9502 27.3224L11.2446 22.5668C9.87798 21.1835 9.95576 18.8946 11.4835 17.6168C12.8169 16.5057 14.8002 16.7057 16.0169 17.939L16.4946 18.4224L16.9724 17.939C18.1947 16.7057 20.178 16.5057 21.5058 17.6168ZM4.05576 19.0779V19.0612C4.05576 19.0612 3.90576 19.2001 4.05576 19.0779ZM32.2058 14.9057L28.9447 12.0279V4.44457C28.9447 3.95569 28.5447 3.55569 28.0558 3.55569H24.5002C24.0113 3.55569 23.6113 3.95569 23.6113 4.44457V7.3168L17.9835 2.35013C17.1335 1.58902 15.8613 1.58902 15.0113 2.35013L0.789094 14.9057C0.422427 15.2335 0.39465 15.7946 0.722427 16.1612L1.91132 17.4835C2.23909 17.8501 2.80021 17.8779 3.16687 17.5501L15.9113 6.3168C16.2447 6.02235 16.7502 6.02235 17.0891 6.3168L29.828 17.5557C30.1947 17.8835 30.7558 17.8557 31.0835 17.489L32.2724 16.1668C32.6002 15.7946 32.5724 15.2335 32.2058 14.9057ZM28.9447 19.0612V19.0779C29.1058 19.2057 28.9447 19.0612 28.9447 19.0612Z"
                                        fill="#005CA9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2321">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>VỆ SINH NHÀ Ở</li>
                        <li class="list-group-item d-flex align-items-center p-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="33" height="32" viewBox="0 0 33 32" fill="none">
                                <g clip-path="url(#clip0_952_2326)">
                                    <path
                                        d="M13.325 14.04L17.66 19.5C17.66 19.5 16.83 24.62 13.83 27.005C10.835 29.39 0.5 28.71 0.5 28.71C0.5 28.71 0.69 27.555 1.05 25.94L5.78 20.33C5.98 20.095 5.735 19.75 5.45 19.855L2.43 20.96C3.15 18.875 4.065 16.96 5.16 16.085C8.155 13.695 13.325 14.04 13.325 14.04ZM25.225 20.79C23.025 20.79 21.235 22.58 21.235 24.785C21.235 26.99 23.02 28.78 25.225 28.78C27.43 28.78 29.215 26.99 29.215 24.785C29.215 22.575 27.425 20.79 25.225 20.79ZM32.325 4.75005L31.335 3.50005C31.06 3.15505 30.56 3.10005 30.215 3.37005L18.59 12.265L16.885 10.115C16.63 9.79505 16.13 9.85505 15.955 10.225L14.69 12.955L19.025 18.415L21.965 17.795C22.365 17.71 22.535 17.235 22.28 16.915L20.575 14.77L32.2 5.87505C32.545 5.60005 32.6 5.09505 32.325 4.75005Z"
                                        fill="#005CA9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2326">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>GIẢI PHÁP VỆ SINH</li>
                        <li class="list-group-item d-flex align-items-center p-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="33" height="32" viewBox="0 0 33 32" fill="none">
                                <g clip-path="url(#clip0_952_2331)">
                                    <path
                                        d="M14.5 2C14.5 0.895625 13.6044 0 12.5 0H8.5C7.39563 0 6.5 0.895625 6.5 2V8H14.5V2ZM30.5 8C29.3956 8 28.5 8.89563 28.5 10C28.5 11.1044 29.3956 12 30.5 12C31.6044 12 32.5 11.1044 32.5 10C32.5 8.89563 31.6044 8 30.5 8ZM14.5 10H6.5C3.18625 10 0.5 12.6862 0.5 16V30C0.5 31.1044 1.39562 32 2.5 32H18.5C19.6044 32 20.5 31.1044 20.5 30V16C20.5 12.6862 17.8137 10 14.5 10ZM10.5 26C7.73875 26 5.5 23.7612 5.5 21C5.5 18.2388 7.73875 16 10.5 16C13.2612 16 15.5 18.2388 15.5 21C15.5 23.7612 13.2612 26 10.5 26ZM30.5 6C31.6044 6 32.5 5.10437 32.5 4C32.5 2.89563 31.6044 2 30.5 2C29.3956 2 28.5 2.89563 28.5 4C28.5 5.10437 29.3956 6 30.5 6ZM24.5 8C23.3956 8 22.5 8.89563 22.5 10C22.5 11.1044 23.3956 12 24.5 12C25.6044 12 26.5 11.1044 26.5 10C26.5 8.89563 25.6044 8 24.5 8ZM18.5 2C17.3956 2 16.5 2.89563 16.5 4C16.5 5.10437 17.3956 6 18.5 6C19.6044 6 20.5 5.10437 20.5 4C20.5 2.89563 19.6044 2 18.5 2ZM24.5 2C23.3956 2 22.5 2.89563 22.5 4C22.5 5.10437 23.3956 6 24.5 6C25.6044 6 26.5 5.10437 26.5 4C26.5 2.89563 25.6044 2 24.5 2ZM30.5 14C29.3956 14 28.5 14.8956 28.5 16C28.5 17.1044 29.3956 18 30.5 18C31.6044 18 32.5 17.1044 32.5 16C32.5 14.8956 31.6044 14 30.5 14Z"
                                        fill="#005CA9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2331">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>GIẢI PHÁP MÙI HƯƠNG</li>
                        <li class="list-group-item d-flex align-items-center p-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="33" height="32" viewBox="0 0 33 32" fill="none">
                                <g clip-path="url(#clip0_952_2336)">
                                    <path
                                        d="M6.9 28.8002H26.1V20.8002H6.9055L6.9 28.8002ZM14.1 24.0002H18.9C19.1122 24.0002 19.3157 24.0845 19.4657 24.2345C19.6157 24.3845 19.7 24.588 19.7 24.8002C19.7 25.0124 19.6157 25.2159 19.4657 25.3659C19.3157 25.5159 19.1122 25.6002 18.9 25.6002H14.1C13.8878 25.6002 13.6843 25.5159 13.5343 25.3659C13.3843 25.2159 13.3 25.0124 13.3 24.8002C13.3 24.588 13.3843 24.3845 13.5343 24.2345C13.6843 24.0845 13.8878 24.0002 14.1 24.0002ZM6.9 19.2002H26.0735L26.1 14.4002H6.9V19.2002ZM31.025 9.0502L17.4205 3.3837C17.1258 3.27243 16.8148 3.21043 16.5 3.2002C16.1837 3.20994 15.8711 3.27194 15.575 3.3837L1.975 9.0502C1.53863 9.23324 1.16595 9.54092 0.903582 9.93473C0.641219 10.3285 0.500835 10.791 0.5 11.2642L0.5 28.0002C0.5 28.2124 0.584285 28.4159 0.734315 28.5659C0.884344 28.7159 1.08783 28.8002 1.3 28.8002H4.5C4.71217 28.8002 4.91566 28.7159 5.06569 28.5659C5.21571 28.4159 5.3 28.2124 5.3 28.0002V14.4002C5.3 13.5207 6.0295 12.8002 6.9295 12.8002H26.0705C26.9705 12.8002 27.7 13.5207 27.7 14.4002V28.0002C27.7 28.2124 27.7843 28.4159 27.9343 28.5659C28.0843 28.7159 28.2878 28.8002 28.5 28.8002H31.7C31.9122 28.8002 32.1157 28.7159 32.2657 28.5659C32.4157 28.4159 32.5 28.2124 32.5 28.0002V11.2642C32.4992 10.791 32.3588 10.3285 32.0964 9.93473C31.8341 9.54092 31.4614 9.23324 31.025 9.0502Z"
                                        fill="#005CA9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2336">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>THI CÔNG CẢNH QUAN</li>
                        <li class="list-group-item d-flex align-items-center p-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="33" height="32" viewBox="0 0 33 32" fill="none">
                                <g clip-path="url(#clip0_952_2341)">
                                    <path
                                        d="M31.5 14.6875C30.8331 13.6875 29.9375 12.9581 28.8125 12.5H28.875C29.4169 11.5 29.6144 10.4688 29.4688 9.40625C29.3231 8.34375 28.8956 7.42688 28.1875 6.65625C27.4794 5.88562 26.6144 5.375 25.5938 5.125C24.5731 4.875 23.5419 4.97937 22.5 5.4375C22.3331 3.89563 21.6769 2.60437 20.5312 1.5625C19.3856 0.520625 18.0419 0 16.5 0C14.9581 0 13.6144 0.520625 12.4688 1.5625C11.3231 2.60437 10.6669 3.89563 10.5 5.4375C9.45813 4.97937 8.42688 4.875 7.40625 5.125C6.38562 5.375 5.52063 5.88562 4.8125 6.65625C4.10437 7.42688 3.67688 8.34375 3.53125 9.40625C3.38562 10.4688 3.60437 11.5 4.1875 12.5C3.0625 12.9581 2.16688 13.6875 1.5 14.6875C0.833125 15.6875 0.5 16.7919 0.5 18C0.5 19.6669 1.08312 21.0831 2.25 22.25C3.41687 23.4169 4.83313 24 6.5 24H14.5V27.5281L12.6069 30.5531C12.2744 31.2181 12.7581 32.0006 13.5013 32.0006H19.4988C20.2419 32.0006 20.7256 31.2181 20.3931 30.5531L18.5 27.5281V24H26.5C28.1669 24 29.5831 23.4169 30.75 22.25C31.9169 21.0831 32.5 19.6669 32.5 18C32.5 16.7919 32.1669 15.6875 31.5 14.6875Z"
                                        fill="#005CA9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_952_2341">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>THI CÔNG CÂY CẢNH</li>
                    </ul>
                </div>
                <div class="section-images">
                    <div class="text-container-with-bg-image">
                        <div class="text-container">
                            <h5>
                                KIỂM SOÁT CÔN TRÙNG
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.
                            </p>
                            <a href="#">Xem thêm</a>
                        </div>
                    </div>
                    <div class="text-container-with-bg-image-blur">
                        <div class="text-container">
                            <h5>
                                KIỂM SOÁT MỐI
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <a href="#">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reasons -->
    <section class="container-fluid p-0">
        <div class="reasons-container">
            <h1>Vì sao chọn chúng tôi</h1>
            <div class="reasons-number-title-container">
                <div class="number-and-year-group">
                    <h1>8+</h1>
                    <p>Năm hoạt động</p>
                </div>
                <div class="number-and-year-group">
                    <h1>30+</h1>
                    <p>Năm hoạt động</p>
                </div>
                <div class="number-and-year-group">
                    <h1>199+</h1>
                    <p>Năm hoạt động</p>
                </div>
            </div>
            <div class="reasons-text-container">
                <p> <span>Với nhiều năm kinh nghiệm trong ngành, PestnClean tự hào là đơn vị hàng đầu trong lĩnh vực kiểm
                        soát côn trùng, dịch vụ vệ sinh, giải pháp vệ sinh và thi công cảnh quan.</span> Chúng tôi không
                    ngừng nỗ lực nâng cao chất lượng dịch vụ, áp dụng những công nghệ tiên tiến và an toàn nhất để đảm bảo
                    môi trường sống và làm việc của bạn luôn sạch sẽ và không có côn trùng gây hại.  Đội ngũ chuyên gia của
                    chúng tôi đã tham gia nhiều dự án lớn nhỏ, từ những công trình dân dụng cho đến các khu công nghiệp, nhà
                    xưởng, văn phòng và khách sạn cao cấp. Chúng tôi hiểu rằng mỗi dự án đều có những yêu cầu riêng biệt và
                    luôn sẵn sàng tư vấn, thiết kế giải pháp phù hợp nhất để đáp ứng nhu cầu cụ thể của từng khách hàng.</p>
            </div>
            <div class="reasons-image-and-text-container">
                <div class="image-and-text-group">
                    <img src="{{ asset('fontend/images/Home/reason-image.png') }}" width="250"
                        height="250">
                    <h4>Hỗ trợ 24/7</h4>
                    <p>
                        Hotline tư vấn và chăm sóc khách hàng của chúng tôi hoạt động 24/7, sẵn sàng hỗ trợ bạn bất cứ lúc
                        nào. Chúng tôi luôn sẵn sàng mang đến dịch vụ tận tình và nhanh chóng để đáp ứng mọi nhu cầu của
                        bạn.
                    </p>
                </div>
                <div class="image-and-text-group">
                    <img src="{{ asset('fontend/images/Home/reason-image2.png') }}" width="250"
                        height="250">
                    <h4>ĐỘI NGŨ GIÀU
                        KINH NGHIỆM</h4>
                    <p>
                        Đội ngũ của chúng tôi bao gồm các chuyên gia với nhiều năm kinh nghiệm trong lĩnh vực của mình, đảm
                        bảo sự chuyên nghiệp và tinh thần trách nhiệm cao, cung cấp các giải pháp tối ưu nhất trong mỗi dự
                        án.
                    </p>
                </div>
                <div class="image-and-text-group">
                    <img src="{{ asset('fontend/images/Home/reason-image3.png') }}" width="250"
                        height="250">
                    <h4>BÁO CÁO PHÂN TÍCH CHUẨN BRC, HACCP</h4>
                    <p>
                        Chúng tôi luôn tuân thủ các tiêu chuẩn chất lượng quốc tế như HRC, HACCP và ISO, đảm bảo rằng mọi
                        quy trình và hoạt động đều đáp ứng yêu cầu nghiêm ngặt về an toàn và chất lượng dịch vụ, sản phẩm.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Working picture -->
    <section class="container-fluid p-0">
        <div class="working-container">
            <h1>HÌNH ẢNH LÀM VIỆC</h1>
            <div class="tab-container">
                <ul class="nav nav-tabs nav-fill" style="border-bottom: none">
                    <li class="nav-item">
                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab"
                            data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane"
                            aria-selected="true">Tất cả</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="ksct-tab" data-bs-toggle="tab" data-bs-target="#ksct-tab-pane"
                            type="button" role="tab" aria-controls="ksct-tab-pane" aria-selected="false">Kiểm soát
                            côn trùng</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="vscn-tab" data-bs-toggle="tab" data-bs-target="#vscn-tab-pane"
                            type="button" role="tab" aria-controls="vscn-tab-pane" aria-selected="false">Vệ sinh
                            công nghiệp</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="gpmh-tab" data-bs-toggle="tab" data-bs-target="#gpmh-tab-pane"
                            type="button" role="tab" aria-controls="gpmh-tab-pane" aria-selected="false">Giải pháp
                            mùi hương</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="tccq-tab" data-bs-toggle="tab" data-bs-target="#tccq-tab-pane"
                            type="button" role="tab" aria-controls="tccq-tab-pane" aria-selected="false">Thi công
                            cảnh quan</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content mt-0" id="myTabContent">
                <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab">
                    <div class="images-container">
                        <div class="home-images-row-container">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image2.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image3.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image4.png') }}">
                        </div>
                        <div class="home-images-row-container">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image5.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image6.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image7.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image8.png') }}">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ksct-tab-pane" role="tabpanel" aria-labelledby="ksct-tab">
                    <div class="images-container">
                        <div class="home-images-row-container">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image2.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image3.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image4.png') }}">
                        </div>
                        <div class="home-images-row-container">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image5.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image6.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image7.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image8.png') }}">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="vscn-tab-pane" role="tabpanel" aria-labelledby="vscn-tab">
                    <div class="images-container">
                        <div class="home-images-row-container">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image2.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image3.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image4.png') }}">
                        </div>
                        <div class="home-images-row-container">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image5.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image6.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image7.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image8.png') }}">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="gpmh-tab-pane" role="tabpanel" aria-labelledby="gpmh-tab">
                    <div class="images-container">
                        <div class="home-images-row-container">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image2.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image3.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image4.png') }}">
                        </div>
                        <div class="home-images-row-container">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image5.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image6.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image7.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image8.png') }}">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tccq-tab-pane" role="tabpanel" aria-labelledby="tccq-tab">
                    <div class="images-container">
                        <div class="home-images-row-container">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image2.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image3.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image4.png') }}">
                        </div>
                        <div class="home-images-row-container">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image5.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image6.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image7.png') }}">
                            <img class="img-thumbnail"
                                src="{{ asset('fontend/images/Home/working-image8.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prices -->
    <section class="container-fluid p-0">
        <div class="price-container">
            <h1>GIẢI THƯỞNG VÀ CHỨNG NHẬN</h1>
            <div class="list-group img-list">
                <a href="#" class="list-group-item" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <img src="{{ asset('fontend/images/Home/certificate.png') }}">
                    </div>
                </a>
                <a href="#" class="list-group-item" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <img src="{{ asset('fontend/images/Home/certificate.png') }}">
                    </div>
                </a>
                <a href="#" class="list-group-item" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <img src="{{ asset('fontend/images/Home/certificate.png') }}">
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Other Blog -->
    <section class="container-fluid p-0">
        <div class="other-blog-container">
            <div class="other-blog-title-container">
                <h1>Bài viết tham khảo</h1>
                <a href="#">Xem thêm</a>
            </div>
            <div id="carouselListCard" class="carousel carousel-dark slide" style="height: 350px"
                data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselListCard" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselListCard" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselListCard" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner home-other-blogs">
                    <div class="carousel-item padding-left-right-200 active">
                        <div class="card-list-container">
                            <div class="blog-card-item">
                                <img src="{{ asset('fontend/images/Home/blog-image.png') }}" alt="...">
                                <div class="card-item-content">
                                    <h5>Bảng giá vệ sinh công nghiệp PestnClean</h5>
                                    <a href="#">Xem thêm</a>
                                </div>
                            </div>
                            <div class="blog-card-item">
                                <img src="{{ asset('fontend/images/Home/blog-image2.png') }}" alt="...">
                                <div class="card-item-content">
                                    <h5>6 Cách khử mùi hôi nhà vệ sinh mới nhất 2024</h5>
                                    <a href="#">Xem thêm</a>
                                </div>
                            </div>
                            <div class="blog-card-item">
                                <img src="{{ asset('fontend/images/Home/blog-image3.png') }}" alt="...">
                                <div class="card-item-content">
                                    <h5>3 cách tạo mùi thơm cho xe ô tô bạn nên biết</h5>
                                    <a href="#">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item padding-left-right-200">
                        <div class="card-list-container">
                            <div class="blog-card-item">
                                <img src="{{ asset('fontend/images/Home/blog-image.png') }}" alt="...">
                                <div class="card-item-content">
                                    <h5>Bảng giá vệ sinh công nghiệp PestnClean</h5>
                                    <a href="#">Xem thêm</a>
                                </div>
                            </div>
                            <div class="blog-card-item">
                                <img src="{{ asset('fontend/images/Home/blog-image2.png') }}" alt="...">
                                <div class="card-item-content">
                                    <h5>6 Cách khử mùi hôi nhà vệ sinh mới nhất 2024</h5>
                                    <a href="#">Xem thêm</a>
                                </div>
                            </div>
                            <div class="blog-card-item">
                                <img src="{{ asset('fontend/images/Home/blog-image3.png') }}" alt="...">
                                <div class="card-item-content">
                                    <h5>3 cách tạo mùi thơm cho xe ô tô bạn nên biết</h5>
                                    <a href="#">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item padding-left-right-200">
                        <div class="card-list-container">
                            <div class="blog-card-item">
                                <img src="{{ asset('fontend/images/Home/blog-image.png') }}" alt="...">
                                <div class="card-item-content">
                                    <h5>Bảng giá vệ sinh công nghiệp PestnClean</h5>
                                    <a href="#">Xem thêm</a>
                                </div>
                            </div>
                            <div class="blog-card-item">
                                <img src="{{ asset('fontend/images/Home/blog-image2.png') }}" alt="...">
                                <div class="card-item-content">
                                    <h5>6 Cách khử mùi hôi nhà vệ sinh mới nhất 2024</h5>
                                    <a href="#">Xem thêm</a>
                                </div>
                            </div>
                            <div class="blog-card-item">
                                <img src="{{ asset('fontend/images/Home/blog-image3.png') }}" alt="...">
                                <div class="card-item-content">
                                    <h5>3 cách tạo mùi thơm cho xe ô tô bạn nên biết</h5>
                                    <a href="#">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselListCard"
                    data-bs-slide="prev">
                    <div class="home-carousel-button-container"><svg xmlns="http://www.w3.org/2000/svg" width="33"
                            height="32" viewBox="0 0 33 32" fill="none">
                            <path d="M7.16663 16H25.8333" stroke="#868E96" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.16663 16L15.1666 24" stroke="#868E96" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.16663 16L15.1666 8" stroke="#868E96" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg></div>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselListCard"
                    data-bs-slide="next">
                    <div class="home-carousel-button-container"><svg xmlns="http://www.w3.org/2000/svg" width="33"
                            height="32" viewBox="0 0 33 32" fill="none">
                            <path d="M7.45097 16H26.1176" stroke="#141718" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M18.1176 24L26.1176 16" stroke="#141718" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M18.1176 8L26.1176 16" stroke="#141718" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg></div>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

@endsection
