<?php include "includes/admin-truck/header.php" ?>


<?php 

$id= $_SESSION['truck_id_session'];
$imgae_image=$_SESSION['truck_image_session'];

if(isset($_POST['submit'])){
   $truck_name=$_POST['truck_name'];
   $truck_phone=$_POST['truck_phone'];
   $truck_email=$_POST['truck_email'];
   $truck_location=$_POST['truck_location'];
   $truck_cost=$_POST['truck_cost'];
   $truck_about_us=$_POST['truck_info'];
   $truck_food=$_POST['truck_food'];

   $file =$_FILES['image']['name'];
   move_uploaded_file($_FILES['image']['tmp_name'],"img/uploaded/$file");



   $query= "UPDATE all_trucks SET truck_phone= '{$truck_phone}',truck_email= '{$truck_email}',truck_location= '{$truck_location}' ,truck_cost= '{$truck_cost}', truck_info= '{$truck_about_us}',truck_image= '{$file}'  , truck_food='{$truck_food}' WHERE truck_id = '{$id}' ";
   
   $add_category_to_table=mysqli_query($connection,$query);

   if(!$add_category_to_table){
     die(" failed" . mysqli_error($connection));
   }

   header("Refresh:0");

 

  
}

?>


<?php 

$querry="SELECT * FROM all_trucks WHERE  truck_id = '{$id}' ";

$add_bring= mysqli_query($connection,$querry);

while($row = mysqli_fetch_assoc($add_bring)){

   $truck_name=$row['truck_name'];
   $truck_phone=$row['truck_phone'];
   $truck_email=$row['truck_email'];
   $truck_location=$row['truck_location'];
   $truck_cost=$row['truck_cost'];
   $truck_about_us=$row['truck_info'];
   $truck_image=$row['truck_image'];
   $truck_ch=$row['truck_food'];


}


?>





     <div class="admin-main">
        <div class="topbar">
           <div class="toggle" onclick="toggleMenu();"></div>
           <div class="search">
              <label for="">
                 <input type="text" placeholder="search here">
                 <i class="fa fa-search" aria-hidden="true"></i>
              </label>
           </div>
           
           <div class="user">
           <img src="img/uploaded/<?php echo  $_SESSION['truck_image_session'] ?>" alt="">
         </div>
        </div>

        <div class="cardbox">
           <div class="card">
              <div>
                 <div class="numbers">1,042</div>
                 <div class="card-name">Daily views</div>
              </div>

              <div class="iconbox">
               <i class="fa fa-eye" aria-hidden="true"></i>
              </div>
           </div>

           <div class="card">
            <div>
               <div class="numbers">80</div>
               <div class="card-name">Sales</div>
            </div>

            <div class="iconbox">
               <i class="fa fa-shopping-cart" aria-hidden="true"></i>           
            </div>

         </div>

         <div class="card">
            <div>
               <div class="numbers">280</div>
               <div class="card-name">Comments</div>
            </div>

            <div class="iconbox">
               <i class="fa fa-commenting-o" aria-hidden="true"></i>  
            </div>
         </div>

         <div class="card">
            <div>
               <div class="numbers">6,042</div>
               <div class="card-name">Earning</div>
            </div>

            <div class="iconbox">
               <i class="fa fa-usd" aria-hidden="true"></i>
            </div>
         </div>
        </div>
        

        <div class="details">
           <div class="recentOrders">
             <form action="admin-truck-add-info.php" method="POST"  enctype="multipart/form-data">
                          
             <div class="input-group mb-3 my-5">
                 <img src=" <?php  
                           $querry="SELECT * FROM all_trucks WHERE  truck_id = '{$id}' ";

                           $image= mysqli_query($connection,$querry);

                           while($row = mysqli_fetch_assoc($image)){
                              $truck_image=$row['truck_image'];

                           }

                           if($truck_image != ""){
                              echo "img/uploaded/$truck_image" ;

                           }
                           else{
                              echo "img/no-image/no-images.jpg";
                           }
                 
                 ?>  " height="300px" class="mx-auto" alt="">                 
                </div>

                <div class="mb-3 ">
                  <input class="form-control form-control-lg"  name="image" id="formFileLg" type="file">
               </div>
               

               <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">Truck  NAME</span>
                  <input type="text" class="form-control" name="truck_name" value="<?php echo $truck_name ?>" aria-label="Username" aria-describedby="basic-addon1" readonly>
                </div>

                <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">Truck menu</span>
      
                  <select class="form-select" aria-label="Default select example" name="categories" readonly>
                     

                     <?php 

                     $id= $_SESSION['truck_id_session'];

                     $querry="SELECT * FROM  truck_categories WHERE truck_id = $id ";              
                     $select_categories=mysqli_query($connection,$querry);
                     while($row = mysqli_fetch_assoc($select_categories)){            
                        $category=$row['cat_title'];
                    echo "<option> {$category} </option>";
                     }
                     ?>

                  </select>

                </div>


                <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">Truck Phone</span>
                  <input type="text" class="form-control" name="truck_phone"value="0<?php echo $truck_phone ?>" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">Truck Email</span>
                  <input type="text" class="form-control" name="truck_email"value="<?php echo $truck_email ?>" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">Truck Cost</span>
                  <input type="text" class="form-control" name="truck_cost"value="<?php echo $truck_cost ?>" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">catagory</span>
                  <input type="text" class="form-control" name="truck_food"value="<?php echo $truck_ch ?>" aria-label="Username" aria-describedby="basic-addon1">
                </div>


                <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">Truck Location</span>
                  <input type="text" class="form-control" name="truck_location"value="<?php echo $truck_location ?>" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">Truck Information</span>
                  <textarea name="truck_info" class="form-control" id="" cols="30" rows="10" aria-label="Username" aria-describedby="basic-addon1"><?php echo $truck_about_us ?></textarea>
                </div>
              
               

                

                <button class="btn btn-primary w-25 " style="margin: 0 0 0 300px" name="submit" type="submit">add</button>
                
             </form>

           </div>



           <!-- add category to truck-admin -->

        </div>
     </div>
  </div>




   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

   <!--swiber js-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



<script>
   function toggleMenu() {
      let toggle= document.querySelector('.toggle');
      let navigation= document.querySelector('.navigation');
      let adminmain= document.querySelector('.admin-main');

      toggle.classList.toggle('activeee');
      navigation.classList.toggle('activeee');
      adminmain.classList.toggle('activeee');
    
   }
</script>
</body>
</html>