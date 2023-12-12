@extends("layouts.master")

@section('title')
    إدارة المؤهلات العملية و الدورات
@endsection
@section('active_cert')
    active
@endsection
@section('content')
    <div class="wrapper-two">
        <h3 class="title-main">إدارة المؤهلات و الدورات</h3>
        <hr>
        <div class="content-wrapper">
            <div class="wrapper-two">
                <form class="row g-4 needs-validation" novalidate>
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
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">بحث</button>
                    </div>
                </form>
            </div>
            <div class="card-header">
                <h1 class="title">كل المؤهلات العملية والدورات</h1>
                <a class="add" href="{{route('certs.create')}}">إضافة</a>
            </div>
            <div class="box-table">
                <table>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>الرقم</th>
                        <th>الإسم</th>
                        <th>الدرجة الوظيفية</th>
                        <th>المؤهل العلمي</th>
                        <th>الرتبة</th>
                        <th>عرض المؤهل العملي</th>
                        <th>الدورات</th>
                        <th>عرض الدورة</th>
                        <th>ملاحظة</th>
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
            </div>
        </div>
    </div>
@endsection
