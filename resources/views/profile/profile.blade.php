@extends("layouts.master")

@section('title')
    الحساب
@endsection
@section('active_profile')
    active
@endsection
@section('content')
    <h3 class="title-main">بيانات شخصية</h3>
    <!-- <hr> -->
    <!-- <div class="content-wrapper h-auto"> -->
        <div class="wrapper-two d-flex justify-content-around w-60 m-auto "  dir="rtl"  >

            <form class="row g-4 needs-validation me-5" novalidate>
                <div class="col-md-5">
                    <label for="validationCustom02" class="form-label">رقم المستخدم</label>
                    <input type="text" class="form-control" id="validationCustom02" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-5">
                    <label for="validationCustom02" class="form-label">رقم الموظف</label>
                    <input type="text" class="form-control" id="validationCustom02" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-5">
                    <label for="validationCustom01" class="form-label">الإسم</label>
                    <input type="text" class="form-control" id="validationCustom01"  required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-5">
                    <label for="validationCustom03" class="form-label">اسم المستخدم</label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">كلمة السر</label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-7 mt-5 ">
                    <button class="btn btn-success w-50 p-2" type="submit">حفظ</button>
                </div>
            </form>
            <!-- <div style="border: 0.5px solid grey; margin: 0 40px"></div> -->

            <div class="image rounded-circle p-1 ms-5 row" style="width: 250px;">
                <img style="max-width: 100%; padding: 0 0 0 17px; "  src="{{asset('assets/images/avatar.png')}}" alt="">
                <div class="row">
                <button class="btn btn-success mb-2 mt-3" type="submit">تحديث </button>
                <button class="btn btn-success" type="submit">حدف</button>

                </div>
            </div>
        </div>
    <!-- </div> -->
@endsection

