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

            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
            {{ $error }}
            </div>

            @endforeach

    </div>
@endif
<h3 class="title-main">إدارة الموظفين</h3>
<hr>
    <!-- <div class="wrapper-two"> -->
<div class="row ">
            <div class="wrapper-two  m-5 ">
                @if (Session::has('notFound'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('notFound') }}
                    </div>
                @endif
                <form action="{{ route('employees.show', -1) }}" method="POST" class="row g-4">
                    @csrf
                    @method('GET')
                    <div class="col-md-3 mt-5 pt-2 text-end">
                        <button class="btn btn-warning" type="button" data-bs-toggle="modal"
                            data-bs-target="#EmpSearch">بحث متقدم</button>
                        <button class="btn btn-primary" type="submit">بحث</button>
                    </div>

                    <div class="col-md-2 text-end">

                        <label for="validationCustom02" class="form-label ">رقم الموظف</label>
                        <input type="text" name="PID_emp" value="{{old('PID_emp')}}" class="form-control" id="validationCustom02">
                    </div>
                    <div class="col-md-2 text-end">
                        <label for="validationCustom01" class="form-label">الرقم الوطني</label>
                        <input type="text" name="national_number" class="form-control" id="validationCustom01">
                    </div>
                    <div class="col-md-3 text-end">
                        <label for="validationCustom01" class="form-label">الإسم</label>
                        <input type="text" name="name" class="form-control" id="validationCustom01">
                    </div>

                    <div class="col-md-2    addemp text-center">
                        <!-- <button href="employees/create" class="btn btn-primary" type="submit">بحث</button> -->
                        <a class="add " href="employees/create">إضافة موظف</a>

                    </div>
                </form>
                @include('employees.modal.search_advanced_emp')
            </div>
            <!-- <div class="card-header">
                <h1 class="title">كل الموظفين</h1>
                <div class="card-btn">
                    <button class="btn btn-success">اختر</button>
                    <button class="btn btn-dark">تحديد الكل</button>
                    <button class="btn btn-primary">طباعة</button>
                    <a href="{{ route('certs.index') }}" class="btn btn-danger">عرض المؤهل العلمي</a>
                    <a href="{{ route('absence.index') }}" class="btn btn-warning">عرض سجل الغياب</a>
                    {{--                    <button href="">تحديد الكل</button> --}}
                </div>
                <a class="add" href="employees/create">إضافة موظف</a>
            </div> -->






            <table id="empTable" class="table table-striped col-12  pt-5 m-3" style="width:50wv"  dir="rtl" >
        <thead>
            <tr>
                <!-- <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th> -->
                <th>#</th>
                            <th>الرقم</th>
                            <th>الإسم</th>
                            <th>الحالة الإجتماعية</th>
                            <th>الجنس</th>
                            <th>اسم الأم</th>
                            <th>الدرجة الوظيفية او الرتبة</th>
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
                            <th>تاريخ القرار</th>
                            <th>رقم القرار</th>
                            <th>ملاحظة</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($employes as $employee)
                            <tr>
                                <!-- <td>
                                    <form action="">
                                        <input type="checkbox" value="true" >
                                        <input type="checkbox" value="true" class="d-none">
                                    </form>
                                </td> -->
                                <td >

                                    <!-- <a href="{{ route('employees.print', $employee->id_emp) }}" class="edit print h-100">
                                        <i class="fa-solid fa-print"></i>
                                    </a> -->
                                    <a href="{{ route('employees.edit', $employee->id_emp) }}" class="edit">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>

                                    <button type="button" class="delete" data-bs-toggle="modal" data-bs-target="#EmpDelete"
                                        data-bs-whatever="@mdo">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                    <button type="button" class="eye" data-bs-toggle="modal" data-bs-target="#EmpShow"
                                        data-bs-whatever="@mdo">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                </td>
                                <td>{{ $employee->PID_emp }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->marital_status->marital_state_title }}</td>
                                <td>{{ $employee->sex =="0"?"ذكر":"انثى" }}</td>
                                <td>{{ $employee->mother_name }}</td>
                                <td>{{ $employee->rank->title_rank }}</td>
                                <td>{{ $employee->stateEmp->title_state }}</td>
                                <td>{{ $employee->station->name_station }}</td>
                                <td>{{ $employee->start_date }}</td>
                                <td>{{ $employee->birthdate }}</td>
                                <td>{{ $employee->last_premotion_date }}</td>
                                <td>{{ $employee->id_number }}</td>
                                <td>{{ $employee->passport_number }}</td>
                                <td>{{ $employee->national_number }}</td>
                                <td>{{ $employee->start_duty_date }}</td>
                                <td>{{ $employee->id_jop }}</td>
                                <td>{{ $employee->decision_date }}</td>
                              <td>{{ $employee->decision_number }}</td>
                              <td></td>






                                @include('employees.modal.show_emp')
                                @include('employees.modal.delete_emp')
                            </tr>
                        @endforeach
        </tbody>
        <!-- <tfoot>
            <tr>
            <th>#</th>
                            <th>الرقم</th>
                            <th>الإسم</th>
                            <th>الحالة الإجتماعية</th>
                            <th>الجنس</th>
                            <th>اسم الأم</th>
                            <th>الدرجة الوظيفية او الرتبة</th>
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
                            <th>تاريخ القرار</th>
                            <th>رقم القرار</th>
                            <th>ملاحظة</th>
            </tr>
        </tfoot> -->
            </table>
            </div>
    <!-- </div> -->

@endsection

@section('scripts')
    <script>
        new DataTable('#empTable', {
            columnDefs: [
                {"visible": false, "targets": [3, 4, 5, 9, 12, 13, 14]} // Specify the indices of the columns you want to hide
            ],
            layout: {
                topStart: {
                    buttons: [ 'excel', 'print', 'colvis' ]
                }
            },scrollX: true


        });
    </script>
    <!-- <script>
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
                if (b.classList.contains("selected-all")) {
                    _selectedAll();
                } else if (b.classList.contains("print-selected")) {
                    form_emp.setAttribute("action", "{{ route('employees.printAll', 0) }}")
                    _submit();
                } else if (b.classList.contains("btn-show-cert")) {
                    if (count_checked == 1) {
                        let id_check = document.querySelector("input.check_emp:checked").value;
                        form_emp.setAttribute("action", "{{ route('certs.show', 0) }}")
                        _submit();
                    }
                } else if (b.classList.contains("btn-show-absence")) {
                    if (count_checked == 1) {
                        let id_check = document.querySelector("input.check_emp:checked").value;
                        form_emp.setAttribute("action", "{{ route('absence.show', 0) }}")
                        _submit();
                    }
                }
            })
        })

        form_emp.addEventListener("submit", () => {
            if (count_checked == 0) {
                e.preventDefault();
            }
        })

        function _selectedAll() {
            inputs.forEach(input => {
                input.checked = true
            })
            _countCheck();
            _disableButton();
        }

        function _submit() {
            if (count_checked > 0) {
                form_emp.submit();
            }
        }

        function _countCheck() {
            count_checked = document.querySelectorAll("input.check_emp:checked").length
        }

        function _disableButton() {
            document.querySelectorAll('.card-btn .ds-all')
                .forEach(btn => {
                    if (count_checked > 1) {
                        btn.classList.toggle("disabled-btn")
                    } else {
                        btn.classList.remove("disabled-btn")
                    }
                })
        }
    </script> -->
@endsection
