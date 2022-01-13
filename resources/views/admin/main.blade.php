@extends('admin.index')

@section('content')
    <div class="main-panel justify-content-center">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">پنل مدیریت</h4>
                    </div>
                </div>
            </div>
            @include('admin.users')

            <br>

            @include('admin.article')
        </div>
    </div>



@endsection
