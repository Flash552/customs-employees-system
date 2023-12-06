<!-- The Modal -->
<div class="modal fade" id="RankEdit{{$rank->id_rank}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل الرتبة</h5>
                <button type="button" class="btn-close position-absolute " style="left: 10px" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('rank_emp.update', $rank->id_rank)}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">الرقم</label>
                        <input type="text" name='id_rank'  value="{{$rank->id_rank}}" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">الرتبة</label>
                        <input type="text" name='title_rank' value="{{$rank->title_rank}}" class="form-control" id="message-text">
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
