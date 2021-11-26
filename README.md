Installation instructions:

1. composer install
2. npm install
3. Run ``npm run dev``
4. Run ``php artisan key:generate``
5. Create a database and configure ``.env``
6. Run ``php artisan migrate:fresh --seed``

Now you can visit: ``your-app-url.test/posts/1/edit``