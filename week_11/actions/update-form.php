<?php
if(isset($_GET['cat'])) {
    $cat = $_GET['cat'];
    $select_categiry = "SELECT * FROM categories WHERE id='$cat'";
    $result = mysqli_query($conn, $select_categiry);
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST['update'])){
        $title = $_POST['title'];
        $author =$_POST['author'];
        $date = $_POST['date'];
        $id = $_POST['id'];
        $update_query = "UPDATE categories SET title='$title', author='$author', date='$date' WHERE id='$id'";
        if(mysqli_query($conn, $update_query)){
            header("location:actions.php");
        }else{
            echo "Error: " . $update_query. "<br>" . mysqli_error($conn);
        }
    }
}
?>

<div class="category">
    <h2>Update</h2>
    <form method="post">
        <input type="text" name="title" value="<?=$row['title']?>">
        <br><br>
        <input type="text" name="author" value="<?=$row['author']?>">
        <br><br>
        <input type="date" name="date" value="<?=$row['date']?>">
        <br><br>
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <button name="update">Update</button>
    </form>
</div>