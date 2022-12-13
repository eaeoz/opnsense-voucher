## Laravel Wifi Access Voucher Printer OpnSense


-----

### How to use

Clone this project to your local computer.

```ps
git clone git@github.com:eaeoz/opnsense-voucher.git
```

Navigate to the project folder.

```ps
cd opnsense-voucher
```

Install required packages.

```ps
composer install
```

create new .env file and edit database credentials there.

```ps
cp .env.example .env
```

Generate new app key.

```ps
php artisan key:generate
```

Run migrations. (it has some seeded data for your testing)

```ps
php artisan migrate --seed
```

That's it: launch the main URL

---

## More info

https://lime.ml
