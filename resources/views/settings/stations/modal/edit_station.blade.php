<!-- The Modal -->
<div class="modal fade" id="StationEdit{{$station->id_station}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل المركز</h5>
                <button type="button" class="btn-close position-absolute " style="left: 10px" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('stations.update', $station->id_station)}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">الرقم</label>
                        <input type="text" name='id_station'  value="{{$station->id_station}}" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">المركز</label>
                        <input type="text" name='name_station' value="{{$station->name_station}}" class="form-control" id="message-text">
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom04" class="col-form-label">المدينة</label>
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
