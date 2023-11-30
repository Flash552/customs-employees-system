@extends('settings.settings')

@section('title')
    types
@endsection
@section('settings-active-type')
    active
@endsection
@section('settings-content')
    <div class="wrapper-two">
        <h3 class="title-main">تعديل النوع</h3>
        <form class="row g-4 needs-validation" novalidate>
            <div class="col-md-2">
                <label for="validationCustom02" class="form-label">رقم</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-2">
                <label for="validationCustom02" class="form-label">النوع</label>
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
                    <th>النوع</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="d-flex justify-content-center align-items-center">
                        <a href="edit_type_emp.html" class="edit">
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
                        <a href="edit_type_emp.html"  id="edit" class="edit">
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

