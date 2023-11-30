<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.head')

</head>
<body dir="rtl">
    <div class="page">
        @include('layouts.sideBar')
        <div id="hide"></div>
        <div class="content">
            @include('layouts.main-headerBar')
            @yield('content')
        </div>
    </div>

    @include('layouts.footer-scripts')
</body>
</html>


