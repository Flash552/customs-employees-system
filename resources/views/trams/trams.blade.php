@extends("layouts.master")

@section('title')
    الانتقالات
@endsection
@section('active_trams')
    active
@endsection
@section('content')
    <div class="wrapper-two">
        <h3 class="title-main">الانتقالات</h3>
        <hr>
        <div class="content-wrapper">
            <div class="wrapper-two">
                @if(Session::has('message'))
                    <div class="alert alert-{{ Session::get('message')["type"] }}" role="alert">
                        {{ Session::get('message')["msg"] }}
                    </div>
                @endif
                <form class="row g-4 needs-validation" novalidate>
                    <div class="col-md-2">
                        <label for="validationCustom01" class="form-label">رقم الموظف</label>
                        <input type="text" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">الإسم</label>
                        <input type="text" class="form-control" id="validationCustom02"  required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom04" class="form-label">من</label>
                        <select name='id_from_station' class="form-select" id="validationCustom04" required>
                            <option selected disabled >اختر</option>
                            @foreach ($stations as $station )
                                <option value="{{$station->id_station }}">{{$station->name_station }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom04" class="form-label">الى</label>
                        <select name='id_to_station' class="form-select" id="validationCustom04" required>
                            <option selected disabled >اختر</option>
                            @foreach ($stations as $station )
                                <option value="{{$station->id_station }}">{{$station->name_station }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">بحث</button>
                    </div>
                </form>
            </div>
            <div class="card-header">
                <h1 class="title">كل الانتقالات</h1>
{{--                <a class="add" href="users/create" >إضافة</a>--}}
            </div>
            <div class="box-table">
                <table>
                    <thead >
                    <tr class="sticky-top">
                        <th>#</th>
                        <th>الرقم</th>
                        <th>الإسم</th>
                        <th>من</th>
                        <th>الى</th>
                        <th>التأكيد الاول</th>
                        <th>تاريخ التأكيد الأول</th>
                        <th>التأكيد الثاني</th>
                        <th>تاريخ التأكيد الثاني</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($trams as $tms )
                        <tr>
                            <td class="d-flex justify-content-center align-items-center">
                                <!-- Button to Open the Modal -->
                                <button type="button" class="edit" data-bs-toggle="modal" data-bs-target="#TramsEdit{{$tms->id_tran}}" data-bs-whatever="@mdo">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button type="button" class="delete" data-bs-toggle="modal" data-bs-target="#TramsDelete{{$tms->id_tran}}" data-bs-whatever="@mdo">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </td>
                            <td>{{$tms->id_tran}}</td>
                            <td>{{$tms->employee->name}}</td>
                            <td>{{$tms->fromStation->name_station}}</td>
                            <td>{{$tms->toStation->name_station}}</td>
                            <td>{{$tms->confirm_first == 1 ? "تم التأكيد" : "لم يتم التأكيد"}}</td>
                            <td>{{$tms->confirm_first == 1 ?  $tms->confirm_date_first : "----"}}</td>
                            <td>{{$tms->confirm_two == 1 ? "تم التأكيد" : "لم يتم التأكيد"}}</td>
                            <td>{{$tms->confirm_two == 1 ?  $tms->confirm_date_two : "----"}}</td>
                        </tr>
                        @include('trams.modal.edit_trams')
                        @include('trams.modal.delete_trams')
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection

