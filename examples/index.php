<?php
    require_once('vendor/autoload.php');
    require_once('exampleClasses.php');

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Shale\ServiceModuleServiceProvider);

    $app['PageController'] = $app->share(function() use ($app) {
        return new PageController();
    });

    $app['PageModule'] = $app->share(function() use ($app) {
        return new Shale\Module($app['PageController']);
    });

    $app->get('/','PageModule:index');

    $app->run();
