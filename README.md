# Estados e Cidades do Brasil (Laravel)


## How to use?

### 1. Download

Download and copy the migrations and seeds to the respective folders.

-   `database/seeds/`
-   `database/migrations`

### 2. Register the seeds

n the file `DatabaseSeeder.php`, add the seeds call.

```php
public function run() {
    // 
    $this->call([StatesTableSeeder::class, CitiesTableSeeder::class]);
}
```

### 3. Run

Run  `php artisan migrate` and then `php artisan db:seed` or simply `php artisan migrate --seed`.

## Other formats available

- Comming Soon




## License

This project is licensed under the [MIT](https://mit-license.org/)License.
