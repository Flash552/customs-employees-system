<!-- The Modal -->
<div class="modal fade" id="transferOrdersEdit{{$tms->id_tran}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل نقل الموظف</h5>
                <button type="button" class="btn-close position-absolute " style="left: 10px" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route("transferOrders.update", $tms->id_tran)}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">الرقم</label>
                        <input type="text" name='id_type_emp' disabled value="{{$tms->employee->PID_emp}}" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text"  class="col-form-label">الاسم</label>
                        <input type="text" name='title_type' value="{{$tms->employee->name}}" disabled class="form-control" id="message-text">
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom04" class="form-label">من</label>
                        <select name='id_from_station' disabled class="form-select" id="validationCustom04" required>
                            <option selected disabled >اختر</option>
                            @foreach ($stations as $station )
                                <option @if($station->id_station == $tms->id_from_station) selected @endif value="{{$station->id_station }}">{{$station->name_station }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom04" class="form-label">الى</label>
                        <select name='id_to_station' class="form-select" id="validationCustom04" required>
                            <option selected disabled >اختر</option>
                            @foreach ($stations as $station )
                                <option @if($station->id_station == $tms->id_to_station) selected @endif value="{{$station->id_station }}">{{$station->name_station }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input name="confirm_first" value="{{$tms->confirm_first}}" @if($tms->confirm_first == 1) checked @endif class="form-check-input" type="checkbox" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    التأكيد الأول
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input name="confirm_two" value="{{$tms->confirm_two}}" @if($tms->confirm_two == 1) checked @endif class="form-check-input" type="checkbox" id="flexCheckDefault2">
                                <label class="form-check-label" for="flexCheckDefault2">
                                    التأكيد الثاني
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>
