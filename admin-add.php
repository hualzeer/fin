<?php 
include "includes/db.php";

if(isset($_POST['create_truck'])){
   $truck_name=$_POST['truck_name'];
   $truck_password=$_POST['truck_password'];
   $truck_phone=$_POST['truck_phone'];
   $truck_email=$_POST['truck_email'];
   $truck_location=$_POST['truck_location'];
   $truck_cost=$_POST['truck_cost'];
   $truck_in=$_POST['truck_info'];
   $famous_with=$_POST['famous_with'];

   $file =$_FILES['image']['name'];

   move_uploaded_file($_FILES['image']['tmp_name'],"img/uploaded/$file");

   
   $not_accepted="not_accepted";


   $query=" INSERT INTO all_trucks (truck_name,truck_password,truck_phone,truck_email,truck_image,truck_cost,truck_food,truck_location,truck_info,accepted) ";
   
    $query.= "VALUES ('{$truck_name}','{$truck_password}','{$truck_phone}','{$truck_email}','{$file}','{$truck_cost}','{$famous_with}','{$truck_location}','{$truck_in}','{$not_accepted}') ";

   $con = mysqli_query($connection,$query);


   header("Location: admin.php");
}

?>


    <?php include "includes/admin/admin_header.php" ?>

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
            <img src="img/kfc.png" alt="">
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
             <form action="" method="POST"  enctype="multipart/form-data">

               <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">truck name</span>
                  <input type="text" class="form-control" name="truck_name" placeholder="WRITE HERE" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">truck password</span>
                  <input type="text" class="form-control" name="truck_password" placeholder="WRITE HERE" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">truck phone</span>
                  <input type="text" class="form-control" name="truck_phone" placeholder="WRITE HERE" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">truck email</span>
                  <input type="text" class="form-control" name="truck_email" placeholder="WRITE HERE" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">location</span>
                  <input type="text" class="form-control" name="truck_location" placeholder="WRITE HERE" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">truck cost</span>
                  <input type="text" class="form-control" name="truck_cost" placeholder="WRITE HERE" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">famous with</span>
                  <input type="text" class="form-control" name="famous_with" placeholder="WRITE HERE" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                

                <div class="mb-3 my-5">
                  <label for=""> the image</label>
                  <input class="form-control form-control-lg" name="image" id="formFileLg" type="file">
               </div>

               <div class="input-group my-5">
                  <span class="input-group-text">add details</span>
                  <input type="text" class="form-control" name="truck_info" placeholder="WRITE HERE" aria-label="Username" aria-describedby="basic-addon1">                </div>

                <button class="btn btn-primary w-25" name="create_truck" type="submit">add</button>
                
             </form>

           </div>

           
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