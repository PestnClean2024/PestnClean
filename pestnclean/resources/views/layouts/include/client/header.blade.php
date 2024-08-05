<nav class="navbar navbar-expand-lg navbar-light bg-light px-5 py-3 navbar-background-color">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <div class="header-logo">
                <img src="/FePestsClean/resources/images/Header/header-logo.png" alt="" class="img-fluid">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Về chúng tôi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dịch vụ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dịch vụ (test)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dịch vụ cleaning (test)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>
            </ul>
        </div>

        @if (session('user'))
            {{-- {{dd(session('user'))}} --}}
            <p>Xin chào, {{ session('user')->fullname }}!</p>
            <p>Vai trò: {{ session('user')->role }}</p>
            <a href="#">Xem thông tin</a>
            <a href="#">Giỏ hàng</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <div class="navbar-icons">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#register-modal">Đăng
                    ký</a>
                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#login-modal">Đăng
                    nhập</a>
            </div>
        @endif
    </div>
</nav>
