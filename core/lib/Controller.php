<?php
/**
 * Created by PhpStorm.
 * User: wison
 * Date: 2017/12/13
 * Time: 0:44
 */
namespace core\lib;

use core\lib\drive\view\Compiler;

class Controller
{
    /**
     * Renders a view
     * @param string $view the view name.
     * @param array $params the parameters (name-value pairs) that should be made available in the view.
     */
    public function render($view, $params = [])
    {
        (new Compiler())->compile($view, $params);
    }

    /**
     * Convert a array to json string
     * @param string $data
     */
    public function toJson($data)
    {
        if (is_string($data)) {
            return $data;
        }
        return json_encode($data);
    }
}