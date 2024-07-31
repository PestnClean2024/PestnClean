<!-- Register Modal -->
<div class="modal fade" id="register-modal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            <div class="modal-body">
                <div class="logo mb-4">
                    <img src="{{ asset('fontend/images/Authentication/header-logo.png') }}" alt=""
                        class="img-fluid">
                </div>
                <form id="register-form" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="phone" class="form-label">Số điện thoại</label>
                        <input type="number" name="phone" class="form-control" id="phone"
                            placeholder="Nhập số điện thoại của bạn">
                    </div>
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Tên đăng nhập</label>
                        <input type="text" name="fullname" class="form-control" id="fullname"
                            placeholder="Nhập tên đăng nhập của bạn">
                    </div>
                    <div class="mb-3">
                        <label for="passwordRe" class="form-label">Mật khẩu</label>
                        <input type="password" name="passwordRe" class="form-control" id="passwordRe"
                            placeholder="Nhập mật khẩu của bạn">
                    </div>
                    <div class="mb-3">
                        <label for="passwordRe_confirmation" class="form-label">Nhập lại mật khẩu</label>
                        <input type="password" name="passwordRe_confirmation" class="form-control"
                            id="passwordRe_confirmation" placeholder="Nhập lại mật khẩu của bạn">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Sign Up</button>
                    <div class="mb-3 remember">
                        <input type="checkbox" id="remember"> Ghi nhớ mật khẩu
                    </div>
                </form>
                <button class="mb-3 other-authentication">
                    <img src="{{ asset('fontend/images/Authentication/google.svg') }}" alt="" class="img-fluid">
                    <h6>Sign in with Google</h6>
                </button>
                <div class="d-flex justify-content-center mb-0">
                    <p class="already">Bạn đã có tài khoản?</p>
                    <a href="#" class="ms-2">Đăng nhập ngay</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            <div class="modal-body col-md-6">
                <div class="logo mb-4">
                    <img src="{{ asset('fontend/images/Authentication/header-logo.png') }}" alt=""
                        class="img-fluid">
                </div>
                <form id="login-form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="login_id" class="form-label">Tên đăng nhập</label>
                        <input type="text" class="form-control" value="{{ old('login_id') }}" id="login_id"
                            name="login_id" placeholder="Nhập tên đăng nhập của bạn">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control " id="password" name="password"
                            placeholder="Nhập tên đăng nhập của bạn">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Sign In</button>
                    <div class="mb-3 remember">
                        <input type="checkbox" id="login-remember"> Ghi nhớ mật khẩu
                    </div>
                </form>
                <button class="mb-3 other-authentication">
                    <img src="{{ asset('fontend/images/Authentication/google.svg') }}" alt=""
                        class="img-fluid">
                    <h6>Sign in with Google</h6>
                </button>
                <div class="d-flex justify-content-center mb-0">
                    <p class="already">Bạn chưa có tài khoản?</p>
                    <a href="#" class="ms-2">Tạo tài khoản</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('fontend/js/Ajax/login.js') }}"></script>
<script src="{{ asset('fontend/js/Ajax/register.js') }}"></script>
