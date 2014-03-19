<?php

class ServiceModuleServiceProviderTest extends PHPUnit_Framework_TestCase
{
    public function testRegister()
    {
        $app = new Silex\Application();
        $app->register(new Shale\HMVC\ServiceModuleServiceProvider);
        $this->assertInstanceOf('Shale\\HMVC\\ModuleControllerResolver',$app['resolver']);
    }
}
