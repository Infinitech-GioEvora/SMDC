<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
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
        <li class="menu-item {{ request()->is('Naujan-Development-Cooperrative/Dashboard') ? 'active' : '' }}">
            <a href="/Naujan-Development-Cooperrative/Dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('Naujan-Development-Cooperrative/Member') ? 'active' : '' }}">
            <a href="/Naujan-Development-Cooperrative/Member" class="menu-link">
                <i class="menu-icon bx bx-user"></i>
                <div data-i18n="Account Settings">Member</div>
            </a>
           
        </li>

        <li class="menu-item {{ request()->is('Naujan-Development-Cooperrative/Share-Capital') ? 'active' : '' }}">
            <a href="/Naujan-Development-Cooperrative/Share-Capital" class="menu-link">
                <i class="menu-icon bx bx-share-alt"></i>
                <div data-i18n="Account Settings">Share & Contribution</div>
            </a>
           
        </li>

        <li class="menu-item {{ request()->is('Naujan-Development-Cooperrative/Time-Deposit') ? 'active' : '' }}">
            <a href="/Naujan-Development-Cooperrative/Time-Deposit" class="menu-link">
                <i class="menu-icon bx bx-time"></i>
                <div data-i18n="Account Settings">Time Deposit</div>
            </a>
           
        </li>
        <li class="menu-item {{ request()->is('Naujan-Development-Cooperrative/Credit-Limit') ? 'active' : '' }}">
            <a href="/Naujan-Development-Cooperrative/Credit-Limit" class="menu-link">
                <i class="menu-icon bx bx-credit-card-front"></i>
                <div data-i18n="Account Settings">Credit Limit</div>
            </a>
           
        </li>


        <li class="menu-item {{ request()->is('Naujan-Development-Cooperrative/Loan') ? 'active' : '' }}">
            <a href="/Naujan-Development-Cooperrative/Loan" class="menu-link">
                <i class='menu-icon bx bx-wallet-alt'></i>
                <div data-i18n="Account Settings">Loan</div>
            </a>
           
        </li>
        <li class="menu-item {{ request()->is('Naujan-Development-Cooperrative/Water') ? 'active' : '' }}">
            <a href="/Naujan-Development-Cooperrative/Water" class="menu-link">
                <i class='menu-icon bx bx-droplet'></i>
                <div data-i18n="Account Settings">Water Inventory</div>
            </a>
           
        </li>
        <li class="menu-item {{ request()->is('Naujan-Development-Cooperrative/Merchandise') ? 'active' : '' }}">
            <a href="/Naujan-Development-Cooperrative/Merchandise" class="menu-link">
                <i class='menu-icon bx bx-purchase-tag-alt'></i>
                <div data-i18n="Account Settings">Merchandise</div>
            </a>
           
        </li>
       
    </ul>
</aside>

