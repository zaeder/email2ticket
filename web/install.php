<?php

$rootDir = preg_replace('/web\/app(_dev)?\.php/', '', $_SERVER['SCRIPT_FILENAME']);

if(!copy($rootDir . 'app/config/parameters.yml.dist', $rootDir . 'app/config/parameters.yml')){
    throw new \Exception('Parameters copy failed...');
}

$composerPharFile = $rootDir . 'composer.phar';
if(!file_exists($composerPharFile)){
    throw new \Exception('You must have a composer.phar in the project root folder');
}
exec($composerPharFile . ' self-update', $outputSelfUpdate);
exec($composerPharFile . ' install -d=\'' . $rootDir . '\'', $outputInstall);

$outputString = implode($outputInstall, "\r\n");
if($outputString != '' && strpos('error', strtolower($outputString)) === false){
    unlink($rootDir . 'web/install.php');
    header('Location: '.$_SERVER['REQUEST_URI']);
}