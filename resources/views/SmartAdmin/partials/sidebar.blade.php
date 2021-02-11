<aside class="page-sidebar">

    @include('admin::partials.header-logo')

    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">

        @if(config('admin.enable_menu_search'))
        <div class="nav-filter">
            <div class="position-relative">
                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                    <i class="fal fa-chevron-up"></i>
                </a>
            </div>
        </div>
        @endif

        <div class="info-card">
            <img src="{{ Admin::user()->avatar }}" class="profile-image rounded-circle" alt="{{ Admin::user()->name }}">
            <div class="info-card-text">
                <a href="#" class="d-flex align-items-center text-white">
                    <span class="text-truncate text-truncate-sm d-inline-block">
                        {{ Admin::user()->name }}
                    </span>
                </a>
                <span class="badge badge-primary badge-pill">
                    {{ \Vreyz\Admin\Auth\Database\Administrator::find(Admin::user()->id)->name }}
                </span>
            </div>
            <img src="{{ admin_asset("vendor/smartadmin-laravel/smartadmin/img/card-backgrounds/cover-2-lg.png")}}" class="cover" alt="cover">
            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                <i class="fal fa-angle-down"></i>
            </a>
        </div>
        <ul id="js-nav-menu" class="nav-menu">
            <li>
                <a href="#" title="Application Intel" data-filter-tags="application intel">
                    <i class="fal fa-info-circle"></i>
                    <span class="nav-link-text" data-i18n="nav.application_intel">Application Intel</span>
                </a>
                <ul>
                    <li>
                        <a href="intel_analytics_dashboard.html" title="Analytics Dashboard" data-filter-tags="application intel analytics dashboard">
                            <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">Analytics Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="intel_marketing_dashboard.html" title="Marketing Dashboard" data-filter-tags="application intel marketing dashboard">
                            <span class="nav-link-text" data-i18n="nav.application_intel_marketing_dashboard">Marketing Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="intel_introduction.html" title="Introduction" data-filter-tags="application intel introduction">
                            <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Introduction</span>
                        </a>
                    </li>
                    <li>
                        <a href="intel_privacy.html" title="Privacy" data-filter-tags="application intel privacy">
                            <span class="nav-link-text" data-i18n="nav.application_intel_privacy">Privacy</span>
                        </a>
                    </li>
                </ul>
            </li>
            @each('admin::partials.menu', Admin::menu(), 'item')

        </ul>
        <div class="filter-message js-filter-message bg-success-600"></div>
    </nav>
    <!-- END PRIMARY NAVIGATION -->
    <!-- NAV FOOTER -->
    <div class="nav-footer shadow-top">
        <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify" class="hidden-md-down">
            <i class="ni ni-chevron-right"></i>
            <i class="ni ni-chevron-right"></i>
        </a>
        <ul class="list-table m-auto nav-footer-buttons">
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Chat logs">
                    <i class="fal fa-comments"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Support Chat">
                    <i class="fal fa-life-ring"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Make a call">
                    <i class="fal fa-phone"></i>
                </a>
            </li>
        </ul>
    </div> <!-- END NAV FOOTER -->
</aside>
