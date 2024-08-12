@extends('layouts.master')
@section('styles')
@endsection
@section('content')
@auth
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Home</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class=sd"breadcrumb-item">
                                    <div class="spinner-border spinner-primary-light" id="lodingTop" style="max-height: 16px; max-width: 16px;" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </li>
                                <!-- <li class=sd"breadcrumb-item"><a href="javascript:void(0);">Admin </a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Home</li> -->
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->
                    <div class="main-container container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0">Total Quotations</p>
                                                        <span class="fs-5">67</span>
                                                        <span class="fs-12 text-success ms-1"><i
                                                                class="ti ti-trending-up mx-1"></i>0.5%</span>
                                                    </div>
                                                    <div class="min-w-fit-content ms-3">
                                                        <span
                                                            class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                                                            <i class="fe fe-user fs-18"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0">This Month</p>
                                                        <span class="fs-5">67</span>
                                                        <span class="fs-12 text-success ms-1"><i
                                                                class="ti ti-trending-up mx-1"></i>0.5%</span>
                                                    </div>
                                                    <div class="min-w-fit-content ms-3">
                                                        <span
                                                            class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                                                            <i class="fe fe-user fs-18"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0">Last Month</p>
                                                        <span class="fs-5">56</span>
                                                        <span class="fs-12 text-success ms-1"><i
                                                                class="ti ti-trending-up mx-1"></i>0.5%</span>
                                                    </div>
                                                    <div class="min-w-fit-content ms-3">
                                                        <span
                                                            class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                                                            <i class="fe fe-user fs-18"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0">Policy</p>
                                                        <span class="fs-5">45</span>
                                                        <span class="fs-12 text-success ms-1"><i
                                                                class="ti ti-trending-up mx-1"></i>0.5%</span>
                                                    </div>
                                                    <div class="min-w-fit-content ms-3">
                                                        <span
                                                            class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                                                            <i class="fe fe-user fs-18"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endauth
@endsection
@section('scripts')
<script>

    $(document).ready(function() {
        $("#lodingTop").hide();
    });

</script>
@endsection
