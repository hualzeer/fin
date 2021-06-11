<?php session_start() ?>

<?php  
 $_SESSION['truck_id_session']=null;
 $_SESSION['truck_name_session']=null;
 $_SESSION['truck_image_session']=null;

 $_SESSION['admin_id_session']=null;
 $_SESSION['admin_name_session']=null;

 $_SESSION['user_id_session']=null;
 $_SESSION['user_name_session']=null;
 $_SESSION['user_phone_session']=null;
 $_SESSION['user_email_session']=null;
 $_SESSION['user_password_session']=null;

 header("Location: ../index.php")

?>