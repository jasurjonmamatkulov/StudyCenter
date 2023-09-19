<?php
//include "dataBase.php";
//include "student_functions.php";

if (isset($_POST['ok'])) {
    $img = $_FILES;
    $id = $_POST['id'];
//    $image = $_POST['image'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $date_birth = $_POST['date_birth'];

    $result = addStudent($id, $first_name, $last_name, $email, $date_birth);
    if ($result) {
        header("Location: /student_view.php");
        exit();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
</head>
<body>
<div class="container">
    <h1> Add New Student</h1>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label>ID</label>
            <input type="number" class="form-control" placeholder="ID" name="id">
        </div>
        <div class="form-group row">
            <label>Photo</label>
            <input type="file" class="form-control" placeholder="Photo" name="image">
        </div>
        <div class="form-group row">
            <label>First Name</label>
            <input type="text" class="form-control" placeholder="First Name" name="first_name">
        </div>
        <div class="form-group row">
            <label>Last Name</label>
            <input type="text" class="form-control" placeholder="Last Name" name="last_name">
        </div>
        <div class="form-group row">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="form-group row">
            <label>Date Birth</label>
            <input type="date" class="form-control" placeholder="Date Birth" name="date_birth">
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="ok">Add</button>
            </div>
        </div>

    </form>

</div>
</body>
</html>
