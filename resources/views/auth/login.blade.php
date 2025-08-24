@extends('layouts.auth.app')
@section('title', 'Login')
@section('content')

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Login -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-4 mt-2">
                        <a href="{{ route('home') }}" class="app-brand-link">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" height="30">
                            <span class="app-brand-text demo text-body fw-bold ms-1">MotoDoc</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <div class="text-center mb-4">
                        <h4 class="mb-1 pt-2">Welcome Back!</h4>
                        <p class="mb-4">Please sign-in to your account</p>
                    </div>

                    <!-- Role Toggle Tabs -->
                    <div class="d-flex justify-content-center ">
                        <ul class="nav nav-tabs  bg-light p-1 shadow-sm" id="roleTab" role="tablist" style="width: 340px; background-color: #f1f5f9!important;">
                            <li class="nav-item flex-fill text-center" role="presentation">
                                <button 
                                    class="nav-link active  px-4 py-2 fw-semibold text-primary" 
                                    id="car-owner-tab" 
                                    data-bs-toggle="tab" 
                                    data-bs-target="#car-owner-form" 
                                    type="button" 
                                    role="tab" 
                                    aria-controls="car-owner-form" 
                                    aria-selected="true"
                                    style="transition: background 0.2s, color 0.2s;"
                                >
                                    {{-- <i class="ti ti-user me-1"></i>  --}}
                                    Car Owner
                                </button>
                            </li>
                            <li class="nav-item flex-fill text-center" role="presentation">
                                <button 
                                    class="nav-link  px-4 py-2 fw-semibold text-primary" 
                                    id="mechanic-tab" 
                                    data-bs-toggle="tab" 
                                    data-bs-target="#mechanic-form" 
                                    type="button" 
                                    role="tab" 
                                    aria-controls="mechanic-form" 
                                    aria-selected="false"
                                    style="transition: background 0.2s, color 0.2s;"
                                >
                                    {{-- <i class="ti ti-tools me-1"></i>  --}}
                                    Mechanic
                                </button>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content px-0" id="roleTabContent">
                        <!-- Car Owner Login Form -->
                        <div class="tab-pane fade{{ (session('activeTab', old('activeTab', $activeTab ?? 'user')) == 'user') ? ' show active' : '' }}" id="car-owner-form" role="tabpanel" aria-labelledby="car-owner-tab">
                            <form id="formAuthenticationCarOwner" class="mb-3" action="{{ route('user.login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Enter your email"
                                    autofocus required/>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password">Password</label>
                                        <a href="#">
                                            <small>Forgot Password?</small>
                                        </a>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input
                                            type="password"
                                            id="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" required/>
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                                </div>
                            </form>
                        </div>
                        <!-- Mechanic Login Form -->
                        <div class="tab-pane fade{{ (session('activeTab', old('activeTab', $activeTab ?? 'user')) == 'mechanic') ? ' show active' : '' }}" id="mechanic-form" role="tabpanel" aria-labelledby="mechanic-tab">
                            <form id="formAuthenticationMechanic" class="mb-3" action="{{ route('mechanic.login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="mechanic-email" class="form-label">Email</label>
                                    <input
                                    type="email"
                                    class="form-control @error('mechanic_email') is-invalid @enderror"
                                    id="mechanic-email"
                                    name="email"
                                    value="{{ old('mechanic_email') }}"
                                    placeholder="Enter your email"
                                    autofocus required/>
                                    @error('mechanic_email')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="mechanic-password">Password</label>
                                        <a href="#">
                                            <small>Forgot Password?</small>
                                        </a>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input
                                            type="password"
                                            id="mechanic-password"
                                            class="form-control @error('mechanic_password') is-invalid @enderror"
                                            name="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="mechanic-password" required/>
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                        @error('mechanic_password')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <p class="text-center">
                        <span>New on our platform?</span>
                        <a href="{{ route('register') }}">
                            <span>Create an account</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

@endsection