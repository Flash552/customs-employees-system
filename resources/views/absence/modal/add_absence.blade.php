<!-- The Modal -->.

<div class="modal " dir="rtl" id="AbsenceAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">إضافة سجل الغياب</h5>
                <button type="button" class="btn-close position-absolute " style="left: 10px" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">الرقم</label>
                        <input type="text" name='id_type_emp'  value="" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">الاسم</label>
                        <input type="text" name='title_type' value="" class="form-control" id="message-text">
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom03" class="form-label">من</label>
                        <input type="date" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom04" class="form-label">الى</label>
                        <input type="date" class="form-control" id="validationCustom04" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
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
