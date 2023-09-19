<?php

namespace vendor\myframe;

class Views
{
    public function render($viewFile)
    {
        include "views/layout/header.php";
        include "views/".$viewFile.".php";
    }
}