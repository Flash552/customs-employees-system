@extends('settings.settings')

@section('title')
    الشريحة
@endsection
@section('settings-active-marital_status')
    active
@endsection
@section('settings-content')
    <div class="wrapper-two">
        <h3 class="title-main">إضافة حالة اجتماعية</h3>
        <form method="post"  action="{{route("marital_status.store")}}" class="row g-4 needs-validation" novalidate>
            @csrf
            {{-- <div class="col-md-2">
                <label for="validationCustom02" class="form-label">رقم</label>
                <input name="id_marital_state" type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div> --}}

            <div class="col-md-2">
                <label for="validationCustom02" class="form-label">الحالة الاجتماعية </label>
                <input name="marital_state_title" type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-12">
                <input class="btn btn-primary" name="add" type="submit" value="إضافة">
                <input class="btn btn-success" name="search" type="submit" value="بحث">
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
                @foreach ($marital_status as $marital_state )
                    <tr>
                        <td class="d-flex justify-content-center align-items-center">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="edit" data-bs-toggle="modal" data-bs-target="#marital_stateEdit{{$marital_state->id_marital_state}}" data-bs-whatever="@mdo">
                                <i class="fa-solid fa-edit"></i>
                            </button>
                            <button type="button" class="delete" data-bs-toggle="modal" data-bs-target="#marital_stateDelete{{$marital_state->id_marital_state}}" data-bs-whatever="@mdo">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </td>
                        <td>{{$marital_state->id_marital_state}}</td>
                        <td>{{$marital_state->marital_state_title}}</td>
                    </tr>
                    @include('settings.marital_status.modal.edit_marital_status')
                    @include('settings.marital_status.modal.delete_marital_status')
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
