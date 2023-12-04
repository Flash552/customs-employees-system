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
                            <a href="" class="edit">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <form action="../../PHP/script.php" method="POST">
                                <button state="submit" style="border:none; outline:none" class="delete" name="Delete" value="1">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                        <td>{{$state->id_status}}</td>
                        <td>{{$state->title_status}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
