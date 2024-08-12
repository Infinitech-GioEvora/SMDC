<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo d-flex justify-content-center">
        <a href="/admin" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="https://mysmdc.ph/wp-content/uploads/2023/05/smdc-favicon-300x300.jpg" alt="" style="width: 130px;">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul id="menu-inner" class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('/admin') ? 'active' : '' }}">
            <a href="/admin" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bar-chart"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('/admin/properties') ? 'active' : '' }}">
            <a href="/admin/properties" class="menu-link">
                <i class="menu-icon tf-icons bx bx-building-house"></i>
                <div data-i18n="Properties">Properties</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('/admin/awards') ? 'active' : '' }}">
            <a href="/admin/awards" class="menu-link">
                <i class="menu-icon tf-icons bx bx-award"></i>
                <div data-i18n="Awards">Awards</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('/admin/inquiries') ? 'active' : '' }}">
            <a href="/admin/inquiries" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message-rounded-detail"></i>
                <div data-i18n="Inquiries">Inquiries</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('/admin/viewings') ? 'active' : '' }}">
            <a href="/admin/viewings" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Viewings">Viewings</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('/admin/registrations') ? 'active' : '' }}">
            <a href="/admin/registrations" class="menu-link">
                <i class="menu-icon tf-icons bx bx-notepad"></i>
                <div data-i18n="Registrations">Registrations</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('/admin/settings') ? 'active' : '' }}">
            <a href="/admin/settings" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Settings">Settings</div>
            </a>
        </li>
    </ul>
</aside>

