<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UP</title>
</head>
<body>
    <h1>Up.PHP</h1>
    <?php
        if(isset($_POST['atvirtva'])){
            print_r($_FILES['filis_saxeli']);
            $file = $_FILES['filis_saxeli'];
//            move_uploaded_file($_FILES['filis_saxeli'][['tmp_name']])
            move_uploaded_file($file['tmp_name'], 'files/'.$file['name']);
            header("location:files.php");
        }

        $f = fopen('post.txt', 'r');
        $p = fread($f, filesize('post.txt'));
        echo $p;
        fclose($f);
        echo "<br><br>";
        echo file_get_contents("post.txt");
    ?>
</body>
</html>
