<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Memberships">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    
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
    <meta name="twitter:title" content="Home">
    <meta name="twitter:description" content="xooystore">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap u-overlap-transparent u-xl-mode" data-lang="en"><header class="u-clearfix u-header" id="sec-f1b7" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-sheet-1">
    <?php session_start();
          if($_SESSION["valid"] != true){
            header("location: xooyLogin.php");
    }?>  
    <h3 class="u-align-center u-headline u-text u-text-1">
          <a href="/">XOOY STORE</a>
          <form action="home.php" method="post">
          <input style="border: none; background-color: transparent; font-size: 15px; font-weight: bold; cursor: pointer;" type="submit" name="Log-out" value="Log Out">
          <input style="border: none; background-color: transparent; font-size: 15px; font-weight: bold; cursor: pointer; margin-left: 20px;" type="submit" name="edit" value="Edit Profile">
        </form>
        </h3>
        <?php
          if(isset($_POST['Log-out']))
            {
              $_SESSION["valid"] = false;
              header("location: xooyLogin.php");
            }
          if(isset($_POST['edit']))
            {
              header("location: edit.php");
            }
        ?>
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
    <section class="u-clearfix u-container-align-center u-image u-section-1" id="sec-11f7" data-image-width="1568" data-image-height="1044">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-2" id="carousel_37ba" data-image-width="4592" data-image-height="3056">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-montserrat u-text u-text-body-alt-color u-text-default u-text-1">Memberships</h2>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-black u-container-style u-custom-item u-list-item u-radius-30 u-repeater-item u-shape-round u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <div class="u-align-center u-container-style u-custom-item u-expanded-width u-grey-40 u-group u-shape-round u-top-left-radius-20 u-top-right-radius-20 u-group-1">
                  <div class="u-container-layout u-valign-top u-container-layout-2">
                    <h3 class="u-custom-font u-font-montserrat u-text u-text-2">Silver</h3>
                    <h4 class="u-custom-font u-font-montserrat u-text u-text-default u-text-3">$10</h4>
                    <h6 class="u-custom-font u-font-montserrat u-text u-text-default u-text-4"> Per Month</h6>
                  </div>
                </div>
                <ul class="u-custom-list u-file-icon u-text u-text-5">
                  <li>
                    <div class="u-list-icon">
                      <div style="font-size: 0.9em; margin: -0.9em;">●</div>
                    </div>Free Dirivery
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div style="font-size: 0.9em; margin: -0.9em;">●</div>
                    </div>Buy 700 get discount 120 Baht
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div style="font-size: 0.9em; margin: -0.9em;">●</div>
                    </div> Discount 150 Baht x1
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div style="font-size: 0.9em; margin: -0.9em;">●</div>
                    </div>Disount 100 Baht x1
                  </li>
                </ul>
                <a href="https://nicepage.review" class="u-active-palette-3-light-1 u-border-none u-btn u-btn-round u-button-style u-custom-font u-custom-item u-font-montserrat u-hover-palette-3-light-1 u-palette-1-light-1 u-radius-50 u-text-body-alt-color u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Subscribe&nbsp; </a>
              </div>
            </div>
            <div class="u-align-center u-black u-container-style u-custom-item u-list-item u-radius-30 u-repeater-item u-shape-round u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <div class="u-align-center u-container-style u-custom-item u-expanded-width u-group u-palette-3-base u-shape-round u-top-left-radius-30 u-top-right-radius-30 u-group-2">
                  <div class="u-container-layout u-valign-top u-container-layout-4">
                    <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-6">Gold</h3>
                    <h4 class="u-custom-font u-font-montserrat u-text u-text-default u-text-7">$15</h4>
                    <h6 class="u-custom-font u-font-montserrat u-text u-text-default u-text-8"> Per Month</h6>
                  </div>
                </div>
                <ul class="u-custom-list u-file-icon u-text u-text-9">
                  <li>
                    <div class="u-list-icon">
                      <div style="font-size: 0.9em; margin: -0.9em;">●</div>
                    </div> Free Dirivery
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div style="font-size: 0.9em; margin: -0.9em;">●</div>
                    </div>Buy 4 get 1 Free
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div style="font-size: 0.9em; margin: -0.9em;">●</div>
                    </div> Discount 150 Baht x1
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div style="font-size: 0.9em; margin: -0.9em;">●</div>
                    </div>Discount 100 Baht x2&nbsp;
                  </li>
                </ul>
                <a href="https://nicepage.review" class="u-active-palette-3-light-1 u-border-none u-btn u-btn-round u-button-style u-custom-font u-custom-item u-font-montserrat u-hover-palette-3-light-1 u-palette-1-light-1 u-radius-50 u-text-body-alt-color u-btn-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Subscribe</a>
              </div>
            </div>
            <div class="u-align-center u-black u-container-style u-custom-item u-list-item u-radius-30 u-repeater-item u-shape-round u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                <div class="u-align-center u-container-style u-custom-color-2 u-custom-item u-expanded-width u-group u-shape-round u-top-left-radius-20 u-top-right-radius-20 u-group-3">
                  <div class="u-container-layout u-valign-top u-container-layout-6">
                    <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-10">Platinum</h3>
                    <h4 class="u-custom-font u-font-montserrat u-text u-text-default u-text-11">$20</h4>
                    <h6 class="u-custom-font u-font-montserrat u-text u-text-default u-text-12"> Per Month</h6>
                  </div>
                </div>
                <ul class="u-custom-list u-file-icon u-text u-text-13">
                  <li>
                    <div class="u-list-icon">
                      <div style="font-size: 0.9em; margin: -0.9em;">●</div>
                    </div> Free Dirivery
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div style="font-size: 0.9em; margin: -0.9em;">●</div>
                    </div> Buy 3 get 1 Free 
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div style="font-size: 0.9em; margin: -0.9em;">●</div>
                    </div>Get free new product tester
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div style="font-size: 0.9em; margin: -0.9em;">●</div>
                    </div>Discount 150 Baht x4
                  </li>
                </ul>
                <a href="https://nicepage.review" class="u-active-palette-3-light-1 u-border-none u-btn u-btn-round u-button-style u-custom-font u-custom-item u-font-montserrat u-hover-palette-3-light-1 u-palette-1-light-1 u-radius-50 u-text-body-alt-color u-btn-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Subscribe</a>
              </div>
            </div>
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