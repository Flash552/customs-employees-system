@extends('layouts.master')

@section('title')
    إدارة الموظفين
@endsection
@section('active_emp')
    active
@endsection
@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="wrapper-two">
        <h3 class="title-main fc-edit">تعديل الموظف</h3>
        <div class="content-wrapper h-auto">
            <div class="wrapper-two">
                <form action="{{route('employees.update', $employee->id_emp)}}" method="POST"           
                    class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">رقم الموظف</label>
                        <input name="PID_emp" type="text" class="form-control"
                            id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">نوع التوظيف</label>
                        <select name="id_type_emp" class="form-select" id="validationCustom04" required>
                            <option selected disabled hidden value="">اختر</option>
                            @foreach ($typeEmps as $jobType)
                                <option @if ($jobType->id_type_emp === $employee->id_type_emp) selected @endif
                                    value="{{ $jobType->id_type_emp }}">{{ $jobType->title_type }}</option>
                            @endforeach

                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">الرتبة</label>
                        <select name="id_rank" class="form-select" id="validationCustom04" required>
                            <option selected disabled hidden value="">اختر</option>
                            @foreach ($jobRanks as $jobRank)
                                <option @if ($jobType->id_type_emp === $employee->id_type_emp) selected @endif value="{{ $jobRank->id_rank }}">
                                    {{ $jobRank->title_rank }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">المدينة</label>
                        <select name="id_city" class="form-select" id="validationCustom04" required>
                            <option selected disabled hidden value="">اختر</option>
                            @foreach ($cities as $city)
                                <option @if ($city->id_city === $employee->station->id_city) selected @endif value="{{ $city->id_city }}">
                                    {{ $city->city_name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">مكان العمل</label>
                        <select name="id_station" class="form-select" id="validationCustom04" required>
                            <option selected disabled hidden value="">اختر</option>
                            @foreach ($stations as $station)
                                <option @if ($station->id_station === $employee->id_station) selected @endif
                                    value="{{ $station->id_station }}">{{ $station->name_station }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01" class="form-label">الإسم</label>
                        <input name="name" value="{{ $employee->name }}" type="text" class="form-control"
                            id="validationCustom01" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom03" class="form-label">اسم الأم</label>
                        <input name="mother_name" value="{{ $employee->mother_name }}" type="text" class="form-control"
                            id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">الجنس</label>
                        <select name="sex" class="form-select" id="validationCustom04" required>
                           <option selected disabled value="">اختر</option> 
                            <option selected value="0">ذكر</option>
                            <option  value="1">انثى</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">رقم الهاتف</label>
                        <input name="phone" value="{{ $employee->phone }}" type="text" class="form-control"
                            id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom03" class="form-label">الايميل</label>
                        <input name="email"  type="text" value="{{ $employee->email }}" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">الرقم الوطني</label>
                        <input name="national_number" value="{{ $employee->national_number }}" type="text"
                            class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">الحالة الإجتماعية</label>
                        <select name="marital_status" class="form-select" id="validationCustom04" required>
                            <option selected disabled hidden value="">اختر</option>
                            <option @if ($employee->marital_status === "0") selected @endif value="0">اعزب</option>
                            <option @if ($employee->marital_status === "1") selected @endif value="1">متزوج</option>
                            <option @if ($employee->marital_status === "2") selected @endif value="2">مطلق</option>
                            <option @if ($employee->marital_status === "3") selected @endif value="3">ارملة</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">رقم البطاقة</label>
                        <input name="id_number" value="{{ $employee->id_number }}" type="text" class="form-control"
                            id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">رقم الجواز</label>
                        <input name="passport_number" value="{{ $employee->passport_number }}"  type="text"
                            class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ الميلاد</label>
                        <input name="birthdate" value="{{ $employee->birthdate }}" type="date" class="form-control"
                            id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>


                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">حالة العمل</label>
                        <select name="id_state" class="form-select" id="validationCustom04" required>
                            <option selected disabled hidden value="">اختر</option>
                            @foreach ($status as $state)
                                <option @if ($state->id_state=== $employee->id_state) selected @endif value="{{ $state->id_state }}">
                                    {{ $state->title_state }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
<div class="col-md-3">
                        <label for="validationCustom03" class="form-label">مجال الخبرة</label>
                        <input name="expertise"  type="text" value="{{ $employee->expertise }}" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ بدء العمل في مجال الخبرة</label>
                        <input name="expertise_start_date" value="{{ $employee->expertise_start_date }}" type="date" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom03" class="form-label">اسم المصرف</label>
                        <input name="bank_name"  type="text" value="{{ $employee->bank_name }}" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <label for="validationCustom03" class="form-label">الفرع</label>
                        <input name="bank_branch" value="{{ $employee->bank_branch }}" type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom03" class="form-label">رقم الحساب</label>
                        <input name="bank_account_id" value="{{ $employee->bank_account_id }}" type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ التعين</label>
                        <input name="start_date" value="{{ $employee->start_date }}" type="date"
                            class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ أخر ترقية</label>
                        <input name="last_premotion_date" value="{{ $employee->last_premotion_date }}" type="date"
                            class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ المباشرة</label>
                        <input name="start_duty_date" value="{{ $employee->start_duty_date }}" type="date"
                            class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                   
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ القرار</label>
                        <input name="decision_date" value="{{ $employee->decision_date }}" type="date" class="form-control"
                            id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">رقم القرار</label>
                        <input name="decision_number" value="{{ $employee->decision_number }}" type="text"
                            class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">المسمى الوظيفي</label>
                        <select name="id_jop" class="form-select" id="validationCustom04" required>
                            <option selected disabled hidden value="">اختر</option>
                            @foreach ($jopTitles as $jobTitle)
                                <option @if ($jobTitle->id_jop === $employee->id_jop) selected @endif value="{{ $jobTitle->id_jop }}">
                                    {{ $jobTitle->title_jop }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">صورة شخصية</label>
                        <input name="" type="file" class="form-control" aria-label="file example" required>
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
                                        <input name=""  class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">
                                          Agree to terms and conditions
                                        </label>
                                        <div class="invalid-feedback">
                                          You must agree before submitting.
                                        </div>
                                      </div>
                                    </div> -->
                    <div class="col-12">
                        <input name="" class="btn btn-success ms-2" type="submit" name=""
                            value="إضافة ثم إضافة دورة">
                        <input name="" class="btn btn-primary" type="submit" name="" value="اضافة">
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
