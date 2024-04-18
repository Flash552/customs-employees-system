@extends("layouts.master")

@section('title')
    إدارة المؤهلات العملية و الدورات
@endsection
@section('active_cert')
    active
@endsection
@section('content')
<h3 class="title-main">إدارة المؤهلات و الدورات</h3>
<hr>

            <div class="wrapper-two mb-5" dir="rtl" >
                <form class="row g-4 needs-validation" novalidate>
                    <div class="col-1 addemp">
                        <a class="add" href="{{route('certs.create')}}">إضافة</a>
                        <!-- <a href="" class="search">بحث</a> -->
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom02" class="form-label">رقم الموظف</label>
                        <input type="text" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom01" class="form-label">الرقم الوطني</label>
                        <input type="text" class="form-control" id="validationCustom01"  required>
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

                    <div class="col-1 addemp">
                        <!-- <a class="add" href="{{route('certs.create')}}">إضافة</a> -->
                        <a href="" class="search">بحث</a>
                    </div>
                </form>
            </div>


            <table id="example"  dir="rtl" class="table text-end  col-12  pt-5 m-3" style="width:95%"  dir="rtl" >
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">الدرجة الوظيفية</th>
                        <th class="text-center">المؤهل العلمي</th>
                        <th class="text-center">الرتبة</th>
                        <th class="text-center">عرض المؤهل العملي</th>
                        <th class="text-center">الدورات</th>
                        <th class="text-center">عرض الدورة</th>
                        <th class="text-center">ملاحظة</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print">
                                <i class="fa-solid fa-print"></i>
                            </a>
                            <a href="edit_emp.html" class="edit">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <form action="../../PHP/script.php" method="POST">
                                <button type="submit" style="border:none; outline:none" class="delete" name="Delete" value="1">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                        <td>1</td>
                        <td>جهاد شرع الله</td>
                        <td>اعزب</td>
                        <td>ذكر</td>
                        <td>ليسبلس</td>
                        <td>1</td>

                    </tr>
                    <tr>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print">
                                <i class="fa-solid fa-print"></i>
                            </a>
                            <a href="edit_emp.html" class="edit">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <form action="../../PHP/script.php" method="POST">
                                <button type="submit" style="border:none; outline:none" class="delete" name="Delete" value="1">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                        <td>2</td>
                        <td>علي</td>
                        <td>ALI01</td>
                        <td>ali@gmail.com</td>
                        <td>922502219</td>
                        <td>مشرف</td>

                    </tr>
                    </tbody>
                </table>


@endsection
