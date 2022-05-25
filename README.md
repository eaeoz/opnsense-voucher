## Laravel Project for OpnSense Wifi Access Voucher Printer


-----

### How to use

Clone this project to your local computer.

```ps
git clone git@github.com:eaeoz/voucher.git
```

Navigate to the project folder.

```ps
cd voucher
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

https://sedat.cf
