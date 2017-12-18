<?php
return [
    'class' => '\core\lib\drive\cache\file\FileCache',
    'cachePath' => WISON_PATH . '/runtime/cache/'
    // 'class' => '\core\lib\drive\cache\redis\RedisCache',
    // 'redis' => [
    //     'host' => 'localhost',
    //     'port' => 6379,
    //     'database' => 0,
    //     'password' => false,
    //     'options' => [Redis::OPT_SERIALIZER, Redis::SERIALIZER_PHP],
    // ]
];
