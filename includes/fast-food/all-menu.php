

<?php 


$query="SELECT *  FROM truck_categories WHERE truck_id={$order} ";

$select_truck_category=mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_truck_category)){
   $cat_title=$row['cat_title'];
   $cat_id=$row['cat_id'];


?>

<?php 
$item_cat=$cat_title;
?>






<section class="all-menu my-5" id="all-menu">
   
         <div class="container">
         <h1 class="text-center my-5 text-white" > <?php echo $cat_title ?></h1>

               <div class="col-md-12 testimonials">
                  <div class="swiper-container">
                 

                  <div class="swiper-wrapper ">
                      
                  <?php
                   
                  $querry="SELECT *  FROM items WHERE truck_id={$order} AND item_category = '{$item_cat}' ";

                  $select_item=mysqli_query($connection,$querry);
                  
                  while($row = mysqli_fetch_assoc($select_item)){
                     $item_name=$row['item_name'];
                     $item_details=$row['item_details'];
                     $item_image=$row['item_image'];
                     
                  
                  
                  ?>
                  
                       <div class="swiper-slide">
                           <div class="card-menu">
                                 <div class="layer"></div>
                                 <div class="content">

                                 <a href="#" class="add-cart btn btn-primary mb-5" style="width: 50%;          position: absolute;
                                    top: 85%;
                                    left: 100%;
                                    transform: translate(-100%,-85%);"
                                    > add</a>
                                 

                                    <div class="imgbx">
                                       <img src="img/uploaded/<?php echo $item_image ?>" height="250px" alt=""  class="pruduct_image">
                                    </div>

                                    <div class="details mt-3">
                                       <h2 class="product_name"><?php echo $item_name ?></h2>
                                        
                                    </div>
                                    <hr class="" style="color: white;">
                                    <p class="details-heads mx-1"> details</p>
                                    
                                    <p class="details-heads price mx-1">5.00</p>
                                    <p class="details-heads incart mx-1 hidden">0</p>

                                    <p class="details-text "><?php echo $item_details ?></p>


                                    
                                     </div> <!-- content end -->
                              
                              </div><!-- card  end-->

                           </div><!--swiper-slide-->
               
                          

               
                           <?php } ?>

                        </div><!--swiper controll -->   
                        </div>
            
         </div>
      </section>

    <?php } ?>

    
  


  <script> 


  
  let carts= document.querySelectorAll('.add-cart');

  for(let i=0;i<carts.length; i++){
     carts[i].addEventListener('click',UpdateCartContainer);
  }


  function onloadCartNumber(){
   let productNumber=localStorage.getItem('cartnumber');

   if(productNumber){
      document.querySelector('.cartitems').textContent =productNumber;

   }
  }

  function UpdateCartContainer(e){
   e.preventDefault();

     currentaddCartBtn=e.target;
     productContainer =currentaddCartBtn.parentElement;
      
     productTitle=productContainer.getElementsByClassName('product_name')[0].innerText; 
     productprice=productContainer.getElementsByClassName('price')[0].innerText;
     productprice=parseInt(productprice); 
     incart=productContainer.getElementsByClassName('incart')[0].innerText; 
     incart=parseInt(incart);
     productImage=productContainer.getElementsByClassName('pruduct_image')[0].src; 
     
     

     addnewRow(productTitle,productprice,productImage,incart);
     
     totalCost(productprice);

     displayCart();


  }
  const cartContainer= document.querySelector('.box');

   function addnewRow(productTitle,productprice,productImage,incart){


   let productNumber=localStorage.getItem('cartnumber');
   productNumber=parseInt(productNumber);

   if(productNumber){
      localStorage.setItem('cartnumber',productNumber+1);
      document.querySelector('.cartitems').textContent = productNumber + 1;
     
   }else{
      localStorage.setItem('cartnumber',1);
      document.querySelector('.cartitems').textContent = 1;
      
   }

   setItems(productTitle,productprice,productImage,incart);
   

   };


function setItems(productTitle,productprice,productImage,incart){
   let cartItemsss = localStorage.getItem('productsInCart');
   cartItemsss=JSON.parse(cartItemsss);

   if(cartItemsss != null){

      if(cartItemsss[productTitle] == undefined){
         cartItemsss= {
            ...cartItemsss,
            [productTitle]:{
            productTitle,productprice,productImage,incart
            }
         }
      }
      cartItemsss[productTitle].incart+=1;

   }
   else{
      incart = 1;
      
      cartItemsss={
         [productTitle]:{
            productTitle,productprice,productImage,incart
         }
      }
   }

    
   localStorage.setItem("productsInCart",JSON.stringify(cartItemsss));

}


 function totalCost(productprice){
   let cartCost= localStorage.getItem('totalCost');
   

      if(cartCost != null){
         cartCost=parseInt(cartCost); 

         localStorage.setItem('totalCost', cartCost + productprice);

      }
      else{
         localStorage.setItem('totalCost',productprice);
      }
   
};


function displayCart(){
let cartItems = localStorage.getItem('productsInCart');
cartItems=JSON.parse(cartItems);
 
 let productContainer=document.querySelector('.products');
 let cartCost= localStorage.getItem('totalCost');


  if(cartItems && productContainer){
      productContainer.innerHTML = '';
      Object.values(cartItems).map( item =>{
         productContainer.innerHTML += `
         <div class="all_products">
            <div class="product m-2">
              <a href="#"> <img src="img/xxx.png" class="mx-2" height="20px" width="20px"> </a>            
               <img src="${item.productImage}" class="mx-3" height="80px" width="100px">
               <span>${item.productTitle}</span>
            </div>

            <div class="price">$${item.productprice}.00</div>

            <div class="quantity mt-5">
               <img src="img/plus.png" class="mx-2 plus add" height="20px" width="20px">
               <input type="text" class="cartvalue" value="${item.incart}" readonly>
               <img src="img/min.png" class="mx-2 plus min" height="20px" width="20px">         
            </div>
            
            <div class="total">
               <h5>$${item.productprice * item.incart}.00</h5>
            </div>

         </div>
         `
      });
      productContainer.innerHTML += `
      <div class="basketTotalContainer">
          <h4 class="basketTotalTitle ">
          Cart Total :</h4>
          <h4 class="basketTotal">$${cartCost}.00</h4>
      </div>

`
  }

}




   onloadCartNumber();
  

</script>


  <script>
   displayCart();
   </script>