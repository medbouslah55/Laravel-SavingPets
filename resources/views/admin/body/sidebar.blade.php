<header class="main-nav">
    <nav>
        <div class="main-navbar">
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end">
                            <span>Back</span>
                            <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i data-feather="home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="user"></i>
                            <span>User Management</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('user.view') }}">Show All Users</a></li>
                            <li><a href="email_inbox.html">Add User</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="user"></i>
                            <span>Locaux Management</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('local.create') }}">Add Local</a></li>
                            <li><a href="{{ route('local.index') }}">Show All Locaux</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="user"></i>
                            <span>Events Management</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('evenement.create') }}">Add Event</a></li>
                            <li><a href="{{ route('evenement.index') }}">Show All Events</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="user"></i>
                            <span>Pets Management</span>
                        </a>
                        <ul class="nav-submenu menu-content">
                            <li>
                                <a class="submenu-title" href="javascript:void(0)">color version <span class="sub-arrow">
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li>
                                        <a href="index.html">Layout Light</a>
                                    </li>
                                    <li>
                                        <a href="layout-dark.html">Layout Dark</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="submenu-title" href="javascript:void(0)">Page layout <span class="sub-arrow">
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li>
                                        <a href="boxed.html">Boxed</a>
                                    </li>
                                    <li>
                                        <a href="layout-rtl.html">RTL </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="submenu-title" href="javascript:void(0)">Footers <span class="sub-arrow">
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li>
                                        <a href="footer-light.html">Footer Light</a>
                                    </li>
                                    <li>
                                        <a href="footer-dark.html">Footer Dark</a>
                                    </li>
                                    <li>
                                        <a href="footer-fixed.html">Footer Fixed</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="anchor"></i>
                            <span>Starter kit</span>
                        </a>
                        <ul class="nav-submenu menu-content">
                            <li>
                                <a class="submenu-title" href="javascript:void(0)">color version <span class="sub-arrow">
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li>
                                        <a href="index.html">Layout Light</a>
                                    </li>
                                    <li>
                                        <a href="layout-dark.html">Layout Dark</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="submenu-title" href="javascript:void(0)">Page layout <span class="sub-arrow">
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li>
                                        <a href="boxed.html">Boxed</a>
                                    </li>
                                    <li>
                                        <a href="layout-rtl.html">RTL </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="submenu-title" href="javascript:void(0)">Footers <span class="sub-arrow">
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li>
                                        <a href="footer-light.html">Footer Light</a>
                                    </li>
                                    <li>
                                        <a href="footer-dark.html">Footer Dark</a>
                                    </li>
                                    <li>
                                        <a href="footer-fixed.html">Footer Fixed</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="http://support.pixelstrap.com/help-center" target="_blank">
                            <i data-feather="headphones"></i>
                            <span>Raise Support</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="https://docs.pixelstrap.com/viho/document/" target="_blank">
                            <i data-feather="file-text"></i>
                            <span>Documentation </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>