<?php

namespace controllers;

use vendor\myframe\Controller;
use vendor\myframe\Views;

class TeacherController extends Controller
{

    public function list()
    {

        $this->view->render("teacher/list");
    }

    public function add()
    {
        $this->view->render("teacher/add");
    }

    public function update()
    {
        $this->view->render("teacher/update");
    }

    public function delete()
    {
        $this->view->render("teacher/delete");

    }
}