@extends("layouts.master")

@section('title')
    إدارة الموظفين
@endsection
@section('active_user')
    active
@endsection
@section('content')
<h3 class="title-main">المستخدمين</h3>
<hr>
    <div class="" >
        <div class="">
            <div class="wrapper-two "dir="rtl">
                <form class="row g-4 needs-validation" novalidate>
                <div class="col-md-3 addemp">
                       <!-- <a href="" class="search">بحث</a> -->
                        <a class="add me-5" href="users/create">إضافة مستخدم</a>
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom01" class="form-label">اسم المستخدم</label>
                        <input type="text" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom01" class="form-label">الإسم</label>
                        <input type="text" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-2 addemp">
                       <a href="" class="search">بحث</a>
                        <!-- <a class="add me-5" href="users/create">إضافة مستخدم</a> -->
                    </div>
                </form>
            </div>

            <table id="example"  dir="rtl" class="table text-end  col-12  pt-5 m-3" style="width:95%"  dir="rtl" >
        <thead>
            <tr >
                        <th class="text-center">#</th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
        <tr>
                        <th class="text-center">
                                    <a href="" class="edit">
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
                        </th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">اسم المستخدم</th>
            </tr>
                    </tbody>

            </table>
        </div>
    </div>
@endsection
