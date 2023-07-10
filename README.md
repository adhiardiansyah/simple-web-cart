# simple-web-cart

## Prerequisite

- PHP 8.0+
- Composer
- MySQL 8.0+

## Run the project

- Install dependencies

  ```shell
  composer install
  ```

- Copy `.env.example` to `.env` and update the database connection

- Run the migration and seeder

  ```shell
  php artisan migrate:fresh --seed
  ```

- Run the project

  ```shell
  php artisan serve
  ```

- Open the browser and go to `http://localhost:8000`

## Preview
![image](https://raw.githubusercontent.com/adhiardiansyah/simple-web-cart/main/public/img/preview/1.png)
![image](https://raw.githubusercontent.com/adhiardiansyah/simple-web-cart/main/public/img/preview/2.png)
![image](https://raw.githubusercontent.com/adhiardiansyah/simple-web-cart/main/public/img/preview/3.png)
![image](https://raw.githubusercontent.com/adhiardiansyah/simple-web-cart/main/public/img/preview/4.png)
![image](https://raw.githubusercontent.com/adhiardiansyah/simple-web-cart/main/public/img/preview/5.png)

## Contributing
- Fork this repository
- Create your feature/fix branch
  ```shell
  git checkout -b feature/user
  ```
- Commit your changes
  ```shell
  git commit -m 'feat: add some feature on user').
  ```
- Push to the branch
  ```shell
  git push origin feature/user
  ```
- Open a pull request
