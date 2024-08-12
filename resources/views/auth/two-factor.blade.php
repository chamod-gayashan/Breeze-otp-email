
@extends('layouts.custom-master1')

@section('styles')


@endsection
@section('content')
<div class="container-lg">
    <div class="row justify-content-center mt-4 mx-0">
        <div class="col-xl-4 col-lg-6">
            <div class="card shadow-none">
                <div class="card-body p-sm-6">
                    <div class="text-center">
                        <a href="{{url('/home')}}"><img src="{{ URL::asset('storage/logo/image.png')}}" class="header-brand-img" style="height: 80px;" alt="FAIRFIRST"></a>
                    </div><br>
                    <div class="text-center mb-4">
                        <h4 class="mb-1">Sample OTP Verfication</h4>
                        <p>Prototyp Testing Purpose only....!</p>
                    </div>
                    <div class="p-2 mb-4 text-sm text-center">
                        {{ new Illuminate\Support\HtmlString(__("Received an email with a login code? If not, click <a class=\"hover:underline\" href=\":url\">here</a>.", ['url' => route('verify.resend')])) }}
                    </div>

                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form method="POST" action="{{ route('verify.store') }}">
                        @csrf
                        <div>
                            <x-input-label for="two_factor_code" :value="__('OTP Code')" />
                            <x-text-input id="two_factor_code" class="form-control ms-0" type="text" name="two_factor_code" required autofocus />
                            <x-input-error :messages="$errors->get('two_factor_code')" class="mt-2" />
                        </div>
                        <div class="mt-4 flex align-items-center" style="text-align: center;">
                            <x-primary-button>
                                {{ __('Submit') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection


