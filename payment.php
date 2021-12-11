
<?php
ob_start();
include "db_conn.php";
ob_end_clean();

$accountdetails ='';
$phone ='';
$service ='';



$errors = array('accountdetails' => "", 'phone' => "", 'service' => "");
   
if (isset($_POST['submit'])) {
      

       //start session
       session_start();
  
   //Check for first name
      if (!preg_match('/[a-zA-Z0-9]+$/', $accountdetails)) {
        $errors['fname'] = 'account details should be letters and numbers only';
      }

      //Check for contact
      if (!preg_match('/[0-9]+$/', $phone)) {
        $errors['contact'] = 'contact should be numbers only';
      }
     
     //Check for service
      if (!preg_match('/[a-zA-Z]+$/', $service)) {
        $errors['service'] = 'service should be letters only';
      }
    
 

  // array filter cycles through the errors array and runs if its empty
    if (array_filter($errors)) {

      $accountdetails =   $_POST['accountdetails'];
      $phone1 = $_POST['phone'];
      $service =   $_POST['service'];

      $_SESSION['accountdetails']=$accountdetails;
      $_SESSION['phonenum']=$phone1;
      $_SESSION['service']=$service;


   //create sql for inserting
    $sql = mysqli_query($conn,"INSERT INTO `payment` (`accountdetails`,`phone`,`service`) VALUES ('$accountdetails', '$phone1','$service')");

    }else{
      //error
      echo 'query error: '. mysqli_error($conn);
    }

   
  }
  



?>
 


 
<!---HTML DOCUMENT STARTS FROM HERE-->

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Our Prices">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Payment</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="ajax.js"></script>
    <!--stylesheet links-->
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Payment.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.0.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    <!--script logo and also links to social media sites.-->
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
        <meta name="twitter:title" content="Payment">
        <meta name="twitter:description" content="">
        <meta property="og:title" content="Payment">
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
              </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="signalcopier.php">SIGNAL COPIER</a>
              </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="vipgroup.php">VIP GROUP</a>
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
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home1.php" style="padding: 10px;">Home</a>
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
    <section class="u-align-center u-clearfix u-image u-section-1" id="sec-f7d9" data-image-width="1280" data-image-height="851">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-custom-color-12 u-text-default u-text-1">Our Prices</h2>
        <div class="u-clearfix u-gutter-50 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-21 u-layout-cell-1">
                <div class="u-border-2 u-border-grey-25 u-container-layout u-container-layout-1">
                  <h4 class="u-text u-text-custom-color-12 u-text-2">COURSES</h4>
                  <p class="u-text u-text-custom-color-12 u-text-3">1 month<br>
                  </p>
                  <h3 class="u-text u-text-custom-color-12 u-text-4">50$</h3>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-19 u-layout-cell-2">
                <div class="u-border-2 u-border-custom-color-12 u-container-layout u-container-layout-2">
                  <h4 class="u-align-center u-text u-text-custom-color-12 u-text-5">VIP GROUP</h4>
                  <p class="u-align-center u-text u-text-custom-color-12 u-text-6">1 month</p>
                  <h3 class="u-align-center u-text u-text-custom-color-12 u-text-7">$9​0</h3>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                <div class="u-border-2 u-border-custom-color-12 u-container-layout u-container-layout-3">
                  <h4 class="u-align-center u-text u-text-custom-color-12 u-text-8">Signal Copier</h4>
                  <p class="u-align-center u-text u-text-custom-color-12 u-text-9">1 month</p>
                  <h3 class="u-align-center u-text u-text-custom-color-12 u-text-10">$90</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-image u-section-2" id="sec-7df8" data-image-width="1280" data-image-height="1280">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-tabs u-tabs-1">
          <ul class="u-border-1 u-border-grey-25 u-tab-list u-unstyled" role="tablist">
            <li class="u-tab-item" role="presentation">
              <a class="active u-active-white u-border-2 u-border-active-grey-15 u-border-hover-grey-15 u-border-no-bottom u-button-style u-tab-link u-text-active-palette-2-base u-text-hover-black u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">PerfectMoney</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-white u-border-2 u-border-active-grey-15 u-border-hover-grey-15 u-border-no-bottom u-button-style u-tab-link u-text-active-palette-2-base u-text-hover-black u-tab-link-2" id="link-tab-7445" href="#tab-7445" role="tab" aria-controls="tab-7445" aria-selected="false">Mobile Money</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-white u-border-2 u-border-active-grey-15 u-border-hover-grey-15 u-border-no-bottom u-button-style u-tab-link u-text-active-palette-2-base u-text-hover-black u-tab-link-3" id="link-tab-8ab2" href="#tab-8ab2" role="tab" aria-controls="tab-8ab2" aria-selected="false">Zenith Bank</a>
            </li>
          </ul>
          <div class="u-tab-content">
            <div class="u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
              <div class="u-container-layout u-container-layout-1">
                <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-1" data-image-width="800" data-image-height="445" src="images/Perfect-Money-800x445.jpg">
                <h4 class="u-text u-text-1">PerfectMoney&nbsp; &nbsp; -----&nbsp; &nbsp;USD1233456905</h4>
                <p class="u-text u-text-2">ENTER YOUR ACCOUNT DETAILS &amp; PHONE NUMBER</p>
                <div class="u-form u-form-1">
                  <form action="payment.php" method="POST">
                    <div class="u-form-group u-form-name">
                      <label for="accountdetails" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter your account details" id="accountdetails" name="accountdetails" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="red-text"></div>


                    <div class="u-form-group u-form-phone u-form-group-2">
                      <label for="phone" class="u-form-control-hidden u-label"></label>
                      <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +14155552675)" id="phone" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""  >
                    </div>
                     <div class="red-text"></div>

                    <div class="u-form-group u-form-group-3">
                      <label for="service" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter the desired service " id="service" name="service" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" >
                    </div>

                    <div class="u-align-center u-form-group u-form-submit">
                      
                      <input type="submit" value="Submit" class="u-btn u-btn-submit u-button-style" name="submit">

                    </div>
 
                  </form>
                </div>
                <h5 class="u-text u-text-custom-color-8 u-text-3">NB: Immediately after payment is recorded a link will be shared to you to join the group of the respective service you paid for.</h5>
             <div id="message"></div>
            </div>
            </div>
            <div class="u-container-style u-tab-pane u-white u-tab-pane-2" id="tab-7445" role="tabpanel" aria-labelledby="link-tab-7445">
              <div class="u-container-layout u-container-layout-2">
                <img alt="" class="u-image u-image-default u-image-2" data-image-width="1288" data-image-height="724" src="images/momo.jpg">
                <h4 class="u-text u-text-4">MobileMoney&nbsp; &nbsp;---- 0544262308</h4>
                <p class="u-text u-text-5">ENTER YOUR ACCOUNT DETAILS &amp; PHONE NUMBER</p>
                <div class="u-form u-form-2">
                  <form action="payment.php" method="POST">
                    <div class="u-form-group u-form-name">
                      <label for="accountdetailsa" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter your account details" id="accountdetails" name="accountdetails" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-form-phone u-form-group-6">
                      <label for="phonea" class="u-form-control-hidden u-label"></label>
                      <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +14155552675)" id="phone" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-form-group-7">
                      <label for="servicea" class="u-form-control-hidden u-label"></label>
                      <input type="text" id="service" name="service" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" placeholder="Enter the desired service">
                    </div>
                    <div class="u-align-center u-form-group u-form-submit">
                    
                      <input type="submit" value="Submit" class="u-btn u-btn-submit u-button-style" name="submit">  
                    </div>
                  </form>
                </div>
                <h5 class="u-text u-text-custom-color-5 u-text-6">NB: Immediately after payment is recorded a link will be shared to you to join the Academy</h5>
                <div id="messagea"></div>

            </div>
            </div>
            <div class="u-container-style u-tab-pane u-white u-tab-pane-3" id="tab-8ab2" role="tabpanel" aria-labelledby="link-tab-8ab2">
              <div class="u-container-layout u-container-layout-3">
                <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-3" data-image-width="703" data-image-height="729" src="images/zenith.jpg">
                <h4 class="u-text u-text-7">Zenith Bank&nbsp; &nbsp; ----142518001230076</h4>
                <p class="u-text u-text-8">ENTER YOUR ACCOUNT DETAILS &amp; PHONE NUMBER</p>
                <div class="u-form u-form-3">
                  <form action="payment.php" method="POST">
                    <div class="u-form-group u-form-name">
                      <label for="accountdetailsb" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter your account details" id="accountdetails" name="accountdetails" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-form-phone u-form-group-10">
                      <label for="phoneb" class="u-form-control-hidden u-label"></label>
                      <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +14155552675)" id="phone" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-form-group-11">
                      <label for="serviceb" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Enter the desired service" id="service" name="service" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                    </div>
                    <div class="u-align-center u-form-group u-form-submit">
                      <input type="submit" value="Submit" class="u-btn u-btn-submit u-button-style" name="submit">
                    </div>
                  </form>
                </div>
                <h5 class="u-text u-text-custom-color-8 u-text-9">NB: Immediately after payment is recorded a link will be shared to you to join the Academy</h5>
                <div id="messageb"></div>

            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="sec-f46e">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"></div>
    </section>
  <!----Display user input--->
   <?php
   //when user clicks submit
   if (isset($_POST['submit'])){

   if(isset($_SESSION['phonenum'])){

    //store the phone session in the variable phone
   $phone=$_SESSION['phonenum'];
   //select query
  $sqli = "SELECT * FROM `payment` WHERE `phone`='$phone' "  ;

  //get query results
   $result = mysqli_query($conn,$sqli);

   //if user clicks delete
   if(isset($_POST['delete'])){
   $hidden=$_POST['name'];
   //delete query
    $delete = "DELETE FROM `payment` where `phone`='$phone' ";
      
    if (mysqli_query($conn,$delete)) {
     echo "<script>alert('Deleted Sucessfully.')</script>";
          } else {
                 echo 'error';  
              }
    }
   ?>
  <!---Table to display the inputs of the user-->
   <table border="1">
    <thread>
      <tr>
        <th>Account details</th>
        <th>Contact</th>
        <th>Desired Service</th>
      </tr>
    </thread>
    <tbody>
      <!--Fetches all fields -->
      <?php while($row=mysqli_fetch_assoc($result)){
        ?>
        <td><?php echo $row['accountdetails']?>"</td>
        <td><?php echo $row['phone']?>"</td>
        <td><?php echo $row['service']?>"</td>
      <?php }}}?>
    </tbody>
   </table> 
   <form method='post'>
    <input type='submit' name='delete' value='delete'style="background-color:red; color:white" onclick="return confirm ('Are you sure you want to delete??')"></input>
    <input type=hidden name="name" value="<?php echo $row["id"]; ?>">
    </form>
    
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
  </body>
</html>
