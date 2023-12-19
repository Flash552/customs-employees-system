@extends('settings.settings')

@section('title')
    المدن
@endsection
@section('settings-active-cities')
    active
@endsection
@section('settings-content')
    <div class="wrapper-two">
        <h3 class="title-main">إضافة المدن</h3>
        <form method="post" action="{{route("cities.store")}}" class="row g-4 needs-validation" novalidate>
           @csrf
        <div class="col-md-2">
                <label for="validationCustom02" class="form-label">رقم</label>
                <input name="id_city" type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom02" class="form-label">المدينة</label>
                <input name="city_name" type="text" class="form-control" id="validationCustom02" required>
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
                    <th>المدينة</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($cities as $city )
                    <tr>
                        <td class="d-flex justify-content-center align-items-center">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="edit" data-bs-toggle="modal" data-bs-target="#CityEdit{{$city->id_city}}" data-bs-whatever="@mdo">
                                <i class="fa-solid fa-edit"></i>
                            </button>
                            <button type="button" class="delete" data-bs-toggle="modal" data-bs-target="#CityDelete{{$city->id_city}}" data-bs-whatever="@mdo">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </td>
                        <td>{{$city->id_city}}</td>
                        <td>{{$city->city_name}}</td>
                    </tr>
                    @include('settings.cities.modal.edit_city')
                    @include('settings.cities.modal.delete_city')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
