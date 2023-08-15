@extends('auth.layouts.app')

@section('title','Login')

@section('main')

<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100"
        style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                                <div class="row mt-3">
                                    <div class="col-2 text-center ms-auto">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa fa-facebook text-white text-lg"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 text-center px-1">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa fa-github text-white text-lg"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 text-center me-auto">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa fa-google text-white text-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}" class="text-start">
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Email</label>
                                    <input id="email" name="email" type="email" type="email"
                                        class="form-control" required>
                                    @error('email')
                                    <div class="alert alert-primary alert-dismissible text-white" role="alert">
                                        <span class="text-sm"><strong>{{ $message }}</strong></span>
                                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    @enderror
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        autocomplete="current-password" required>
                                    @error('password')
                                        <div class="alert alert-primary alert-dismissible text-white" role="alert">
                                            <span class="text-sm"><strong>{{ $message }}</strong></span>
                                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-check form-switch d-flex align-items-center mb-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        checked>
                                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign
                                        in</button>
                                </div>
                                @if (Route::has('password.request'))
                                    <p class="mt-4 text-sm text-center">
                                        <a href="{{ route('password.request') }}"
                                            class="text-primary text-gradient font-weight-bold">Forget Password</a>
                                    </p>
                                @endif
                                <p class="mt-4 text-sm text-center">
                                    Don't have an account?
                                    <a href="/register" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-12 col-md-6 my-auto">
                        <div class="copyright text-center text-sm text-white text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart" aria-hidden="true"></i> by
                            <a href="#" class="font-weight-bold text-white" target="_blank">CSE DU</a>
                            for sake of science.
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">

                            <li class="nav-item">
                                <a href="#" class="nav-link text-white" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link pe-0 text-white" target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</main>

@endsection
