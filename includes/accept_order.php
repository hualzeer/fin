<?php include "db.php"?>

<?php $order_id=$_GET["order_id"] ?>

<?php

$res="accepted";

$query="UPDATE users_orders SET accepted = '{$res}' WHERE order_id = {$order_id} ";

$accept_order=mysqli_query($connection,$query);

header("Location: ../admin-truck.php");




?>