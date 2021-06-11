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
            <img src="img/maker.png" alt="">
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
            <div class="container">
            <div class="row">
               <div class="col-md-12 p-3">


               <?php 
               $order_id=$_GET['order_id'];
               $query="SELECT *FROM users_orders WHERE order_id = {$order_id}";
               $select_order=mysqli_query($connection,$query);

               while($row = mysqli_fetch_assoc ($select_order)){
                  $order_name=$row["order_name"];
                  $order_phone=$row["order_phone"];
                  $order_email=$row["order_email"];
                  $order_location=$row["order_location"];
                  $order_info=$row["order_info"];
                  $order_date=$row["order_date"];
                  $order_time=$row["order_time"];
                  $order_street=$row["street"];
                  $order_menu=$row["order_category"];
                  
              
               }
               
               ?>
               
           
                   <div class="customer-order">
                        <div class="info-text">
                          <h1 class="header display-5">customer info</h1>
                           
                           <form class="row g-3">
                              <div class="col-md-8">
                                 <label for="inputEmail4" class="form-label">FIRST NAME</label>
                                 <input type="email" class="form-control" id="inputEmail4" value="<?php echo $order_name; ?>" readonly>
                               </div>
                               
                              <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">EMAIL</label>
                                <input type="email" class="form-control" id="inputEmail4" value="<?php echo $order_email; ?>" readonly>
                              </div>
                              
                              <div class="col-6">
                                <label for="inputAddress" class="form-label">PHONE NUMBER</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="<?php echo $order_phone; ?>" readonly>
                              </div>
                              <div class="col-6">
                                <label for="inputAddress2" class="form-label">ADDRESS </label>
                                <input type="text" class="form-control" id="inputAddress2" value="<?php echo $order_location; ?>" readonly >
                              </div>

                              <div class="col-6">
                                <label for="inputAddress2" class="form-label">STREET </label>
                                <input type="text" class="form-control" id="inputAddress2" value="<?php echo $order_street; ?>" readonly >
                              </div>
                              
                              <div class="col-10">
                                <label for="inputAddress2" class="form-label"> ORDER </label>
                                <input type="text" class="form-control" id="inputAddress2" value="<?php echo $order_menu; ?>" readonly >
                              </div>
                              

                              <div class="col-6">
                                <label for="inputAddress2" class="form-label">DATE </label>
                                <input type="text" class="form-control" id="inputAddress2" value="<?php echo $order_date; ?>" readonly >

                              </div> <div class="col-6">
                                <label for="inputAddress2" class="form-label">TIME</label>
                                <input type="text" class="form-control" id="inputAddress2" value="<?php echo $order_time; ?>"  readonly>
                              </div>

                              

                              

                              <div class="col-md-12">
                                 <label for="inputCity" class="form-label">MORE INFO</label>
                                 <textarea name="" class="form-control" id="" cols="30" rows="10" readonly>
                                    <?php echo $order_info ?>
                                 </textarea>
                               </div>
                             
                              
                            
                          </form>
                          
                        </div>
                      </div>
                   </div>
               </div>
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