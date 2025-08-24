@extends('layouts.auth.app')
@section('title', 'Register')
@section('content')

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4" style="max-width: 500px;">
            <!-- Register Card -->
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
                        <h4 class="mb-1 pt-2">Create an Account</h4>
                        <p class="mb-4">Enter your details below to create your account</p>
                    </div>

                    <!-- Role Toggle Tabs -->
                    <div class="d-flex justify-content-center ">
                        <ul class="nav nav-tabs  bg-light p-1 shadow-sm" id="roleTab" role="tablist" style="width: 100%; background-color: #f1f5f9!important;">
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

                    <div class="tab-content px-0 pb-0" id="roleTabContent">
                        <!-- Car Owner Registration Form -->
                        <div class="tab-pane fade{{ (session('activeTab', old('activeTab', $activeTab ?? 'user')) == 'user') ? ' show active' : '' }}" id="car-owner-form" role="tabpanel" aria-labelledby="car-owner-tab">
                            <form id="formAuthentication" class="mb-3 row" action="{{ route('user.register') }}" method="POST">
                                @csrf
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your full name" autofocus />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number" />
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="vin" class="form-label">Vehicle Identification Number (VIN)</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('vin') is-invalid @enderror" id="vin" name="vin" value="{{ old('vin') }}" placeholder="Enter your vehicle's VIN" aria-label="VIN" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-primary waves-effect" type="button" id="button-addon2">Auto Generate</button>
                                    </div>
                                    @error('vin')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="make" class="form-label">Vehicle Make</label>
                                    <input type="text" class="form-control @error('make') is-invalid @enderror" id="make" name="make" value="{{ old('make') }}" placeholder="Enter your vehicle's make" />
                                    @error('make')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="model" class="form-label">Vehicle Model</label>
                                    <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" value="{{ old('model') }}" placeholder="Enter your vehicle's model" />
                                    @error('model')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="license_plate" class="form-label">Vehicle License Plate</label>
                                    <input type="text" class="form-control @error('license_plate') is-invalid @enderror" id="license_plate" name="license_plate" value="{{ old('license_plate') }}" placeholder="Enter your license plate" />
                                    @error('license_plate')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="year" class="form-label">Vehicle Year</label>
                                    <input type="number" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{ old('year') }}" placeholder="Enter your vehicle's year" />
                                    @error('year')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="password">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input
                                            type="password"
                                            id="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                                    <div class="input-group input-group-merge">
                                        <input
                                            type="password"
                                            id="password_confirmation"
                                            class="form-control"
                                            name="password_confirmation"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password_confirmation" />
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary d-grid w-100">Sign up</button>
                                </div>
                            </form>
                        </div>
                        <!-- Mechanic Registration Form -->
                        <div class="tab-pane fade{{ (session('activeTab', old('activeTab', $activeTab ?? 'user')) == 'mechanic') ? ' show active' : '' }}" id="mechanic-form" role="tabpanel" aria-labelledby="mechanic-tab">
                            <form id="formAuthenticationMechanic" class="mb-3 row" action="{{ route('mechanic.register') }}" method="POST">
                                @csrf
                                <div class="mb-3 col-12">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your full name" autofocus />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number" />
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="business_name" class="form-label">Business Name</label>
                                    <input type="text" class="form-control @error('business_name') is-invalid @enderror" id="business_name" name="business_name" value="{{ old('business_name') }}" placeholder="Enter your business name" />
                                    @error('business_name')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="location" class="form-label">Business Address</label>
                                    <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ old('location') }}" placeholder="Enter your location" />
                                    @error('location')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state" value="{{ old('state') }}" placeholder="Enter your state" />
                                    @error('state')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{ old('country') }}" placeholder="Enter your country" />
                                    @error('country')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="password">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input
                                            type="password"
                                            id="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                                    <div class="input-group input-group-merge">
                                        <input
                                            type="password"
                                            id="password_confirmation"
                                            class="form-control"
                                            name="password_confirmation"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password_confirmation" />
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary d-grid w-100">Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <p class="text-center">
                        <span>Already have an account?</span>
                        <a href="{{ route('login') }}">
                            <span>Sign in instead</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- Register Card -->
        </div>
    </div>
</div>

@endsection