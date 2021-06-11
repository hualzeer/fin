<?php 
    
   include "includes/db.php";

   $order=$_GET['id'];

   $qeury = "SELECT * FROM all_trucks WHERE truck_id=$order ";
   $truck_info=mysqli_query($connection,$qeury);

   while($row = mysqli_fetch_assoc($truck_info)){
          $truck_name=$row['truck_name'];
          $truck_phone=$row['truck_phone'];
          $truck_email=$row['truck_email'];
          $truck_location=$row['truck_location'];
          $truck_cost=$row['truck_cost'];
          $truck_about_us=$row['truck_info'];
          $truck_image=$row['truck_image'];
         
   }
   
?>

<section class="menu">
         <div class="container-fluid">
            <div class="row">

               <div class="col-sm-8 menu-left">

               <!-- ////////////////////// -->


               <!-- /////////////////////-->

                     <div class="menu-left-image mx-auto">
                        <img src="img/uploaded/<?php echo $truck_image?>"  alt="">
                     </div>

                     <div class="menu-left-linkss mt-3">
                        <h2 class="text-center py-2 text-white"><?php echo $truck_name ?></h2>

                        <div class="info justify-content-between">
                       
                           <div class="location mx-5 mt-1">
                              <i class="fas fa-location-arrow  icons"></i>
                              <p class="" style="text-align: center; margin-top: -7px !important;"><?php echo $truck_location ?></p>
                           </div>

                           <div class="location mx-5 mt-1 phone">
                              <i class="fas fa-mobile-alt  icons"></i>
                              <p class="" style=" margin-top: -7px !important;"><?php echo $truck_phone ?></p>
                           </div>

                           <div class="location mx-5 mt-1 email">
                              <i class="far fa-envelope   icons"></i>
                              <p class="" style="text-align: center; margin-top: -7px !important;"><?php echo $truck_email ?></p>
                           </div>


                           <!-- 
                              <p class="text-black-50"><i class="fas fa-mobile-alt px-4 icons"></i>phone number</p>
                           <p class="text-black-50"><i class="far fa-envelope  px-3 icons"></i>email@hotmail.com</p>
                            -->
                           
                        </div>
                     </div>
               </div>

               <div class="col-sm-4 menu-right">
                  <div class="menu-right-header ">
                  
                     <h2>
                     Welcome to <?php echo $truck_name ?>
                     </h2>
                     
                  </div>
                  <div class="menu-right-img"></div>
                  <div class="menu-right-underline"></div>

                  <div class="menu-right-text">
                     <p><?php echo $truck_about_us ?></p>
                  </div>

                  <a href="#all-menu">
                  <div class="menu-right-check-menu">
                     <i class="fas fa-arrow-down"></i>
                  </div>
                  </a>
               </div>
            </div>
         </div>
      </section>