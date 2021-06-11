<?php include "includes/admin-truck/header.php" ?>


<?php include "includes/admin-truck/toppart.php" ?>

        <div class="details">
           <div class="recentOrders">
              <div class="cardheader">
                 <h2>accepted Orders</h2>
                 <a href="#" class="btn">View all</a>
              </div>
              <table>
                 <thead>
                    <tr>
                       <td>Name</td>
                       <td>phone</td>
                       <td>Location</td>
                       <td>Statues</td>
                    </tr>
                 </thead>
                 <tbody>

                 <?php 
                   
                  $truck_order=$_SESSION['truck_id_session'];
                  
                   $query="SELECT * FROM users_orders WHERE truck_id = {$truck_order} AND accepted='accepted' ";
                   $all_orders=mysqli_query($connection,$query);

                   while($row = mysqli_fetch_assoc ($all_orders)){
                     $order_id=$row['order_id'];
                     $order_name=$row['order_name'];
                     $order_phone=$row['order_phone'];
                     $order_location=$row['order_location'];
                   
                 
                 ?>
                        <tr>
                          <td><?php echo $order_name ?></td>
                          <td><?php echo $order_phone?></td>
                          <td><?php echo $order_location ?></td>
                          <td><a href="#"><span class="status accepted">accepted</span></a></td>
                        </tr>

                        <?php } ?>
       
                 </tbody>
              </table>
           </div>

           <div class="recentOrders">
            <div class="cardheader">
               <h2>Recent Orders</h2>
               <a href="#" class="btn">View all</a>
            </div>
            <table>
               <thead>
                  <tr>
                     <td>Name</td>
                     <td>more info</td>
                     <td>accept</td>
                     <td>delete</td>
                  </tr>
               </thead>
               <tbody>


               <?php 
                   
                   $truck_order=$_SESSION['truck_id_session'];

                    $querrry="SELECT * FROM users_orders   WHERE truck_id= {$truck_order} AND accepted='not_accepted'  ORDER BY order_id DESC   ";
                    $all_order=mysqli_query($connection,$querrry);
 
                    while($row = mysqli_fetch_assoc ($all_order)){
                      $order_id=$row['order_id'];
                      $order_name=$row['order_name'];
                      $order_phone=$row['order_phone'];
                      $order_location=$row['order_location'];
                    
                  
                  ?>
                      <tr>
                        <td><?php echo $order_name ?></td>
                        
                        <td><a href="admin-truck-customer-info.php?order_id=<?php echo $order_id ?>" class="btn btn-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></td>
                        <td><a href="includes/accept_order.php?order_id=<?php echo $order_id ?>" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a></td>
                        <td><a href="includes/delete_order.php?order_id=<?php echo $order_id ?>" class="btn btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></a></td>
                      </tr>

                      <?php }?>

               </tbody>
            </table>
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