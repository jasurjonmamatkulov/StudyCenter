<?php
include "student_functions.php";
if (isset($_POST['ok'])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $date_birth = $_POST['date_birth'];
    $result = updateStudent($id, $first_name, $last_name, $email, $date_birth);
    if ($result) {
        header("Location: /student_view.php");
        exit();
    }
}
?>