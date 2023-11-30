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
                <h1 class="title">كل الموظفين</h1>
                <a href="employees/create">إضافة موظف</a>
            </div>
            <div class="box-table">
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
                    <tr>
                        <td class="text-center">
                            <form action="">
                                <input type="checkbox" style="width: 16px; height: 16px;    ">
                            </form>
                        </td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print h-100" >
                                <i class="fa-solid fa-print"></i>
                            </a>
                            <a href="employees/edit" class="edit">
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
                        <td class="text-center">
                            <form action="">
                                <input type="checkbox" style="width: 16px; height: 16px;    ">
                            </form>
                        </td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print h-100" >
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
                        <td class="text-center">
                            <form action="">
                                <input type="checkbox" style="width: 16px; height: 16px;    ">
                            </form>
                        </td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print h-100" >
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
                        <td class="text-center">
                            <form action="">
                                <input type="checkbox" style="width: 16px; height: 16px;    ">
                            </form>
                        </td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print h-100" >
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
                        <td class="text-center">
                            <form action="">
                                <input type="checkbox" style="width: 16px; height: 16px;    ">
                            </form>
                        </td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print h-100" >
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
                        <td class="text-center">
                            <form action="">
                                <input type="checkbox" style="width: 16px; height: 16px;    ">
                            </form>
                        </td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print h-100" >
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
                        <td class="text-center">
                            <form action="">
                                <input type="checkbox" style="width: 16px; height: 16px;    ">
                            </form>
                        </td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print h-100" >
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
                        <td class="text-center">
                            <form action="">
                                <input type="checkbox" style="width: 16px; height: 16px;    ">
                            </form>
                        </td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print h-100" >
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
                        <td class="text-center">
                            <form action="">
                                <input type="checkbox" style="width: 16px; height: 16px;    ">
                            </form>
                        </td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print h-100" >
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
                        <td class="text-center">
                            <form action="">
                                <input type="checkbox" style="width: 16px; height: 16px;    ">
                            </form>
                        </td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print h-100" >
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
                        <td class="text-center">
                            <form action="">
                                <input type="checkbox" style="width: 16px; height: 16px;    ">
                            </form>
                        </td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print h-100" >
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
                        <td class="text-center">
                            <form action="">
                                <input type="checkbox" style="width: 16px; height: 16px;    ">
                            </form>
                        </td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print h-100" >
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
                        <td class="text-center">
                            <form action="">
                                <input type="checkbox" style="width: 16px; height: 16px;    ">
                            </form>
                        </td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print h-100" >
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
                        <td class="text-center">
                            <form action="">
                                <input type="checkbox" style="width: 16px; height: 16px;    ">
                            </form>
                        </td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="#" class="edit print h-100" >
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
                        <td class="text-center">
                            <form action="">
                                <input type="checkbox" style="width: 16px; height: 16px;    ">
                            </form>
                        </td>
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

