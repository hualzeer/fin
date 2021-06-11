


<div class="col-sm-12 mt-3">

<div class="row mx-auto">

 
<?php 
$accepted="accepted";

$query="SELECT * FROM all_trucks WHERE  accepted='accepted' ";


$selectt_trucks=mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($selectt_trucks)){
  $truck_id=$row['truck_id'];
  $truck_name=$row['truck_name'];
  $truck_phone=$row['truck_phone'];
  $truck_email=$row['truck_email'];
  $truck_location=$row['truck_location'];
  $truck_cost=$row['truck_cost'];
  $truck_about_us=$row['truck_info'];
  $truck_image=$row['truck_image'];
  $truck_food=$row['truck_food'];

?>


 <!-- start card-->

 
 <div class="col-sm-3 ">
   <div class="card1 mx-5 my-3">
     <div class="card1-image">
       <img src="img/uploaded/<?php echo "$truck_image" ?>"  alt="">
     </div>  

     <div class="card1-body">
       <div class="card1-body-cost">
       <h3 ><?php echo "$truck_cost"; ?> jd</h3>
       </div>
       <div class="card1-body-text">
       <form action="fast-food.php" method="POST">
         <h2 class="header" name="truck-name"> <?php echo " $truck_name"; ?></h2>
         <p class="mx-3">spiclaty : <?php echo "$truck_food" ?></p>
         <p class="mx-3"> location : <?php echo "$truck_location" ?></p>
         <p class="mx-3 " style=" height:95px; line-height:20px;
    overflow:hidden"> <?php echo "$truck_about_us" ?></p>
         
          <a href="fast-food.php?id=<?php echo $truck_id?>" class="btn1 btn1-white"> ORDER</a>
          
         </form>
       </div>
     </div>

   </div>
 </div>

     

 <?php }?>
<!-- end card-->
  
</div>