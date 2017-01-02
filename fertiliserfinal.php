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
  <link href="css/navstyle.css" rel="stylesheet">
  
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/myheader.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
  
  
  <style>

 a{color: white;}
.logo{
  float:left; width: 100%;
}
.container {width: 100%}
#show{height: 500px;}
</style>
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
                  <a href="services.php" style="color:white;font-size: medium;" >  Services</a></li>
                  
                </ul>
            </div></center>
        </div>
     </div>
</div></div>
</div> <!--header over-->


 <div class="row" style="padding-top: 30px;">
 <div class="container-fluid" style="padding: 0">
   <div class="col-md-12" style="padding: 0">  
   
         <div class="col-md-2" style="height: auto">
           

              
              <ul class="nav nav-pills nav-stacked menubar" >
              
              <li style="padding-left:15px;font-size: x-large; color: white">Fertilisers</li>

              <li class="active" ><a data-toggle="pill" href="#ferammonia"> Ammonia</a></li>
              <li ><a data-toggle="pill" href="#fermanure"> Manure</a></li>
              <li ><a data-toggle="pill" href="#ferurea"> Urea</a></li>
              </ul>
           </div> 
          
          
          <div class="col-md-10">
             <div id="saaridikkat" style="min-height: 500px">
                    <div class="tab-content">
                                    <div id="ferammonia" class="tab-pane fade in active">
                                      <div class="container" style="padding-top: 20px">
   <center> <img src="fertiliser pics\ammonia.jpg" height="200" width="300"></center>
</div>


<div class="container">
  <h1>Ammonia</h1>
  <div class="panel-group" id="ammonia">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#ammonia" href="#ammonia1">TP Industries</a>
        </h4>
      </div>
      <div id="ammonia1" class="panel-collapse collapse in">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Industrial strength ammonia </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="selammonia1">Quantity</label></center>
                                                        <select class="form-control" id="selammonia1">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.2000</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button class="btn btn-success addtocart" type="submit">Add To Cart
                        </button></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#ammonia" href="#ammonia2">SS Agro Traders</a>
        </h4>
      </div>
      <div id="ammonia2" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Industrial strength ammonia  </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="selammonia2">Quantity</label></center>
                                                        <select class="form-control" id="selammonia2">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.1250</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button class="btn btn-success addtocart" type="submit">Add To Cart
                        </button></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#ammonia" href="#ammonia3">Thakur Group</a>
        </h4>
      </div>
      <div id="ammonia3" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Industrial strength ammonia  </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="selammonia3">Quantity</label></center>
                                                        <select class="form-control" id="selammonia3">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.1000</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button class="btn btn-success addtocart" type="submit">Add To Cart
                        </button></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>


  </div><!--ammonia panel grp close--> 
</div> <!--container close-->
    
                                    </div>
                                    <div id="fermanure" class="tab-pane fade">
                                      <div class="container" style="padding-top: 20px">
   <center> <img src="fertiliser pics\manure.jpg" height="200" width="300"></center>
</div>


<div class="container">
  <h1>Manure</h1>
  <div class="panel-group" id="manure">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#manure" href="#manure1">TP Industries</a>
        </h4>
      </div>
      <div id="manure1" class="panel-collapse collapse in">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Industrial strength manure </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="selmanure1">Quantity</label></center>
                                                        <select class="form-control" id="selmanure1">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.2000</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button class="btn btn-success addtocart" type="submit">Add To Cart
                        </button></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#manure" href="#manure2">SS Agro Traders</a>
        </h4>
      </div>
      <div id="manure2" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Industrial strength manure  </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="selmanure2">Quantity</label></center>
                                                        <select class="form-control" id="selmanure2">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.1250</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button class="btn btn-success addtocart" type="submit">Add To Cart
                        </button></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#manure" href="#manure3">Thakur Group</a>
        </h4>
      </div>
      <div id="manure3" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Industrial strength manure  </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="selmanure3">Quantity</label></center>
                                                        <select class="form-control" id="selmanure3">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.1000</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button class="btn btn-success addtocart" type="submit">Add To Cart
                        </button></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>


  </div> <!--manure panel grp close-->
</div>  <!--container close-->
                                    </div>
                                    <div id="ferurea" class="tab-pane fade">
                                      <div class="container" style="padding-top: 20px">
   <center> <img src="fertiliser pics\urea.jpg" height="200" width="300"></center>
</div>


<div class="container">
  <h1>Urea</h1>
  <div class="panel-group" id="urea">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#urea" href="#urea1">TP Industries</a>
        </h4>
      </div>
      <div id="urea1" class="panel-collapse collapse in">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Industrial strength urea </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="selurea1">Quantity</label></center>
                                                        <select class="form-control" id="selurea1">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.2000</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button class="btn btn-success addtocart" type="submit">Add To Cart
                        </button></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#urea" href="#urea2">SS Agro Traders</a>
        </h4>
      </div>
      <div id="urea2" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Industrial strength urea  </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="selurea2">Quantity</label></center>
                                                        <select class="form-control" id="selurea2">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.1250</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button class="btn btn-success addtocart" type="submit">Add To Cart
                        </button></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#urea" href="#urea3">Thakur Group</a>
        </h4>
      </div>
      <div id="urea3" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Industrial strength urea  </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="selurea3">Quantity</label></center>
                                                        <select class="form-control" id="selurea3">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.1000</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button class="btn btn-success addtocart" type="submit">Add To Cart
                        </button></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>


  </div> <!--urea panel group close-->
</div>  <!--container close-->
    
                                    </div>
                                    
                    </div>
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
    </body>
</html>
   
