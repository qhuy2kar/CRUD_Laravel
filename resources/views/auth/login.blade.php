<!-- resources/views/auth/login.blade.php -->
@extends('layout')
@section('content')


{{-- <form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
    </div>

    <div>
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Ghi nhớ đăng nhập</label>
    </div>

    <div>
        <button type="submit">Đăng nhập</button>
    </div>
</form> --}}



<style>
    .divider:after,
    .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
    }
    .h-custom {
    height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
    .h-custom {
    height: 100%;
    }
    }

  </style>

<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng Nhập  </p>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            

  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" name="email" value="{{ old('email') }}" required autofocus class="form-control form-control-lg"
                placeholder="Nhập địa chỉ Email" />
              {{-- <label class="form-label" for="form3Example3">Email address</label> --}}
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="form3Example4"  class="form-control form-control-lg"
                placeholder="Nhập mật khẩu" name="password" required/>
              {{-- <label class="form-label" for="form3Example4">Password</label> --}}
            </div>
  
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" name="remember"/>
                <label class="form-check-label" for="form2Example3">
                  Nhớ mật khẩu
                </label>
              </div>
              <a href="" class="text-body text-decoration-none">Quên mật khẩu?</a>
            </div>
            <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Hoặc</p>
              </div>
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p class="lead fw-normal mb-0 me-3">Đăng nhập với</p>
                <button type="button" class="btn btn-light btn-floating mx-4">
                  <i class="bi bi-facebook"></i> Facebook
                </button>
    
                <button type="button" class="btn btn-light btn-floating mx-4">
                  <i class="bi bi-google"></i> Google
                </button>
    
                {{-- <button type="button" class="btn btn-light btn-floating mx-1">
                  <i class="bi bi-twitter"></i> Tw
                </button> --}}
              </div>
  
              
            <div class="text-center mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng Nhập</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Bạn chưa có tài khoản? <a href="{{ route('register') }}"
                  class="link-danger text-decoration-none">Đăng Ký</a></p>
            </div>
  
          </form>
        </div>
      </div>
    </div>
    {{-- <div>
        <br>

    </div> --}}
    <div
      class=" text-center mt-4 py-2 bg-info ">
      <!-- Copyright -->
      <p class="text-white mb-md-0 text-center">
        Bản quyền thuộc về Huy code ngu :)
      </p>
      <!-- Copyright -->
  
      <!-- Right -->
      {{-- <div>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div> --}}
      <!-- Right -->
    </div>
  </section>

  @endsection