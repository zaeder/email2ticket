<?php

$rootDir = preg_replace('/web\/app(_dev)?\.php/', '', str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME']));
$parametersFile = $rootDir . 'app/config/parameters.yml';
$installFile = $rootDir . 'web/install/install.php';
if(!file_exists($parametersFile) && !is_dir($rootDir . 'vendor') && file_exists($installFile)){
    include $installFile;
} else {
    /**
     * @var Composer\Autoload\ClassLoader
     */
    $loader = require __DIR__.'/../app/autoload.php';
    include_once __DIR__.'/../var/bootstrap.php.cache';

    $kernel = new AppKernel('prod', false);
    $kernel->loadClassCache();
    //$kernel = new AppCache($kernel);

    // When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
    //Request::enableHttpMethodParameterOverride();
    $request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
    $response = $kernel->handle($request);
    $response->send();
    $kernel->terminate($request, $response);
}
