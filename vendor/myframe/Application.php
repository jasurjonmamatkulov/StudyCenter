<?php
namespace vendor\myframe;
class Application
{
    private $id = null;
    public function run()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $data = explode("/", $uri);
        $classname = ucfirst($data[2]) . "Controller";
        $classname = "controllers\\".$classname;
        $functionName = $data[3];
        if (isset($data[4])){
            $this->id = $data[4];
        }


        $obj = new $classname();
        if (is_null($this->id)){
            $obj ->{$functionName}();
        }else{
            $obj->{$functionName}($this->id);
        }

    }
}