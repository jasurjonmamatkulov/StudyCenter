<?php

namespace controllers;

use vendor\myframe\Controller;
use vendor\myframe\Views;

class StudentController extends Controller
{
    public function list()
    {

        $this->view->render("student/list");
    }
    public function add()
    {
        $this->view->render("student/add");
    }
    public function update()
    {
        $this->view->render("student/update");
    }
    public function delete()
    {
        $this->view->render("student/delete");
    }
}