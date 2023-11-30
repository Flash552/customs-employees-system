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

@section("scripts")
    <script>
        document.onload = () => {
            let item = document.querySelector('.nav-link a[href="type_emp"]');
            if (item != null){
                item.click();
            }
        }
    </script>
@endsection
