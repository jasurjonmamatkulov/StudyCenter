<?php

namespace controllers;

use vendor\myframe\Connection;
use vendor\myframe\Controller;
use vendor\myframe\Views;

class TeacherController extends Controller
{

    public function list()
    {
        $sql = "select * from teacher";
        $conn = new Connection();
        $db = $conn->getConnection();
        $state = $db->prepare($sql);
        $state->execute();
        $result = $state->fetchAll();
        $this->view->render("teacher/list", ['list' => $result]);
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