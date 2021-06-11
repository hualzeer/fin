<?php session_start() ?>

<?php  $truck_id=$_GET['id'];
 ?>

<?php 
if ($_SESSION['user_name_session'] === null && $_SESSION['user_password_session']=== null){
  

   header("Location: ../login.php");

}
else{
   
   header("Location: ../order.php?truck_id=$truck_id");


}


?>