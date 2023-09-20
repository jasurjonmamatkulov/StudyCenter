<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
</head>
<body>
<h1 style="text-align: center;"> Date About Teachers</h1>
<?php
//$page = 1;
//if (isset($_GET['page'])) {
//    $page = $_GET['page'];
//}
//?>
<div class="container" style="text-align: center;">
    <button class="btn btn-primary my-5">
        <a href="#" class="text-light">Add Teacher</a>
    </button>
    <table class="table table-striped">
        <thead style="text-align: center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Operations</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($list as $item) {
            echo "<tr>
                  <td>" . $item['id'] . "</td>
                  <td>" . $item['first_name'] . "</td>
                  <td>" . $item['last_name'] . "</td>
                  <td>" . $item['email'] . "</td>
                  <td>" . $item['address'] . "</td>
                  <td style='width: 300px;'>
                   <button class='btn btn-danger'><a href='/teacher_edit.php?id=" . $item['id'] . "'class='text-light'>Edit</a></button>
                  <button class='btn btn-primary'><a href='/teacher_delete.php?id=" . $item['id'] . "' class='text-light'>Delete</a></buuton>
                  </td>";
            echo "</tr>";
        } ?>
        </tbody>
    </table>
</div>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
<!--        --><?php
//        for ($i = 1; $i <= getPageCount("teacher"); $i++) { ?>
<!--            <li class="page-item --><?php //if ($page == $i) {
//                echo "active";
//            } else {
//                echo "noactive";
//            } ?><!--"><a class="page-link" href="/teacher_view.php?page=--><?php //= $i ?><!--">--><?php //= $i ?><!--</a></li>-->
<!--        --><?php //} ?>
    </ul>
</nav>
</body>
</html>