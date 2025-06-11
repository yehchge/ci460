# CodeIgniter 4 Framework sample & study & example

The project is my practice.  Version: 4.6.0

# Install

```bash
composer create-project codeigniter4/appstarter ci460
```

# Remove CodeIgniter4 public directory

Step1. Copy ~/public/* to ~/

Copy index.php、.htaccess、favicon.ico、robot.txt to project root directory.

Step2. Change in ~/app/Config/App.php File
  
ps: Change the $baseURL, can show Debug Toolbar.

```txt
public $baseURL = 'http://localhost:8080/';
To
public $baseURL = 'http://localhost/your_project_name/';
```

```txt
public $uriProtocol = 'REQUEST_URI';
To
public $uriProtocol = 'PATH_INFO';
```

Step3. Change ~/index.php

```txt
require FCPATH . '../app/Config/Paths.php';
To
require FCPATH . 'app/Config/Paths.php';
```

Step4. Change ~/spark

```txt
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR);
To
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);
```

```txt
require FCPATH . '../app/Config/Paths.php';
To
require FCPATH . 'app/Config/Paths.php';
```

Step5. Copy env To .env

Step6. Generate .env Key

```bash
php spark key:generate
```

Step7. Set Directory writable can write

```bash
chmod -R 777 writable/
```

Step8. Set .env variable CI_ENVIRONMENT

```txt
# CI_ENVIRONMENT = production
To
CI_ENVIRONMENT = development
```

# Install JWT Package
```bash
composer require firebase/php-jwt
```

# Add JWT Model
```bash
php spark make:model ApiUserModel
```

# Add JWT Migration
```bash
php spark make:migration ApiAddUser
```

# Run JWT Migration
```bash
php spark migrate
```

# Add JWT_SECRET on .env file
```txt
#----------------------------------------------------------------
# JWT
#----------------------------------------------------------------
JWT_SECRET = 'CodeIgniter4 JSON Web Token (JWT) Authentication'
```

# Create Controllers
```bash
php spark make:controller ApiLogin
php spark make:controller ApiRegister
php spark make:controller ApiUser
```

# Create Controller Filter
```bash
php spark make:filter ApiAuthFilter
```

# Add ApiAuthFilter to Filters.php

# Register Routes
```php
// JWT API
$routes->group("api", function($routes){
    $routes->post('register', 'ApiRegister::index');
    $routes->post('login', 'ApiLogin::index');
    $routes->get('users', 'ApiUser::index', ['filter' => 'authFilter']);
});
```

## 觀看 CodeIgniter 核心版本(Version 4.x.x)

```bash
php spark app:info
```

## 觀看 CodeIgniter 核心版本(Version 3.x.x)

```bash
cat system/core/CodeIgniter.php | grep CI_VERSION
```

## Migrate Table 語法改變

```bash
# old syntax (run error)
php spark migrate:create create_users_table
# new syntax
php spark make:migration create_users_table
```

ci_tutorial
===========

 JREAM CodeIgniter Quick Series
 
 FYI: https://www.youtube.com/watch?v=cQW_v1RpwcI&list=PLwQf6Mb9WjZCEpt2kyPZBKwCuZU-V3XCq
