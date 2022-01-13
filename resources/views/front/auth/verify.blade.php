@extends('front.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">تایید حساب کاربری</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            ایمیل فعالسازی برای شما ارسال شد
                        </div>
                    @endif

                         برای فعالسازی حساب کاربری نیاز به تایید ایمیل خود دارید. برای فعالسازی روی
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">لینک</button>
                        کلیک کنید
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
