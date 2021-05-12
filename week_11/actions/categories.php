<div>
    <?php
        $select_query = "SELECT * FROM categories";
        $result = mysqli_query($conn, $select_query);
//        var_dump($result);
//        while($row = mysqli_fetch_assoc($result)){
//            echo "<pre>";
//            print_r($row);
//            echo "</pre>";
//        }

        while($row = mysqli_fetch_assoc($result)){
        ?>
          <div class="category">
              <div><?=$row['title']?></div>
              <div><?=$row['author']?></div>
              <div><?=$row['date']?></div>
              <div><a href="?action=update&cat=<?=$row['id']?>">update</a> <a href="?action=delete&cat=<?=$row['id']?>">delete</a></div>
          </div>
        <?php
        }
        ?>
<?php
//        $row = mysqli_fetch_assoc($result);
//        $row = mysqli_fetch_assoc($result);
//        echo "<pre>";
//        print_r($row);
//        echo "</pre>";
//        $row = mysqli_fetch_assoc($result);
//        echo "<pre>";
//        print_r($row);
//        echo "</pre>";
//        $row = mysqli_fetch_assoc($result);
//        echo "<pre>";
//        print_r($row);
//        echo "</pre>";
//
?>
</div>