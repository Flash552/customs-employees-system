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
                <input name = 'title_type' type="text" class="form-control" id="validationCustom02" required>
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
{{--                    @foreach ($types as $type )--}}
{{--                    <tr>--}}
{{--                        <td class="d-flex justify-content-center align-items-center">--}}
{{--                            <!-- Button to Open the Modal -->--}}
{{--                            <button type="button" class="edit" data-bs-toggle="modal" data-bs-target="#ModalEdit">--}}
{{--                                <i class="fa-solid fa-pencil"></i>--}}
{{--                            </button>--}}
{{--                            </a>--}}
{{--                            <form action="../../PHP/script.php" method="POST">--}}
{{--                                <button type="submit" style="border:none; outline:none" class="delete" name="Delete" value="1">--}}
{{--                                    <i class="fa-solid fa-trash-can"></i>--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                        <td>{{$type->id_type_emp}}</td>--}}
{{--                        <td>{{$type->title_type}}</td>--}}
{{--                    </tr>--}}
{{--                    @endforeach--}}


                </tbody>
            </table>
        </div>
    </div>
    @include('settings.type_emp.modal.edit_modal_type')
@endsection

