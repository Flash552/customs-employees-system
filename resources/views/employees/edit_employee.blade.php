@extends("layouts.master")
{{-- $jobTypes //  --}}
@section('title')
    تعديل بيانات الموظف
@endsection
@section('active_emp')
    active
@endsection

@section('content')
    {{-- <div class="popup center">
        <div class="icon">
            <i class="fa fa-check"></i>
        </div>
        <div class="title">Success!!</div>
        <div class="description">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, porro.
        </div>
        <div class="dismiss-btn">
            <button>Dismiss</button>
        </div>
        <div class="center">
            <button id="open-popup-btn">Open Popup</button>
        </div>
    </div> --}}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>

            @endforeach

        </div>
    @endif
    <h3 class="title-main"> تعديل بيانات الموظف</h3>
    <div class="wrapper-two" dir="rtl">
        <div class="">
            <!-- <hr> -->

            <div class="wrapper-two">
                <form method="post" enctype="multipart/form-data" action="{{route("employees.update")}}"
                      class="row g-3 needs-validation" novalidate>
                    @csrf

                    <!-- بيانات شخصية -->
                    <!-- <hr class="my-4"> -->
                    <div class="row mt-3" style="width: 800px;     margin: 0 auto;">
                        <h4 class="mb-3">بيانات شخصية</h4>
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">الإسم</label>
                            <input  name="name" type="text" class="form-control" id="validationCustom01" value="{{$employee->name}}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">الرقم الوطني</label>
                            <input value="{{$employee->national_num}}" name="national_number"  type="number" class="form-control" id="validationCustom02"
                                   required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">المدينة</label>
                            <select name="id_city" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">اختر</option>
                                @foreach ($cities as $city )
                                    <option value="{{$city->id_city}}">{{$city->city_name}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">تاريخ الميلاد</label>
                            <input value="{{$employee->birthdate}}" name="birthdate"  type="date" class="form-control" id="validationCustom05" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">الجنس</label>
                            <select name="sex" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">اختر</option>
                                <option selected value="0">ذكر</option>
                                <option value="1">انثى</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">رقم الهاتف</label>
                            <input value="{{$employee->phone}}" name="phone"  type="number" class="form-control" id="validationCustom02" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        {{--//TODO add for --}}
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">الحالة الإجتماعية</label>
                            <select name="id_marital_state" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">اختر</option>
                                @foreach ($marital_status as $marital_state )
                                    <option
                                        value="{{$marital_state->id_marital_state}}">{{$marital_state->marital_state_title}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">رقم البطاقة</label>
                            <input value="{{$employee->id_number}}" name="id_number"  type="text" class="form-control" id="validationCustom02" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">رقم الجواز</label>
                            <input value="{{$employee->passport_number}}" name="passport_number"  type="text" class="form-control" id="validationCustom02"
                                   required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">بريد الكتروني</label>
                            <input value="{{$employee->emai}}" name="email"  type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">اسم الأم</label>
                            <input value="{{$employee->mother_name}}" name="mother_name"  type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">صورة شخصية</label>
                            <input  type="file" name="image"  id="image" class="form-control" aria-label="file example"
                                   required>
                            <div class="invalid-feedback">Example invalid form file feedback</div>
                        </div>
                    </div>
                    <!-- بيانات العمل -->
                    <div class="row" style="width: 800px;     margin: 0 auto;">
                        <hr class="my-4">
                        <h4 class="mb-3">بيانات العمل</h4>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">رقم الموظف</label>
                            <input value="{{$employee->PID_emp}}" name="PID_emp"  type="number" class="form-control" id="validationCustom02" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">نوع التوظيف</label>
                            <select name="id_type_emp" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">اختر</option>
                                @foreach ($typeEmps as $jobType )
                                    <option value="{{$jobType->id_type_emp}}">{{$jobType->title_type}}</option>
                                @endforeach

                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">الرتبة</label>
                            <select name="id_rank" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">اختر</option>
                                @foreach ($jobRanks as $jobRank )
                                    <option value="{{$jobRank->id_rank}}">{{$jobRank->title_rank}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">مكان العمل</label>
                            <select name="id_station" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">اختر</option>
                                @foreach ($stations as $station )
                                    <option value="{{$station->id_station}}">{{$station->name_station}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">المسمى الوظيفي</label>
                            <select name="id_jop" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">اختر</option>
                                @foreach ($jopTitles as $jobTitle )
                                    <option value="{{$jobTitle->id_jop}}">{{$jobTitle->title_jop}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">حالة العمل</label>
                            <select name="id_state" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">اختر</option>
                                @foreach ($status as $state )
                                    <option value="{{$state->id_state}}">{{$state->title_state}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">مجال الخبرة</label>
                            <input value="{{$employee->expertise}}" name="expertise"  type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">تاريخ بدء العمل في مجال الخبرة</label>
                            <input value="{{$employee->expertise_start_date}}" name="expertise_start_date"  type="date" class="form-control" id="validationCustom05"
                                   required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">تاريخ التعين</label>
                            <input value="{{$employee->start_date}}" name="start_date"  type="date" class="form-control" id="validationCustom05" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">تاريخ أخر ترقية</label>
                            <input value="{{$employee->last_premotion_date}}" name="last_premotion_date"  type="date" class="form-control" id="validationCustom05"
                                   required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">تاريخ المباشرة</label>
                            <input value="{{$employee->start_duty_date}}" name="start_duty_date"  type="date" class="form-control" id="validationCustom05"
                                   required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">تاريخ القرار</label>
                            <input value="{{$employee->decision_date}}" name="decision_date"  type="date" class="form-control" id="validationCustom05"
                                   required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">رقم القرار</label>
                            <input value="{{$employee->decision_number}}" name="decision_number"  type="text" class="form-control" id="validationCustom05"
                                   required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">الصفة</label>
                            <input value="" name="" type="text"  class="form-control" id="validationCustom05" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>

                    </div>


                    <!-- بيانات مالية -->
                    <div class="row" style="width: 800px;     margin: 0 auto;">
                        <hr class="my-4">
                        <h4 class="mb-3">بيانات مالية</h4>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">اسم المصرف</label>
                            <input value="{{$employee->bank_name}}" name="bank_name" type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">الفرع</label>
                            <input value="{{$employee->bank_branch}}" name="bank_branch" type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">رقم الحساب</label>
                            <input value="{{$employee->bank_account_id}}" name="bank_account_id" type="text" class="form-control" id="validationCustom03"
                                   required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                    </div>


                    <div class="row mt-3" style="width: 800px;     margin: 0 auto;">
                        <label for="validationTextarea" class="form-label">ملاحظة</label>
                        <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea"
                                  required></textarea>
                        <div class="invalid-feedback">
                            Please enter a message in the textarea.
                        </div>
                    </div>
                    <!-- <div class="col-12">
                      <div class="form-check">
                        <input value="" name=""  class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                          You must agree before submitting.
                        </div>
                      </div>
                    </div> -->
                    <div class="row mt-5" style="width: 800px;     margin: 0 auto;">
                        <input value="" name="" class="btn btn-primary col-md-5 me-5" type="submit" name="" value="تعديل">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('employees.modal.success_add_emp')
@endsection
@section('scripts')
    <script>

        let list_type = document.querySelector('select[name="id_type_emp"]');
        let list_rank = document.querySelector('select[name="id_rank"]');
        list_type.addEventListener('change', (e) => {
            let type_value = e.target.value;
            list_rank.children.item(e.target.value);
            let list = @json($jobRanks);
            let ranks = list.filter((item) => item["id_type_emp"] == type_value);
            list_rank.innerHTML = '<option selected disabled value="">اختر</option>';
            ranks.forEach((e) => {
                list_rank.innerHTML += `
                        <option value="${e['id_rank']}">${e['title_rank']}</option>
                        `;
            })
        })
    </script>
@endsection
