<?php
    require_once "db.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header></header>
    <nav>
        <ul>
            <li><a href="actions.php">Actions</a></li>
            <li><a href="?action=insert">Insert</a></li>
<!--            <li><a href="?action=update">Update</a></li>-->
        </ul>
    </nav>
    <main>
        <?php
            include "actions/delete.php";
            if(isset($_GET['action']) && $_GET['action']=="insert"){
                include  "actions/insert.php";
            }else if(isset($_GET['action']) && $_GET['action']=="update"){
                include  "actions/update-form.php";
            }
            else{
                include "actions/categories.php";
            }
        ?>
    </main>
</body>
</html>
