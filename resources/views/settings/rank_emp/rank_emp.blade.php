@extends('settings.settings')

@section('title')
    الرتب
@endsection
@section('settings-active-rank')
    active
@endsection
@section('settings-content')


    <div class="wrapper-two">
        <h3 class="title-main">إضافة رتبة الموظف</h3>
        <form method="post" action="{{route("rank_emp.store")}}" class="row g-4 needs-validation" novalidate>
            @csrf
            <div class="col-md-2">
                <label for="validationCustom02" class="form-label">رقم</label>
                <input name ='id_rank' type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-2">
                <label for="validationCustom04" class="form-label">النوع</label>
                <select name = 'id_type_emp' class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">اختر</option>
                    
                    @foreach ($types as $type )
                    <option value={{$type->id_type_emp}}>{{$type->title_type}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>
            <div class="col-md-2">
                <label for="validationCustom02" class="form-label">الرتبة</label>
                <input name = 'title_rank' type="text" class="form-control" id="validationCustom02" required>
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
                    <th>الرتبة</th>
                    <th>النوع</th>
                </tr>
                </thead>
                <tbody>
               
               @foreach ($ranks as $rank )
               <tr>
                <td class="d-flex justify-content-center align-items-center">
                    <a href="rank_emp/show" class="edit">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                    <form action="../../PHP/script.php" method="POST">
                        <button type="submit" style="border:none; outline:none" class="delete" name="Delete" value="1">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                </td>
                <td>{{$rank->id_rank }}</td>
                <td>{{$rank->title_rank }}</td>
               حاح 
            </tr>
                   
               @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


