@extends('settings.settings')

@section('title')
    الشريحة
@endsection
@section('settings-active-jop')
    active
@endsection
@section('settings-content')
    <div class="wrapper-two">
        <h3 class="title-main">تعديل المسمى الوظيفي</h3>
        <form class="row g-4 needs-validation" novalidate>
            <div class="col-md-2">
                <label for="validationCustom02" class="form-label">رقم</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-2">
                <label for="validationCustom02" class="form-label">المسمى الوظيفي</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-success" type="submit">حفظ</button>
            </div>
        </form>

        <hr>
        <div class="box-table">
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>الرقم</th>
                    <th>المسمى الوظيفي</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="d-flex justify-content-center align-items-center">
                        <a href="jop_title/show" class="edit">
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
                </tr>
                <tr>
                    <td class="d-flex justify-content-center align-items-center">
                        <a href="jop_title/show"  id="edit" class="edit">
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
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
