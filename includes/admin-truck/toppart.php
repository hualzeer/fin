<div class="admin-main">
        <div class="topbar">
           <div class="toggle" onclick="toggleMenu();"></div>
           <div class="search">
              <label for="">
                 <input type="text" placeholder="search here">
                 <i class="fa fa-search" aria-hidden="true"></i>
              </label>
           </div>
            <h3>welocme to admin page <span style="font-size:2.5rem; "> <?php echo $_SESSION['truck_name_session']; ?></span> </h3>
           <div class="user">
            <img src="img/<?php echo $_SESSION['truck_image_session']; ?>" alt="">
                 
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
