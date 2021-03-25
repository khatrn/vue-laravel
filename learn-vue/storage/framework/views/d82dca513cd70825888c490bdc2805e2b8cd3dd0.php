<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <title>Laravel</title>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        <div id="app">
            <my-component></my-component>
            <conditional-rendering></conditional-rendering>
            <list-rendering></list-rendering>
            <user-dashboard></user-dashboard>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
<?php /**PATH /var/www/html/vue-laravel/learn-vue/resources/views/welcome.blade.php ENDPATH**/ ?>
