<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Icon -->
    <link rel="icon" href="images/cropped-fav_icon-32x32.png">
    <link rel="shortcut" href="images/cropped-fav_icon-32x32.png">
    <link rel="apple-touch" href="images/cropped-fav_icon-32x32.png">
    <!-- Google Fonts 'Work sans' -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Main File CSS -->
    <link rel="stylesheet" href="../../css/controlePanel.css">
    <link rel="stylesheet" href="../../css/style.css">
    <!-- Bootstrap File CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Normalize File CSS -->
    <link rel="stylesheet" href="../../css/normalize.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="../../css/all.min.css">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body dir="rtl">
<div class="page">
    <div class="sidebar">
        <h3>نظام شؤون الموظفين</h3>
        <ul>
            <li>
                <a class="active" href="dashboard">
                    <i class="fa-regular fa-chart-bar fa-fw"></i>
                    <span>الرئيسية</span>
                </a>
            </li>
            <li>
                <a  href="../emloyees/employees.html">
                    <i class="fa-regular fa-user fa-fw"></i>
                    <span>الموظفين</span>
                </a>

            </li>
            <li>
                <a href="../users/users.html">
                    <i class="fa-solid fa-users fa-fw"></i>
                    <span>المستخدمين</span>
                </a>

            </li>
            <li>
                <a href="">
                    <i class="fa-brands fa-product-hunt fa-fw"></i>
                    <span>التقارير</span>
                </a>

            </li>
            <li>
                <a href="">
                    <i class="fa-solid fa-box-open"></i>
                    <span>سجل الغياب</span>
                </a>

            </li>
            <li>
                <a href="../certs/certs.html">
                    <i class="fa-solid fa-box-open"></i>
                    <span>المؤهلات والدورات</span>
                </a>

            </li>
            <li>
                <a href="../settings/settings.html">
                    <i class="fa-solid fa-gear"></i>
                    <span>الإعدادات</span>
                </a>
            </li>
            <li>
                <a href="../profile/profile.html">
                    <i class="fa-regular fa-circle-user fa-fw"></i>
                    <span>الحساب</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    <span>خروج</span>
                </a>
            </li>
        </ul>
    </div>
    <div id="hide"></div>
    <div class="content">
        <div class="head">
            <div class="input-box">
                <form>
                    <input disabled class="search" type="text" name="search" placeholder="بحث" id="">
                </form>
            </div>
            <div class="icons">
                        <span class="notification">
                            <i class="fa-regular fa-bell fa-lg"></i>
                        </span>
                <img src="../image/employees/photo_2023-01-13_01-42-38.jpg" alt="">
            </div>
        </div>
        <h3 class="title-main">الرئيسية</h3>
        <hr>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
<script src="../../js/bootstrap.bundle.min.js"></script>
<script src="../../js/indexPanel.js"></script>
<script>
    document.querySelector("li[data-set='../emloyees/employees.html']")
        .click();
</script>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\My projects\System\Customs-Employees-System\resources\views//layouts/sideBar.blade.php ENDPATH**/ ?>