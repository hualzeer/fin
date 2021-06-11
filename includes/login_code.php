<?php include "db.php";?>

<?php session_start(); ?>

<?php
if (isset($_POST['login'])){

   $username=$_POST['user']; // RMB2021
   $password=$_POST['password']; // 123




   // to bring admin truck user name and password
   $qeury="SELECT * FROM all_trucks WHERE truck_name= '{$username}' ";
   
   $select_truck= mysqli_query($connection,$qeury);

   if(!$select_truck){
      die("query failed" .mysqli_error($connection));
   }

   while($row = mysqli_fetch_array($select_truck)){
      $db_truck_id=$row['truck_id'];       
      $db_truck_name=$row['truck_name'];       
      $db_truck_password=$row['truck_password'];       
      $db_truck_image=$row['truck_image'];       
            
   } 
  

   // TO bring admin user name  and password
   $qeury2="SELECT * FROM admin_account WHERE admin_name= '{$username}' ";
   
   $select_admin= mysqli_query($connection,$qeury2);

   if(!$select_admin){
      die("query failed" .mysqli_error($connection));
   }

   while($row = mysqli_fetch_array($select_admin)){
      $db_admin_id=$row['admin_id'];       
      $db_admin_name=$row['admin_name'];       
      $db_admin_password=$row['admin_password'];       
            
   }




    // TO bring normal user name  and password
    $qeury3="SELECT * FROM users WHERE user_name_first= '{$username}' ";
   
    $select_user= mysqli_query($connection,$qeury3);
 
    if(!$select_user){
       die("query failed" .mysqli_error($connection));
    }
 
    while($row = mysqli_fetch_array($select_user)){
       $db_user_id=$row['user_id'];       
       $db_user_name=$row['user_name_first'];       
       $db_user_password=$row['user_password'];       
       $db_user_phone=$row['user_phone'];       
       $db_user_email=$row['user_email'];       
             
    }

  






    if($username == null && $password == null){
      header("Location: ../login.php");
   }

   else if($username === $db_truck_name && $password ===  $db_truck_password){
      header("Location: ../admin-truck.php");

      $_SESSION['truck_id_session']=$db_truck_id;
      $_SESSION['truck_name_session']=$db_truck_name;
      $_SESSION['truck_image_session']=$db_truck_image;

   }

   else if($username == $db_admin_name && $password ==  $db_admin_password){
      header("Location: ../admin.php");

      $_SESSION['admin_id_session']=$db_admin_id;
      $_SESSION['admin_name_session']=$db_admin_name;

   }

   else if($username == $db_user_name && $password ==  $db_user_password){

      $_SESSION['user_id_session']=$db_user_id;
      $_SESSION['user_name_session']=$db_user_name;
      $_SESSION['user_phone_session']=$db_user_phone;
      $_SESSION['user_email_session']=$db_user_email;
      $_SESSION['user_password_session']=$db_user_password;
      header("Location: ../index.php");

   }
   

   else {
      header("Location: ../login.php");
  }

  

   
   
} 



?>