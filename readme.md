# Laravel Blog Exercise

Powered by [Laravel 5.5](https://laravel.com/docs/5.5) and [Laravel Homestead](https://laravel.com/docs/5.5/homestead).

This project is a simple blog application where users can read posts and where an admin user can login and create, update and delete posts.

## Set-up

### Software Requirements

Provisioned in Laravel Homestead:
- NGINX
- PHP 7.2
- MySQL
- Composer

Require manual installation:
- MongoDB (v3.4)

---

### Instructions

Clone the repo and copy the environment file
```
git clone git@github.com:bettinasir88/laravel-blog-exercise.git && cd laravel-blog-exercise && cp .env.example .env
```

Install [Laravel Homestead](https://laravel.com/docs/5.5/homestead)

__Now SSH into the Homestead VM and do the following:__

Install Open SSL libraries
```
sudo apt-get install pkg-config libssl-dev libsslcommon2-dev
```

Install mongodb following [these instructions](https://www.digitalocean.com/community/tutorials/how-to-install-mongodb-on-ubuntu-16-04)

Install mongodb client to interact with the database via command line (optional)
```
sudo apt install mongodb-clients
```

Install mongodb PHP extension
```
sudo pecl install mongodb
```

Enable the PHP extension by editing these files:
```
/etc/php/7.2/cli/php.ini
/etc/php/7.2/fpm/php.ini
```

And adding this line to them where the extensions are listed:
```
extension=mongodb.so
```

Reload and Restart PHP
```
sudo /etc/init.d/php7.2-fpm reload
sudo /etc/init.d/php7.2-fpm restart
```

Run composer install in the project root folder
```
composer install
```

Migrate and seed
```
php artisan migrate --seed
```

Done!! Now go to:
```
http://homestead.test/
http://homestead.test/admin
```

---

### Front-end

The CSS Framework used is [Pure CSS](https://purecss.io)

---

## TODO

- [ ] Authentication
- [ ] Generate slug automatically from title on post save
- [ ] Use different request validation rules on post save and post update (the unique title rule is an issue if applied on post update)
- [ ] Flash messages (after deleting, creating or updating a post)
- [ ] Fetching posts via a repository class
- [ ] Tests