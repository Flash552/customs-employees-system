@extends('settings.settings')

@section('title')
    الحالة
@endsection
@section('settings-active-status')
    active
@endsection
@section('settings-content')
    <div class="wrapper-two">
        <h3 class="title-main">إضافة حالات الموظفين</h3>
        <form method="post"  action="{{route("status_emp.store")}}" class="row g-4 needs-validation" novalidate>
        @csrf
        <div class="col-md-2">
                <label for="validationCustom02" class="form-label">رقم</label>
                <input name ="id_status" type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-2">
                <label for="validationCustom02" class="form-label">الحالة</label>
                <input name ="title_status" type="text" class="form-control" id="validationCustom02" required>
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
                    <th>الحالة</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($status as $state )
                    <tr>
                        <td class="d-flex justify-content-center align-items-center">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="edit" data-bs-toggle="modal" data-bs-target="#StateEdit{{$state->id_status}}" data-bs-whatever="@mdo">
                                <i class="fa-solid fa-edit"></i>
                            </button>
                            <button type="button" class="delete" data-bs-toggle="modal" data-bs-target="#StateDelete{{$state->id_status}}" data-bs-whatever="@mdo">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </td>
                        <td>{{$state->id_status}}</td>
                        <td>{{$state->title_status}}</td>
                    </tr>
                    @include('settings.status_emp.modal.edit_state')
                    @include('settings.status_emp.modal.delete_state')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
