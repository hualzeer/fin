<?php session_start() ?>
<?php 
      if ($_SESSION['user_name_session'] === null && $_SESSION['user_password_session']=== null){
              include "includes/header.php" ;

            }

          else{
            include "includes/header_logout.php" ;

          }  


?>



   <!-- end header-->

   <!-- start container-->
   <main id="main-site">

   <?php include "includes/image-section.php" ?>      
         
   
   <?php 
    if(isset($_POST['search'])){

      $search = $_POST['search'];

      $qeury="SELECT * FROM truck WHERE truck_name like '%$search%' " ;
      $search_all_trucks=mysqli_query($connection,$qeury);

       if(!$search_all_trucks){
          die("Query failed" . mysqli_error($connection));
       }

       $count=mysqli_num_rows($search_all_trucks);

       if($count == 0){
         echo " <h1 class='text-end ms-5'> no result </h1>";
       
       }

       else{
         echo " we got it ";
       }

       
  }
  ?>
  

  <!-- the trucks start -->
   <section id="the-trucks" class="the-trucks">
    <div class="container">
     <div class="row row-cols-2 the-trucks-row">
       <div class="col-md-12 main-header">
         <h1 class="my-5"> FOOD TRUCKS</h1>
       </div>
 <hr>
 <hr>
 <?php include "includes/index/index-searchbar.php" ?>

      
 <?php include "includes/index/index-theTrucks.php" ?>

       </div>
     </div>
   </div>


   </section>
  <!-- the trucks end -->


   

   </main>
   <!--end container-->

    <?php include "includes/footer.php" ?>

   <script>
      
   
   </script>
   <!--start footer-->
   <!--end footer-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


<script type="text/javascript">
var text = document.getElementById('change');
var word = text.getElementsByTagName('span');
var i =0;

function rotator(){
  word[i].style.display= 'none';
  i = (i+1) % word.length;
  word[i].style.display= 'initial';
}
setInterval(rotator, 1500);
</script>  
 


<script>
  const navigation= document.querySelector('.navigation');
  document.querySelector('.toggle').onclick = function(){
     this.classList.toggle('active');
     navigation.classList.toggle('active');
  }
</script>
<script src="index.js"></script>

<!-- afther refreash page it will stay at the same place -->
<script type="text/javascript">

    function getScroll() {
        var x = 0, y = 0;
        var position = new Object();
        position.x = document.body.scrollLeft;
        position.y = document.body.scrollTop;
        return position;
    };

    function saveScroll() {
        var position = getScroll();
        document.getElementById("chart_x").value = position.x;
        document.getElementById("chart_y").value = position.y;
        document.forms["postPosition"].submit();
    }

    function setScroll() {
        var x = <?php echo json_encode($_SESSION['chart_x']); ?>;
        var y = <?php echo json_encode($_SESSION['chart_y']); ?>;
        if (x && y)
            window.scrollTo(x, y);
    }
-->
</script>


</body>
</html>