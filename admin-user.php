<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="main.css">
   <title>Document</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

   <!-- font awesome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

   <!--swiber js-->
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>
<body style="margin: 0; padding: 0; overflow-x: hidden;" >
 
  <div class="con-admin">
     <div class="navigation">

      <ul>
         <li>
            <a href="#">
                  <span class="icon"><i class="fa fa-truck" aria-hidden="true"></i></span>
                  <span class="title"><h2>Food truck</h2></span>
            </a>
         </li>

         <li>
            <a href="admin.html">
                  <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                  <span class="title">home page</span>
            </a>
         </li>

         <li>
            <a href="admin-user.html">
                  <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                  <span class="title">user</span>
            </a>
         </li>

     

         <li>
            <a href="#">
                  <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                  <span class="title">sign out</span>
             </a>     
         </li>

        
      </ul>
     </div>
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
           

           <div class="recentCustomers">
            <div class="cardheader">
               <h2>Recent customers</h2>
            </div>
            <table>
               <tbody>
                  <tr>
                     <td width="60px">
                        <div class="imgBx">
                           <img src="img/king.png"  alt="">
                        </div>
                     </td>

                     <td>
                        <h4>david  <span>italy</span></h4>
                     </td>
                     
                     <td><a href="#" class="btn btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></a></td>
                  </tr>

                  <tr>
                     <td width="60px">
                        <div class="imgBx">
                           <img src="img/king.png"  alt="">
                        </div>
                     </td>

                     <td>
                        <h4>david <span>italy</span></h4>
                     </td>
                  
                     <td><a href="#" class="btn btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></a></td>
                  </tr>

                  <tr>
                     <td width="60px">
                        <div class="imgBx">
                           <img src="img/king.png"  alt="">
                        </div>
                     </td>

                     <td>
                        <h4>david <span>italy</span></h4>
                     </td>
                     
                     <td><a href="#" class="btn btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></a></td>
                  </tr>

                  <tr>
                     <td width="60px">
                        <div class="imgBx">
                           <img src="img/king.png"  alt="">
                        </div>
                     </td>

                     <td>
                        <h4>david <span>italy</span></h4>
                     </td>
                    
                     <td><a href="#" class="btn btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></a></td>
                  </tr>

                  
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