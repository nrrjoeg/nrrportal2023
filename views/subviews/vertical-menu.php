    <div class="vertical-category">

       <div class="vertical-category-title">
       <img src="<?php echo $imagedir.'/customer-icon.png'; ?>" width="55px" >
          Customers
       </div>
         <div class="vertical-category-items">
            <?php require_once $processdir.'/get-nav-items/get-customer-nav-items.php';
                  require_once $subviewsdir.'/show-nav-items/show-customer-nav-items.php'; 
            ?>
         </div>

       <div class="vertical-category-title">
          <img src="<?php echo $imagedir.'/Order-Now-PNG.png'; ?>" width="85px" >
          Orders
       </div>
          <div class = "vertical-category-items">
          <?php require_once $processdir.'/get-nav-items/get-order-details-nav-items.php';
                require_once $subviewsdir.'/show-nav-items/show-order-details-nav-items.php';
          ?>
 
          </div>

          <div class="vertical-category-title">
            <img src="<?php echo $imagedir.'/Weather-showers-scattered-day-icon.png'; ?>" width="55px" >
               Weather
         </div>
         <div class="vertical-category-items">
             <?php require_once $processdir.'/get-nav-items/get-weather-nav-items.php';
                   require_once $subviewsdir.'/show-nav-items/show-weather-nav-items.php';
             ?>
         </div>

       <div class="vertical-category-title">
           <img src="<?php echo $imagedir.'/dashboard-icon.png'; ?>" width="55px" >
          Dashboards
       </div>
         <div class="vertical-category-items">
         <?php require_once $processdir.'/get-nav-items/get-dashboard-nav-items.php';
               require_once $subviewsdir.'/show-nav-items/show-dashboard-nav-items.php';
          ?>
         </div>

       <div class="vertical-category-title">
       <img src="<?php echo $imagedir.'/order-list-icon.jpg'; ?>" width="40px" >
          Order Lists
       </div>
         <div class="vertical-category-items">
           <?php require_once $processdir.'/get-nav-items/get-order-list-nav-items.php';
                 require_once $subviewsdir.'/show-nav-items/show-order-list-nav-items.php';
         ?>
         </div>

         <div class="vertical-category-title">
            <img src="<?php echo $imagedir.'/invoice-typographic-stamp.jpg'; ?>" width="55px" >
               Invoices
         </div>
         <div class="vertical-category-items">
             <?php require_once $processdir.'/get-nav-items/get-invoice-nav-items.php';
                   require_once $subviewsdir.'/show-nav-items/show-invoice-nav-items.php';
             ?>
         </div>
         
         <?php require_once $subviewsdir.'/footer.php'; ?>

    </div>