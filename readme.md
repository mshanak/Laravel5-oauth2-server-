## Laravel PHP Framework with oAuth2.0 server ready to use

this scafold project based on [PHP OAuth 2.0 Server for Laravel] (https://github.com/lucadegasperi/oauth2-server-laravel)

1. clone this project 
 git clone https://github.com/mshanak/Laravel5-oauth2-server-.git foldername

2. tell composer to download the required libraries 
```composer update ```
3. configure database setting in ".env" file 
4. then run  " ``` php artisan migrate ``` " , if "Nothing to migrate." message apeared , run " ``` php artisan migrate:reset ``` "
5. run " ```php artisan db:seed ``` " to add test client and user

test user:
username=test@test.com
password = password