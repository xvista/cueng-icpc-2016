# Chula Engineering's 2016 ACM-ICPC
2016 ACM-ICPC official site which organized by Chula Engineering

## Host Delegation

* 2016 ACM-ICPC Thailand Central A Contest
  * 2016 ACM-ICPC Thailand Central A Prep Course
* 2016 ACM-ICPC Asia Bangkok Regional Contest

## Development first time setup

1. Install Laravel dependencies & libraries by
```
composer install
```
2. Copy `.env.example` into `.env`
3. Generate Application's key
```
php artisan key:generate
```
4. Start up PHP Server at port 8888
```
php -S localhost:8888 -t public
```

## For Front-End Stuff

We are using Laravel's Elixir (Simple Gulp's API) to do things like compile LESS, watcher etc. So first you need to install NodeJS to use `npm` command, If you don't sure that you were installed it or not simply just

```
node -v
```

If it returns some version (like v6.0.0) so you're good to go! Then install Laravel's Elixir by run

```
npm install
```

Then when you're going to coding just

```
gulp watch
```

This task will start apps at port 8888 (No need for `php -S localhost:8888 -t public` as I've mentioned before), opening up web browser and watch on .blade.php, .less file change and it will compile new less file and automatic reload your browser via browser-sync (Note that browser-sync will run at port 3000 and it's UI dashboard run at port 3001)