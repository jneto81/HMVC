<?php namespace Shale;

use Silex\ServiceControllerResolver;
use Silex\Application;
use Silex\ServiceProviderInterface;

class ServiceModuleServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['resolver'] = $app->share($app->extend('resolver', function ($resolver, $app) {
            $serviceResolver = new ServiceControllerResolver($resolver,$app);
            return new ModuleControllerResolver($serviceResolver);
        }));
    }

    public function boot(Application $app)
    {

    }
}

?>
