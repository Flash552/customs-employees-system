@extends("layouts.master")

@section('title')
    إدارة الموظفين
@endsection
@section('active_emp')
    active
@endsection
@section('content')
    <div class="wrapper-two">
        <h3 class="title-main fc-edit">تعديل الموظف</h3>
        <div class="content-wrapper h-auto" >
            <div class="wrapper-two">
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">رقم الموظف</label>
                        <input type="text" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01" class="form-label">الإسم</label>
                        <input type="text" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom03" class="form-label">اسم الأم</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">الجنس</label>
                        <select class="form-select" id="validationCustom04" required>
                            <!-- <option selected disabled value="">اختر</option> -->
                            <option selected value="0">ذكر</option>
                            <option value="1">انثى</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">الرقم الوطني</label>
                        <input type="text" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">الحالة الإجتماعية</label>
                        <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">اختر</option>
                            <option value="0">اعزب</option>
                            <option value="1">متزوج</option>
                            <option value="2">مطلق</option>
                            <option value="3">ارملة</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">رقم البطاقة</label>
                        <input type="text" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">رقم الجواز</label>
                        <input type="text" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ الميلاد</label>
                        <input type="date" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">الدرجة الوظيفية</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">الرتبة</label>
                        <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">اختر</option>
                            <option value="0">اعزب</option>
                            <option value="1">متزوج</option>
                            <option value="2">مطلق</option>
                            <option value="3">ارملة</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">حالة العمل</label>
                        <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">اختر</option>
                            <option value="0">اعزب</option>
                            <option value="1">متزوج</option>
                            <option value="2">مطلق</option>
                            <option value="3">ارملة</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">جهة العمل</label>
                        <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">اختر</option>
                            <option value="0">اعزب</option>
                            <option value="1">متزوج</option>
                            <option value="2">مطلق</option>
                            <option value="3">ارملة</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ التعين</label>
                        <input type="date" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ أخر ترقية</label>
                        <input type="date" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ المباشرة</label>
                        <input type="date" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">المؤهل العلمي</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">المؤهل</label>
                        <input type="file" class="form-control" aria-label="file example" required>
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ القرار</label>
                        <input type="date" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">رقم القرار</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">الشريحة</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">مدة الإستحقاق</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">الإستحقاق القادم</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخها</label>
                        <input type="date" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationTextarea" class="form-label">سببها</label>
                        <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                        <div class="invalid-feedback">
                            Please enter a message in the textarea.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">الصفة</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">صورة شخصية</label>
                        <input type="file" class="form-control" aria-label="file example" required>
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationTextarea" class="form-label">ملاحظة</label>
                        <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                        <div class="invalid-feedback">
                            Please enter a message in the textarea.
                        </div>
                    </div>
                    <!-- <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                          You must agree before submitting.
                        </div>
                      </div>
                    </div> -->
                    <div class="col-12">
                        <input class="btn btn-success" type="submit" name="" value="تعديل">
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
