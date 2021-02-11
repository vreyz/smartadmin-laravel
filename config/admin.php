<?php

return [

    /*
    |--------------------------------------------------------------------------
    | SmartAdmin laravel version
    |--------------------------------------------------------------------------
    |
    | SmartAdmin laravel version
    |
    */
    'app_version' => 'v3.0',

    /*
   |--------------------------------------------------------------------------
   | Laravel-admin html title
   |--------------------------------------------------------------------------
   |
   | Html title for all pages.
   |
   */
    'title' => 'ASEM',

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin name
    |--------------------------------------------------------------------------
    |
    | This value is the name of laravel-admin, This setting is displayed on the
    | login and Menu page.
    |
    */
    'name' => 'Smart ASEM',


    /*
    |--------------------------------------------------------------------------
    | Alert message that will displayed on top of the page.
    |--------------------------------------------------------------------------
    */
    //'top_alert' => '<p>Test for Alert Notification</p>Location of the message are in admin config',
    'top_alert' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin logo
    |--------------------------------------------------------------------------
    |
    | The logo of all admin pages. You can also set it as an image by using a
    | `img` tag, eg '<img src="http://logo-url" alt="Admin logo">'.
    |
    */
    'logo' => [
        'image-circle' => 'vendor/smartadmin-laravel/SmartAdmin/img/logo.png',
        'image-square' => 'vendor/smartadmin-laravel/SmartAdmin/img/logo.png',
        'text' => 'SmartAdmin Laravel', // for AdminLTE theme
        'mini' =>'<b>ASEM</b>', //For AdminLTE theme, logo of all admin pages when the sidebar menu is collapsed
    ],

    /*
    |--------------------------------------------------------------------------
    | Application Themes
    |--------------------------------------------------------------------------
    |
    | Currently there is two  Themes that we can choose, there are SmartAdmin v4.5.1 and Admin LTE 2.4
    | @see https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0
    | @see https://adminlte.io/docs/2.4/layout
    |
    |
    |
    */
    'themes' => [
        'theme' =>'smartadmin',  //choose 'SmartAdmin' or 'AdminLTE' (not case sensitive)

        /* AdminLTE Supported:
        |    "skin-blue", "skin-blue-light", "skin-yellow", "skin-yellow-light",
        |    "skin-green", "skin-green-light", "skin-purple", "skin-purple-light",
        |    "skin-red", "skin-red-light", "skin-black", "skin-black-light".
        |
        |  SmartAdmin Supported:
        |    ".mod-skin-light", ".mod-skin-dark" , ".mod-skin-default", ."mod-skin-glass"
        */
        'skin' => 'mod-skin-dark',

        /*Admin LTE  Supported:
        | "fixed", "layout-boxed", "layout-top-nav", "sidebar-collapse", "sidebar-mini".
        |
        |  SmartAdmin Supported:
        |       * 'header-function-fixed'         - header is in a fixed at all times
        |       * 'nav-function-fixed'            - left panel is fixed
        |       * 'nav-function-minify'			  - skew nav to maximize space
        |       * 'nav-function-hidden'           - roll mouse on edge to reveal
        |       * 'nav-function-top'              - relocate left pane to top
        |       * 'mod-main-boxed'                - encapsulates to a container
        |       * 'nav-mobile-push'               - content pushed on menu reveal
        |       * 'nav-mobile-no-overlay'         - removes mesh on menu reveal
        |       * 'nav-mobile-slide-out'          - content overlaps menu
        |       * 'mod-bigger-font'               - content fonts are bigger for readability
        |       * 'mod-high-contrast'             - 4.5:1 text contrast ratio
        |       * 'mod-color-blind'               - color vision deficiency
        |       * 'mod-pace-custom'               - preloader will be inside content
        |       * 'mod-clean-page-bg'             - adds more whitespace
        |       * 'mod-hide-nav-icons'            - invisible navigation icons
        |       * 'mod-disable-animation'         - disables css based animations
        |       * 'mod-hide-info-card'            - hides info card from left panel
        |       * 'mod-lean-subheader'            - distinguished page header
        |       * 'mod-nav-link'                  - clear breakdown of nav links
        */
        'layout' => ['nav-function-fixed','mod-lean-subheader','mod-nav-link'],

        /*
        |--------------------------------------------------------------------------
        | Login page of Choice
        |--------------------------------------------------------------------------
        |
        | This value is used to set the between main or alt login page.
        |
        */
        'login-page' => 'main', //use 'main','alt' or 'asem' (for SmartAdmin) or 'lte' (for Admin LTE)

        //Only for Admin LTE login page or SmartAdmin 'alt' login page
        'login_background_image' => '',

        'favicon' => 'vendor/smartadmin-laravel/SmartAdmin/img/favicon/favicon-32x32.png',

    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin bootstrap setting
    |--------------------------------------------------------------------------
    |
    | This value is the path of laravel-admin bootstrap file.
    |
    */
    'bootstrap' => app_path('Admin/bootstrap.php'),

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin route settings
    |--------------------------------------------------------------------------
    |
    | The routing configuration of the admin page, including the path prefix,
    | the controller namespace, and the default middleware. If you want to
    | access through the root path, just set the prefix to empty string.
    |
    */
    'route' => [

        /*'prefix' => env('ADMIN_ROUTE_PREFIX', 'admin'),*/
        'prefix' => '',

        'namespace' => 'App\\Admin\\Controllers',

        'middleware' => ['web', 'admin'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin install directory
    |--------------------------------------------------------------------------
    |
    | The installation directory of the controller and routing configuration
    | files of the administration page. The default is `app/Admin`, which must
    | be set before running `artisan admin::install` to take effect.
    |
    */
    'directory' => app_path('Admin'),

    /*
    |--------------------------------------------------------------------------
    | Access via `https`
    |--------------------------------------------------------------------------
    |
    | If your page is going to be accessed via https, set it to `true`.
    |
    */
    'https' => env('ADMIN_HTTPS', false),

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin auth setting
    |--------------------------------------------------------------------------
    |
    | Authentication settings for all admin pages. Include an authentication
    | guard and a user provider setting of authentication driver.
    |
    | You can specify a controller for `login` `logout` and other auth routes.
    |
    */
    'auth' => [

        'controller' => App\Admin\Controllers\AuthController::class,

        'guard' => 'admin',

        'guards' => [
            'admin' => [
                'driver'   => 'session',
                'provider' => 'admin',
            ],
        ],

        'providers' => [
            'admin' => [
                'driver' => 'eloquent',
                'model'  => Vreyz\Admin\Auth\Database\Administrator::class,
            ],
        ],

        // Add "remember me" to login form
        'remember' => true,

        // Redirect to the specified URI when user is not authorized.
        'redirect_to' => 'auth/login',

        // The URIs that should be excluded from authorization.
        'excepts' => [
            'auth/login',
            'auth/logout',
            'locale',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Single device login / 单设备登录
    |--------------------------------------------------------------------------
    |
    | Invalidating and "logging out" a user's sessions that are active on other
    | devices without invalidating the session on their current device.
    |
    */
    'single_device_login' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin upload setting
    |--------------------------------------------------------------------------
    |
    | File system configuration for form upload files and images, including
    | disk and upload path.
    |
    */
    'upload' => [

        // Disk in `config/filesystem.php`.
        'disk' => 'admin',

        // Image and file upload path under the disk above.
        'directory' => [
            'image' => 'images',
            'file'  => 'files',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin database settings
    |--------------------------------------------------------------------------
    |
    | Here are database settings for laravel-admin builtin model & tables.
    |
    */
    'database' => [

        // Database connection for following tables.
        'connection' => '',

        // User tables and model.
        'users_table' => 'admin_users',
        'users_model' => Vreyz\Admin\Auth\Database\Administrator::class,

        // Role table and model.
        'roles_table' => 'admin_roles',
        'roles_model' => Vreyz\Admin\Auth\Database\Role::class,

        // Permission table and model.
        'permissions_table' => 'admin_permissions',
        'permissions_model' => Vreyz\Admin\Auth\Database\Permission::class,

        // Menu table and model.
        'menu_table' => 'admin_menu',
        'menu_model' => Vreyz\Admin\Auth\Database\Menu::class,

        // Pivot table for table above.
        'operation_log_table'    => 'admin_operation_log',
        'user_permissions_table' => 'admin_user_permissions',
        'role_users_table'       => 'admin_role_users',
        'role_permissions_table' => 'admin_role_permissions',
        'role_menu_table'        => 'admin_role_menu',
    ],

    /*
    |--------------------------------------------------------------------------
    | User operation log setting
    |--------------------------------------------------------------------------
    |
    | By setting this option to open or close operation log in laravel-admin.
    |
    */
    'operation_log' => [

        'enable' => true,

        /*
         * Only logging allowed methods in the list
         */
        'allowed_methods' => ['GET', 'HEAD', 'POST', 'PUT', 'DELETE', 'CONNECT', 'OPTIONS', 'TRACE', 'PATCH'],

        /*
         * Routes that will not log to database.
         *
         * All method to path like: admin/auth/logs
         * or specific method to path like: get:admin/auth/logs.
         */
        'except' => [
            'admin/auth/logs*',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Indicates whether to check route permission.
    |--------------------------------------------------------------------------
    */
    'check_route_permission' => true,

    /*
    |--------------------------------------------------------------------------
    | Indicates whether to check menu roles.
    |--------------------------------------------------------------------------
    */
    'check_menu_roles'       => true,

    /*
    |--------------------------------------------------------------------------
    | User default avatar
    |--------------------------------------------------------------------------
    |
    | Set a default avatar for newly created users.
    |
    */
    'default_avatar' => '/vendor/smartadmin-laravel/AdminLTE/dist/img/user2-160x160.jpg',

    /*
    |--------------------------------------------------------------------------
    | Admin map field provider
    |--------------------------------------------------------------------------
    |
    | Supported: "tencent", "google", "yandex".
    |
    */
    'map_provider' => 'google',

    /*
    |--------------------------------------------------------------------------
    | Show version at footer
    |--------------------------------------------------------------------------
    |
    | Whether to display the version number of laravel-admin at the footer of
    | each page
    |
    */
    'show_version' => true,

    /*
    |--------------------------------------------------------------------------
    | Show environment at footer
    |--------------------------------------------------------------------------
    |
    | Whether to display the environment at the footer of each page
    |
    */
    'show_environment' => true,

    /*
    |--------------------------------------------------------------------------
    | Menu bind to permission
    |--------------------------------------------------------------------------
    |
    | whether enable menu bind to a permission
    */
    'menu_bind_permission' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable default breadcrumb
    |--------------------------------------------------------------------------
    |
    | Whether enable default breadcrumb for every page content.
    */
    'enable_default_breadcrumb' => false,

    /*
    |--------------------------------------------------------------------------
    | Enable/Disable assets minify
    |--------------------------------------------------------------------------
    */
    'minify_assets' => [

        // Assets will not be minified.
        'excepts' => [

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Enable/Disable sidebar menu search
    |--------------------------------------------------------------------------
    */
    'enable_menu_search' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable/Disable search everything
    |--------------------------------------------------------------------------
    */
    'enable_search_everything' => true,

    /*
    |--------------------------------------------------------------------------
    | The global Grid action display class.
    |--------------------------------------------------------------------------
    | leave blank '' for icon action or
    | set to '\Vreyz\Admin\Grid\Displayers\DropdownActions::class' to make action dropdown
    */
    //'grid_action_class' => \Vreyz\Admin\Grid\Displayers\DropdownActions::class,
    'grid_action_class' => '',

    /*
    |--------------------------------------------------------------------------
    | The MultiLanguage Setting
    |--------------------------------------------------------------------------
    |
    */
    'multilanguage' => [
        // the key should be same as var locale in config/app.php
        // the value is used to show
        'languages' => [
            'en' => 'English',
            'zh-CN' => '简体中文',
            'id'    =>  'Bahasa',
        ],
        // default language locale
        'default' => 'en',
        // the cookie name for the multi-language var, optional, default is 'locale'
        'cookie-name' => 'locale',
        // if or not show multi-language navbar, optional, default is true
        'show-navbar' => true,

    ],

    /*
    |--------------------------------------------------------------------------
    | Extension Directory
    |--------------------------------------------------------------------------
    |
    | When you use command `php artisan admin:extend` to generate extensions,
    | the extension files will be generated in this directory.
    */
    'extension_dir' => app_path('Admin/Extensions'),

    /*
    |--------------------------------------------------------------------------
    | Settings for extensions.
    |--------------------------------------------------------------------------
    |
    | You can find all available extensions here
    | https://github.com/laravel-admin-extensions.
    |
    */
    'extensions' => [
        'multilanguage-laravel' => [
            //if using SmartAdmin skin, always enable or the code will break
            'enable' => true,

            // the key should be same as var locale in config/app.php
            // the value is used to show
            'languages' => [
                'en' => 'English',
                'zh-CN' => '简体中文',
                'id'    =>  'Bahasa',
            ],
            // default locale
            'default' => 'en',

            // if or not show multi-language login page, optional, default is true
            'show-login-page' => true,
            // if or not show multi-language navbar, optional, default is true
            'show-navbar' => true,
            // the cookie name for the multi-language var, optional, default is 'locale'
            'cookie-name' => 'locale'
        ],
    ],
];
