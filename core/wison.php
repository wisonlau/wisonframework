<?php
namespace core;


class wison
{
    public static $classMap = array();
    private static $filePath = array('./../core/lib/common/', './../routes/');


    /**
     * Creates a new object using the given configuration.
     * You may view this method as an enhanced version of the `new` operator.
     * @param string $name the object name
     */
    public static function createObject($name)
    {
        $config = require(WISON_PATH . "/config/$name.php");
        // create instance
        $instance = new $config['class']();
        unset($config['class']);
        // add attributes
        foreach ($config as $key => $value) {
            $instance->$key = $value;
        }
        $instance->init();
        return $instance;
    }

    /**
     * Runs the application.
     * This is the main entrance of an application.
     */
    public function run()
    {
        spl_autoload_register('self::load');

        // 路由
        $route = new lib\Route();
        foreach(self::$filePath as $path)
        {
            foreach (scandir($path) as $file)
            {
                if( ! is_dir($path . $file))
                {
                    include $path . $file;
                }
            }
        }
    }

    /**
     * 自动加载类库
     */
    static public function load($class)
    {
        $class = str_replace('\\', '/', $class);

        if (isset($classMap[$class]))
        {
            return true;
        }
        else
        {
            $file = './../' . $class.'.php';
            if (is_file($file))
            {
                include $file;
                self::$classMap[$class] = $class;
            }
            else
            {
                return false;
            }
        }
    }

}