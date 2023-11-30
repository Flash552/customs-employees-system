@extends("layouts.master")

@section('title')
    الحساب
@endsection
@section('active_profile')
    active
@endsection
@section('content')
    <h3 class="title-main">بيانات شخصية</h3>
    <hr>
    <div class="content-wrapper h-auto" >
        <div class="wrapper-two d-flex justify-content-around">
            <div class="image rounded-circle p-1" style="width: 200px;">
                <img style="max-width: 100%;" src="{{asset('assets/images/avatar.png')}}" alt="">
            </div>
            <div style="border: 0.5px solid grey; margin: 0 40px"></div>
            <form class="row g-4 needs-validation" novalidate>
                <div class="col-md-2">
                    <label for="validationCustom02" class="form-label">رقم المستخدم</label>
                    <input type="text" class="form-control" id="validationCustom02" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom02" class="form-label">رقم الموظف</label>
                    <input type="text" class="form-control" id="validationCustom02" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">الإسم</label>
                    <input type="text" class="form-control" id="validationCustom01"  required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">اسم المستخدم</label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">كلمة السر</label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-12 ">
                    <button class="btn btn-success" type="submit">حفظ</button>
                </div>
            </form>

        </div>
    </div>
@endsection

