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
        </ul>
    </nav>
    <main>
        <?php
            if(isset($_GET['action']) && $_GET['action']=="insert"){
                include  "actions/insert.php";
            }else{
                include "actions/categories.php";
            }
        ?>
    </main>
</body>
</html>
