<?php $__env->startSection('title'); ?>
    الإعدادات
<?php $__env->stopSection(); ?>
<?php $__env->startSection('active_settings'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="wrapper-two">
        <h3 class="title-main">الإعدادات</h3>
        <hr>
        <div class="content-wrapper">
            <?php echo $__env->make('layouts.settings-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('settings-content'); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>
    <script>
        document.onload = () => {
            let item = document.querySelector('.nav-link a[href="type_emp"]');
            if (item != null){
                item.click();
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\My projects\System\Customs-Employees-System\resources\views/settings/settings.blade.php ENDPATH**/ ?>