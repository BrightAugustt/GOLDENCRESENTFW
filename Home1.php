<?php
ob_start();
include "db_conn.php";
ob_end_clean();


$fname = ''; 
$lname = ''; 
$contact = ''; 
$email  = '';
$message = '';


//Errors array with empty arrays and cathes all errors
$errors = array('fname' => "", 'lname' => "", 'contact' => "", 'email' => "",'message' => "");
if (isset($_POST['submit'])) {

      //start session
      session_start();

  
   //Check for first name
      if (!preg_match('/[a-zA-Z]+$/', $fname)) {
        $errors['fname'] = 'First name should be letters only';
      }

      //Check for last name
      if (!preg_match('/[a-zA-Z]+$/', $lname)) {
        $errors['lname'] = 'Last name should be letters only';
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
      $lname =   $_POST['lname'];
      $contact = $_POST['contact'];
      $email =   $_POST['email'];
      $message=  $_POST['message'];

      //user sessions are stored
      $_SESSION['fname'] = $_POST['fname'];
      $_SESSION['lname'] = $_POST['lname'];
      $_SESSION['contact'] = $_POST['contact'];
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['message'] = $_POST['message'];



      //create sql for inserting
    $sql = mysqli_query($conn,"INSERT INTO `person` (`fname`,`lname`,`contact`,`email`,`message`) VALUES ('$fname', '$lname', '$contact','$email','$message')");

    //save to db and check
    if($sql){
      //success
      header('Location:Home1.php');
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
    <meta name="keywords" content="Welcome To Goldencresent, Learn | Trade | Earn, END THE DAY WITH SMILES&nbsp;ON YOUR FACE, OUR SIGNALS,YOUR PROFIT">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.0.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Oswald:200,300,400,500,600,700">
    
    
    
    
    
    
    
    
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
          <meta name="twitter:title" content="Home">
          <meta name="twitter:description" content="">
          <meta property="og:title" content="Home">
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
            </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Signal-Copier.html" style="padding: 10px;">Services</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="courses.php">Courses</a>
            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="signalcopier.php">SIGNAL COPIER</a>
            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Vipgroup.php">VIP GROUP</a>
            </li></ul>
            </div>
            </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="brokers.php" style="padding: 10px;">Brokers</a>
            </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="payment.php" style="padding: 10px;">Payment</a>
            </li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 10px;">Home</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="about.php" style="padding: 10px;">About</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="signalcopier.php" style="padding: 10px;">Services</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="courses.php">Courses</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="signalcopier.php">SIGNAL COPIER</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="vipgroup.php">VIP GROUP</a>
                </li></ul>
                </div>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="brokers.php" style="padding: 10px;">Brokers</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="payment.php" style="padding: 10px;">Payment</a>
                </li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section id="carousel_dfcf" class="u-carousel u-carousel-duration-1000 u-slide u-block-5278-1" data-u-ride="carousel" data-interval="1500">
      <ol class="u-carousel-indicators u-block-5278-5">
        <li data-u-target="#carousel_dfcf" data-u-slide-to="0" class="u-active u-active-palette-5-base u-black u-shape-circle" style="width: 10px; height: 10px;"></li>
        <li data-u-target="#carousel_dfcf" class="u-active-palette-5-base u-black u-shape-circle" data-u-slide-to="1" style="width: 10px; height: 10px;"></li>
        <li data-u-target="#carousel_dfcf" class="u-active-palette-5-base u-black u-shape-circle" data-u-slide-to="2" style="width: 10px; height: 10px;"></li>
      </ol>
      <div class="u-carousel-inner" role="listbox">
        <div class="u-active u-carousel-item u-clearfix u-image u-shading u-section-1-1" data-image-width="1600" data-image-height="1067">
          <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-default u-title u-text-1">Welcome To Goldencresent</h1>
            <h2 class="u-text u-text-default u-text-2">Learn | Trade | Earn</h2>
            <a href="About.html" data-page-id="1162228100" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-dark-2 u-palette-5-dark-2 u-radius-50 u-btn-1">Read more</a>
          </div>
        </div>
        <div class="u-carousel-item u-clearfix u-image u-shading u-section-1-2" data-image-width="6000" data-image-height="4000">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-text u-text-1">END THE DAY WITH <span style="font-weight: 700;">SMILES&nbsp;</span>
              <br>ON YOUR FACE&nbsp;
            </h2>
          </div>
        </div>
        <div class="u-carousel-item u-clearfix u-image u-shading u-section-1-3" data-image-width="1600" data-image-height="1200">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-1">OUR SIGNALS,YOUR <span style="font-weight: 700;">PROFIT</span>
            </h1>
            <h4 class="u-text u-text-2">Earn more on a daily by watching, following and trading with our VIP Copier Package</h4>
          </div>
        </div>
      </div>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-icon-circle u-text-palette-1-base u-block-5278-3" href="#carousel_dfcf" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-icon-circle u-text-palette-1-base u-block-5278-4" href="#carousel_dfcf" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    <section class="u-clearfix u-section-2" id="sec-de24">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-radius-6 u-shape-round u-size-36 u-size-xs-60 u-white u-layout-cell-1" src="" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-direction="">
                              <div class="u-container-layout u-container-layout-1"><span class="u-border-6 u-border-palette-1-base u-gradient u-icon u-icon-circle u-opacity u-opacity-85 u-spacing-23 u-text-grey-70 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b30"></use></svg><svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-7b30" style="enable-background:new 0 0 58 58;"><circle style="fill:#7383BF;stroke:#556080;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" cx="29" cy="29" r="28"></circle><line style="fill:none;stroke:#556080;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" x1="29" y1="57" x2="29" y2="1"></line><path style="fill:none;stroke:#556080;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" d="M29,1
              	c-0.214,0-0.426,0.011-0.639,0.016C20.213,7.616,15,17.697,15,29s5.213,21.384,13.361,27.984C28.574,56.989,28.786,57,29,57"></path><path style="fill:none;stroke:#556080;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" d="M8.698,9.728
              	C14.478,13.683,21.468,16,29,16s14.522-2.317,20.302-6.272"></path><path style="fill:none;stroke:#556080;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" d="M49.862,47.67
              	C43.975,43.475,36.779,41,29,41s-14.975,2.475-20.862,6.67"></path><path style="fill:none;stroke:#556080;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" d="M29,57
              	c0.214,0,0.426-0.011,0.639-0.016C37.787,50.384,43,40.303,43,29S37.787,7.616,29.639,1.016C29.426,1.011,29.214,1,29,1"></path><line style="fill:none;stroke:#556080;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" x1="1" y1="29" x2="57" y2="29"></line></svg></span>
                  <h3 class="u-align-center u-text u-text-custom-color-3 u-text-1">REDEFINE STRESS FREE<br>&nbsp; &nbsp; <span style="font-weight: 700;">&nbsp;</span>
                    <span style="font-size: 3.75rem;">
                      <span style="font-weight: 700;">TRADING</span>&nbsp; &nbsp;
                    </span>
                  </h3>
                  <h5 class="u-align-left u-custom-font u-font-roboto-slab u-text u-text-2">LOW RISK, HIGH GROWTH,ACHIEVE CONSISTENT PROFITABILITY BY FOLLOWING THE SIGNALS GIVEN BY EXPERTS IN OUR TELEGRAM GROUP</h5>
                </div>
              </div>
              <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-size-24 u-size-xs-60 u-image-1" src="" data-image-width="1600" data-image-height="1067">
                <div class="u-container-layout u-container-layout-2" src=""></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="sec-a257">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-roboto-slab u-text u-text-default u-text-1">We are Here to Fulfil your<span class="u-text-custom-color-3"> Trading&nbsp; Goals</span>&nbsp;
        </h2>
        <p class="u-text u-text-default u-text-2">
          <span style="font-weight: 700;">CHOOSE WHAT BEST FITS YOUR STYL</span>
          <span style="font-weight: 700;">E<span style="font-weight: 700;"></span>
          </span>.
        </p>
        <div class="u-expanded-width u-layout-grid u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-hover-feature u-list-item u-repeater-item u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-border-2 u-border-palette-1-base u-icon u-icon-circle u-spacing-10 u-text-palette-1-base u-icon-1">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7896"></use></svg>
            <svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-7896" style="enable-background:new 0 0 512 512;"><g><g><path d="M480,143.686H378.752c7.264-4.96,13.504-9.888,17.856-14.304c25.792-25.952,25.792-68.192,0-94.144    c-25.056-25.216-68.768-25.248-93.856,0c-13.856,13.92-50.688,70.592-45.6,108.448h-2.304    c5.056-37.856-31.744-94.528-45.6-108.448c-25.088-25.248-68.8-25.216-93.856,0C89.6,61.19,89.6,103.43,115.36,129.382    c4.384,4.416,10.624,9.344,17.888,14.304H32c-17.632,0-32,14.368-32,32v80c0,8.832,7.168,16,16,16h16v192    c0,17.632,14.368,32,32,32h384c17.632,0,32-14.368,32-32v-192h16c8.832,0,16-7.168,16-16v-80    C512,158.054,497.632,143.686,480,143.686z M138.08,57.798c6.496-6.528,15.104-10.112,24.256-10.112    c9.12,0,17.728,3.584,24.224,10.112c21.568,21.696,43.008,77.12,35.552,84.832c0,0-1.344,1.056-5.92,1.056    c-22.112,0-64.32-22.976-78.112-36.864C124.672,93.318,124.672,71.302,138.08,57.798z M240,463.686H64v-192h176V463.686z     M240,239.686H32v-64h184.192H240V239.686z M325.44,57.798c12.992-13.024,35.52-12.992,48.48,0    c13.408,13.504,13.408,35.52,0,49.024c-13.792,13.888-56,36.864-78.112,36.864c-4.576,0-5.92-1.024-5.952-1.056    C282.432,134.918,303.872,79.494,325.44,57.798z M448,463.686H272v-192h176V463.686z M480,239.686H272v-64h23.808H480V239.686z"></path>
          </g>
          </g></svg>
          </span>
                <h3 class="u-align-center u-text u-text-default u-text-3">Courses</h3>
                <p class="u-align-center u-custom-font u-font-roboto-slab u-text u-text-default u-text-4">JOIN OUR TRAINING ACADEMY TO LEARN FROM THE BEST AND ALSO BE MENTORED.&nbsp;</p>
                <a href="Signal-Copier.html" data-page-id="634807836" class="u-active-palette-1-dark-2 u-border-4 u-border-black u-btn u-btn-round u-button-style u-hover-grey-75 u-none u-radius-12 u-text-black u-text-hover-white u-btn-1">learn more</a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-hover-feature u-list-item u-repeater-item u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-border-2 u-border-palette-1-base u-icon u-icon-circle u-spacing-10 u-text-palette-1-base u-icon-2">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512.002 512.002" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-04c0"></use></svg>
            <svg class="u-svg-content" viewBox="0 0 512.002 512.002" x="0px" y="0px" id="svg-04c0" style="enable-background:new 0 0 512.002 512.002;"><g><g><path d="M512.001,255.969c-0.011-5.193-2.708-10.011-7.129-12.737l-52.034-32.076l52.089-32.421    c4.393-2.734,7.066-7.539,7.074-12.712c0.008-5.174-2.651-9.987-7.036-12.734l-241-151c-4.871-3.052-11.058-3.052-15.929,0    l-241,151c-4.384,2.747-7.043,7.56-7.036,12.734c0.008,5.174,2.681,9.979,7.074,12.712l51.732,32.198L7.051,243.282    c-4.39,2.744-7.055,7.557-7.05,12.734c0.005,5.177,2.679,9.985,7.074,12.721l51.732,32.198L7.051,333.282    c-4.383,2.74-7.047,7.543-7.05,12.712s2.656,9.975,7.036,12.719l241,151c2.436,1.526,5.2,2.289,7.964,2.289    c2.764,0,5.529-0.763,7.964-2.289l241-151c4.394-2.753,7.055-7.581,7.036-12.766c-0.019-5.185-2.715-9.993-7.129-12.714    l-52.034-32.076l52.089-32.421C509.336,265.992,512.012,261.162,512.001,255.969z M43.32,165.96L256.001,32.703L468.682,165.96    c-2.044,1.272-206.586,128.58-212.681,132.374L43.32,165.96z M468.584,346.106L256.001,479.301L43.278,346.018l43.889-27.431    l160.908,100.15c2.426,1.51,5.176,2.265,7.926,2.265c2.75,0,5.5-0.755,7.926-2.265l160.464-99.874L468.584,346.106z     M256.001,388.334L43.345,255.976l43.822-27.389l160.908,100.15c2.426,1.51,5.176,2.265,7.926,2.265c2.75,0,5.5-0.755,7.926-2.265    l160.464-99.874l44.125,27.2C467.297,256.822,261.631,384.829,256.001,388.334z"></path>
          </g>
          </g></svg>
          </span>
                <h3 class="u-text u-text-default u-text-5">VIP Package</h3>
                <p class="u-custom-font u-font-roboto-slab u-text u-text-default u-text-6">PAY AND JOIN OUR TELEGRAM GROUP TO PROVIDED WITH SIGNALS DAILY AND MAKE MORE IN MONTHS</p>
                <a href="Signal-Copier.html" data-page-id="634807836" class="u-active-palette-1-dark-2 u-border-4 u-border-black u-btn u-btn-round u-button-style u-hover-grey-75 u-none u-radius-12 u-text-black u-text-hover-white u-btn-2">learn more</a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-hover-feature u-list-item u-repeater-item u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-border-2 u-border-palette-1-base u-icon u-icon-circle u-spacing-10 u-text-palette-1-base u-icon-3">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9c32"></use></svg>
            <svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-9c32" style="enable-background:new 0 0 512 512;"><g><g><path d="M256,0C144.702,0,54.154,90.547,54.154,201.846c0,69.363,35.172,130.662,88.615,167.011v128.373    c0,5.012,2.541,9.682,6.75,12.402c4.207,2.721,9.509,3.121,14.08,1.066L256,469.119l92.401,41.58c1.935,0.87,4,1.301,6.059,1.301    c2.804,0,5.594-0.798,8.021-2.367c4.208-2.721,6.75-7.391,6.75-12.402V368.858c53.443-36.349,88.615-97.648,88.615-167.011    C457.846,90.547,367.298,0,256,0z M339.692,474.39l-77.632-34.934c-1.927-0.868-3.994-1.302-6.06-1.302s-4.133,0.433-6.06,1.301    l-77.632,34.934v-88.835c7.423,3.384,15.042,6.292,22.805,8.745c0.44,0.14,0.879,0.283,1.321,0.419    c0.991,0.305,1.985,0.599,2.98,0.888c0.737,0.216,1.474,0.43,2.213,0.638c0.803,0.224,1.609,0.441,2.415,0.655    c0.94,0.251,1.882,0.496,2.827,0.734c0.668,0.167,1.337,0.331,2.007,0.49c1.087,0.261,2.177,0.513,3.271,0.756    c0.567,0.126,1.135,0.251,1.703,0.372c1.198,0.256,2.4,0.498,3.607,0.733c0.491,0.095,0.982,0.192,1.474,0.284    c1.278,0.238,2.561,0.461,3.847,0.675c0.441,0.074,0.882,0.15,1.324,0.22c1.327,0.212,2.66,0.407,3.997,0.592    c0.414,0.057,0.827,0.119,1.241,0.174c1.353,0.179,2.712,0.34,4.072,0.492c0.406,0.045,0.81,0.096,1.216,0.14    c1.357,0.144,2.719,0.267,4.084,0.383c0.414,0.035,0.826,0.078,1.241,0.11c1.345,0.106,2.696,0.191,4.049,0.271    c0.434,0.026,0.866,0.06,1.302,0.083c1.367,0.072,2.739,0.121,4.113,0.165c0.414,0.014,0.825,0.036,1.239,0.047    c1.776,0.046,3.558,0.072,5.346,0.072c1.787,0,3.569-0.026,5.345-0.072c0.414-0.011,0.825-0.033,1.239-0.047    c1.374-0.044,2.746-0.094,4.113-0.165c0.434-0.023,0.867-0.057,1.302-0.083c1.353-0.08,2.704-0.164,4.049-0.271    c0.415-0.032,0.827-0.075,1.241-0.11c1.365-0.116,2.727-0.24,4.084-0.383c0.406-0.043,0.81-0.094,1.216-0.14    c1.361-0.153,2.719-0.313,4.072-0.492c0.415-0.055,0.827-0.116,1.241-0.174c1.336-0.185,2.669-0.38,3.997-0.592    c0.442-0.071,0.882-0.147,1.324-0.22c1.286-0.214,2.569-0.437,3.847-0.675c0.492-0.092,0.983-0.188,1.474-0.284    c1.206-0.234,2.408-0.478,3.607-0.733c0.569-0.121,1.136-0.246,1.703-0.372c1.094-0.243,2.184-0.495,3.271-0.756    c0.669-0.16,1.338-0.324,2.007-0.49c0.945-0.237,1.886-0.482,2.827-0.734c0.806-0.215,1.612-0.43,2.415-0.655    c0.739-0.208,1.477-0.422,2.213-0.638c0.995-0.29,1.99-0.583,2.98-0.888c0.442-0.137,0.881-0.28,1.321-0.419    c7.763-2.453,15.382-5.36,22.805-8.744V474.39z M312.229,364.724c-0.589,0.203-1.178,0.407-1.769,0.604    c-0.898,0.3-1.8,0.595-2.705,0.88c-1.053,0.331-2.109,0.65-3.168,0.96c-0.747,0.22-1.495,0.439-2.246,0.649    c-1.401,0.391-2.807,0.765-4.218,1.12c-0.526,0.133-1.054,0.259-1.581,0.387c-1.381,0.334-2.768,0.652-4.158,0.952    c-0.35,0.076-0.697,0.156-1.047,0.228c-1.794,0.375-3.594,0.724-5.401,1.041c-0.184,0.032-0.369,0.06-0.554,0.093    c-1.628,0.281-3.261,0.536-4.897,0.769c-0.369,0.053-0.738,0.105-1.109,0.156c-1.745,0.237-3.493,0.455-5.247,0.639    c-0.066,0.007-0.132,0.016-0.198,0.023c-1.836,0.191-3.679,0.348-5.524,0.479c-0.4,0.029-0.802,0.05-1.203,0.077    c-1.435,0.093-2.87,0.166-4.309,0.224c-0.489,0.02-0.978,0.04-1.467,0.056c-1.807,0.055-3.616,0.093-5.428,0.093    s-3.621-0.037-5.428-0.095c-0.49-0.015-0.979-0.036-1.467-0.056c-1.439-0.057-2.874-0.131-4.309-0.224    c-0.401-0.026-0.802-0.048-1.203-0.077c-1.845-0.132-3.687-0.289-5.524-0.479c-0.066-0.007-0.132-0.016-0.198-0.023    c-1.754-0.184-3.502-0.402-5.247-0.639c-0.369-0.05-0.738-0.102-1.108-0.156c-1.637-0.234-3.27-0.488-4.898-0.769    c-0.184-0.031-0.369-0.06-0.554-0.093c-1.807-0.317-3.608-0.667-5.401-1.041c-0.349-0.073-0.697-0.154-1.047-0.228    c-1.39-0.299-2.777-0.618-4.158-0.952c-0.528-0.128-1.056-0.254-1.581-0.387c-1.411-0.354-2.817-0.73-4.218-1.12    c-0.751-0.21-1.499-0.429-2.246-0.649c-1.058-0.311-2.115-0.629-3.169-0.96c-0.905-0.286-1.806-0.58-2.705-0.88    c-0.592-0.197-1.181-0.401-1.769-0.604c-67.484-23.361-116.078-87.547-116.078-162.876c0-95.01,77.297-172.308,172.308-172.308    s172.308,77.297,172.308,172.308C428.308,277.175,379.713,341.361,312.229,364.724z"></path>
          </g>
          </g><g><g><path d="M343.622,201.846l27.741-52.14c2.394-4.497,2.299-9.91-0.248-14.321c-2.547-4.411-7.188-7.2-12.279-7.376l-59.025-2.045    L268.527,75.87c-2.699-4.32-7.433-6.946-12.527-6.946s-9.828,2.626-12.527,6.946l-31.283,50.094l-59.025,2.045    c-5.091,0.176-9.732,2.965-12.279,7.376s-2.642,9.824-0.248,14.321l27.741,52.14l-27.741,52.14    c-2.394,4.497-2.299,9.91,0.248,14.321c2.547,4.411,7.188,7.2,12.279,7.376l59.025,2.045l31.283,50.094    c2.698,4.32,7.433,6.946,12.527,6.946s9.828-2.626,12.527-6.946l31.283-50.094l59.025-2.045c5.091-0.176,9.732-2.965,12.279-7.376    c2.547-4.411,2.642-9.824,0.248-14.321L343.622,201.846z M290.935,248.479c-4.909,0.17-9.414,2.771-12.015,6.938L256,292.118    l-22.919-36.7c-2.602-4.167-7.106-6.767-12.015-6.938l-43.242-1.499l20.323-38.198c2.308-4.337,2.308-9.537,0-13.874    l-20.323-38.198l43.242-1.499c4.909-0.17,9.414-2.771,12.015-6.938L256,111.575l22.919,36.7c2.602,4.167,7.106,6.767,12.015,6.938    l43.242,1.499l-20.323,38.198c-2.307,4.337-2.307,9.538,0.001,13.874l20.323,38.198L290.935,248.479z"></path>
          </g>
          </g></svg>
          </span>
                <h3 class="u-text u-text-default u-text-7">SIGNALS COPIER</h3>
                <p class="u-custom-font u-font-roboto-slab u-text u-text-default u-text-8">LINK YOUR ACCOUNT TO THE MASTER ACCOUNT AND ENJOY PROFITS WITHOUT STRESSING</p>
                <a href="Signal-Copier.html" data-page-id="634807836" class="u-active-palette-1-dark-2 u-border-4 u-border-black u-btn u-btn-round u-button-style u-hover-grey-75 u-none u-radius-12 u-text-black u-text-hover-white u-btn-3">learn more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
       
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-4" id="carousel_b901" data-image-width="1600" data-image-height="900">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">what we do best</h2>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-icon u-icon-circle u-palette-3-base u-spacing-21 u-text-black u-icon-1">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 128 128" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-998c"></use></svg>
            <svg viewBox="0 0 128 128" id="svg-998c" class="u-svg-content"><path d="m92.7 22c2.4 0 4.4 2 4.4 4.5v4.2h-89.1v-4.2c0-2.5 2-4.5 4.4-4.5h80.3m4.4 14.6v7.8h-61.8-0.6-26.7v-7.8h89.1m18.5 13.7c2.4 0 4.4 2 4.4 4.5v46.7c0 2.5-2 4.5-4.4 4.5h-80.3c-2.4 0-4.4-2-4.4-4.5v-46.7c0-2.3 1.8-4.3 4.1-4.4l80.6-0.1m-91.6 0.1c-0.6 1.3-1 2.9-1 4.4v22.9h-10.6c-2.4 0-4.4-2-4.4-4.5v-22.8h18m66.7-36.4h-80.3c-6.8 0-12.4 5.6-12.4 12.5v46.8c0 6.9 5.6 12.5 12.4 12.5h10.6v15.9c0 6.9 5.6 12.5 12.4 12.5h80.3c6.8 0 12.4-5.6 12.4-12.5v-46.7c0-6.9-5.6-12.5-12.4-12.5h-10.6v-15.9c-0.1-7-5.6-12.6-12.4-12.6z"></path><path d="m67.6 69.9c2 0 3.8 0.7 5.3 1.8-1.1 2-1.7 4.3-1.7 6.8 0 2.4 0.6 4.7 1.7 6.8-1.5 1.2-3.4 1.8-5.3 1.8-4.7 0-8.6-3.9-8.6-8.6s3.8-8.6 8.6-8.6m18.4 0c4.7 0 8.6 3.9 8.6 8.6s-3.9 8.6-8.6 8.6-8.6-3.9-8.6-8.6 3.8-8.6 8.6-8.6m-18.4-8c-9.2 0-16.6 7.5-16.6 16.6 0 9.2 7.5 16.6 16.6 16.6 3.3 0 6.5-1 9.2-2.8 2.6 1.8 5.8 2.8 9.2 2.8 9.2 0 16.6-7.5 16.6-16.6 0-9.2-7.5-16.6-16.6-16.6-3.4 0-6.6 1-9.2 2.8-2.7-1.8-6-2.8-9.2-2.8z"></path></svg>
          </span>
                <h4 class="u-text u-text-2">save your money</h4>
                <p class="u-custom-font u-font-playfair-display u-text u-text-3"> We trade our expertise to save you from the losses and help you&nbsp;<b>make money from the beginning of your trading journey</b>.
                </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-icon u-icon-circle u-palette-3-base u-spacing-21 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 59.99 59.99" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0377"></use></svg><svg class="u-svg-content" viewBox="0 0 59.99 59.99" id="svg-0377" style="enable-background:new 0 0 59.99 59.99;"><g><path d="M29.985,52c12.131,0,22-9.869,22-22s-9.869-22-22-22s-22,9.869-22,22S17.855,52,29.985,52z M29.985,10   c11.028,0,20,8.972,20,20s-8.972,20-20,20s-20-8.972-20-20S18.958,10,29.985,10z"></path><path d="M29.985,15c0.552,0,1-0.447,1-1v-2c0-0.553-0.448-1-1-1s-1,0.447-1,1v2C28.985,14.553,29.433,15,29.985,15z"></path><path d="M29.985,45c-0.552,0-1,0.447-1,1v2c0,0.553,0.448,1,1,1s1-0.447,1-1v-2C30.985,45.447,30.538,45,29.985,45z"></path><path d="M45.985,31h2c0.552,0,1-0.447,1-1s-0.448-1-1-1h-2c-0.552,0-1,0.447-1,1S45.433,31,45.985,31z"></path><path d="M13.985,29h-2c-0.552,0-1,0.447-1,1s0.448,1,1,1h2c0.552,0,1-0.447,1-1S14.538,29,13.985,29z"></path><path d="M18.985,41c0.256,0,0.512-0.098,0.707-0.293l8.274-8.274C28.561,32.785,29.246,33,29.985,33c2.206,0,4-1.794,4-4   c0-1.859-1.28-3.411-3-3.858V20c0-0.553-0.448-1-1-1s-1,0.447-1,1v5.142c-1.72,0.447-3,1.999-3,3.858   c0,0.74,0.215,1.424,0.567,2.019l-8.274,8.274c-0.391,0.391-0.391,1.023,0,1.414C18.474,40.902,18.73,41,18.985,41z M29.985,27   c1.103,0,2,0.897,2,2s-0.897,2-2,2s-2-0.897-2-2S28.882,27,29.985,27z"></path><path d="M10.069,10h7.917c0.552,0,1-0.447,1-1s-0.448-1-1-1h-5.302c4.924-3.885,10.975-6,17.302-6c15.439,0,28,12.561,28,28   c0,0.553,0.448,1,1,1s1-0.447,1-1c0-16.542-13.458-30-30-30c-6.981,0-13.643,2.408-19,6.81V1c0-0.553-0.448-1-1-1s-1,0.447-1,1v9   h0.893C9.943,10.007,10.004,10.005,10.069,10z"></path><path d="M4.805,42.229c-0.25-0.5-0.84-0.699-1.34-0.46c-0.5,0.24-0.7,0.84-0.46,1.34c0.17,0.351,0.53,0.561,0.9,0.561   c0.14,0,0.29-0.03,0.43-0.101C4.835,43.33,5.046,42.729,4.805,42.229z"></path><path d="M7.855,47.14c-0.34-0.439-0.96-0.52-1.4-0.18s-0.52,0.97-0.18,1.399c0.2,0.261,0.5,0.391,0.79,0.391   c0.22,0,0.43-0.07,0.62-0.21C8.115,48.2,8.195,47.569,7.855,47.14z"></path><path d="M6.205,44.76c-0.29-0.47-0.91-0.61-1.38-0.32c-0.47,0.301-0.61,0.91-0.32,1.38c0.19,0.301,0.52,0.471,0.85,0.471   c0.18,0,0.36-0.05,0.53-0.15C6.355,45.85,6.495,45.229,6.205,44.76z"></path><path d="M8.335,49.3c-0.4,0.38-0.41,1.01-0.03,1.41c0.19,0.21,0.46,0.31,0.72,0.31c0.25,0,0.5-0.09,0.69-0.279   c0.4-0.381,0.42-1.011,0.03-1.41C9.365,48.93,8.735,48.92,8.335,49.3z"></path><path d="M10.445,51.43c-0.36,0.42-0.31,1.05,0.11,1.41c0.19,0.16,0.42,0.24,0.65,0.24c0.28,0,0.56-0.12,0.76-0.351   c0.36-0.42,0.31-1.05-0.11-1.41C11.435,50.96,10.805,51.01,10.445,51.43z"></path><path d="M2.095,38.02c0.53-0.14,0.86-0.68,0.73-1.22c-0.14-0.53-0.68-0.86-1.22-0.72c-0.53,0.13-0.86,0.67-0.72,1.21   c0.11,0.45,0.52,0.76,0.97,0.76C1.935,38.05,2.015,38.04,2.095,38.02z"></path><path d="M1.415,35.09c0.55-0.08,0.93-0.58,0.85-1.13s-0.59-0.93-1.13-0.851c-0.55,0.08-0.93,0.591-0.85,1.131   c0.07,0.5,0.5,0.859,0.99,0.859C1.325,35.1,1.365,35.1,1.415,35.09z"></path><path d="M3.665,39.569c-0.18-0.52-0.76-0.789-1.28-0.6c-0.52,0.19-0.78,0.76-0.59,1.28c0.14,0.41,0.53,0.66,0.93,0.66   c0.12,0,0.23-0.021,0.35-0.061C3.595,40.66,3.855,40.09,3.665,39.569z"></path><path d="M1.005,32.12c0.01,0,0.03,0,0.04,0c0.55-0.021,0.98-0.49,0.96-1.04c-0.02-0.55-0.49-0.98-1.04-0.96   c-0.55,0.02-0.98,0.479-0.96,1.04C0.025,31.689,0.475,32.12,1.005,32.12z"></path><path d="M12.765,53.34c-0.32,0.45-0.2,1.07,0.25,1.39c0.18,0.12,0.37,0.17,0.57,0.17c0.32,0,0.63-0.149,0.82-0.43   c0.32-0.45,0.2-1.08-0.25-1.39C13.695,52.77,13.075,52.88,12.765,53.34z"></path><path d="M48.925,50.609V50.6c-0.41,0.38-0.44,1.01-0.06,1.42c0.2,0.21,0.47,0.32,0.74,0.32c0.24,0,0.48-0.09,0.67-0.26   c0.41-0.38,0.43-1.011,0.06-1.41C49.965,50.26,49.325,50.229,48.925,50.609z"></path><path d="M50.955,48.54c-0.37,0.41-0.33,1.04,0.08,1.41c0.19,0.17,0.43,0.25,0.66,0.25c0.28,0,0.55-0.11,0.75-0.341   c0.37-0.409,0.33-1.04-0.08-1.409C51.945,48.09,51.315,48.12,50.955,48.54z"></path><path d="M52.755,46.27c-0.32,0.45-0.22,1.08,0.23,1.4c0.18,0.13,0.38,0.189,0.58,0.189c0.32,0,0.62-0.149,0.82-0.42   c0.32-0.449,0.22-1.069-0.23-1.399C53.705,45.72,53.075,45.83,52.755,46.27z"></path><path d="M46.695,52.45c-0.44,0.33-0.53,0.96-0.2,1.399c0.19,0.271,0.49,0.4,0.8,0.4c0.21,0,0.42-0.061,0.59-0.19   c0.45-0.33,0.54-0.96,0.21-1.399C47.765,52.21,47.135,52.12,46.695,52.45z"></path><path d="M44.285,54.06c-0.47,0.29-0.63,0.9-0.34,1.37c0.18,0.32,0.52,0.49,0.86,0.49c0.17,0,0.35-0.04,0.51-0.14   c0.47-0.28,0.63-0.9,0.34-1.37C45.375,53.939,44.765,53.78,44.285,54.06z"></path><path d="M55.685,43.46c-0.48-0.271-1.09-0.101-1.37,0.38h0.01c-0.28,0.479-0.11,1.09,0.37,1.36c0.15,0.09,0.32,0.13,0.49,0.13   c0.35,0,0.69-0.181,0.87-0.5C56.335,44.35,56.165,43.74,55.685,43.46z"></path><path d="M58.935,32c-0.55-0.061-1.04,0.34-1.1,0.89c-0.06,0.55,0.34,1.04,0.89,1.101c0.04,0,0.07,0,0.11,0   c0.5,0,0.94-0.381,0.99-0.9C59.885,32.55,59.485,32.05,58.935,32z"></path><path d="M58.575,34.979c-0.54-0.12-1.07,0.23-1.18,0.771c-0.12,0.54,0.23,1.069,0.77,1.18c0.07,0.021,0.14,0.021,0.21,0.021   c0.46,0,0.88-0.32,0.97-0.79C59.465,35.62,59.115,35.09,58.575,34.979z"></path><path d="M57.905,37.899c-0.52-0.17-1.09,0.12-1.25,0.65c-0.17,0.52,0.12,1.09,0.64,1.26c0.1,0.03,0.21,0.04,0.31,0.04   c0.42,0,0.81-0.27,0.95-0.689C58.725,38.63,58.435,38.069,57.905,37.899z"></path><path d="M56.945,40.74c-0.51-0.221-1.1,0.01-1.32,0.51c-0.23,0.51,0,1.1,0.51,1.319c0.13,0.061,0.27,0.091,0.4,0.091   c0.39,0,0.75-0.23,0.92-0.601C57.675,41.55,57.445,40.96,56.945,40.74z"></path><path d="M41.735,55.42c-0.51,0.229-0.72,0.82-0.49,1.32c0.17,0.369,0.53,0.579,0.91,0.579c0.14,0,0.28-0.029,0.42-0.09   c0.5-0.229,0.72-0.83,0.48-1.33C42.825,55.399,42.235,55.18,41.735,55.42z"></path><path d="M24.765,57.51c-0.54-0.1-1.07,0.25-1.17,0.8c-0.1,0.54,0.25,1.061,0.8,1.17c0.06,0.011,0.12,0.011,0.18,0.011   c0.47,0,0.89-0.33,0.99-0.811C25.665,58.14,25.305,57.609,24.765,57.51z"></path><path d="M27.635,57.899c-0.55-0.05-1.04,0.36-1.08,0.91c-0.05,0.561,0.36,1.04,0.91,1.09c0-0.01,0-0.01,0-0.01   c0.03,0.01,0.06,0.01,0.08,0.01c0.52,0,0.96-0.399,1-0.92C28.585,58.43,28.185,57.95,27.635,57.899z"></path><path d="M21.955,56.83c-0.53-0.16-1.09,0.14-1.25,0.66c-0.15,0.529,0.14,1.09,0.67,1.25c0.1,0.029,0.2,0.04,0.29,0.04   c0.43,0,0.83-0.28,0.96-0.711C22.785,57.54,22.485,56.979,21.955,56.83z"></path><path d="M19.225,55.85c-0.51-0.21-1.09,0.03-1.3,0.54c-0.22,0.51,0.02,1.09,0.53,1.311c0.13,0.05,0.26,0.069,0.39,0.069   c0.39,0,0.76-0.229,0.92-0.609C19.975,56.649,19.735,56.06,19.225,55.85z"></path><path d="M33.415,57.79c-0.55,0.069-0.94,0.569-0.87,1.109c0.06,0.511,0.49,0.881,0.99,0.881c0.04,0,0.08,0,0.12-0.011   c0,0.011,0,0.011,0,0.011c0.55-0.07,0.94-0.57,0.87-1.12C34.465,58.109,33.965,57.72,33.415,57.79z"></path><path d="M39.046,56.5c-0.52,0.17-0.8,0.74-0.62,1.27c0.14,0.41,0.53,0.67,0.94,0.67c0.11,0,0.22-0.02,0.33-0.05   c0.52-0.18,0.8-0.75,0.62-1.27C40.135,56.59,39.565,56.319,39.046,56.5z"></path><path d="M36.265,57.29c-0.54,0.12-0.88,0.66-0.75,1.2c0.1,0.46,0.52,0.77,0.97,0.77c0.08,0,0.15,0,0.23-0.02   c0.53-0.12,0.87-0.66,0.75-1.2C37.335,57.5,36.805,57.17,36.265,57.29z"></path><path d="M30.525,57.99c-0.55,0.01-0.99,0.47-0.98,1.02c0.01,0.55,0.46,0.98,1,0.98c0.01,0,0.01,0,0.02,0   c0.55-0.011,0.99-0.46,0.98-1.021C31.535,58.42,31.075,57.979,30.525,57.99z"></path><path d="M16.615,54.6c-0.48-0.27-1.09-0.09-1.36,0.4c-0.26,0.479-0.08,1.09,0.41,1.35c0.15,0.09,0.31,0.13,0.47,0.13   c0.36,0,0.7-0.189,0.88-0.529C17.285,55.47,17.105,54.859,16.615,54.6z"></path>
            </g></svg>
            
            
          </span>
                <h4 class="u-text u-text-4">save your time</h4>
                <p class="u-custom-font u-font-playfair-display u-text u-text-5"> You&nbsp;<b>don’t need to spend hours in front of the charts</b>&nbsp;and the news channels every day. We do that for you while you can spend that time elsewhere. You can enjoy our service and&nbsp;<b>make money while you are on a job or spending time with your family</b>.
                </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-icon u-icon-circle u-palette-3-base u-spacing-21 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 128 128" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b69e"></use></svg><svg class="u-svg-content" viewBox="0 0 128 128" id="svg-b69e" style="enable-background:new 0 0 128 128;"><g><path d="M26.5,126.8h100.3V112l-11.5-21.7l-6.8,3.6l10.6,20v5.2h-17l4-48H20.7L26.5,126.8z M97.8,78.8l-3.4,40.3h-61l-4.2-40.3   H97.8z"></path><path d="M90.8,38c0-14.8-12-26.8-26.8-26.8S37.2,23.2,37.2,38s12,26.8,26.8,26.8S90.8,52.8,90.8,38z M44.8,38   c0-10.6,8.6-19.2,19.2-19.2S83.2,27.4,83.2,38S74.6,57.2,64,57.2S44.8,48.6,44.8,38z"></path><polygon points="19.4,94 12.6,90.4 1.1,112 1.1,126.8 18,126.8 18,119.2 8.8,119.2 8.8,114  "></polygon><circle cx="63" cy="98" r="4"></circle>
            </g></svg>
            
            
          </span>
                <h4 class="u-text u-text-6">do the hard work</h4>
                <p class="u-custom-font u-font-playfair-display u-text u-text-7">Our team of&nbsp;<b>professional traders scan the markets 24/7</b>. We analyze and decrypt the markets and economies for you. All of us take the same trades.&nbsp;<b>All of us make money</b>!
                </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-icon u-icon-circle u-palette-3-base u-spacing-21 u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 64 64" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-96b4"></use></svg><svg class="u-svg-content" viewBox="0 0 64 64" id="svg-96b4"><g id="Focus_goal"><path d="M62.1643,12.8454a3.4658,3.4658,0,0,0-2.8767-1.9412l-3.002-.2758,5.2825-5.33a1.8242,1.8242,0,0,0-2.59-2.5694L53.6672,8.0875,53.3835,5a3.4661,3.4661,0,0,0-1.9394-2.8757,3.29,3.29,0,0,0-3.716.6724L43.7925,6.7332a1.8286,1.8286,0,0,0-.5276,1.46l.6855,7.4553a4.3913,4.3913,0,0,1-1.2544,3.4939L28.9513,33.0063a1.8311,1.8311,0,0,0,.01,2.59,1.7911,1.7911,0,0,0,1.2846.5221,1.8259,1.8259,0,0,0,1.2951-.5326L45.366,21.6423a4.3912,4.3912,0,0,1,3.52-1.2812l7.2095.6626c.056.0051.1121.0077.1672.0077a1.8271,1.8271,0,0,0,1.2923-.5355L61.491,16.56A3.2874,3.2874,0,0,0,62.1643,12.8454Zm-6.5879,4.46-7.87-.7231-.7241-7.87,2.8128-2.8135.5844,6.3568a1.8271,1.8271,0,0,0,1.6523,1.6527l6.3562.5845Z"></path><path d="M33.8064,24.558a10.4109,10.4109,0,1,0,6.1465,6.0948l-6.6437,6.701a4.3278,4.3278,0,0,1-6.1333-6.1075Z"></path><path d="M31.6982,18.59v-4.519a1.75,1.75,0,1,0-3.5,0V18.59a1.75,1.75,0,0,0,3.5,0Z"></path><path d="M28.4946,50.0029v4.519a1.75,1.75,0,0,0,3.5,0v-4.519a1.75,1.75,0,0,0-3.5,0Z"></path><path d="M50.2037,36.6621a1.75,1.75,0,0,0,0-3.5h-4.519a1.75,1.75,0,0,0,0,3.5Z"></path><path d="M9.7523,33.1621a1.75,1.75,0,1,0,0,3.5h4.519a1.75,1.75,0,1,0,0-3.5Z"></path><path d="M56.2629,23.5314q-.195,0-.3961-.0182l-7.2092-.6625q-.087-.0081-.1736-.008a1.9034,1.9034,0,0,0-1.3428.56L45.5891,24.968a17.8,17.8,0,0,1,2.2532,5.6939h2.3614a4.25,4.25,0,0,1,0,8.5H47.5256a17.97,17.97,0,0,1-13.031,12.5736v2.7864a4.25,4.25,0,0,1-8.5,0V51.7355A17.9706,17.9706,0,0,1,12.9634,39.1619H9.7523a4.25,4.25,0,1,1,0-8.5h2.8944A17.9757,17.9757,0,0,1,25.6982,16.933V14.0705a4.25,4.25,0,1,1,8.5,0v2.71a17.883,17.883,0,0,1,5.2366,2.1l1.486-1.4988a1.8864,1.8864,0,0,0,.54-1.5046l-.6855-7.4557a4.3275,4.3275,0,0,1,.0149-.8276,28.704,28.704,0,1,0,16.0472,15.88A4.2559,4.2559,0,0,1,56.2629,23.5314Z"></path>
            </g></svg>
            
            
          </span>
                <h4 class="u-text u-text-8">Unbeatable accuracy</h4>
                <p class="u-custom-font u-font-playfair-display u-text u-text-9">We hold an accuracy of&nbsp;<b>more than 90%</b>&nbsp;which allows us to have very little drawdown and maximum profits.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-palette-5-light-2 u-valign-middle u-section-5" id="carousel_57d2">
      <div id="carousel-d79e" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width u-slider u-slider-1">
        <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
          <li data-u-target="#carousel-d79e" class="u-active u-grey-30 u-shape-circle" data-u-slide-to="0" style="width: 10px; height: 10px;"></li>
          <li data-u-target="#carousel-d79e" class="u-grey-30 u-shape-circle" data-u-slide-to="1" style="width: 10px; height: 10px;"></li>
          <li data-u-target="#carousel-d79e" class="u-grey-30 u-shape-circle" data-u-slide-to="2" style="width: 10px; height: 10px;"></li>
        </ol>
        <div class="u-carousel-inner" role="listbox">
          <div class="u-active u-align-center u-carousel-item u-container-style u-palette-5-base u-slide u-carousel-item-1">
            <div class="u-container-layout u-container-layout-1">
              <div alt="" class="u-border-6 u-border-custom-color-3 u-image u-image-circle u-image-1" data-image-width="3536" data-image-height="2362"></div>
              <p class="u-text u-text-1">"Just 5 months in the traing academy and i have be able to regain all that I lost in the prevoius years. Their courses are built different ."</p>
              <h5 class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-2">frank kinney</h5>
            </div>
          </div>
          <div class="u-align-center u-carousel-item u-container-style u-palette-5-base u-slide u-carousel-item-2">
            <div class="u-container-layout u-valign-top u-container-layout-2">
              <div alt="" class="u-border-6 u-border-custom-color-3 u-image u-image-circle u-image-2" data-image-width="4608" data-image-height="3072"></div>
              <p class="u-custom-font u-font-roboto-slab u-text u-text-3">"I have been trading with the VIP Package and i can confidently say I am a step closer to attaining the financial freedom I have dreamt of for so long. ."</p>
              <h5 class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-4">SAMUEL&nbsp; AUGUSTT</h5>
            </div>
          </div>
          <div class="u-align-center u-carousel-item u-container-style u-palette-5-base u-slide u-carousel-item-3">
            <div class="u-container-layout u-valign-top u-container-layout-3">
              <div alt="" class="u-border-6 u-border-custom-color-3 u-image u-image-circle u-image-3" data-image-width="1071" data-image-height="1600"></div>
              <p class="u-custom-font u-font-roboto-slab u-text u-text-5"> "From the first day of subscribing to the Signals Copier i have really been satisfied with their consistent results&nbsp; ."</p>
              <h5 class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-6">Micheal&nbsp; Ofori</h5>
            </div>
          </div>
        </div>
        <a class="u-carousel-control u-carousel-control-prev u-icon-circle u-text-body-color u-text-hover-grey-50 u-carousel-control-1" href="#carousel-d79e" role="button" data-u-slide="prev">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
          </span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="u-absolute-vcenter-lg u-absolute-vcenter-md u-absolute-vcenter-sm u-absolute-vcenter-xs u-carousel-control u-carousel-control-next u-icon-circle u-text-body-color u-text-hover-grey-50 u-carousel-control-2" href="#carousel-d79e" role="button" data-u-slide="next">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
          </span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <section class="u-clearfix u-grey-15 u-section-6" id="carousel_6d7a">
      <div class="u-custom-color-6 u-expanded-height-lg u-expanded-height-md u-expanded-height-xl u-expanded-width-sm u-expanded-width-xs u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <h2 class="u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-1">Get in touch!</h2>
                <div class="u-border-5 u-border-palette-2-base u-line u-line-horizontal u-line-1"></div>
                <div class="u-form u-form-1">
                  <form action="Home1.php" method="POST">
                    <div class="u-form-group u-form-name">
                      <label for="name-8db6" class="u-form-control-hidden u-label">Name</label>
                      <input type="text" placeholder="Enter your first name" id="fname" name="fname" class="u-input u-input-rectangle u-white" required="" value="<?php echo htmlspecialchars($fname)?>" >
                    </div>
                    <div class="red-text"><?php echo $errors['fname'] ?></div>

                    <div class="u-form-group u-form-group-2">
                      <label for="text-30ca" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter your last name " id="lname" name="lname" class="u-input u-input-rectangle u-white" required="" value="<?php echo htmlspecialchars($lname)?>" >
                    </div>
                    <div class="red-text"><?php echo $errors['lname'] ?></div>

                    <div class="u-form-group u-form-phone u-form-group-3">
                      <label for="phone-8827" class="u-form-control-hidden u-label"></label>
                      <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your contact" id="contact" name="contact" class="u-input u-input-rectangle u-white" required=""  value="<?php echo htmlspecialchars($contact)?>">
                    </div>
                     <div class="red-text"><?php echo $errors['contact'] ?></div>

                    <div class="u-form-email u-form-group">
                      <label for="email-8db6" class="u-form-control-hidden u-label">Email</label>
                      <input type="email" placeholder="Enter a valid email address" id="email" name="email" class="u-input u-input-rectangle u-white" required=""  value="<?php echo htmlspecialchars($email)?>">
                    </div>
                     <div class="red-text"><?php echo $errors['email'] ?></div>

                    <div class="u-form-group u-form-message">
                      <label for="message-8db6" class="u-form-control-hidden u-label">Message</label>
                      <textarea placeholder="Enter your message" rows="4" cols="50" id="message" name="message" class="u-input u-input-rectangle u-white" required="" value=" <?php echo htmlspecialchars($message)?>" ></textarea>
                    </div>
                    <div class="red-text"><?php echo $errors['message'] ?></div> 

                    <div class="u-form-group u-form-submit">
                      <input type="submit" value="Send" class="u-active-palette-2-dark-3 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-roboto-slab u-hover-palette-2-dark-2 u-palette-2-base u-radius-16 u-btn-1" name="submit">
                    </div>
                    
                  </form>
                  <div id="result"></div>
                </div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-size-30 u-white u-layout-cell-2">
              <div class="u-container-layout u-valign-top u-container-layout-2">
                <h5 class="u-text u-text-2">Address</h5>
                <p class="u-text u-text-grey-50 u-text-3">Haatso Opposite Botanical Gardens</p>
                <h5 class="u-text u-text-4">Call Us</h5>
                <p class="u-text u-text-grey-50 u-text-5">0243675680<br>0544328700
                </p>
                <h5 class="u-text u-text-6">Opening Hours</h5>
                <p class="u-text u-text-grey-50 u-text-7">Monday-Friday …. 10 am – 8 pm<br>Saturday, Sunday ……… Closed
                </p>
              </div>
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
     
    </section><span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 75px; bottom: 300px;" class="u-back-to-top u-border-2 u-border-palette-1-base u-icon u-icon-circle u-opacity u-opacity-85 u-spacing-10 u-text-palette-1-base" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98" data-color="rgb(71, 138, 201)"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
    <!--script for ajax-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="Home1.js"></script>
  </body>
</html>