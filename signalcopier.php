<?php
ob_start();
include "db_conn.php";
ob_end_clean();


$fname = ''; 
$contact = ''; 
$email  = '';



//Errors array with empty arrays and cathes all errors
$errors = array('fname' => "", 'contact' => "", 'email' => "");
if (isset($_POST['submit'])) {

       //start session
      session_start();

  
   //Check for first name
      if (!preg_match('/[a-zA-Z]+$/', $fname)) {
        $errors['fname'] = 'First name should be letters only';
      }

      //Check for contact
      if (!preg_match('/[0-9]+$/', $contact)) {
        $errors['contact'] = 'contact should be numbers only';
      }
      //Check for email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'enter a valid email address';
      }

      

  //array filter cycles through the errors array and runs if its empty
   if (array_filter($errors)) {

      $fname =   $_POST['fname'];
      $contact = $_POST['contact'];
      $email =   $_POST['email'];

      // Storing user input fields in session variables to store 
      $_SESSION['fname'] = $_POST['fname'];
      $_SESSION['contact'] = $_POST['contact'];
      $_SESSION['email'] = $_POST['email'];


      //create sql for inserting
    $sql = mysqli_query($conn,"INSERT INTO `scopier` (`fname`,`contact`,`email`) VALUES ('$fname', '$contact','$email')");

    //save to db and check
    if($sql){
      //success
      header('Location:signalcopier.php');
            exit();
    }
    else{
      //error
      echo 'query error: '. mysqli_error($conn);
    }

   
  }
  

}

?>
<!---HTML DOCUMENT STARTS FROM HERE-->

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Signal Copier</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Signal-Copier.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.0.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Untitleddesign.png",
		"sameAs": [
				"https://facebook.com/GoldencresentFx",
				"https://twitter.com/_GoldencresentFx",
				"https://instagram.com/_GoldencresentFx"
		]
      }</script>
          <meta name="theme-color" content="#478ac9">
          <meta name="twitter:site" content="@">
          <meta name="twitter:card" content="summary_large_image">
          <meta name="twitter:title" content="Signal Copier">
          <meta name="twitter:description" content="">
          <meta property="og:title" content="Signal Copier">
          <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-gradient u-header u-sticky u-sticky-90c8 u-header" id="sec-bb7a"><div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
          <img src="images/Untitleddesign.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-4-dark-2" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
              </symbol>
              </defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Home1.php" style="padding: 10px;">Home</a>
                </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="about.php" style="padding: 10px;">About</a>
                </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="signalcopier.php" style="padding: 10px;">Services</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="courses.php">Courses</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="signalcopier.html">SIGNAL COPIER</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="vipgroup.php">VIP GROUP</a>
                </li></ul>
                </div>
                </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="brokers.php" style="padding: 10px;">Brokers</a>
                </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="payment.php" style="padding: 10px;">Payment</a>
                </li>
          </ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 10px;">Home</a>
                  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html" style="padding: 10px;">About</a>
                  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Signal-Copier.html" style="padding: 10px;">Services</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Courses.html">Courses</a>
                  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Signal-Copier.html">SIGNAL COPIER</a>
                  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="VIP-group.html">VIP GROUP</a>
                  </li></ul>
                  </div>
                  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Brokers.html" style="padding: 10px;">Brokers</a>
                  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Payment.html" style="padding: 10px;">Payment</a>
                  </li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-4a23">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="1280" data-image-height="1280">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h2 class="u-text u-text-custom-color-9 u-text-default u-text-1">WE GROW TOEGTHER</h2>
                  <p class="u-custom-font u-font-roboto-slab u-text u-text-2">Together we help each one achieve thier dream of getting to the top and staying there.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-2" src="" data-image-width="1280" data-image-height="853" id="sec-5768">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-title u-text-1">What We Do</h1>
        <h4 class="u-text u-text-2">The Signals Copier service provides you with the sure and steady game plan in terms of risk to reward ratio.&nbsp;<br>
          <br>We also play the part for you, as the only thing you have to do is to link your account to the master account&nbsp;to make sure you stay in the game and end the day with all smiles
        </h4>
      </div>
    </section>
    <section class="u-clearfix u-palette-1-base u-section-3" id="carousel_7154">
      <div class="u-absolute-hcenter-lg u-absolute-hcenter-md u-absolute-hcenter-sm u-absolute-hcenter-xl u-container-style u-expanded-lg u-expanded-md u-expanded-sm u-expanded-width-xs u-expanded-xl u-gradient u-group u-shape-rectangle u-group-1">
        <div class="u-container-layout u-valign-middle-xs u-container-layout-1">
          <div class="u-align-center-sm u-align-center-xs u-container-style u-group u-radius-33 u-shape-round u-white u-group-2">
            <div class="u-container-layout u-container-layout-2">
              <h2 class="u-align-center u-text u-text-custom-color-10 u-text-1"> JOIN THE WINNING TEAM</h2>

              <div class="u-form u-form-1">
                <form action="signalcopier.php" method="POST">
                  <div class="u-form-group u-form-name">
                    <label for="name-da97" class="u-label" wfd-invisible="true">Name</label>
                    <input type="text" placeholder="Enter your Name" id="fname" name="fname" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10" required="" value="<?php echo htmlspecialchars($fname)?>">
                  </div>
                   <div class="red-text"><?php echo $errors['fname'] ?></div>

                  <div class="u-form-group u-form-phone u-form-group-3">
                    <label for="phone-10f2" class="u-label" wfd-invisible="true">Phone</label>
                    <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +14155552675)" id="contact" name="contact" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10" required="" value="<?php echo htmlspecialchars($contact)?>">
                  </div>
                  <div class="red-text"><?php echo $errors['contact'] ?></div>

                  <div class="u-form-email u-form-group">
                    <label for="email-da97" class="u-label" wfd-invisible="true">Email</label>
                    <input type="email" placeholder="Enter a valid email address" id="email" name="email" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-10" required=""  value="<?php echo htmlspecialchars($email)?>">
                  </div>
                   <div class="red-text"><?php echo $errors['email'] ?></div>

                  <div class="u-form-group u-form-submit">
                    </a>
                    <input type="submit" value="Send" class="u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-10 u-hover-palette-1-base u-radius-24 u-btn-1" wfd-invisible="true" name="submit">
                  </div>
                 
                </form>
              </div><span class="u-hidden-sm u-hidden-xs u-icon u-icon-circle u-text-palette-1-base u-icon-1" data-href="Payment.html" data-page-id="36498577" data-target="_blank"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 24 24" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6b72"></use></svg><svg class="u-svg-content" viewBox="0 0 24 24" id="svg-6b72"><defs><style>.cls-1{fill:#ffeabb;}.cls-1,.cls-2,.cls-7{fill-rule:evenodd;}.cls-2{fill:#f7bf75;}.cls-3{fill:#f94060;}.cls-4{fill:#6f73d5;}.cls-5{fill:#96ccee;}.cls-6{fill:#d62657;}.cls-7{fill:#f1734d;}</style>
                </defs><g id="Bank_Card"><path class="cls-1" d="M22,5.53a1,1,0,0,0-1-1H3a1,1,0,0,0-1,1V18.47a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1Z"></path><path class="cls-2" d="M22,5.53a1,1,0,0,0-1-1H19.58v15H21a1,1,0,0,0,1-1Z"></path><rect class="cls-3" height="2.44" width="20" x="2" y="7.02"></rect><path class="cls-4" d="M7.79,15.34H11.1a1.2,1.2,0,1,1,0,2.4H7.79Z"></path><path class="cls-5" d="M5.15,15.34H8.46a1.2,1.2,0,0,1,0,2.4H5.15a1.2,1.2,0,0,1,0-2.4"></path><rect class="cls-6" height="2.44" width="2.42" x="19.58" y="7.02"></rect><path class="cls-7" d="M18.23,13.17v-.23a.51.51,0,0,1,.5-.5.5.5,0,0,1,.5.5v.23a1.42,1.42,0,0,1,.52.34,1.39,1.39,0,0,1,.31.45.5.5,0,0,1-.92.4.38.38,0,0,0-.09-.15.45.45,0,0,0-.76.32.44.44,0,0,0,.44.44,1.44,1.44,0,0,1,.5,2.79V18a.5.5,0,0,1-.5.5.5.5,0,0,1-.5-.5v-.23a1.58,1.58,0,0,1-.52-.33,1.41,1.41,0,0,1-.3-.46.5.5,0,0,1,.26-.65.51.51,0,0,1,.66.26.42.42,0,0,0,.09.14.44.44,0,1,0,.31-.75,1.45,1.45,0,0,1-.5-2.8Z"></path>
                </g></svg></span>
              <p class="u-custom-font u-font-roboto-slab u-text u-text-2">Click here to continue registration.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <!--footer-->
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-1e7a"><div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-custom-font u-font-playfair-display u-text u-text-1">GOLDEN<span class="u-text-custom-color-2">CRESENT</span>fx<span style="font-size: 1.5rem;">
            <span style="font-size: 3rem;">
              <span style="font-size: 1.875rem;">
                <span style="font-size: 1.25rem;"></span>
              </span>
            </span>
          </span>
        </h3>
        <h5 class="u-align-center u-text u-text-2">Links</h5>
        <p class="u-align-left u-custom-font u-font-playfair-display u-text u-text-3">
          <br>
          <span style="font-size: 1.5rem;">
            <span style="text-decoration: underline !important;">SERVICES</span>
            <br>
            <span style="text-decoration: underline !important;">TERMS AND CONDITIONS<br>RISK DISCOLSURE
            </span>
          </span>
          <br>
          <a href="Signal-Copier.html" data-page-id="634807836" target="_blank">
            <br>
          </a>
        </p>
        <p class="u-align-left u-custom-font u-font-playfair-display u-small-text u-text u-text-variant u-text-4">Hello Traders,I’m glad you’re part of the journey called FOREX. Know that the Goldencresent team is here and will always be here to help you on the way to success.</p>
        <div class="u-social-icons u-spacing-10 u-social-icons-1">
              <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/GoldencresentFx"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-45d9"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-45d9"><path fill="currentColor" d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2
              c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
              </a>
              <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/_GoldencresentFx"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-544e"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-544e"><path fill="currentColor" d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2
            	c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7
            	c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2
            	c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5
            	c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
              </a>
              <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/_GoldencresentFx"><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b6ec"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-b6ec"><path fill="currentColor" d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z
            	 M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path fill="#FFFFFF" d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path fill="currentColor" d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7
            	V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7
            	c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
          </a>
        </div>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
     
    </section>
    <!---ajax javascript-->
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="signalcopier.js"></script>
  </body>
</html>