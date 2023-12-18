@extends("layouts.master")

@section('title')
    إدارة الموظفين
@endsection
@section('active_emp')
    active
@endsection

@section('content')
    <div class="wrapper-two">
        <h3 class="title-main">إدارة الموظفين</h3>
        <hr>
        <div class="content-wrapper h-100">
            <div class="wrapper-two">
                @if(Session::has('notFound'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('notFound') }}
                    </div>
                @endif
                <form action="{{route('employees.show',-1)}}" method="POST" class="row g-4" >
                    @csrf
                    @method('GET')
                    <div class="col-md-2">
                        <label for="validationCustom02" class="form-label">رقم الموظف</label>
                        <input type="text" name="PID_emp" value="" class="form-control" id="validationCustom02">
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom01" class="form-label">الرقم الوطني</label>
                        <input type="text" name="national_number" class="form-control" id="validationCustom01">
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01" class="form-label">الإسم</label>
                        <input type="text" name="name" class="form-control" id="validationCustom01">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">بحث</button>
                        <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#EmpSearch">بحث متقدم</button>
                    </div>
                </form>
                @include('employees.modal.search_advanced_emp')
            </div>
            <div class="card-header">
                <h1 class="title">كل الموظفين</h1>
                <div class="card-btn">
                    <button class="btn btn-success">اختر</button>
                    <button class="btn btn-dark selected-all">تحديد الكل</button>
                    <button type="submit" class="btn btn-primary print-selected">طباعة</button>
                    <button class="btn btn-danger btn-show-cert ds-all">عرض المؤهل العلمي</button>
                    <button class="btn btn-warning btn-show-absence ds-all">عرض سجل الغياب</button>
                    <button class="btn btn-info btn-show-absence ds-all">نقل</button>
                    <button class="btn btn-success btn-show-absence ds-all">تسجيل غياب</button>
{{--                    <button href="">تحديد الكل</button>--}}
                </div>
                <a class="add" href="employees/create">إضافة موظف</a>
            </div>
            <div class="box-table">
                <form id="checked" action="" method="GET">
                    @csrf
                    @method("GET")
                    <table >
                        <thead>
                            <tr>
                            <th>اختر</th>
                            <th>#</th>
                            <th>الرقم</th>
                            <th>الإسم</th>
                            <th>الحالة الإجتماعية</th>
                            <th>الجنس</th>
                            <th>اسم الأم</th>
                            <th>الدرجة الوظيفية</th>
                            <th>المؤهل العلمي</th>
                            <th>الرتبة</th>
                            <th>حالة العمل</th>
                            <th>جهة العمل</th>
                            <th>تاريخ التعيين</th>
                            <th>تاريخ الميلاد</th>
                            <th>تاريخ اخر ترقية</th>
                            <th>رقم البطاقة</th>
                            <th>رقم الجواز</th>
                            <th>الرقم الوطني</th>
                            <th>تاريخ المباشرة</th>
                            <th>الشريحة</th>
                            <th>مدة الإستحقاق</th>
                            <th>الاستحقاق القادم</th>
                            <th>تاريخها</th>
                            <th>سببها</th>
                            <th>تاريخ القرار</th>
                            <th>رقم القرار</th>
                            <th>صورة شخصية</th>
                            <th>الصفة</th>
                            <th>ملاحظة</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($employes as $employee )
        {{--                            @continue($employee->id_emp == 1)--}}
                                <tr>
                                    <td class="text-center">
                                        <input type="checkbox" name="check[]" class="check_emp" value="{{$employee->id_emp}}" style="width: 16px; height: 16px;    ">
                                    </td>
                                    <td class="d-flex justify-content-center align-items-center">

                                        <a href="{{route('employees.print', $employee->id_emp)}}" class="edit print h-100" >
                                            <i class="fa-solid fa-print"></i>
                                        </a>
                                        <a href="{{route('employees.edit', $employee->id_emp)}}" class="edit">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>

                                        <button  type="button" class="delete" data-bs-toggle="modal" data-bs-target="#EmpDelete" data-bs-whatever="@mdo">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                        <button type="button" class="eye" data-bs-toggle="modal" data-bs-target="#EmpShow" data-bs-whatever="@mdo">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                    </td>
                                    <td>{{$employee->PID_emp}}</td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->marital_status}}</td>
                                    <td>{{$employee->sex}}</td>
                                    <td>{{$employee->mother_name}}</td>
                                    <td>{{$employee->id_rank}}</td>
                                    <td>----</td>
                                    <td>{{$employee->id_rank}}</td>
                                    <td>{{$employee->id_state}}</td>
                                    <td>{{$employee->id_station}}</td>
                                    <td>{{$employee->start_date}}</td>
                                    <td>{{$employee->birthdate}}</td>
                                    <td>{{$employee->last_premotion_date}}</td>

                                    <td>{{$employee->id_number}}</td>
                                    <td>{{$employee->passport_number}}</td>
                                    <td>{{$employee->national_number}}</td>
                                    <td>{{$employee->start_duty_date}}</td>
                                    <td>{{$employee->id_jop}}</td>
                                    <td>-------------------</td>
                                    <td>-------------------</td>
                                    <td>-------------------</td>
                                    <td>-------------------</td>
                                    <td>{{$employee->decision_date}}</td>
                                    <td>{{$employee->decision_number}}</td>
                                    {{-- <td>{{$employee->id_emp}}</td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->id_emp}}</td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->id_emp}}</td>
                                    <td>{{$employee->name}}</td> --}}
                                    <td>اعزب</td>
                                    <td>ذكر</td>
                                    <td>ليسبلس</td>
                                    <td>1</td>

                                    @include('employees.modal.show_emp')
                                    @include('employees.modal.delete_emp')
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
            </div>

        </div>
    </div>

@endsection

@section('scripts')
    <script>
        let form_emp = document.querySelector('#checked');
        let inputs = document.querySelectorAll('.check_emp');
        let count_checked = document.querySelectorAll("input.check_emp:checked").length;
        let btn = document.querySelectorAll('.card-btn .btn');

        inputs.forEach((input, index) => {
            input.addEventListener("click", () => {
                _countCheck();
                _disableButton();
            })
        })
        btn.forEach(b => {
            b.addEventListener("click", () => {
                if(b.classList.contains("selected-all")){
                    _selectedAll();
                }
                else if(b.classList.contains("print-selected")) {
                    form_emp.setAttribute("action", "{{route('employees.printAll',0)}}")
                    _submit();
                }
                else if(b.classList.contains("btn-show-cert")) {
                    if(count_checked == 1){
                        let id_check = document.querySelector("input.check_emp:checked").value;
                        form_emp.setAttribute("action", "{{route('certs.show', 0)}}")
                        _submit();
                    }
                }
                else if(b.classList.contains("btn-show-absence")) {
                    if(count_checked == 1){
                        let id_check = document.querySelector("input.check_emp:checked").value;
                        form_emp.setAttribute("action", "{{route('absence.show',0)}}")
                        _submit();
                    }
                }
            })
        })

        form_emp.addEventListener("submit", () => {
            if(count_checked == 0){
                e.preventDefault();
            }
        })
        function _selectedAll(){
            inputs.forEach(input => {
                input.checked = true
            })
            _countCheck();
            _disableButton();
        }

        function _submit() {
            if(count_checked > 0){
                form_emp.submit();
            }
        }
        function _countCheck(){
            count_checked = document.querySelectorAll("input.check_emp:checked").length
        }
        function _disableButton(){
            document.querySelectorAll('.card-btn .ds-all')
                .forEach(btn => {
                    if(count_checked > 1){
                        btn.classList.toggle("disabled-btn")
                    }
                    else {
                        btn.classList.remove("disabled-btn")
                    }
                })
        }
    </script>
@endsection
