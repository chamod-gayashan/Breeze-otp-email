
@extends('layouts.custom-master1')

@section('styles')



@endsection

@section('content')

                <!-- CONTAINER OPEN -->
                <div class="">

                </div>
                <div class="container-lg">
                    <div class="row justify-content-center mt-4 mx-0">
                        <div class="col-xl-4 col-lg-6">
                            <div class="card shadow-none">
                                <div class="card-body p-sm-6">
                                    <div class="text-center">
                                        <a href="{{url('/login')}}"><img src="{{ URL::asset('storage/logo/image.png')}}" class="header-brand-img" style="height: 80px;" alt="FAIRFIRST"></a>
                                    </div><br>
                                    <div class="text-center mb-4">
                                        <h4 class="mb-1">Prototype OTP Sender</h4>
                                        <p>Testing Purpose Only</p>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <!-- <label class="mb-2 fw-500">Email<span class="text-danger ms-1">*</span></label>
                                                    <input class="form-control ms-0" type="email" placeholder="Enter your Email" name="email" :value="old('email')" required autofocus autocomplete="username"> -->
                                                    <x-input-label for="email" :value="__('Email')" />
                                                    <x-text-input id="email" class="form-control ms-0" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <!-- <label class="mb-2 fw-500">Password<span class="text-danger ms-1">*</span></label>
                                                    <div >
                                                        <input type="password" class="form-control" id="password" name="passowrd" required autocomplete="current-password" placeholder="Password">
                                                    </div> -->
                                                    <x-input-label for="password" :value="__('Password')" />
                                                    <x-text-input id="password" class="form-control"
                                                                    type="password"
                                                                    name="password"
                                                                    required autocomplete="current-password" />

                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="d-flex mb-3">
                                                    <div class="ms-auto">
                                                        <a href="{{url('forgot-password')}}" class="tx-primary ms-1 tx-13">Forgot Password?</a>
                                                    </div>
                                                </div>
                                                <div class="d-grid mb-3">
                                                    <x-primary-button class="ms-3">
                                                        {{ __('Log in') }}
                                                    </x-primary-button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- <p class="text-center mt-3 mb-2">Signin with</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="btn-list">
                                            <button class="btn btn-icon bg-primary-transparent rounded-pill border-0" type="button">
                                                <span class="btn-inner--icon"><i class="fa fa-facebook"></i></span>
                                            </button>
                                            <button class="btn btn-icon bg-primary-transparent rounded-pill border-0" type="button">
                                                    <span class="btn-inner--icon"><i class="fa fa-google"></i></span>
                                                </button>
                                            <button class="btn btn-icon bg-primary-transparent rounded-pill border-0" type="button">
                                                    <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
                                                </button>
                                            <button class="btn btn-icon bg-primary-transparent rounded-pill border-0" type="button">
                                                    <span class="btn-inner--icon"><i class="fa fa-linkedin"></i></span>
                                            </button>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')



@endsection



