1. create .env file

2. run 'comporser update' in cmd

3. Fill these details in .env file

DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=exaple_db
DB_USERNAME=root
DB_PASSWORD= 

4. run 'php artisan migrate'

5. run 'php artisan serve'

6. Here you can see our routes for products

POST api/products/create 
url:- api/products/create
payload: {
      "name": "Mac book pro",
      "description": "hello world",
      "image": "66703b0266f86.png",
      "price": "8555",
      "old_price": "90000",
      "created_at": "2024-06-17T13:32:50.000000Z",
      "updated_at": "2024-06-17T13:32:50.000000Z"
    } 

GET api/products/{id}
url: api/products/1

GET api/products 

PUT api/products/update/{id}
url: api/products/update/1
payload: {
      "id":1,
      "name": "Mac book pro",
      "description": "hello world",
      "image": "66703b0266f86.png",
      "price": "8555",
      "old_price": "90000",
      "created_at": "2024-06-17T13:32:50.000000Z",
      "updated_at": "2024-06-17T13:32:50.000000Z"
    } 

DELETE api/products/delete/{id}
