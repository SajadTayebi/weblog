@extends('front.index')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-3 mb-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>ویرایش پروفایل کاربر</h3></div>

                <div class="card-body">
                    @include('front.layouts.message')
                    <form method="POST" action="{{ route('submit_profile', $user->id) }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">نام</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">آدرس ایمیل</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">پسورد</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">تکرار رمز عبور</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="captcha" class="col-md-4 col-form-label text-md-end">کد امنیتی: </label>
                            <div class="col-md-6 offset-md-4">
                                <div class="form-group@error('g-recaptcha-response') is-invalid@enderror"> {!! htmlFormSnippet() !!}

                                </div>
                                <button type="submit" class="btn btn-primary">
                                    ثبت نام
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
