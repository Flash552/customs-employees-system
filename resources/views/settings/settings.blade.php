@extends("layouts.master")

@section('title')
    الإعدادات
@endsection
@section('active_settings')
    active
@endsection
@section('content')
    <div class="wrapper-two">
        <h3 class="title-main">الإعدادات</h3>
        <hr>
        <div class="content-wrapper">
            @include('layouts.settings-nav')
            @yield('settings-content')
        </div>
    </div>
@endsection


