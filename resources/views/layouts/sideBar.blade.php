<div class="sidebar">
    <h3>نظام إدارة الموارد البشرية</h3>
    <ul>
        <li>
            <a class="@yield('active_dash')" href="/dashboard">
                <i class="fa-regular fa-chart-bar fa-fw"></i>
                <span>الرئيسية</span>
            </a>
        </li>
        <li>
            <a class="@yield('active_emp')" href="/employees">
                <i class="fa-regular fa-user fa-fw"></i>
                <span>الموظفين</span>
            </a>

        </li>
        <li>
            <a class="@yield('active_user')" href="/users">
                <i class="fa-solid fa-users fa-fw"></i>
                <span>المستخدمين</span>
            </a>

        </li>
        <li>
            <a class="@yield('active_')" href="">
                <i class="fa-brands fa-product-hunt fa-fw"></i>
                <span>التقارير</span>
            </a>

        </li>
        <li>
            <a class="@yield('active_absence')" href="/absence">
                <i class="fa-solid fa-box-open"></i>
                <span>سجل الغياب</span>
            </a>
        </li>
        <li>
            <a class="@yield('active_trams')" href="/trams">
                <i class="fa-solid fa-box-open"></i>
                <span>الانتقالات</span>
            </a>

        </li>
        <li>
            <a class="@yield('active_cert')" href="/certs">
                <i class="fa-solid fa-box-open"></i>
                <span>المؤهلات والدورات</span>
            </a>

        </li>
        <li>
            <a class="@yield('active_settings')" href="/settings">
                <i class="fa-solid fa-gear"></i>
                <span>الإعدادات</span>
            </a>
        </li>
        <li>
            <a class="@yield('active_profile')" href="/profile">
                <i class="fa-regular fa-circle-user fa-fw"></i>
                <span>الحساب</span>
            </a>
        </li>
        <li>
            <a class="@yield('active_log')" href="">
                <i class="fa-solid fa-arrow-right-to-bracket"></i>
                <span>خروج</span>
            </a>
        </li>
    </ul>
</div>
