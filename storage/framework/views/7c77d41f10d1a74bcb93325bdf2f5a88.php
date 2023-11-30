<?php $__env->startSection('title'); ?>
    الرتب
<?php $__env->stopSection(); ?>
<?php $__env->startSection('settings-active-rank'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('settings-content'); ?>
    <div class="wrapper-two">
        <h3 class="title-main">تعديل الرتبة</h3>
        <form class="row g-4 needs-validation" novalidate>
            <div class="col-md-2">
                <label for="validationCustom02" class="form-label">رقم</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-2">
                <label for="validationCustom04" class="form-label">النوع</label>
                <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">اختر</option>
                    <option value="0">ذكر</option>
                    <option value="1">انثى</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>
            <div class="col-md-2">
                <label for="validationCustom02" class="form-label">الرتبة</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-success" type="submit">تعديل</button>
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
                <tr>
                    <td class="d-flex justify-content-center align-items-center">
                        <a href="edit_rank_emp.html" class="edit">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <form action="../../PHP/script.php" method="POST">
                            <button type="submit" style="border:none; outline:none" class="delete" name="Delete" value="1">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                    </td>
                    <td>1</td>
                    <td>جهاد شرع الله</td>
                </tr>
                <tr>
                    <td class="d-flex justify-content-center align-items-center">
                        <a href="edit_rank_emp.html" class="edit">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <form action="../../PHP/script.php" method="POST">
                            <button type="submit" style="border:none; outline:none" class="delete" name="Delete" value="1">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                    </td>
                    <td>2</td>
                    <td>علي</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('settings.settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\My projects\System\Customs-Employees-System\resources\views/settings/status_emp/edit_rank_emp.blade.php ENDPATH**/ ?>
