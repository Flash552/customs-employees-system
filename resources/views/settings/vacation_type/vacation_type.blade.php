@extends('settings.settings')

@section('title')
    vacation
@endsection
@section('settings-active-vacation')
    active
@endsection
@section('settings-content')
<div class="wrapper-two">
    <h3 class="title-main">إضافة انواع الاجازات</h3>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form method="post" action="" class="row g-4 needs-validation" novalidate>
        @csrf
        <div class="col-md-2">
            <label for="validationCustom02" class="form-label">رقم</label>
            <input name = 'id_type_emp' type="text" class="form-control" id="validationCustom02" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-2">
            <label for="validationCustom02" class="form-label">نوع الإجازة</label>
            <input name='title_type' type="text" class="form-control" id="validationCustom02" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">إضافة</button>
        </div>
    </form>
    <hr>
    <div class="box-table">
        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>الرقم</th>
                <th>نوع الإجازة</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="d-flex justify-content-center align-items-center">
                        <!-- Button to Open the Modal -->
                        <button type="button" class="edit" data-bs-toggle="modal" data-bs-target="#VacationEdit" data-bs-whatever="@mdo">
                            <i class="fa-solid fa-edit"></i>
                        </button>
                        <button type="button" class="delete" data-bs-toggle="modal" data-bs-target="#VacationDelete" data-bs-whatever="@mdo">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                @include('settings.vacation_type.modal.edit_vacation_type')
                @include('settings.vacation_type.modal.delete_vacation_type')


            </tbody>
        </table>
    </div>
</div>

@endsection

