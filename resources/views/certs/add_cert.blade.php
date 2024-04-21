@extends("layouts.master")

@section('title')
    إدارة المؤهلات العملية و الدورات
@endsection
@section('active_cert')
    active
@endsection
@section('content')
    <div class="wrapper-two" dir="rtl">
        <h3 class="title-main">إضافة مؤهل عملي او دورة</h3>
        <form class="row g-4 needs-validation certs mt-4" novalidate>
            <div class="row g-2"  style="width: 500px;     margin: 0 auto;">
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">الرقم</label>
                    <input type="number" name="id_cert_0" class="form-control" id="validationCustom01" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">رقم الموظف</label>
                    <input type="number" name="id_emp_0" class="form-control" id="validationCustom02" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom03" class="form-label">الإسم</label>
                    <input type="text" name="name_emp_0" class="form-control" id="validationCustom03"  required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">العنوان</label>
                    <input type="text" name="title_cert_0" class="form-control" id="validationCustom04" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">النوع</label>
                    <select name = 'id_type_cert_0' class="form-select" id="validationCustom05" required>
                        <option selected disabled>اختر</option>
                        <option value="">دورة</option>
                        <option value="">مؤهل علمي</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">الملف</label>
                    <input type="file" name="file_0" class="form-control" aria-label="file example" required>
                    <div class="invalid-feedback">Example invalid form file feedback</div>
                </div>
                <div class="row addemp  " style="width: 500px;     margin: 40px 0 0 13px !important;">
                       <!-- <a href="" class="search">بحث</a> -->
                        <a class="add p-2 text-center" href="users/create">إضافة </a>
                    </div>
            </div>

        </form>
    </div>
@endsection


