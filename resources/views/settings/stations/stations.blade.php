@extends('settings.settings')

@section('title')
    مراكز العمل
@endsection
@section('settings-active-stations')
    active
@endsection
@section('settings-content')
    <div class="wrapper-two">
        <h3 class="title-main">إضافة مراكز العمل</h3>
        <form method="post" action="{{route("stations.store")}}" class="row g-4 needs-validation" novalidate>
        @csrf    
        <div class="col-md-2">
                <label for="validationCustom02" class="form-label">رقم</label>
                <input name="id_station" type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
                <div class="col-md-3">
                    <label for="validationCustom02" class="form-label">المركز</label>
                <input name="name_station" type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-2">
                <label for="validationCustom04" class="form-label">المدينة</label>
                <select name="id_city" class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">اختر</option>
                    @foreach ($cities as $city )
                    <option value= "{{$city->id_city}}" >{{$city->city_name}}</option>

                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
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
                    <th>المركز</th>
                    <th>المدينه</th>

                </tr>
                </thead>
                
                <tbody>
               
               @foreach ($stations as $station )
               <tr>
                <td class="d-flex justify-content-center align-items-center">
                    <a href="station_emp.edit" class="edit">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                    <form action="../../PHP/script.php" method="POST">
                        <button type="submit" style="border:none; outline:none" class="delete" name="Delete" value="1">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                </td>
                <td>{{$station->id_station }}</td>
                <td>{{$station->name_station }}</td>
                <td>{{$station->id_city }}</td>
            </tr>
            @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
