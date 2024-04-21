@extends("layouts.master")

@section('title')
    إدارة المستخدمين
@endsection
@section('active_user')
    active
@endsection
@section('content')
    <div class="wrapper-two" dir="rtl">
        <h3 class="title-main">إضافة مستخدم</h3>
        <form class="row g-4 needs-validation mt-5" novalidate>
        <div class="row" style="width: 500px;     margin: 0 auto;">

            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">رقم المستخدم</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">رقم الموظف</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">الإسم</label>
                <input type="text" class="form-control" id="validationCustom01"  required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationCustom03" class="form-label">اسم المستخدم</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationCustom03" class="form-label">كلمة السر</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>

            <div class="row addemp  " style="width: 500px;     margin: 40px 0 0 13px !important;">
                       <!-- <a href="" class="search">بحث</a> -->
                        <a class="add p-2 text-center" href="users/create">إضافة مستخدم</a>
                    </div>
            </div>
        </form>
    </div>
@endsection
