<!-- Modal -->
<div class="modal fade" id="JopDelete{{$jobs->id_job}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف</h5>
                <button type="button" class="btn-close position-absolute" style="left: 10px" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                هل تريد حذف الشريحة "{{$jobs->title_job}}"
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                <form action="{{route('type_emp.destroy', $jobs->id_job)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">حذف</button>
                </form>
            </div>
        </div>
    </div>
</div>
