@extends('settings.settings')

@section('title')
    الشريحة
@endsection
@section('settings-active-jop')
    active
@endsection
@section('settings-content')
    <div class="wrapper-two">
        <h3 class="title-main">إضافة المسمى الوظيفي || الشريحة</h3>
        <form method="post"  action="{{route("jop_title.store")}}" class="row g-4 needs-validation" novalidate>
            @csrf
            <div class="col-md-2">
                <label for="validationCustom02" class="form-label">رقم</label>
                <input name="id_jop" type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-2">
                <label for="validationCustom02" class="form-label">المسمى الوظيفي</label>
                <input name="title_jop" type="text" class="form-control" id="validationCustom02" required>
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
                    <th>المسمى الوظيفي</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($jops as $jop )
                    <tr>
                        <td class="d-flex justify-content-center align-items-center">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="edit" data-bs-toggle="modal" data-bs-target="#JopEdit{{$jop->id_jop}}" data-bs-whatever="@mdo">
                                <i class="fa-solid fa-edit"></i>
                            </button>
                            <button type="button" class="delete" data-bs-toggle="modal" data-bs-target="#JopDelete{{$jop->id_jop}}" data-bs-whatever="@mdo">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </td>
                        <td>{{$jop->id_jop}}</td>
                        <td>{{$jop->title_job}}</td>
                    </tr>
                    @include('settings.jop_title.modal.edit_jop')
                    @include('settings.jop_title.modal.delete_jop')
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
