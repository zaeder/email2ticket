<?php
set_time_limit(0);

$rootDir = str_replace('web/install/composerInstall.php', '', str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME']));

if(file_exists($rootDir . 'app/config/parameters.yml')){
    unlink($rootDir . 'app/config/parameters.yml');
}
if(!copy($rootDir . 'app/config/parameters.yml.dist', $rootDir . 'app/config/parameters.yml')){
    http_response_code(500);
    echo 'Parameters copy failed...';
}

$composerPharFile = $rootDir . 'composer.phar';
if(!file_exists($composerPharFile)){
    http_response_code(500);
    echo 'You must have a composer.phar in the project root folder';
}
chdir($rootDir);
exec('php ' . $composerPharFile . ' install', $out);

$outString = implode("\r\n", $out);

if(strlen($outString) > 0 && strpos('error',  strtolower($outString)) !== false){
    http_response_code(500);
    echo 'Composer install failed';
} else {
    echo $outString;
}