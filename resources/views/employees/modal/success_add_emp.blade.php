<!-- Modal -->
<div class="modal fade" id="EmpSuccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " style="height: 400px">
        <div class="modal-content popup center">
            <div class="icon">
                <i class="fa fa-check"></i>
            </div>
            <div class="title">تم الإضافة بنجاح</div>
            <div class="description">
                هل تريد إضافة دورة للموظف ""
            </div>
            <div class="dismiss-btn">
                <form action="{{route('certs.show', 1)}}" method="post">
                    @csrf
                    @method('get')
                    <button type="submit" class="yes">نعم</button>
                </form>
                <button class="dismiss" data-bs-dismiss="modal">لا</button>
            </div>

        </div>
    </div>
</div>

