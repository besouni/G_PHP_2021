<?php
    if(isset($_GET['action']) && $_GET['action']=="delete"){
        $cat =  $_GET['cat'];
//        echo $cat;
        $delete_query = "DELETE FROM categories WHERE id='$cat'";
        if(mysqli_query($conn, $delete_query)){
//            echo "Deleted";
        }else{
            echo "Error: " . $delete_query  . "<br>" . mysqli_error($conn);
        }
    }
?>