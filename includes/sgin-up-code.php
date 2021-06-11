<?php include "db.php";?>
<?php session_start(); ?>


<?php
if (isset($_POST['sign_up'])){

   $username_acc=$_POST['user_name'];
   $user_password=$_POST['user_password'];
   $user_email=$_POST['user_email'];
   $user_phone=$_POST['user_phone'];
   $user_type=$_POST['user_type'];
   $accepted="not_accepted";

   $username_acc= mysqli_real_escape_string($connection, $username_acc);
   $user_password= mysqli_real_escape_string($connection, $user_password);
   $user_email= mysqli_real_escape_string($connection, $user_email);
   $user_phone= mysqli_real_escape_string($connection, $user_phone);
   $user_type= mysqli_real_escape_string($connection, $user_type);


   if($user_type === "user"){

         $qeury="INSERT INTO users (user_name_first,user_phone,user_email,user_password) VALUES ('{$username_acc}','{$user_phone}','{$user_email}','{$user_password}' ) ";
         
         $add_user= mysqli_query($connection,$qeury);

         if(!$add_user){
            die("query failed" .mysqli_error($connection));
         }
   }

   else{
      $qeury="INSERT INTO all_trucks (truck_name,truck_phone,truck_email,truck_password,accepted ) VALUES ('{$username_acc}','{$user_phone}','{$user_email}','{$user_password}','{$accepted}' ) ";
         
      $add_truck= mysqli_query($connection,$qeury);

      if(!$add_truck){
         die("query failed" .mysqli_error($connection));
      }
   }

   header("Location: ../login.php");

   }
?>