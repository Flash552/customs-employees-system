@extends("layouts.master")
{{-- $jobTypes //  --}}
@section('title')
    إدارة الموظفين
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
    <div class="wrapper-two">
        <h3 class="title-main">إضافة الموظفين</h3>
        <hr>
        <div class="content-wrapper h-auto" >
            <div class="wrapper-two">
                <form method="post" action="{{route("employees.store")}}" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">رقم الموظف</label>
                        <input name="PID_emp" type="text" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
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
                    <div class="col-md-3">
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
                    <div class="col-md-3">
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
                    <div class="col-md-3">
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
                    <div class="col-md-3">
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
                    <div class="col-md-3">
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
                    <div class="col-md-3">
                        <label for="validationCustom01" class="form-label">الإسم</label>
                        <input name="name"  type="text" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom03" class="form-label">اسم الأم</label>
                        <input name="mother_name"  type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
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
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">رقم الهاتف</label>
                        <input name="phone"  type="text" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">الرقم الوطني</label>
                        <input name="national_number"  type="text" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">الحالة الإجتماعية</label>
                        <select name="marital_status" class="form-select" id="validationCustom04" required>
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
                        <input name="id_number"  type="text" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">رقم الجواز</label>
                        <input name="passport_number"  type="text" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ الميلاد</label>
                        <input name="birthdate"  type="date" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>



                    <div class="col-md-3">
                        <label for="validationCustom03" class="form-label">مجال الخبرة</label>
                        <input name="mother_name"  type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ بدء العمل في مجال الخبرة</label>
                        <input name="start_date"  type="date" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom03" class="form-label">اسم المصرف</label>
                        <input name="mother_name"  type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="validationCustom03" class="form-label">الفرع</label>
                        <input name="mother_name"  type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom03" class="form-label">رقم الحساب</label>
                        <input name="mother_name"  type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ التعين</label>
                        <input name="start_date"  type="date" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ أخر ترقية</label>
                        <input name="last_premotion_date"  type="date" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom03" class="form-label">الايميل</label>
                        <input name="mother_name"  type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ المباشرة</label>
                        <input name="start_duty_date"  type="date" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">تاريخ القرار</label>
                        <input name="decision_date"  type="date" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">رقم القرار</label>
                        <input name="decision_number"  type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>


                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">الصفة</label>
                        <input name=""  type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">صورة شخصية</label>
                        <input name=""  type="file" class="form-control" aria-label="file example" required>
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
                        <input name=""  class="btn btn-success ms-2" type="submit" name=""  value="إضافة ثم إضافة دورة">
                        <input name=""  class="btn btn-primary" type="submit" name=""  value="اضافة">
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
