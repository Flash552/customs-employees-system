@extends("layouts.master")

@section('title')
    إدارة الموظفين
@endsection
@section('active_user')
    active
@endsection
@section('content')
    <div class="wrapper-two">
        <h3 class="title-main">إضافة المستخدمين</h3>
        <hr>
        <div class="content-wrapper">
            <div class="wrapper-two">
                <form class="row g-4 needs-validation" novalidate>
                    <div class="col-md-2">
                        <label for="validationCustom01" class="form-label">اسم المستخدم</label>
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
                <h1 class="title">كل المستخدمين</h1>
                <a class="add" href="users/create">إضافة مستخدم</a>
            </div>
            <div class="box-table">
                <table>
                    <thead >
                    <tr class="sticky-top">
                        <th>#</th>
                        <th>الرقم</th>
                        <th>الإسم</th>
                        <th>اسم المستخدم</th>
                        <!-- <th>كلمة السر</th> -->
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="d-flex justify-content-center align-items-center">
                            <!-- <a href="#" class="edit print">
                                <i class="fa-solid fa-print"></i>
                            </a> -->
                            <a href="users/show" class="edit">
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
                        <td>JIHAD_LYX</td>
                        <!-- <td>922502218</td> -->
                    </tr>
                    <tr>
                        <td class="d-flex justify-content-center align-items-center">
                            <!-- <a href="#" class="edit print">
                                <i class="fa-solid fa-print"></i>
                            </a> -->
                            <a href="edit_user copy.html" class="edit">
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
                        <!-- <td>922502219</td>  -->
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
