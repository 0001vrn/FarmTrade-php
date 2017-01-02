<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>FarmTrade</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
  <link rel="stylesheet" href="css\font-awesome-4.7.0\css\font-awesome.min.css">
  <link rel="stylesheet" href="css\font-awesome-4.7.0\css\font-awesome.css">
  
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/myheader.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="apple-touch-icon" sizes="57x57" href="favicon\apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon\apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon\apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon\apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon\apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon\apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon\apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon\apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon\apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon\android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon\favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon\favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon\favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicon\ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  
  <style>
  
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
       width: 100%;max-height:633px;min-height:300px;
      margin: auto;}



.logo{
  float:left; width: 100%;
}
  </style>
</head>
<body>


<div class="myheader" >

<div class="nav navbar-fixed-top" style="background-color: black" >
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi', autoDisplay: false}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <div class=row id="signuplogin" style="margin-right: 25px;margin-left:25px;">
          
          <ul class="nav navbar-nav navbar-right" >
          <li>
          <?php
            if(isset($_SESSION['id']))
                echo "Hi, ".$_SESSION['uname']."<a href='logout.php'>logout</a>";  
          ?>

          </li> 
              <li >
              <?php
                if(!isset($_SESSION['id']))
                  echo "<a data-toggle='modal' data-target='#signUpModal'><span class='glyphicon glyphicon-user'></span> Sign Up</a>";
              ?>
                
              </li>
              <li>
              <?php
              if(!isset($_SESSION['id']))
                echo "<a data-toggle='modal' data-target='#signInModal'><span class='glyphicon glyphicon-log-in'></span> Login</a>";
              ?>
            </li>
          </ul>

          
        
        </div>
    <!--row 2 start-->
    <div class=row>
      
          <div class="col-md-12">
                      <div class="col-md-3">
                           <a href="index.php"> <img src="logo\tryl.png" width="100%" style="background-size:contain; height:70px"></a>
                              </div>
      
                      <div class="col-md-7">
                         <form class="navbar-form" role="search">
                                    <div class="input-group add-on" style="padding-top: 8px">
                                        <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text" size="85">
                                         <div class="input-group-btn">
                                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                                           </button>
                                          </div>
                                        </div>
                         </form>
                      </div>
                      <div class="col-md-2">
                                        <a href="#" class="btn btn-default" id="cart">
                                                                            <span class="glyphicon glyphicon-shopping-cart"></span> Cart
                                        </a>
                      </div>
          </div>
            
    </div>  <!--row 2 done -->
      <!--row no. 3-->
        <div class="container">
        <div class="row" style="margin-top: 12px"><center>
        <div class="nav"  >
            <ul >
            <li style="display: inline-block; padding-right: 5px;padding-left: 5px">
              <a href="products.php" style="color:white;font-size: medium;"> Products</a></li>
                 <li style="display: inline-block;padding-right: 5px;padding-left: 5px">
                  <a  href="services.php" style="color:white;font-size: medium;" >             Services</a></li>
                  
                </ul>
            </div></center>
        </div>
     </div>
</div>
</div> <!--header over-->


<div class="row">
<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="carousel pics\b1.jpg"  width="460" height="345">
      </div>

      <div class="item">
        <img src="carousel pics\b2.jpg"  width="460" height="345">
      </div>
    
      
      <div class="item">
        <img src="carousel pics\b4.jpg" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

  <!--Footer-->
<footer class="footer-distributed">

      <div class="footer-left">

        <img src="logo\tryl.png" width="100%">

        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">About</a>
          ·
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">FarmTrade &copy; 2016</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>30/3, Dr. Rajkumar Road</span> Bangalore, India</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+91 22325626</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@farmtrade.com">support@farmtrade.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
At FarmTrade, our vision is to be India's most customer centric company ,to build a place where people can come to find anything and everything related to farming, be it products or services. We aim to give our customers more of what they want – vast selection, low prices, fast and reliable delivery, and a trusted and convenient online shopping experience – and provide sellers a world-class e-commerce platform.</p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          

        </div>

      </div>

    </footer><!-- Modal SIGN UP-->
  <div class="modal fade" id="signUpModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign Up form</h4>
        </div>
        <div class="modal-body">
         <form action="signup.php" method="post">
    <div class="form-group">
      <label for="Name">Name:</label>
      <input name="name" class="form-control" id="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="aadhar">Aadhar card number:</label>
      <input name="aadhar" class="form-control" id="aadhar" placeholder="Enter aadhar card number">
    </div>
    <div class="form-group">
      <label for="aadhar">Password:</label>
      <input name="pass" class="form-control" id="aadhar" placeholder="Enter aadhar card number">
    </div>
    <div class="form-group">
      <label for="aadhar">Confirm password:</label>
      <input name="cpass" class="form-control" id="aadhar" placeholder="Enter aadhar card number">
    </div>
    
    
        <button type="submit" class="btn btn-default">Submit</button>
  </form>
        </div>
       </div>
      
    </div>
  </div>

  <!-- Modal SignIn -->
  <div class="modal fade" id="signInModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign In form</h4>
        </div>
        <div class="modal-body">
          <span class="errorLogin" style="color:red;"><?php echo $_SESSION['err'] ?> </span>
         <form action="signin.php" method="post">
    <div class="form-group">
      <label for="Name">Aadhar:</label>
      <input name="aadhar" class="form-control" id="name" placeholder="Enter Aadhar number">
    </div>
    <div class="form-group">
      <label for="aadhar">Password:<span class="errorLogin"> </span></label>
      <input name="pass" class="form-control" id="aadhar" placeholder="Enter password number">
    </div>
        <button type="submit" class="btn btn-default">Submit</button>
  </form>
        </div>
      </div>
      
    </div>
  </div>

<!-- Modal About Us-->
  <div class="modal fade" id="aboutUs" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">About Us</h4>
        </div>
        <div class="modal-body">
          <div class="row">
  <div class="col-md-12">
   <div class="row">
    <div class="col-md-6">
<p class="text-left">
At FarmTrade, our vision is to be India's most customer centric company; to build a place where people can come to find anything and everything related to farming be it products or services. We aim to give our customers more of what they want – vast selection, low prices, fast and reliable delivery, and a trusted and convenient online shopping experience – and provide sellers a world-class e-commerce platform. </p>
    </div>
    <div class="col-md-6">
<img src="2.png" height="220" width="220"></img>
    </div>
   </div>
  </div>
 </div>
          
        </div>
        </div>
      
    </div>
  </div>
<!-- Modal Contact Us-->
 <div class="modal fade" id="contactUs" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Contact Us</h4>
        </div>
        <div class="modal-body">
          <div class="row">
  <div class="col-md-12">
   <div class="row">
    <div class="col-md-6">
<p class="text-left">

Mail id : <br>
customer@farmtrade.in<br>
<br>
Address: <br>
Brigade Gateway,9th floor, <br>
30/3, Dr. Rajkumar Road, <br>
Malleshwaram(E), <br>
Bangalore-560055 <br>
India <br> </p>
    </div>
    <div class="col-md-6">
<img src="res/2.png" height="220" width="220"></img>
    </div>
   </div>
  </div>
 </div>
          
        </div>
      </div>
      
    </div>
  </div>

<!-- Modal Insta page Us-->
  <div class="modal fade" id="Instagram" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Instagram</h4>
        </div>
        <div class="modal-body">
          <div class="row">
  <div class="col-md-12">
   <div class="row">
    <div class="col-md-6">
<p class="text-left">
Great idea! <br>
We will soon see you on instagram.</p>
    </div>
    <div class="col-md-6">
<img src="cow.png" height="220" width="220"></img>
    </div>
   </div>
  </div>
 </div>
          
        </div>
        </div>
      
    </div>
  </div>

  <!-- Modal Facebook-->
  <div class="modal fade" id="fbpage" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Like us on Facebook</h4>
        </div>
        <div class="modal-body">
          <div class="row">
  <div class="col-md-12">
   <div class="row">
    <div class="col-md-6">
<p class="text-left">
Great idea! <br>
We will soon see you on Facebook. </p>
    </div>
    <div class="col-md-6">
<img src="cow.png" height="220" width="220"></img>
    </div>
   </div>
  </div>
 </div>
          
        </div>
        </div>
      
    </div>
  </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
   
  </body>
</html>