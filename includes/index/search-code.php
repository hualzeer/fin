<!-- this code is for the search bar 2  with this code i can find the truck name in the database  -->

<div class="col-sm-12 mt-3">

<div class="row mx-auto">

 


 <!-- start card-->

<?php 
     
     $query="SELECT * FROM all_trucks WHERE truck_name like '%$search%' ";
     $selecttt_trucks=mysqli_query($connection,$query);
     
     while($row = mysqli_fetch_assoc($selecttt_trucks)){
       $truck_id=$row['truck_id'];
       $truck_name=$row['truck_name'];
       $truck_phone=$row['truck_phone'];
       $truck_email=$row['truck_email'];
       $truck_location=$row['truck_location'];
       $truck_cost=$row['truck_cost'];
       $truck_about_us=$row['truck_info'];
       $truck_image=$row['truck_image'];
          

?>


 <div class="col-sm-3 ">
   <div class="card1 mx-2">
     <div class="card1-image">
       <img src="img/<?php echo "$truck_image" ?>"  alt="">
     </div>  

     <div class="card1-body">
       <div class="card1-body-cost">
       <h3 ><?php echo "$truck_cost"; ?> jd</h3>
       </div>
       <div class="card1-body-text">
         <h2 class="header"> <?php echo " $truck_name"; ?></h2>
         <p class="mx-3">spiclaty : fride chicken</p>
         <p class="mx-3"> location : <?php echo "$truck_location" ?></p>
         <p class="mx-3 " style=" height:95px; line-height:20px;
    overflow:hidden"> <?php echo "$truck_about_us" ?></p>
         <a href="fast-food.php?id=<?php echo $truck_id?>" class="btn1 btn1-white "> order</a>
       </div>
     </div>

   </div>
 </div>

 <?php }?>
<!-- end card-->
  
</div>