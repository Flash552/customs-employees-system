@extends("layouts.master")

@section('title')
    الرئيسية
@endsection
@section('active_dash')
    active
@endsection
@section('content')
    <h3 class="title-main">الرئيسية</h3>
    <hr>
    <div class="wrapper-two ">
        <div class="wrapper">
            <div class="d-flex m-2 justify-content-around align-items-center rounded box-s">
                <div class="info">
                    <h1>2340</h1>
                    <p>الموظفين</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-user fa-2x"></i>
                </div>
            </div>
            <div class="d-flex m-2 justify-content-around align-items-center rounded box-s">
                <div class="info">
                    <h1>2340</h1>
                    <p>المستخدمين</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-users fa-2x"></i>
                </div>
            </div>
            <div class="d-flex m-2 justify-content-around align-items-center rounded box-s">
                <div class="info">
                    <h1>2340</h1>
                    <p>سلة المحذوفات</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-trash-can fa-2x"></i>
                </div>
            </div>
            <div class="d-flex m-2 justify-content-around align-items-center rounded box-s">
                <div class="info">
                    <h1>2340</h1>
                    <p>employees</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-users fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
@endsection
