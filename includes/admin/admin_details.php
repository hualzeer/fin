<div class="details">
           <div class="recentOrders">
              <div class="cardheader">
                 <h2>Recent Orders</h2>
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
                   

                     $qeurry="SELECT * FROM users_orders";

                     $accepted_trucks=mysqli_query($connection,$qeurry);
                     
                     while($row = mysqli_fetch_assoc ($accepted_trucks)){
                         
                      $order_id=$row['order_id'];
                      $order_name=$row['order_name'];
                      $order_phone=$row['order_phone'];
                      $order_location=$row['order_location'];
                           
                              
                           


                                    echo "<tr>";
                                    echo "<td>$order_name</td>";
                                    echo"<td>$order_phone</td>";
                                    echo"<td>$order_location</td>";
                                    echo"<td><span class='status accepted'>accepted</span></td>";
                                    echo "</tr>";

                                       
                 } ?>

                      
                 </tbody>
              </table>
           </div>

           <div class="recentCustomers">
            <div class="cardheader">
               <h2>Recent truck</h2>
            </div>
            <table>
               <tbody>


        <?php

        $qeury="SELECT * FROM all_trucks WHERE accepted = 'not_accepted' ORDER BY truck_id DESC LIMIT 10 ";

        $not_accepted_trucks=mysqli_query($connection,$qeury);
        
        while($row = mysqli_fetch_assoc ($not_accepted_trucks)){
            
         $truck_id=$row['truck_id'];
         $truck_name=$row['truck_name'];
        
        ?>


                  <tr>
                     <td width="60px">
                        <div class="imgBx">
                           <img src="img/no-image/no-images.jpg"  alt="">
                        </div>
                     </td>

                     <td>
                        <h4><?php echo $truck_name ?></h4>
                     </td>
                     <td><a href="includes/accept_truck.php?accept_id=<?php echo $truck_id ?>" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a></td>

                     <td><a href="includes/delete_truck.php?delete_id=<?php echo $truck_id ?>" class="btn btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></a></td>
                  </tr>


         <?php  }?>


               </tbody>
            </table>
         </div>
        </div>