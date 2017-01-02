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
  <link rel="stylesheet" href="css\font-awesome-4.7.0\css\font-awesome.min.css">
  <link rel="stylesheet" href="css\font-awesome-4.7.0\css\font-awesome.css">
  <link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
  
  
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/myheader.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
  
  
</head>
<body>
<div class="myheader" >
<div class=" nav navbar-fixed-top" style="background-color: black" >
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
                echo $_SESSION['uname']."<a href='logout.php'>logout</a>";  
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
                                        <a href="#" class="btn btn-default" style="padding: 10px 0; text-align: center;
                                                                      height: 41px;
                                                                      margin-top:18px;
                                                                      font-weight: 500;
                                                                      
                                                                      width: 80px;
                                                                      display: inline-block">
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
                  <a href="services.php" style="color:white;font-size: medium;" >             Services</a></li>
                  
                </ul>
            </div></center>
        </div>
     </div>
</div></div>
</div> <!--header over-->


 <div class="row" style="padding-top: 30px;">
 <div class="container-fluid" style="padding: 0">
   <div class="col-md-12" style="padding: 0">  
   
         <div class="col-md-3" style="height: auto">
              <div class="container">
               <center><h2> <strong>Renting Bullock Carts</strong> </h2>
              <img src="service pics\bullockcarts.jpg" style="width: 100%">
              </center></div>
         </div>
              
          
         <div class="col-md-9">
             <div id="saaridikkat" style="min-height: 500px">
                    <div class="container">
  <div class="panel-group" id="bullockcarts">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#bullockcarts" href="#bullockcarts1">K.Aggarwal</a>
        </h4>
      </div>
      <div id="bullockcarts1" class="panel-collapse collapse in">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                     <p>Cart with 2 cows available.<br>
                     Rented for 8 hours each day.<br>
                     Hours and price non-negotiable.</p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="selbullockcarts1">No. of days</label></center>
                                                        <select class="form-control" id="selbullockcarts1">
                                                          <option>1 </option>
                                                          <option>2 </option>
                                                          <option>3 </option>
                                                          <option>4 </option>
                                                          <option>5 </option>
                                                          <option>6 </option>
                                                          <option>7 </option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per day</strong><br>
                   Rs.1000</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button class="btn btn-success addtocart" type="submit">
                                                                      Add To Cart
                        </button></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#bullockcarts" href="#bullockcarts2">Sarju Topi vala</a>
        </h4>
      </div>
      <div id="bullockcarts2" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                       <p>Cart with 2 cows available.<br>
                     Rented for 5 hours each day.<br>
                     Hours and price non-negotiable.</p>
                     </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="selbullockcarts2">No. of days</label></center>
                                                        <select class="form-control" id="selbullockcarts2">
                                                          <option>1 </option>
                                                          <option>2 </option>
                                                          <option>3 </option>
                                                          <option>4 </option>
                                                          <option>5 </option>
                                                          <option>6 </option>
                                                          <option>7 </option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per day</strong><br>
                   Rs.700</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button class="btn btn-success addtocart" type="submit">
                                                                      Add To Cart
                        </button></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>

   <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#bullockcarts" href="#bullockcarts3">Rajkumar Mehta</a>
        </h4>
      </div>
      <div id="bullockcarts3" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <p>Cart available.No cows.<br>
                     Rented for 8 hours each day.<br>
                     Hours and price non-negotiable.</p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="selbullockcarts3">No. of days</label></center>
                                                        <select class="form-control" id="selbullockcarts3">
                                                          <option>1 </option>
                                                          <option>2 </option>
                                                          <option>3 </option>
                                                          <option>4 </option>
                                                          <option>5 </option>
                                                          <option>6 </option>
                                                          <option>7 </option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per day</strong><br>
                   Rs.400</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button class="btn btn-success addtocart" type="submit">
                                                                      Add To Cart
                        </button></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>
</div> <!--Panel group close-->
</div>  <!--container close-->

             </div>
        </div>
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
         <form >
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="aadhar">Aadhar card number:</label>
      <input type="aadhar" class="form-control" id="aadhar" placeholder="Enter aadhar card number">
    </div>
    <div class="form-group">
      <label for="aadhar">Password:</label>
      <input type="aadhar" class="form-control" id="aadhar" placeholder="Enter aadhar card number">
    </div>
    <div class="form-group">
      <label for="aadhar">Confirm password:</label>
      <input type="aadhar" class="form-control" id="aadhar" placeholder="Enter aadhar card number">
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
         <form >
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="aadhar">Password:</label>
      <input type="aadhar" class="form-control" id="aadhar" placeholder="Enter aadhar card number">
    </div>
        <button type="submit" class="btn btn-default">Submit</button>
  </form>
        </div>
      </div>
      
    </div>
  </div>

    </body>
</html>
   
  