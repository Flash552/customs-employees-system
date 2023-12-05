@extends('settings.settings')

@section('title')
    types
@endsection
@section('settings-active-type')
    active
@endsection
@section('settings-content')
<div class="wrapper-two">
    <h3 class="title-main">إضافة انواع الموظفين</h3>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form method="post" action="{{route("type_emp.store")}}" class="row g-4 needs-validation" novalidate>
        @csrf
        <div class="col-md-2">
            <label for="validationCustom02" class="form-label">رقم</label>
            <input name = 'id_type_emp' type="text" class="form-control" id="validationCustom02" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-2">
            <label for="validationCustom02" class="form-label">النوع</label>
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
                <th>النوع</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($types as $type )
                <tr>
                    <td class="d-flex justify-content-center align-items-center">
                        <!-- Button to Open the Modal -->
                        <button type="button" class="edit" data-bs-toggle="modal" data-bs-target="#TypeEdit{{$type->id_type_emp}}" data-bs-whatever="@mdo">
                            <i class="fa-solid fa-edit"></i>
                        </button>
                        <button type="button" class="delete" data-bs-toggle="modal" data-bs-target="#TypeDelete{{$type->id_type_emp}}" data-bs-whatever="@mdo">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </td>
                    <td>{{$type->id_type_emp}}</td>
                    <td>{{$type->title_type}}</td>
                </tr>
                @include('settings.type_emp.modal.edit_type')
                @include('settings.type_emp.modal.delete_type')
                @endforeach


            </tbody>
        </table>
    </div>
</div>

@endsection

