<?php
#include_once 'teacher_functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = deleteTeacher($id);
    if ($result) {
        echo "Row with ID $id deleted successfully!";
    } else {
        echo "Error deleting row with Customer Number $id.";
    }
}
?>
