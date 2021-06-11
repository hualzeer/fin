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

<style>
.hidden{
   display: none;
}

.concon{
   display: flex;
   flex-direction: row;
   justify-content: space-between;
align-items:center;
background:#eee;

   width:100%;
   margin: 4px;
   padding-top: 10px;
   padding-right: 200px;
   border-radius: 15px;

}

.product-header{
   width:100%;
   max-width:650px;
   display:flex;
   justify-content:space-between;
   border-bottom:4px solid lightgrey;
   margin:0 auto;
}

.prodcut-title{
width:45%;
}
.price{
   width:15%;
   display:flex;
   align-items: center;
   padding-left: 15px;

}

.total{ 
     width:10%;
   display:flex;
   align-items: center;
   padding-left: 15px;

}
.product{
   width:48%;
   align-items:center;
   padding:10px 0;
   
   
}
.all_products{
   display:flex;
   border-bottom:1px solid lightgrey;

}

.cartvalue{
   width: 50px;
   text-align: center;
   font-weight: 500;
   
}

.plus{
   cursor: pointer;
}

.basketTotalContainer{
   display: flex;
   justify-content: flex-end;
   width:100%;
   padding: 30px 0;
}
.basketTotalTitle{
   width:30%;
}
.basketTotal{
   width:10%;
}


</style>
   <!--swiber js-->
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>
<body class="fast-fast-fast" >
 
   <!--start header-->
   <div class="containerrr">
    <div class="navigation">
     <ul>
        <li>
           <a href="index.php">
              <span class="icon"><i class="fas fa-home"></i></span>
              <span class="title">home</span>
              <div class="back-image"></div>
           </a>
        </li>
        <li>
         <a href="#">
            <span class="icon  open-cart"><i class="fas fa-truck-moving"></i></span>
            <span class="title ">ITEMS <span class="cartitems">0</span></span>
            
         </a>
      </li>

        <li>
         <a href="#">
            <span class="icon"><i class="fas fa-question-circle"></i></span>
            <span class="title">help</span>
         </a>
      </li>

      <li>
         <a href="login.php">
            <span class="icon"><i class="fas fa-sign-in-alt"></i></span>
            <span class="title">login</span>
         </a>
      </li>

      
     </ul>
  </div>
     <div class="toggle"><i class="fas fa-chevron-right"></i></div>
</div>

   <!-- end header-->

   <!-- start container-->


   <section class="cart-page hidden  " style="height: 100%; width: 100%; position: fixed; z-index: 1000; ">
<div class="con closeCart" style=" background: rgba(0, 0, 0, 0.356);height: 100%;width: 100%;transition: .3s;
"></div>
    
    <div class="product-container" style=" overflow: hidden; overflow-y:scroll; position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);width:50%;height: 80%;background: #799bc5;z-index:1000 ;    border-radius: 15px;">

        <div class="product-header px-1">
            <h5 class="prodcut-title text-center">product</h5>
            <h5 class="price">price</h5>
            <h5 class class="quantity">quantity</h5>
            <h5 class="total">total</h5>
        </div>

        <div class="products">
        </div>

    </div>

</section>
   
   <main id="main-site">
    
     <?php include "includes/fast-food/menu.php" ?>

     
     <?php include "includes/fast-food/all-menu.php" ?>

     

      <section class="menu-order mt-5">
         <div class="row">
            <div class="col-md-12 ">
               <div class="order-menu mx-auto">
                  <div class="shad"></div>
                  <div class="pos">

                  <?php 
                  
                  
                  ?>


                   <form action="" method="POST"> 
                  <a href="includes/if_login.php?id=<?php echo $order ?>" class="btn1 btn1-white "> order</a>

                  
                  </form> 


                  <!-- about -->

                  </div>
               </div>
            </div>
         </div>
      </section>

   </main>
   <!--end container-->

   

   <?php include "includes/footer.php" ?>


<script>
const open_cart=document.querySelector('.open-cart');
const cartPage=document.querySelector('.cart-page');
const closecart=document.querySelector('.closeCart');




open_cart.addEventListener('click',function(e){
   e.preventDefault();
   cartPage.classList.remove('hidden');
});

const closeCartbtn= function(){
   console.log('random')
};

closecart.addEventListener('click',function(){
   cartPage.classList.add('hidden');
   
});
  




</script>
  



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

   <!--swiber js-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="index.js"></script>

<script>
   var swiper = new Swiper('.swiper-container', {
     effect: 'coverflow',
     grabCursor: true,
     centeredSlides: true,
     slidesPerView: 'auto',
     coverflowEffect: {
       rotate: 0,
       stretch: 10,
       depth: 20,
       modifier: 1,
       slideShadows: false,
      
     },

     
     pagination: {
       el: '.swiper-pagination',
        clickable: true
     },
     navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      loop: true
      
   });
 </script>


<script>
   const navigation= document.querySelector('.navigation');
   document.querySelector('.toggle').onclick = function(){
      this.classList.toggle('active');
      navigation.classList.toggle('active');
   }
</script>
</body>
</html>