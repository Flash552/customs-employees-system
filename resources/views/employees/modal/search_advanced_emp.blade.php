<!-- The Modal -->
<div class="modal fade" id="EmpSearch" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">لوحة البحث</h5>
                <button type="button" class="btn-close position-absolute " style="left: 10px" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="{{route('employees.searchAdvanced', 1)}}" method="POST" class="row g-4">
                        @csrf
                        @method('GET')
                        <div class="col-md-3">
                            <label for="validationCustom02" class="form-label">رقم الموظف</label>
                            <input type="text" name="PID_emp" class="form-control" id="validationCustom02">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01" class="form-label">الإسم</label>
                            <input type="text" name="name" class="form-control" id="validationCustom01">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom03" class="form-label">اسم الأم</label>
                            <input type="text" name="mother_name" class="form-control" id="validationCustom03">
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">الجنس</label>
                            <select name="sex" class="form-select" id="validationCustom04">
                                <!-- <option selected disabled value="">اختر</option> -->
                                <option selected value="0">ذكر</option>
                                <option value="1">انثى</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom02" class="form-label">الرقم الوطني</label>
                            <input type="text" name="national_number" class="form-control" id="validationCustom02">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">الحالة الإجتماعية</label>
                            <select name="marital_status" class="form-select" id="validationCustom04">
                                <option selected disabled value="">اختر</option>
                                <option value="0">اعزب</option>
                                <option value="1">متزوج</option>
                                <option value="2">مطلق</option>
                                <option value="3">ارملة</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom02" class="form-label">رقم البطاقة</label>
                            <input type="text" name="id_number" class="form-control" id="validationCustom02">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom02" class="form-label">رقم الجواز</label>
                            <input type="text" name="passport_number" class="form-control" id="validationCustom02">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom05" class="form-label">تاريخ الميلاد</label>
                            <input type="date" name="birthdate" class="form-control" id="validationCustom05">
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">الرتبة</label>
                            <select name="id_rank" class="form-select" id="validationCustom04">
                                <option selected disabled value="">اختر</option>
                                @foreach ($jobRanks as $jobRank )
                                    <option value="{{$jobRank->id_rank}}">{{$jobRank->title_rank}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">حالة العمل</label>
                            <select name="id_state" class="form-select" id="validationCustom04">
                                <option selected disabled value="">اختر</option>
                                @foreach ($status as $state )
                                    <option value="{{$state->id_state}}">{{$state->title_state}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">مكان العمل</label>
                            <select name="id_station" class="form-select" id="validationCustom04">
                                <option selected disabled value="">اختر</option>
                                @foreach ($stations as $station )
                                    <option value="{{$station->id_station}}">{{$station->name_station}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom05" class="form-label">تاريخ التعين</label>
                            <input type="date" name="start_date" class="form-control" id="validationCustom05">
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom05" class="form-label">تاريخ المباشرة</label>
                            <input type="date" name="start_duty_date" class="form-control" id="validationCustom05">
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom05" class="form-label">رقم القرار</label>
                            <input type="text" name="decision_number" class="form-control" id="validationCustom05">
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary" value="بحث">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>
