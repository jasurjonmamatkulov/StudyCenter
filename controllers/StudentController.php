<?php

namespace controllers;

use vendor\myframe\Connection;
use vendor\myframe\Controller;
use vendor\myframe\Views;

class StudentController extends Controller
{
    public function list()
    {
        $sql = "select * from student";
        $conn = new Connection();
        $db = $conn->getConnection();
        $state = $db->prepare($sql);
        $state->execute();
        $result = $state->fetchAll();
        $this->view->render("student/list", ['list' => $result]);
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