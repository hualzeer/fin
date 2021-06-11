<?php include "db.php" ?>
<?php  
$item=$_GET['item_id'];
?>



<?php

$query=" DELETE FROM items WHERE item_id = {$item} ";

$delete_items=mysqli_query($connection,$query);


 header("Location: ../admin-truck-menu.php ");

?>
