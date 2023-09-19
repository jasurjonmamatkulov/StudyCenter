<?php

#include_once 'teacher_functions.php';

if (isset($_GET['id'])) {
$id = $_GET['id'];
$result = getTeacher($id);
if (!empty($result)) {
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
</head>
<body>
<div class="container my-5">
    <h1> Edit Teacher Date</h1>
    <form method="post" action="teacher_add.php" enctype="multipart/form-data">
        <div class="form-group">
            <label>ID</label>
            <input type="text" class="form-control" placeholder="ID" name="id" value="<?= $result[0]['id'] ?>">
        </div>
        <div class="form-group">
            <label>Photo</label>
            <input type="file" class="form-control" placeholder="Photo" name="image" value="<?= $result[0]['image'] ?>">
        </div>
        <div class="form-group row">
            <label>First Name</label>
            <input type="text" class="form-control" placeholder="First Name" name="first_name" value="<?= $result[0]['first_name'] ?>">
        </div>
        <div class="form-group row">
            <label>Last Name</label>
            <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="<?= $result[0]['last_name'] ?>">
        </div>
        <div class="form-group row">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email" value="<?= $result[0]['email'] ?>">
        </div>
        <div class="form-group row">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="Address" name="address" value="<?= $result[0]['address'] ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="ok">Update</button>
        </div>

    </form>

</div>
<?php
} else {
    echo "Error Customer Number not found $id.";
}
}
?>
<body>
</html>
