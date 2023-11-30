<?php $__env->startSection('title'); ?>
    تسجيل الدخول
<?php $__env->stopSection(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $__env->make("layouts.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        body{
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body class="text-center" dir="rtl">
<div class="container w-25 ">
    <main class="form-signin">
        <form>
            <img class="mb-4" src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="" width="180" height="180">
            <h1 class="h3 mb-3 fw-normal">الرجاء تسجيل الدخول</h1>
            <div class="form-floating">
                <select class="form-control" id="floatingInput" required>
                    <option selected disabled value="">اختر</option>
                    <option value="0">jihadlyx</option>
                    <option value="1">ali021</option>
                </select>
                <!-- <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"> -->
                <label for="floatingInput">اسم المستخدم</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">كلمة السر</label>
            </div>
            <div class="checkbox mb-3">



            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">تسجل الدخول</button>
            <p class="mt-5 mb-3 text-muted">&copy; جهاد شرع الله 218922502219+</p>
            <p class="mb-3 text-muted">&copy; محمد قمو 218922502219+</p>
        </form>
    </main>
</div>


<?php echo $__env->make("layouts.footer-scripts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\My projects\System\Customs-Employees-System\resources\views/login/login.blade.php ENDPATH**/ ?>