<!---
Laravel with SmartAdmin frontend based on Encore/laravel-admin
=======

## Must Install SmartAdmin Laravel Admin:

First, install laravel, and make sure that the database connection settings are correct.

```
composer require vreyz/smartadmin-laravel dev-master
```

### Then run these commands to publish assets and config：

```
php artisan vendor:publish --provider="Vreyz\Admin\AdminServiceProvider"
```

After run command you can find config file in config/admin.php, in this file you can change the install directory,db connection or table names.

#### Change your inv matched with database username password and APP_URL (APP_URL are mandatory for local development).
```
APP_URL=http://localhost/[your_laravel_project_name]

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=[your_database]
DB_USERNAME=[your_database_username]
DB_PASSWORD=[your_database_password]
```

#### Disable default Laravel route in `router/web.php`
```
/*
* Route::get('/', function () {
*    return view('welcome');
* });
/*
```

#### Add disk config in `config/filesystems.php`
```
'disks' => [
    //add code below
        'admin' => [
            'driver' => 'local',
            'root' => public_path('uploads'),
            'url' => env('APP_URL').'/public/uploads', //must be same with upload because use one logic to store data
            'visibility' => 'public',
        ],
],
```

#### At last run following command to finish install.

```
php artisan admin:install
```

Open http://localhost/[your_laravel_project_name] in browser,use username admin and password admin to login.
-->
