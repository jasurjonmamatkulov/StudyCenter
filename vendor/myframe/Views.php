<?php

namespace vendor\myframe;

class Views
{
    public function render($viewFile, $data = null)
    {
        extract($data);
        include "views/layout/header.php";
        include "views/".$viewFile.".php";
    }
}