@extends("layouts.master")

@section('title')
    الانتقالات
@endsection
@section('active_transferOrders')
    active
@endsection
@section('content')
<h3 class="title-main">الانتقالات</h3>
<hr>

            <div class="wrapper-two  mb-5" dir="rtl">
                @if(Session::has('message'))
                    <div class="alert alert-{{ Session::get('message')["type"] }}" role="alert">
                        {{ Session::get('message')["msg"] }}
                    </div>
                @endif
                <form class="row g-4 needs-validation" novalidate>
                    <div class="col-md-1 addemp">
                        <!-- <a href="" class="search">بحث</a> -->

                        <a class="add" href="users/create" >إضافة</a>

                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom01" class="form-label" > رقم الموظف مسؤول</label>
                        <input type="text" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label">عنوان قرار</label>
                        <input type="text" class="form-control" id="validationCustom02"  required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom04" class="form-label">مركز العمل المنتقل منه</label>
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
                        <label for="validationCustom04" class="form-label">العمل المنتقل اليه</label>
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

                    <div class="col-md-2 addemp">
                        <a href="" class="search">بحث</a>

                        <!-- <a class="add" href="users/create" >إضافة</a> -->

                    </div>
                </form>
            </div>


            <table id="example"  dir="rtl" class="table text-end  col-12  pt-5 m-3" style="width:95%"  dir="rtl" >
                    <thead >
                    <tr >
                        <th class="text-center">#</th>
                        <th class="text-center">عنوان القرار</th>
                        <th class="text-center">رقم الموظف المسؤول</th>
                        <th class="text-center">رقم المستخدم</th>
                        <th class="text-center"> رقم مركز العمل المنتقل منه</th>
                        <th class="text-center">رقم مركز العمل المنتقل اليه</th>
                        <th class="text-center"> حالة الاعتماد</th>
                        <th class="text-center">الوصف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($transferOrders as $tms )
                        <tr>
                            <td class="d-flex justify-content-center align-items-center">
                                <!-- Button to Open the Modal -->
                                <button type="button" class="edit" data-bs-toggle="modal" data-bs-target="#transferOrdersEdit{{$tms->id_tran}}" data-bs-whatever="@mdo">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <button type="button" class="delete" data-bs-toggle="modal" data-bs-target="#transferOrdersDelete{{$tms->id_tran}}" data-bs-whatever="@mdo">
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
                        @include('transferOrders.modal.edit_transferOrders')
                        @include('transferOrders.modal.delete_transferOrders')
                    @endforeach
                    </tbody>
                </table>



@endsection

