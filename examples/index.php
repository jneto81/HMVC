<?php
    require_once('vendor/autoload.php');

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Shale\ServiceModuleServiceProvider);

    $app->get('/','FooModule:index');

    $app->run();
