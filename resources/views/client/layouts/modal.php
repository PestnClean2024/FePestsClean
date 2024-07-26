<!-- Register Modal -->
<div class="modal fade" id="register-modal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      <div id="register-carousel" class="carousel slide col-md-6">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://via.placeholder.com/500x300?text=Image+1" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://via.placeholder.com/500x300?text=Image+2" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://via.placeholder.com/500x300?text=Image+3" class="d-block w-100" alt="...">
          </div>
        </div>
        <div class="mt-5">
          <ul class="carousel-indicators justify-content-center">
            <li data-bs-target="#register-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#register-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#register-carousel" data-bs-slide-to="2"></li>
          </ul>
        </div>
      </div>

      <div class="modal-body col-md-6">
        <div class="logo">
          <img src="/FePestsClean/resources/images/Authentication/header-logo.png" alt="" class="img-fluid">
        </div>
        <form id="register-form" method="POST">
          <div class="mb-3 mt-3">
            <label for="phone" class="form-label">Số điện thoại</label>
            <input type="number" class="form-control" id="phone" placeholder="Nhập số điện thoại của bạn">
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Tên đăng nhập</label>
            <input type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập của bạn">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu của bạn">
          </div>
          <div class="mb-3">
            <label for="re-password" class="form-label">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" id="re-password" placeholder="Nhập lại mật khẩu của bạn">
          </div>
          <button type="submit" class="btn btn-primary mb-3">Sign Up</button>
          <div class="mb-3 remember">
            <input type="checkbox" id="remember"> Ghi nhớ mật khẩu
          </div>
        </form>
        <button class="mb-3 other-authentication">
          <img src="/FePestsClean/resources/images/Authentication/google.svg" alt="" class="img-fluid">
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

      <div id="login-carousel" class="carousel slide col-md-6">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://via.placeholder.com/500x300?text=Image+1" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://via.placeholder.com/500x300?text=Image+2" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://via.placeholder.com/500x300?text=Image+3" class="d-block w-100" alt="...">
          </div>
        </div>
        <div class="mt-5">
          <ul class="carousel-indicators justify-content-center">
            <li data-bs-target="#login-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#login-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#login-carousel" data-bs-slide-to="2"></li>
          </ul>
        </div>
      </div>

      <div class="modal-body col-md-6">
        <div class="logo mb-3">
          <img src="/FePestsClean/resources/images/Authentication/header-logo.png" alt="" class="img-fluid">
        </div>
        <form id="login-form" method="POST">
          <div class="mb-3">
            <label for="login-username" class="form-label">Tên đăng nhập</label>
            <input type="text" class="form-control" id="login-username" placeholder="Nhập tên đăng nhập của bạn">
          </div>
          <div class="mb-3">
            <label for="login-password" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" id="login-password" placeholder="Nhập mật khẩu của bạn">
          </div>
          <button type="submit" class="btn btn-primary mb-3">Sign Up</button>
          <div class="mb-3 remember">
            <input type="checkbox" id="login-remember"> Ghi nhớ mật khẩu
          </div>
        </form>
        <button class="mb-3 other-authentication">
          <img src="/FePestsClean/resources/images/Authentication/google.svg" alt="" class="img-fluid">
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
