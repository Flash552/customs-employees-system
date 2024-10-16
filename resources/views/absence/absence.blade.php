@extends("layouts.master")

@section('title')
    سجل الغياب
@endsection
@section('active_absence')
    active
@endsection
@section('content')
<h3 class="title-main">سجل الغياب</h3>
<hr>
@include('absence.modal.add_absence');
            <div class="wrapper-two" dir="rtl">
                <form class="row g-4 needs-validation" novalidate>
                    <div class="col-2 addemp">
                        <!-- <button class="btn btn-primary" type="submit">بحث</button> -->
                        <a class="add" href="users/create" data-bs-toggle="modal" data-bs-target="#AbsenceAdd">إضافة سجل</a>

                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom01" class="form-label">رقم الموظف</label>
                        <input type="text" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom02" class="form-label">الإسم</label>
                        <input type="text" class="form-control" id="validationCustom02"  required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom03" class="form-label">من</label>
                        <input type="date" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom04" class="form-label">الى</label>
                        <input type="date" class="form-control" id="validationCustom04" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>

                    <div class="col-md-1 addemp">
                       <a href="" class="search">بحث</a>
                        <!-- <a class="add me-5" href="users/create">إضافة مستخدم</a> -->
                    </div>
                </form>
            </div>

            <table id="example"  dir="rtl" class="table text-end  col-12  pt-5 m-3" style="width:95%"  dir="rtl" >
                    <thead >
                    <tr class="sticky-top">
                        <th class="text-center">#</th>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">الإسم</th>
                        <th class="text-center">تاريخ بداية الغياب</th>
                        <th class="text-center">تاريخ نهاية الغياب</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="d-flex justify-content-center align-items-center">
                            <!-- <a href="#" class="edit print">
                                <i class="fa-solid fa-print"></i>
                            </a> -->
                            <button type="button" class="edit" data-bs-toggle="modal" data-bs-target="#AbsenceEdit" data-bs-whatever="@mdo">
                                <i class="fa-solid fa-edit"></i>
                            </button>
                            <button type="button" class="delete" data-bs-toggle="modal" data-bs-target="#AbsenceDelete" data-bs-whatever="@mdo">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </td>
                        <td>2</td>
                        <td>علي</td>
                        <td>ALI01</td>
                        <td>922502219</td>
                    </tr>
                    @include('absence.modal.edit_absence');
                    @include('absence.modal.delete_absence');
                    </tbody>
                </table>



@endsection

