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
   
         <div class="col-md-2" style="height: auto">
           

              
              <ul class="nav nav-pills nav-stacked menubar" >
              
              <li style="padding-left:15px;font-size: x-large; color: white">Produce</li>

              <li class="active" ><a data-toggle="pill" href="#barley"> Barley</a></li>
              <li ><a data-toggle="pill" href="#wheat"> Wheat</a></li>
              <li ><a data-toggle="pill" href="#maize"> Maize</a></li>
              <li ><a data-toggle="pill" href="#rice"> Rice</a></li>
              <li ><a data-toggle="pill" href="#sunflower"> Sunflower</a></li>
              <li ><a data-toggle="pill" href="#mustard"> Mustard</a></li>
              </ul>
           </div> 
          
          
          <div class="col-md-10">
             <div id="saaridikkat" style="min-height: 500px">
                    <div class="tab-content">
                                    <div id="barley" class="tab-pane fade in active">
                                        <div class="container" style="padding-top: 20px">
   <center> <img src="plant pics\barley.jpg" height="200" width="300"></center>
</div>


<div class="container">
  <h1>Barley </h1>
  <div class="panel-group" id="accordion1">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion1" href="#c1">Vardhan Traders</a>
        </h4>
      </div>
      <div id="c1" class="panel-collapse collapse in">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel1">Quantity</label></center>
                                                        <select class="form-control" id="sel1">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button class="btn btn-success addtocart" type="submit" >
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
          <a data-toggle="collapse" data-parent="#accordion1" href="#c2">Aggarwal Seeds</a>
        </h4>
      </div>
      <div id="c2" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel2">Quantity</label></center>
                                                        <select class="form-control" id="sel2">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button  class="btn btn-success" style="padding: 10px 0; text-align: center;
                                                                      height: 41px;
                                                                      margin-top:18px;
                                                                      font-weight: 500;
                                                                      width: 80px;
                                                                      display: inline-block">
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
          <a data-toggle="collapse" data-parent="#accordion1" href="#c3">Gupta Group</a>
        </h4>
      </div>
      <div id="c3" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel3">Quantity</label></center>
                                                        <select class="form-control" id="sel3">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button  class="btn btn-success" style="padding: 10px 0; text-align: center;
                                                                      height: 41px;
                                                                      margin-top:18px;
                                                                      font-weight: 500;
                                                                      width: 80px;
                                                                      display: inline-block">
                                                                      Add To Cart
                        </button></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>


  </div> 
</div>

                                    </div>
                                    <div id="wheat" class="tab-pane fade">
                                    <div class="container" style="padding-top: 20px">
   <center> <img src="plant pics\wheat.jpg" height="200" width="300"></center>
</div>


<div class="container">
  <h1>Wheat</h1>
  <div class="panel-group" id="accordion2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion2" href="#c4">Vardhan Traders</a>
        </h4>
      </div>
      <div id="c4" class="panel-collapse collapse in">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel4">Quantity</label></center>
                                                        <select class="form-control" id="sel4">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
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
          <a data-toggle="collapse" data-parent="#accordion2" href="#c5">Aggarwal Seeds</a>
        </h4>
      </div>
      <div id="c5" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel5">Quantity</label></center>
                                                        <select class="form-control" id="sel5">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button  class="btn btn-success" style="padding: 10px 0; text-align: center;
                                                                      height: 41px;
                                                                      margin-top:18px;
                                                                      font-weight: 500;
                                                                      width: 80px;
                                                                      display: inline-block">
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
          <a data-toggle="collapse" data-parent="#accordion2" href="#c6">Gupta Group</a>
        </h4>
      </div>
      <div id="c6" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel6">Quantity</label></center>
                                                        <select class="form-control" id="sel6">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button  class="btn btn-success" style="padding: 10px 0; text-align: center;
                                                                      height: 41px;
                                                                      margin-top:18px;
                                                                      font-weight: 500;
                                                                      width: 80px;
                                                                      display: inline-block">
                                                                      Add To Cart
                        </button></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>


  </div> 
</div>
    


                                    </div>
                                    <div id="maize" class="tab-pane fade">
                                    <div class="container" style="padding-top: 20px">
   <center> <img src="plant pics\maize.jpg" height="200" width="300"></center>
</div>


<div class="container">
  <h1>Maize </h1>
  <div class="panel-group" id="accordion3">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion3" href="#c7">Vardhan Traders</a>
        </h4>
      </div>
      <div id="c7" class="panel-collapse collapse in">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel7">Quantity</label></center>
                                                        <select class="form-control" id="sel7">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button  class="btn btn-success" style="padding: 10px 0; text-align: center;
                                                                      height: 41px;
                                                                      margin-top:18px;
                                                                      font-weight: 500;
                                                                      width: 80px;
                                                                      display: inline-block">
                                                                      Add To Cart
                        </buttona></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion3" href="#c8">Aggarwal Seeds</a>
        </h4>
      </div>
      <div id="c8" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel8">Quantity</label></center>
                                                        <select class="form-control" id="sel8">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button  class="btn btn-success" style="padding: 10px 0; text-align: center;
                                                                      height: 41px;
                                                                      margin-top:18px;
                                                                      font-weight: 500;
                                                                      width: 80px;
                                                                      display: inline-block">
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
          <a data-toggle="collapse" data-parent="#accordion3" href="#c9">Gupta Group</a>
        </h4>
      </div>
      <div id="c9" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel9">Quantity</label></center>
                                                        <select class="form-control" id="sel9">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
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


  </div> 
</div>


                                    </div>
                                    <div id="rice" class="tab-pane fade">
                                    <div class="container" style="padding-top: 20px">
   <center> <img src="plant pics\rice.jpg" height="200" width="300"></center>
</div>


<div class="container">
  <h1>Rice </h1>
  <div class="panel-group" id="accordion4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion4" href="#c10">Vardhan Traders</a>
        </h4>
      </div>
      <div id="c10" class="panel-collapse collapse in">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel10">Quantity</label></center>
                                                        <select class="form-control" id="sel10">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
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
          <a data-toggle="collapse" data-parent="#accordion4" href="#c11">Aggarwal Seeds</a>
        </h4>
      </div>
      <div id="c11" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel11">Quantity</label></center>
                                                        <select class="form-control" id="sel11">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
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
          <a data-toggle="collapse" data-parent="#accordion4" href="#c12">Gupta Group</a>
        </h4>
      </div>
      <div id="c12" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel12">Quantity</label></center>
                                                        <select class="form-control" id="sel12">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
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


  </div> 
</div>


                                    </div>
                                    <div id="sunflower" class="tab-pane fade">
                                    <div class="container" style="padding-top: 20px">
   <center> <img src="plant pics\sunflower.jpg" height="200" width="300"></center>
</div>


<div class="container">
  <h1>Sunflower </h1>
  <div class="panel-group" id="accordion5">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion5" href="#c13">Vardhan Traders</a>
        </h4>
      </div>
      <div id="c13" class="panel-collapse collapse in">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel13">Quantity</label></center>
                                                        <select class="form-control" id="sel13">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
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
          <a data-toggle="collapse" data-parent="#accordion5" href="#c14">Aggarwal Seeds</a>
        </h4>
      </div>
      <div id="c14" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel14">Quantity</label></center>
                                                        <select class="form-control" id="sel14">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
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
          <a data-toggle="collapse" data-parent="#accordion5" href="#c15">Gupta Group</a>
        </h4>
      </div>
      <div id="c15" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel15">Quantity</label></center>
                                                        <select class="form-control" id="sel15">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
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


  </div> 
</div>


                                    </div>
                                    <div id="mustard" class="tab-pane fade">
                                    <div class="container" style="padding-top: 20px">
   <center> <img src="plant pics\mustard.jpg" height="200" width="300"></center>
</div>


<div class="container">
  <h1>Mustard </h1>
  <div class="panel-group" id="accordion6">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion6" href="#c16">Vardhan Traders</a>
        </h4>
      </div>
      <div id="c16" class="panel-collapse collapse in">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel16">Quantity</label></center>
                                                        <select class="form-control" id="sel16">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
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
          <a data-toggle="collapse" data-parent="#accordion6" href="#c17">Aggarwal Seeds</a>
        </h4>
      </div>
      <div id="c17" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel17">Quantity</label></center>
                                                        <select class="form-control" id="sel17">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
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
          <a data-toggle="collapse" data-parent="#accordion6" href="#c18">Gupta Group</a>
        </h4>
      </div>
      <div id="c18" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Fine Produce </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="sel18">Quantity</label></center>
                                                        <select class="form-control" id="sel18">
                                                          <option>1 kg</option>
                                                          <option>2 kg</option>
                                                          <option>3 kg</option>
                                                          <option>4 kg</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per kg</strong><br>
                   Rs.125</center> </p>
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


  </div> 
</div>


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
   
  </body>
</html>