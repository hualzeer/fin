<?php include "includes/header.php" ?>


<?php


if (isset($_POST['login'])){

   $username=$_POST['user'];
   $password=$_POST['password'];
   
} 

?>


   <!-- end header-->

   <!-- start container-->
   <main id="main-site">
    <section class="log ">
       <div class="container1">
          <div class="user singinBx">
             <div class="imgBx">
                <img src="img/fastfood.jpg"  alt="">
             </div>
             <div class="formBx">

                <form action="includes/login_code.php" method="POST">
                   <h2>sgin in</h2>
                   <input type="text"  name="user" placeholder="user name" require >
                   <input type="password"  name="password" placeholder="password" require >
                   <button class="btn btn-primary w-25 my-3" type="submit" name="login"> login</button>
                   <p class="signup">Dont have account? <a href="#" onclick="toggleForm();">Sign up</a></p>
                </form>
                
             </div>
          </div>

          <div class="user singupBx">
            
            <div class="formBx">
               <form action="includes/sgin-up-code.php" method="POST">
                  <h2>create an account</h2>
                  <input type="text"  name="user_name" placeholder="user name" required>
                  <input type="email"  name="user_email" placeholder="xxxxxxxx@gmail.com" required>
                  <input type="password"  name="user_password" placeholder="Create password" required>
                  <input type="text"  name="user_phone" placeholder="phone number" required>
                  <select class="form-select my-2" aria-label="Default select example" name="user_type">
                     <option selected>user</option>
                     <option value="1">Truck</option>
                  </select>
                  <input type="submit" name="sign_up" value="Sign up">
                  <p class="signup">Already have account? <a href="#" onclick="toggleForm();">Sign in</a></p>
               </form>
            </div>
            <div class="imgBx">
               <img src="img/coffee.jpg"  alt="">
            </div>
         </div>

          
       </div>

       
    </section>

   </main>
   <!--end container-->

<footer>
   <?php include "includes/footer.php" ?>
</footer>

   <script>
      
   
   </script>
   <!--start footer-->
   <!--end footer-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

   <script type="text/javascript">
   function toggleForm(){
      var container= document.querySelector('.container1');
      container.classList.toggle('active')
   }
   </script>


<script>
   const navigation= document.querySelector('.navigation');
   document.querySelector('.toggle').onclick = function(){
      this.classList.toggle('active');
      navigation.classList.toggle('active');
   }
</script>
<script src="index.js"></script>

</body>
</html>