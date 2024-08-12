@extends('layouts.master')
@section('styles')
<link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
@endsection
@section('content')
        
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Dashboard</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <div class="main-container container-fluid">

                        <!-- Start::row-1 -->
                        <div class="row">

                            <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Fairfirst News
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper scrollbar-swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/01.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/02.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/03.jpg')}}" alt=""></div>
                                            </div>
                                            <div class="swiper-scrollbar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </div>

                    </div>

@endsection
@section('scripts')
@endsection