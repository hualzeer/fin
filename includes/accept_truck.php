<?php include "db.php" ?>

<?php

$accepted=$_GET['accept_id'];

$res="accepted";

$query="UPDATE all_trucks SET accepted = '{$res}' WHERE truck_id = {$accepted} ";

$accept_truck=mysqli_query($connection,$query);

header("Location: ../admin.php");

?>