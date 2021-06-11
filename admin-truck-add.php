<?php include "includes/admin-truck/header.php" ?>


<?php 


if(isset($_POST['submit'])){
   $id= $_SESSION['truck_id_session'];
   $item_name=$_POST['food_name'];
   $item_info=$_POST['food_info'];
   $item_category=$_POST['categories'];

   $file =$_FILES['image']['name']; // send  the name to the database 
   move_uploaded_file($_FILES['image']['tmp_name'],"img/uploaded/$file"); // isert the image in the code


   $query= "INSERT INTO items (item_image,item_name,item_details,item_category,truck_id) VALUES ('$file' ,'$item_name','$item_info','$item_category','$id' )";
   
   $add_category_to_table=mysqli_query($connection,$query);

   if(!$add_category_to_table){
     die(" failed" . mysqli_error($connection));
   }

   header("Refresh:0");


  
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
             <form action="admin-truck-add.php" method="POST"  enctype="multipart/form-data">

               <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">FOOD NAME</span>
                  <input type="text" class="form-control" name="food_name" placeholder="WRITE HERE" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">select the menu</span>
      
                  <select class="form-select" aria-label="Default select example" name="categories">
                     

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

                <div class="mb-3 my-5">
                  <span class="input-group-text w-50" id="basic-addon1">select image</span>

                  <input class="form-control form-control-lg" name="image" id="formFileLg" type="file">
               </div>

               <div class="input-group my-5">
                  <span class="input-group-text">add details</span>
                  <textarea class="form-control" name="food_info" aria-label="With textarea"></textarea>
                </div>

                <button class="btn btn-primary w-25" name="submit" type="submit">add</button>
                
             </form>

           </div>



           <!-- add category to truck-admin -->
           
           <?php    
           if(isset($_POST['add-menu'])){
                $truck_id=$_SESSION['truck_id_session']; 
                $menu_name=$_POST['menu_name'];
                
                $querrry ="INSERT INTO truck_categories (cat_title,truck_id ) 
                 VALUES ('{$menu_name}','{$truck_id}' ) " ;

                 $add_category=mysqli_query($connection,$querrry);
                
                 header("Refresh:0");

           }
           
           ?>


           <div class="recentOrders">
             <form action="" method="POST">

               <div class="input-group mb-3 my-5">
                  <span class="input-group-text" id="basic-addon1">menu name</span>
                  <input type="text" class="form-control" name="menu_name" placeholder="WRITE HERE" aria-label="Username" aria-describedby="basic-addon1">
                </div>


                <button class="btn btn-primary w-25" name="add-menu" type="submit">add menu</button>
                
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