<div>
    <ul class="nav nav-tabs" style="background: #CFE2FF;">
        <li class="nav-item nav-link @yield('settings-active-type')">
            <a href="/type_emp">نوع الموظف</a>
        </li>
        <li class="nav-item nav-link @yield('settings-active-rank')">
            <a href="/rank_emp">الرتبة</a>
        </li>
        <li  class="nav-item nav-link @yield('settings-active-status')">
            <a href="/state_emp">الحالة</a>
        </li>
        <li class="nav-item nav-link @yield('settings-active-jop')">
            <a href="/jop_title">الشريحة</a>
        </li>
        <li  class="nav-item nav-link @yield('settings-active-stations')">
            <a href="/stations">مراكز العمل</a>
        </li>
        <li class="nav-item nav-link @yield('settings-active-cities')">
            <a href="/cities">المدن</a>
        </li>
        <li class="nav-item nav-link @yield('settings-active-vacation')">
            <a href="/vacation">انواع الاجازات</a>
        </li>
    </ul>
</div>
