@extends('settings.settings')

@section('title')
    مراكز العمل
@endsection
@section('settings-active-stations')
    active
@endsection
@section('settings-content')
    <div class="wrapper-two">
        <h3 class="title-main">تعديل المركز</h3>
        <form class="row g-4 needs-validation" novalidate>
            <div class="col-md-2">
                <label for="validationCustom02" class="form-label">رقم</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom02" class="form-label">المركز</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-2">
                <label for="validationCustom04" class="form-label">المدينة</label>
                <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">اختر</option>
                    <option value="0">زليتن</option>
                    <option value="1">طرابلس</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
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
                    <th>المركز</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="d-flex justify-content-center align-items-center">
                        <a href="edit_station.html" class="edit">
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
                        <a href="edit_station.html"  id="edit" class="edit">
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
