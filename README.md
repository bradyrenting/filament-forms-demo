Installation instructions:

1. ``composer install``
2. ``npm install && npm run dev``
3. ``php artisan key:generate``
4. Create a database and configure your ``.env`` file
5. ``php artisan migrate:fresh --seed``

Now you can visit: ``your-app-url.test/posts/1/edit``