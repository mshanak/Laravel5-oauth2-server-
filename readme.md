## Laravel PHP Framework with oAuth2.0 server ready to use

this scafold project based on [PHP OAuth 2.0 Server for Laravel] (https://github.com/lucadegasperi/oauth2-server-laravel)

1. clone this project 
 ``` git clone https://github.com/mshanak/Laravel5-oauth2-server-.git foldername ```

2. tell composer to download the required libraries 
```composer update ```
3. configure database setting in ".env" file 
4. then run  " ``` php artisan migrate ``` " , if "Nothing to migrate." message apeared , run " ``` php artisan migrate:reset ``` "
5. run " ```php artisan db:seed ``` " to add test client and user
6. to test the server run   ``` php artisan serve ```  , then in REST Client ( eg. postman ) , make a POST request  to ( http://localhost:8000/oauth/access_token )

###test user:  
username=test@test.com   
password = password   

client App : 
grant_type=password   
client_id = GXvOWazQ3lA6YSaFji   
client_secret =GXvOWazQ3lA.6/YSaFji   
  
screenshot:

https://d262ilb51hltx0.cloudfront.net/max/1199/1*mCQMjumH8anBsw6XhFnxcA.png
