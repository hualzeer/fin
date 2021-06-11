<?php include "includes/header.php" ?>

<?php session_start() ?>

<?php
$truck_id=$_GET['truck_id'];


if(isset($_POST['submit']))
   {
      $order_name=$_POST['f_name'];
      $order_email=$_POST['email'];
      $order_phone=$_POST['phone'];
      $order_location=$_POST['location'];
      $order_pay=$_POST['pay'];
      $order_info=$_POST['more-info'];
      $order_date=$_POST['date'];
      $order_time=$_POST['time'];
      $order_street=$_POST['street'];
      $accepted="not_accepted";

      $checkbox1=$_POST["category"];
      
      $chk="";
      foreach ($checkbox1 as $chkresult ){
          $chk.= $chkresult."," ;
      }



      $qeury = "INSERT INTO users_orders (order_name,order_phone,order_email,order_location,order_pay,order_info,truck_id,order_date,order_time,accepted,street,order_category ) 

      VALUES('{$order_name}','{$order_phone}','{$order_email}','{$order_location}','{$order_pay}','{$order_info}','{$truck_id }','{$order_date}','{$order_time}','{$accepted}','{$order_street}','{$chk}' ) ";

      $add_orders=mysqli_query($connection,$qeury);
 
     
      header("Location: index.php");
      
                       
    } ?>
   
   

    
   <main>

     
    
      <section class=" mt-5" >
      <div class="container" >
         <div class="row justify-content-center">
            
            <div class="col-sm-7 mt-5 " >
                 <div class="wrapper1">
                  <h2>payment </h2>

               <form action="" method="post">
                  <div class="input-group1">
                      <div class="input-box1">
                         <input type="text" class="name " name="f_name" placeholder="first name"
                          value="<?php echo $_SESSION['user_name_session'] ?>" readonly >
                         <i class="fa fa-user icon"></i>
                      </div>
               <img src="f" alt="">

            </div><!-- end input group1 name-->

               <div class="input-group1">
                  <div class="input-box1 input-box1-email">
                     <input type="email" class="name" name="email" placeholder="XXXXXX@gmail.com"
                     value="<?php echo $_SESSION['user_email_session'] ?> "readonly >
                     <i class="fas fa-envelope icon"></i>    
                    </div>
               </div><!-- end input group1  email-->

               <div class="input-group1">
                  <div class="input-box1 input-box1-email">
                     <input type="text" class="name" name="phone" placeholder="079XXXXXXX"
                     value="<?php echo $_SESSION['user_phone_session'] ?>  " readonly>
                     <i class="fas fa-phone  icon"></i>
                  </div>
               </div><!-- end input group1 phone -->

              

               
                 
            <div class="input-group1">
               <div class="input-box1">
                  <select class="form-select" name="location" aria-label="Default select example">
                     <option selected>amman</option>
                     <option >zarqa</option>
                     <option >sharsh</option>
                     <option >arbid</option>
                     <option >madaba</option>
                   </select>
               </div>
            </div><!-- end input group1 locaton-->

           <?php 
           $querry="SELECT * FROM truck_categories WHERE truck_id= '{$truck_id}' ";
           $catt=mysqli_query($connection,$querry);

           while($row=mysqli_fetch_assoc($catt)){
            $cat_tit=$row['cat_title'];
           
           
           ?>

            <div class="form-check">
               <input class="form-check-input" type="checkbox" name="category[]"
                 value="<?php echo $cat_tit ?>" id="flexCheckDefault">
               <label class="form-check-label"  for="flexCheckDefault" >
                  <?php echo $cat_tit ?>
               </label>
          </div>

          <?php } ?>

            <div class="input-group1">
                  <div class="input-box1 input-box1-email">
                     <input type="text" class="name" name="street" placeholder="location" require>
                     <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                  </div>
               </div><!-- end input group1 phone -->

            <div class="input-group1">
               <div class="input-box1 input-box1-email">
                  <input type="date" class="name" name="date"  require>
                  <i class="fas fa-calendar-week icon"></i>
               </div>
            </div><!-- end input group1  Date-->

            <div class="input-group1">
               <div class="input-box1 input-box1-email">
                  <input type="text" class="name" name="time" placeholder="10:00 - 11:30" require >
                  
                  <i class="far fa-clock icon"></i>               </div>
            </div><!-- end input group1  time-->



            <div class="input-group1">
               <div class="input-box1 input-box1-email">
                  <input type="text" class="name" name="more-info" placeholder="more information for your order" >
                  
                  <i class="fa fa-info icon" aria-hidden="true"></i>
               </div>
            </div><!-- end input group1   more info-->



               <div class="input-group1 input-group1-radio ">
                  <div class="input-box1 input-box1-radio ">
                     <h4>how you will pay</h4>

                     <input type="radio" class="radio" name="pay" id="bc1" value="credit card" >
                     <label for="bc1">
                        <span class="rad">
                        <i class="fab fa-cc-visa"></i>
                        credit card
                        </span>
                     </label>

                     <input type="radio" class="radio" name="pay" id="bc2" value="cash" checked>
                     <label for="bc2">
                        <span class="rad">
                           <i class="fas fa-money-bill-alt"></i>
                           CASH
                        </span>
                     </label>
                  </div>
                  
               </div><!-- end input group1  radio button-->
               



               <!-- pay botton-->
               <div class="row justify-content-center mt-3">
                  <div class="col-sm-5">
                     <button class="btn w-100 text-light btn-pay " name="submit" type="submit"> go pay</button>
                </div>
               </div>
               <!-- end pay botton-->
               </div><!-- end warpper-->
               

               

               </form>
               
            </div> 
         </div><!-- end row-->
      </div> <!-- end container-->

      </section>

   </main>



   <!--bootstrap js-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


   <script>
      const navigation= document.querySelector('.navigation');
      document.querySelector('.toggle').onclick = function(){
         this.classList.toggle('active');
         navigation.classList.toggle('active');
      }
   </script>
</body>
</html>