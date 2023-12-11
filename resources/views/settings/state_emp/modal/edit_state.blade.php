<!-- The Modal -->
<div class="modal fade" id="StateEdit{{$state->id_state}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل الحالة</h5>
                <button type="button" class="btn-close position-absolute " style="left: 10px" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('state_emp.update', $state->id_state)}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">الرقم</label>
                        <input  type="text" name='id_state'  value="{{$state->id_state}}" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">الحالة</label>
                        <input type="text" name='title_state' value="{{$state->title_state}}" class="form-control" id="message-text">
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
