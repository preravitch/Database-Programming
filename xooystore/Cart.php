<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="$10 Off withEmail Signup">
    <meta name="description" content="">
    <title>Cart</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Cart.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "xooystore",
		"sameAs": [
				"https://facebook.com/name",
				"https://twitter.com/name",
				"https://instagram.com/name"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cart">
    <meta name="twitter:description" content="xooystore">
    <meta property="og:title" content="Cart">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header" id="sec-f1b7" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-sheet-1">
      <?php
        $mysqli = new mysqli('localhost','root','','xooyy');
        if($mysqli->connect_errno){
            echo $mysqli->connect_errno.": ".$mysqli->connect_error;
        } 
        session_start();
        $q="select * from user where username = '".$_SESSION['email']."'";
			$result=$mysqli->query($q);
				if(!$result){
					echo 'Query error: '.$mysqli->error;
		}
        $row=$result->fetch_array();
        $total=0;
        ?>
      <h3 class="u-align-center u-headline u-text u-text-1">
          <a href="/">XOOY STORE</a>
        </h3>
        <div class="u-align-left u-border-1 u-border-grey-15 u-expanded-width u-line u-line-horizontal u-line-1"></div>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#" style="padding: 0px; font-size: calc(1em + 0.0078125px);">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c4a8"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-c4a8" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Home.php" style="padding: 16px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Store.php" style="padding: 16px;">Store</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Cart.php" style="padding: 16px;">Cart</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Store.php">Store</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Cart.php">Cart</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-daab">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-border-1 u-border-black u-container-style u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <p class="u-align-center u-text u-text-default u-text-1">Shipping Address</p>
            <div class="u-align-center u-border-1 u-border-grey-50 u-line u-line-horizontal u-line-1"></div>
            <p class="u-text u-text-default u-text-2">
              <span style="font-weight: 700;"><?=$row['FName'].' '.$row['LName']?></span> (+66) <?=$row['Phone']?>
            </p>
            <p class="u-text u-text-3"><?=$row['Address']?><br>
            </p>
            <a href="edit.php" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-palette-1-base u-btn-1">Edit</a>
          </div>
        </div>
        <p class="u-text u-text-default u-text-4">Home &gt; Store &gt; My Cart</p>
        <div class="u-border-1 u-border-black u-container-style u-group u-group-2">
          <div class="u-container-layout u-container-layout-2">
            <h3 style="text-align: center;">Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr style="margin-left: 10%; margin-right: 10%;">  
                               <th style="text-align: center;" width="20%">Item Name</th>  
                               <th style="text-align: center;" width="10%">Quantity</th>  
                               <th style="text-align: center;" width="20%">Price</th>  
                               <th style="text-align: center;" width="15%">Total</th>  
                               <th style="text-align: center;" width="15%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td style="text-align: center;"><?php echo $values["item_name"]; ?></td>  
                               <td style="text-align: center;"><?php echo $values["item_quantity"]; ?></td>  
                               <td style="text-align: center;">฿ <?php echo $values["item_price"]; ?></td>  
                               <td style="text-align: center;">฿ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td style="text-align: center;"><a href="Store.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                                    $price = $values["item_price"];
                                    $quantity = $values["item_quantity"];
                                    if(empty($_SESSION["shopping_cart"]))
                                        {
                                             $_SESSION["total"] = 0;
                                             $_SESSION["price"] = 0;
                                             $_SESSION["quantity"] = 0;
                                             $_SESSION["destination"] = "";
                                        } else {
                                             $_SESSION["total"] = $total;
                                             $_SESSION["price"] = $price;
                                             $_SESSION["quantity"] = $quantity;
                                             $_SESSION["destination"] = $_SESSION['pic'];
                                        }
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">฿ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>
                          
                          
                          <?php 
               
                          }  
                          ?>  
                     </table>  
                </div> 
          </div>
        </div>
        <script>
</script>
        <div class="u-border-1 u-border-black u-container-style u-group u-group-3">
          <div class="u-container-layout u-container-layout-3">
            <div class="u-absolute-hcenter u-border-1 u-border-grey-50 u-line u-line-horizontal u-line-2"></div>
            <p class="u-align-center u-text u-text-default u-text-11">Order Summary</p>
            <p class="u-text u-text-12">Subtotal<br>
            </p>
            <p class="u-text u-text-default u-text-13">฿ <?=$total?></p>
            <p class="u-text u-text-default u-text-14">Kerry Express (฿35)</p>
            <p class="u-text u-text-15">Shipping&nbsp;<br>
            </p>
            <p class="u-align-left u-text u-text-16">Voucher</p>
            <a  class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-3">Apply</a>
            <div class="u-border-1 u-border-palette-1-light-2 u-container-style u-group u-group-4">
              <div class="u-container-layout u-container-layout-4"></div>
            </div>
            <p class="u-text u-text-17">Select Payment</p>
            <div class="u-align-center u-border-1 u-border-palette-1-light-1 u-radius-10 u-shape u-shape-round u-shape-1"></div><span class="u-file-icon u-icon u-icon-1"><img src="images/2169862.png" alt=""></span>
            <p class="u-text u-text-18">Credit/Debit Card</p>
            <div class="u-border-1 u-border-palette-1-light-1 u-container-style u-group u-radius-10 u-shape-round u-group-5">
              <div class="u-container-layout u-container-layout-5"><span class="u-align-center u-file-icon u-icon u-icon-2"><img src="images/639365.png" alt=""></span>
                <p class="u-align-center u-text u-text-default u-text-19">Cash on delivery</p>
              </div>
            </div>
            <p class="u-text u-text-default u-text-20">฿ <?=$total = $total+35?></p>
            <?php if(isset($_GET["action"])){
  if($_GET["action"] == "checkout"){
    $id = $row['User_ID'];
    $qu = "INSERT INTO recipe(User_ID,Amount) VALUES('$id',$total);";
    $r=$mysqli->query($qu);
    if(!$r){
      echo 'Query error: '.$mysqli->error;
    } else{
                echo '<script>alert("Thank you for purchasing :)")</script>';  
                echo '<script>window.location="Cart.php"</script>';
                foreach($_SESSION["shopping_cart"] as $keys => $values)  
                {  
                        
                          unset($_SESSION["shopping_cart"][$keys]);  
                          echo '<script>alert("Item Removed")</script>';  
                          echo '<script>window.locatiStore"</script>'; 
                          
                          $_SESSION["total"] = 0;
                          $_SESSION["price"] = 0;
                          $_SESSION["quantity"] = 0;
                          $_SESSION["destination"] = "";
                        
                } 
    }
  }

}?>
            <p class="u-text u-text-21">Total<br>
            </p>
            <a href="Cart.php?action=checkout" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-4">Check out</a>
          </div>
        </div>
        <p class="u-text u-text-default u-text-22">Delivery</p>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1"></div>
        </div>
        <script src="app.js" defer></script>
        <div class="u-border-1 u-border-palette-2-light-1 u-container-style u-group u-radius-10 u-shape-round u-white u-group-6">
          <div class="u-container-layout u-container-layout-6">
            <img class="u-image u-image-contain u-image-default u-image-2" src="images/-2562.png" alt="" data-image-width="750" data-image-height="455">
            <p class="u-text u-text-default u-text-23">
              <span style="font-weight: 700;">Thailand Post</span>
              <br>฿25<br>Get by 1-3 days
              <input onchange="chosedeli(event)" type="radio" name="radioname" value=25 >
            </p>
          </div>
        </div>
        <div class="u-border-1 u-border-palette-2-light-1 u-container-style u-group u-radius-10 u-shape-round u-white u-group-7">
          <div class="u-container-layout u-container-layout-7">
            <img class="u-image u-image-contain u-image-default u-image-3" src="images/Flash-Express.png" alt="" data-image-width="900" data-image-height="300">
            <p class="u-text u-text-default u-text-24">
              <span style="font-weight: 700;">Flash Express</span>
              <br>฿25<br>Get by 1-3 days
              <input onchange="chosedeli(event)" type="radio" name="radioname" value=25 checked>
            </p>
          </div>
        </div>
        <div class="u-border-1 u-border-palette-2-light-1 u-container-style u-group u-radius-10 u-shape-round u-white u-group-8">
          <div class="u-container-layout u-container-layout-8">
            <p class="u-text u-text-default u-text-25">
              <span style="font-weight: 700;">Kerry Express</span>
              <br>฿35<br>Get by 1-2 days
              <input onchange="chosedeli(event)" type="radio" name="radioname" value=35>
            </p>
            <img class="u-image u-image-contain u-image-default u-image-4" src="images/1200px-Kerrry_Express.svg.png" alt="" data-image-width="1200" data-image-height="848">
          </div>
        </div>
        <div class="u-border-1 u-border-palette-2-light-1 u-container-style u-group u-radius-10 u-shape-round u-white u-group-9">
          <div class="u-container-layout u-container-layout-9">
            <p class="u-text u-text-default u-text-26">
              <span style="font-weight: 700;">Fed Express</span>
              <br>฿30<br>Get by 1-3 days
              <input onchange="chosedeli(event)" type="radio" name="radioname" value=30>
            </p>
            <img class="u-image u-image-contain u-image-default u-image-5" src="images/Fedex-Logo-Transparent-PNG.png" alt="" data-image-width="2000" data-image-height="1600">
          </div>
        </div>
        <div class="u-border-1 u-border-palette-2-light-1 u-container-style u-group u-radius-10 u-shape-round u-white u-group-10">
          <div class="u-container-layout u-container-layout-10">
            <p class="u-text u-text-default u-text-27">
              <span style="font-weight: 700;">J&amp;T Express</span>
              <br>฿25<br>Get by 1-3 days
              <input onchange="chosedeli(event)" type="radio" name="radioname" value=25>
            </p>
            <img class="u-image u-image-contain u-image-default u-image-6" src="images/JT-Express-Logo.png" alt="" data-image-width="3840" data-image-height="2160">
          </div>
        </div>
      </div>
      
    </section>
    
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-palette-5-light-1 u-footer" id="sec-520d"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-text u-text-default u-text-1">Explore</p>
        <p class="u-align-left u-text u-text-default u-text-2">Search<br>About us<br>Shipping Policy<br>Terms of Service<br>Pre-order Information<br>FAQ
        </p>
        <p class="u-text u-text-default u-text-3">Contact</p>
        <div class="u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d954"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d954"><path fill="currentColor" d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2
c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d210"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d210"><path fill="currentColor" d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2
	c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7
	c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2
	c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5
	c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/xooy.store"><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c2cb"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-c2cb"><path fill="currentColor" d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z
	 M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path fill="#FFFFFF" d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path fill="currentColor" d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7
	V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7
	c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
          </a>
        </div>
      </div>
  
</body></html>