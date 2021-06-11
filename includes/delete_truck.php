<?php include "db.php" ?>
<?php  
$delete_id=$_GET['delete_id'];
?>



<?php

$query="DELETE FROM all_trucks WHERE truck_id ={$delete_id}";

$delete_truck=mysqli_query($connection,$query);

header("location: ../admin.php")
?>