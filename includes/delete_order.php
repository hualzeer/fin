<?php include "db.php" ?>
<?php  
$delete_order=$_GET['order_id'];
?>



<?php

$query = "DELETE FROM users_orders WHERE order_id = '{$delete_order}' ";

$delete_order_id=mysqli_query($connection,$query);

header("Location: ../admin-truck.php")
?>