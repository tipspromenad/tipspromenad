
## Tipspromenad
Vår fina tipspromenad app

`Användarnamn: din epost`
`Lösen: 1234`

Denna sida utgår från [rappasoft/laravel-5-boilerplate](https://github.com/rappasoft/laravel-5-boilerplate)
### Installation:

- `composer install`
- `npm install`
- Create .env file (example below)
- `php artisan key:generate`
- `php artisan migrate`
- Set administrator info in UserTableSeeder.php
- `php artisan db:seed`
- run `gulp` or `gulp watch` (Install gulp (sudo npm install -g gulp) if needed)

### Example .env file:

    APP_ENV=local
    APP_DEBUG=true
    APP_URL=http://tipspromenad.dev
    APP_KEY=WILL BE GENERATED
    
    DB_HOST=localhost
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=root
    
    CACHE_DRIVER=file
    SESSION_DRIVER=file
    QUEUE_DRIVER=sync
    
    MAIL_DRIVER=smtp
    MAIL_HOST=mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_FROM=
    MAIL_NAME=
    
    STRIPE_KEY=
    STRIPE_SECRET=
    
    GITHUB_CLIENT_ID=
    GITHUB_CLIENT_SECRET=
    GITHUB_REDIRECT=
    
    FACEBOOK_CLIENT_ID=
    FACEBOOK_CLIENT_SECRET=
    FACEBOOK_REDIRECT=
    
    TWITTER_CLIENT_ID
    TWITTER_CLIENT_SECRET
    TWITTER_REDIRECT=
    
    GOOGLE_CLIENT_ID=
    GOOGLE_CLIENT_SECRET=
    GOOGLE_REDIRECT=


