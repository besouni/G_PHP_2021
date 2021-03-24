<!doctype html>
<html lang="en">
<head>
    <title>Week 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(isset($_GET['profile'])){
            include("blocks/profile.php");
        }else{
            include("blocks/autorization.php");
        }
        for($i=0; $i<5; $i++){
            @include("blocks/header.php");
        }
        require("blocks/header.php");
        include_once("blocks/body.php");
        include("blocks/header.php");
        include("blocks/header.php");
    ?>
</body>
</html>