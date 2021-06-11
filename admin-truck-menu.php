<?php include "includes/admin-truck/header.php" ?>


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

        <div class="details1">
           <div class="recentOrders">
             <div class="row">

             <?php 
             $idd=$_SESSION['truck_id_session'];
     $qeury = "SELECT * FROM  items WHERE truck_id = '{$idd}'";
     $select_all_items=mysqli_query($connection,$qeury);

     $output="";
     if(mysqli_num_rows($select_all_items)<1)
     {
        $output .="<h3 class='text-center'> no items uploaded </h3>";
     }

     while($row = mysqli_fetch_assoc($select_all_items)){
            $item_id=$row['item_id'];
            $item_name=$row['item_name'];
            $item_details=$row['item_details'];
            $item_image=$row['item_image'];
           
            
          

?>                    
                     
                     <div class="col-md-3 admin-truck-menu mx-auto m-1 my-2">
                      <div class="card1 mx-auto">
                         <div class="card1-image">
                            <img src="img/uploaded/<?php echo $item_image ?>" alt="">
                         </div>
                         <hr style="background-color: white;">
                         <div class="card1-body">
                            <div class="card1-body-text">
                               <h2> <?php echo $item_name ?></h2>
                               <p class="detailsss">detailes</p>
                               <p class="detailsss-info"><?php echo $item_details ?></p>
                               <a href="#" class="btn btn-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                               <a href="includes/item_delete.php?item_id=<?php echo $item_id?>" class="btn btn-danger btn1"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                            </div>
                            
                         </div>

                      </div>
                     </div>
                    

                     <?php } ?>


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