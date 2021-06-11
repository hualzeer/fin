<?php include "includes/db.php" ?>
<?php ob_start();?>
<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="main.css">
   <title>Document</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

   <!-- font awesome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

   <!--swiber js-->
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>
<body style="margin: 0; padding: 0; overflow-x: hidden;" >
 
  <div class="con-admin">
     <div class="navigation">

      <ul>
         <li>
            <a href="admin-truck-add-info.php">
                  <span class="icon"><i class="fa fa-truck" aria-hidden="true"></i></span>
                  <span class="title"><h2>Truck Info</h2></span>
            </a>
         </li>

         <li>
            <a href="admin-truck.php">
                  <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                  <span class="title">home page</span>
            </a>
         </li>

         <li>
            <a href="admin-truck-add.php">
                  <span class="icon"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                  <span class="title">add item</span>
            </a>
         </li>

         <li>
            <a href="admin-truck-menu.php">
                  <span class="icon"><i class="fa fa-cutlery" aria-hidden="true"></i>
                  </span>
                  <span class="title">menu</span>
            </a>
         </li>

         <li>
            <a href="includes/logout_code.php">
                  <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                  <span class="title">sign out</span>
             </a>     
         </li>

        
      </ul>
     </div>
