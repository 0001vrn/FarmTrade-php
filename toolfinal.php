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
              
              <li style="padding-left:15px;font-size: x-large; color: white">Tools</li>

              <li class="active" ><a data-toggle="pill" href="#toolharrow"> Harrow</a></li>
              <li ><a data-toggle="pill" href="#toolharvester"> Harvester</a></li>
              <li ><a data-toggle="pill" href="#toolleveller"> Leveller</a></li>
              <li ><a data-toggle="pill" href="#toolplough"> Plough</a></li>
              <li ><a data-toggle="pill" href="#toolseeder"> Seeder</a></li>
              <li ><a data-toggle="pill" href="#toolshovel"> Shovel</a></li>
              <li ><a data-toggle="pill" href="#toolsprinkler"> Sprinklers</a></li>
              </ul>
           </div> 
          
          
          <div class="col-md-10">
             <div id="saaridikkat" style="min-height: 500px">
                    <div class="tab-content">
                                    <div id="toolharrow" class="tab-pane fade in active">
                                      <div class="container" style="padding-top: 20px">
   <center> <img src="tool pics\harrow.jpg" height="200" width="300"></center>
</div>


<div class="container">
  <h1>Harrow</h1>
  <div class="panel-group" id="harrow">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#harrow" href="#h1">TP Industries</a>
        </h4>
      </div>
      <div id="h1" class="panel-collapse collapse in">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Strong-built farming harrow </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="selh1">Quantity</label></center>
                                                        <select class="form-control" id="selh1">
                                                          <option>1</option>
                                                          <option>2</option>
                                                          <option>3</option>
                                                          <option>4</option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per unit</strong><br>
                   Rs.25000</center> </p>
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
          <a data-toggle="collapse" data-parent="#harrow" href="#h2">SS Agro Traders</a>
        </h4>
      </div>
      <div id="h2" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Strong-built farming harrow  </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="selh2">Quantity</label></center>
                                                        <select class="form-control" id="selh2">
                                                          <option>1 </option>
                                                          <option>2 </option>
                                                          <option>3 </option>
                                                          <option>4 </option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per unit</strong><br>
                   Rs.12500</center> </p>
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
          <a data-toggle="collapse" data-parent="#harrow" href="#h3">Thakur Group</a>
        </h4>
      </div>
      <div id="h3" class="panel-collapse collapse ">
        <div class="panel-body">
          <div class="col-md-12">
                  <div class="col-md-4">
                    <br><p> Strong-built farming harrow  </p>
                  </div>
                  <div class="col-md-2">
                                                  <div class="form-group" style="margin: 0">
                                                        <center><label for="selh3">Quantity</label></center>
                                                        <select class="form-control" id="selh3">
                                                          <option>1 </option>
                                                          <option>2 </option>
                                                          <option>3 </option>
                                                          <option>4 </option>
                                                        </select>
                                                   </div>
          
                  </div>
                  <div class="col-md-3" >
                   <p><center><strong> Price per unit</strong><br>
                   Rs.30000</center> </p>
                  </div>
                  <div class="col-md-3"><center>
                        <button class="btn btn-success addtocart" type="submit">Add To Cart
                        </button></center>
                  </div>        
          </div>
        </div>
    </div>
    </div>


  </div> 
</div>
      
                                    </div>
                                    <div id="toolharvester" class="tab-pane fade">
                                      <div class="container" style="padding-top: 20px">
   <center> <img src="tool pics\harvester.jpg" height="200" width="300"></center>
</div>


<div class="container">
  <h1>Harvester</h1>
      <div class="panel-group" id="harvester">
          <div class="panel panel-default">
                <div class="panel-heading">
                        <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#harvester" href="#har1">TP Industries</a>
                        </h4>
                </div>
                <div id="har1" class="panel-collapse collapse in">
                      <div class="panel-body">
                                  <div class="col-md-12">
                                          <div class="col-md-4">
                                                  <br><p> Strong-built farming harvester </p>
                                          </div>
                                          <div class="col-md-2">
                                                                          <div class="form-group" style="margin: 0">
                                                                                <center><label for="selhar1">Quantity</label></center>
                                                                                <select class="form-control" id="selhar1">
                                                                                  <option>1</option>
                                                                                  <option>2</option>
                                                                                  <option>3</option>
                                                                                  <option>4</option>
                                                                                </select>
                                                                           </div>
                                  
                                          </div>
                                          <div class="col-md-3" >
                                           <p><center><strong> Price per unit</strong><br>
                                           Rs.25000</center> </p>
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
                                        <a data-toggle="collapse" data-parent="#harvester" href="#har2">SS Agro Traders</a>
                                      </h4>
                                    </div>
                                    <div id="har2" class="panel-collapse collapse ">
                                      <div class="panel-body">
                                        <div class="col-md-12">
                                                <div class="col-md-4">
                                                  <br><p> Strong-built farming harvester  </p>
                                                </div>
                                                <div class="col-md-2">
                                                                                <div class="form-group" style="margin: 0">
                                                                                      <center><label for="selhar2">Quantity</label></center>
                                                                                      <select class="form-control" id="selhar2">
                                                                                        <option>1 </option>
                                                                                        <option>2 </option>
                                                                                        <option>3 </option>
                                                                                        <option>4 </option>
                                                                                      </select>
                                                                                 </div>
                                        
                                                </div>
                                                <div class="col-md-3" >
                                                 <p><center><strong> Price per unit</strong><br>
                                                 Rs.12500</center> </p>
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
                                      <a data-toggle="collapse" data-parent="#harvester" href="#har3">Thakur Group</a>
                                    </h4>
                                  </div>
                                  <div id="har3" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                      <div class="col-md-12">
                                              <div class="col-md-4">
                                                <br><p> Strong-built farming harvester  </p>
                                              </div>
                                              <div class="col-md-2">
                                                                              <div class="form-group" style="margin: 0">
                                                                                    <center><label for="selhar3">Quantity</label></center>
                                                                                    <select class="form-control" id="selhar3">
                                                                                      <option>1 </option>
                                                                                      <option>2 </option>
                                                                                      <option>3 </option>
                                                                                      <option>4 </option>
                                                                                    </select>
                                                                               </div>
                                      
                                              </div>
                                              <div class="col-md-3" >
                                               <p><center><strong> Price per unit</strong><br>
                                               Rs.30000</center> </p>
                                              </div>
                                              <div class="col-md-3"><center>
                                                    <button class="btn btn-success addtocart" type="submit">Add To Cart
                                                    </button></center>
                                              </div>        
                                      </div>
                                    </div>
                                  </div>
                                  </div>
   </div> <!--Harvester panel group closed--> 
</div>    <!--Container Closed-->

                                    </div>
                                    <div id="toolleveller" class="tab-pane fade">
                                      <div class="container" style="padding-top: 20px">
   <center> <img src="tool pics\leveller.jpg" height="200" width="300"></center>
</div>


<div class="container">
  <h1>Leveller</h1>
      <div class="panel-group" id="leveller">
          <div class="panel panel-default">
                <div class="panel-heading">
                        <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#leveller" href="#lev1">TP Industries</a>
                        </h4>
                </div>
                <div id="lev1" class="panel-collapse collapse in">
                      <div class="panel-body">
                                  <div class="col-md-12">
                                          <div class="col-md-4">
                                                  <br><p> Strong-built farming leveller </p>
                                          </div>
                                          <div class="col-md-2">
                                                                          <div class="form-group" style="margin: 0">
                                                                                <center><label for="sellev1">Quantity</label></center>
                                                                                <select class="form-control" id="sellev1">
                                                                                  <option>1</option>
                                                                                  <option>2</option>
                                                                                  <option>3</option>
                                                                                  <option>4</option>
                                                                                </select>
                                                                           </div>
                                  
                                          </div>
                                          <div class="col-md-3" >
                                           <p><center><strong> Price per unit</strong><br>
                                           Rs.25000</center> </p>
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
                                        <a data-toggle="collapse" data-parent="#leveller" href="#lev2">SS Agro Traders</a>
                                      </h4>
                                    </div>
                                    <div id="lev2" class="panel-collapse collapse ">
                                      <div class="panel-body">
                                        <div class="col-md-12">
                                                <div class="col-md-4">
                                                  <br><p> Strong-built farming leveller  </p>
                                                </div>
                                                <div class="col-md-2">
                                                                                <div class="form-group" style="margin: 0">
                                                                                      <center><label for="sellev2">Quantity</label></center>
                                                                                      <select class="form-control" id="sellev2">
                                                                                        <option>1 </option>
                                                                                        <option>2 </option>
                                                                                        <option>3 </option>
                                                                                        <option>4 </option>
                                                                                      </select>
                                                                                 </div>
                                        
                                                </div>
                                                <div class="col-md-3" >
                                                 <p><center><strong> Price per unit</strong><br>
                                                 Rs.12500</center> </p>
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
                                      <a data-toggle="collapse" data-parent="#leveller" href="#lev3">Thakur Group</a>
                                    </h4>
                                  </div>
                                  <div id="lev3" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                      <div class="col-md-12">
                                              <div class="col-md-4">
                                                <br><p> Strong-built farming leveller  </p>
                                              </div>
                                              <div class="col-md-2">
                                                                              <div class="form-group" style="margin: 0">
                                                                                    <center><label for="sellev3">Quantity</label></center>
                                                                                    <select class="form-control" id="sellev3">
                                                                                      <option>1 </option>
                                                                                      <option>2 </option>
                                                                                      <option>3 </option>
                                                                                      <option>4 </option>
                                                                                    </select>
                                                                               </div>
                                      
                                              </div>
                                              <div class="col-md-3" >
                                               <p><center><strong> Price per unit</strong><br>
                                               Rs.30000</center> </p>
                                              </div>
                                              <div class="col-md-3"><center>
                                                    <button class="btn btn-success addtocart" type="submit">Add To Cart
                                                    </button></center>
                                              </div>        
                                      </div>
                                    </div>
                                  </div>
                                  </div>
   </div> <!--leveller panel group closed--> 
</div>    <!--Container Closed-->

                                    </div>
                                    <div id="toolplough" class="tab-pane fade">
                                        <div class="container" style="padding-top: 20px">
   <center> <img src="tool pics\plough.png" height="200" width="300"></center>
</div>


<div class="container">
  <h1>Plough</h1>
      <div class="panel-group" id="plough">
          <div class="panel panel-default">
                <div class="panel-heading">
                        <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#plough" href="#plough1">TP Industries</a>
                        </h4>
                </div>
                <div id="plough1" class="panel-collapse collapse in">
                      <div class="panel-body">
                                  <div class="col-md-12">
                                          <div class="col-md-4">
                                                  <br><p> Strong-built farming plough </p>
                                          </div>
                                          <div class="col-md-2">
                                                                          <div class="form-group" style="margin: 0">
                                                                                <center><label for="selplough1">Quantity</label></center>
                                                                                <select class="form-control" id="selplough1">
                                                                                  <option>1</option>
                                                                                  <option>2</option>
                                                                                  <option>3</option>
                                                                                  <option>4</option>
                                                                                </select>
                                                                           </div>
                                  
                                          </div>
                                          <div class="col-md-3" >
                                           <p><center><strong> Price per unit</strong><br>
                                           Rs.15500</center> </p>
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
                                        <a data-toggle="collapse" data-parent="#plough" href="#plough2">SS Agro Traders</a>
                                      </h4>
                                    </div>
                                    <div id="plough2" class="panel-collapse collapse ">
                                      <div class="panel-body">
                                        <div class="col-md-12">
                                                <div class="col-md-4">
                                                  <br><p> Strong-built farming plough  </p>
                                                </div>
                                                <div class="col-md-2">
                                                                                <div class="form-group" style="margin: 0">
                                                                                      <center><label for="selplough2">Quantity</label></center>
                                                                                      <select class="form-control" id="selplough2">
                                                                                        <option>1 </option>
                                                                                        <option>2 </option>
                                                                                        <option>3 </option>
                                                                                        <option>4 </option>
                                                                                      </select>
                                                                                 </div>
                                        
                                                </div>
                                                <div class="col-md-3" >
                                                 <p><center><strong> Price per unit</strong><br>
                                                 Rs.12500</center> </p>
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
                                      <a data-toggle="collapse" data-parent="#plough" href="#plough3">Thakur Group</a>
                                    </h4>
                                  </div>
                                  <div id="plough3" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                      <div class="col-md-12">
                                              <div class="col-md-4">
                                                <br><p> Strong-built farming plough  </p>
                                              </div>
                                              <div class="col-md-2">
                                                                              <div class="form-group" style="margin: 0">
                                                                                    <center><label for="selplough3">Quantity</label></center>
                                                                                    <select class="form-control" id="selplough3">
                                                                                      <option>1 </option>
                                                                                      <option>2 </option>
                                                                                      <option>3 </option>
                                                                                      <option>4 </option>
                                                                                    </select>
                                                                               </div>
                                      
                                              </div>
                                              <div class="col-md-3" >
                                               <p><center><strong> Price per unit</strong><br>
                                               Rs.10000</center> </p>
                                              </div>
                                              <div class="col-md-3"><center>
                                                    <button class="btn btn-success addtocart" type="submit">Add To Cart
                                                    </button></center>
                                              </div>        
                                      </div>
                                    </div>
                                  </div>
                                  </div>
   </div> <!--plough panel group closed--> 
</div>    <!--Container Closed-->

                                    </div>
                                    <div id="toolseeder" class="tab-pane fade">
                                          <div class="container" style="padding-top: 20px">
   <center> <img src="tool pics\seeder.jpg" height="200" width="300"></center>
</div>


<div class="container">
  <h1>Seeder</h1>
      <div class="panel-group" id="seeder">
          <div class="panel panel-default">
                <div class="panel-heading">
                        <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#seeder" href="#seeder1">TP Industries</a>
                        </h4>
                </div>
                <div id="seeder1" class="panel-collapse collapse in">
                      <div class="panel-body">
                                  <div class="col-md-12">
                                          <div class="col-md-4">
                                                  <br><p> Strong-built farming seeder </p>
                                          </div>
                                          <div class="col-md-2">
                                                                          <div class="form-group" style="margin: 0">
                                                                                <center><label for="selseeder1">Quantity</label></center>
                                                                                <select class="form-control" id="selseeder1">
                                                                                  <option>1</option>
                                                                                  <option>2</option>
                                                                                  <option>3</option>
                                                                                  <option>4</option>
                                                                                </select>
                                                                           </div>
                                  
                                          </div>
                                          <div class="col-md-3" >
                                           <p><center><strong> Price per unit</strong><br>
                                           Rs.25000</center> </p>
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
                                        <a data-toggle="collapse" data-parent="#seeder" href="#seeder2">SS Agro Traders</a>
                                      </h4>
                                    </div>
                                    <div id="seeder2" class="panel-collapse collapse ">
                                      <div class="panel-body">
                                        <div class="col-md-12">
                                                <div class="col-md-4">
                                                  <br><p> Strong-built farming seeder  </p>
                                                </div>
                                                <div class="col-md-2">
                                                                                <div class="form-group" style="margin: 0">
                                                                                      <center><label for="selseeder2">Quantity</label></center>
                                                                                      <select class="form-control" id="selseeder2">
                                                                                        <option>1 </option>
                                                                                        <option>2 </option>
                                                                                        <option>3 </option>
                                                                                        <option>4 </option>
                                                                                      </select>
                                                                                 </div>
                                        
                                                </div>
                                                <div class="col-md-3" >
                                                 <p><center><strong> Price per unit</strong><br>
                                                 Rs.12500</center> </p>
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
                                      <a data-toggle="collapse" data-parent="#seeder" href="#seeder3">Thakur Group</a>
                                    </h4>
                                  </div>
                                  <div id="seeder3" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                      <div class="col-md-12">
                                              <div class="col-md-4">
                                                <br><p> Strong-built farming seeder  </p>
                                              </div>
                                              <div class="col-md-2">
                                                                              <div class="form-group" style="margin: 0">
                                                                                    <center><label for="selseeder3">Quantity</label></center>
                                                                                    <select class="form-control" id="selseeder3">
                                                                                      <option>1 </option>
                                                                                      <option>2 </option>
                                                                                      <option>3 </option>
                                                                                      <option>4 </option>
                                                                                    </select>
                                                                               </div>
                                      
                                              </div>
                                              <div class="col-md-3" >
                                               <p><center><strong> Price per unit</strong><br>
                                               Rs.30000</center> </p>
                                              </div>
                                              <div class="col-md-3"><center>
                                                    <button class="btn btn-success addtocart" type="submit">Add To Cart
                                                    </button></center>
                                              </div>        
                                      </div>
                                    </div>
                                  </div>
                                  </div>
   </div> <!--seeder panel group closed--> 
</div>    <!--Container Closed-->

                                    </div>
                                    <div id="toolshovel" class="tab-pane fade">
                                          <div class="container" style="padding-top: 20px">
   <center> <img src="tool pics\shovel.jpg" height="200" width="300"></center>
</div>

<div class="container">
  <h1>Shovel</h1>
      <div class="panel-group" id="shovel">
          <div class="panel panel-default">
                <div class="panel-heading">
                        <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#shovel" href="#shovel1">TP Industries</a>
                        </h4>
                </div>
                <div id="shovel1" class="panel-collapse collapse in">
                      <div class="panel-body">
                                  <div class="col-md-12">
                                          <div class="col-md-4">
                                                  <br><p> Strong-built farming shovel </p>
                                          </div>
                                          <div class="col-md-2">
                                                                          <div class="form-group" style="margin: 0">
                                                                                <center><label for="selshovel1">Quantity</label></center>
                                                                                <select class="form-control" id="selshovel1">
                                                                                  <option>1</option>
                                                                                  <option>2</option>
                                                                                  <option>3</option>
                                                                                  <option>4</option>
                                                                                </select>
                                                                           </div>
                                  
                                          </div>
                                          <div class="col-md-3" >
                                           <p><center><strong> Price per unit</strong><br>
                                           Rs.2500</center> </p>
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
                                        <a data-toggle="collapse" data-parent="#shovel" href="#shovel2">SS Agro Traders</a>
                                      </h4>
                                    </div>
                                    <div id="shovel2" class="panel-collapse collapse ">
                                      <div class="panel-body">
                                        <div class="col-md-12">
                                                <div class="col-md-4">
                                                  <br><p> Strong-built farming shovel  </p>
                                                </div>
                                                <div class="col-md-2">
                                                                                <div class="form-group" style="margin: 0">
                                                                                      <center><label for="selshovel2">Quantity</label></center>
                                                                                      <select class="form-control" id="selshovel2">
                                                                                        <option>1 </option>
                                                                                        <option>2 </option>
                                                                                        <option>3 </option>
                                                                                        <option>4 </option>
                                                                                      </select>
                                                                                 </div>
                                        
                                                </div>
                                                <div class="col-md-3" >
                                                 <p><center><strong> Price per unit</strong><br>
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
                                      <a data-toggle="collapse" data-parent="#shovel" href="#shovel3">Thakur Group</a>
                                    </h4>
                                  </div>
                                  <div id="shovel3" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                      <div class="col-md-12">
                                              <div class="col-md-4">
                                                <br><p> Strong-built farming shovel  </p>
                                              </div>
                                              <div class="col-md-2">
                                                                              <div class="form-group" style="margin: 0">
                                                                                    <center><label for="selshovel3">Quantity</label></center>
                                                                                    <select class="form-control" id="selshovel3">
                                                                                      <option>1 </option>
                                                                                      <option>2 </option>
                                                                                      <option>3 </option>
                                                                                      <option>4 </option>
                                                                                    </select>
                                                                               </div>
                                      
                                              </div>
                                              <div class="col-md-3" >
                                               <p><center><strong> Price per unit</strong><br>
                                               Rs.3000</center> </p>
                                              </div>
                                              <div class="col-md-3"><center>
                                                    <button class="btn btn-success addtocart" type="submit">Add To Cart
                                                    </button></center>
                                              </div>        
                                      </div>
                                    </div>
                                  </div>
                                  </div>
   </div> <!--shovel panel group closed--> 
</div>    <!--Container Closed-->

                                    </div>
                                    <div id="toolsprinkler" class="tab-pane fade">
                                          <div class="container" style="padding-top: 20px">
   <center> <img src="tool pics\sprinkler.jpg" height="200" width="300"></center>
</div>


<div class="container">
  <h1>Sprinklers</h1>
      <div class="panel-group" id="sprinkler">
          <div class="panel panel-default">
                <div class="panel-heading">
                        <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#sprinkler" href="#sprinkler1">TP Industries</a>
                        </h4>
                </div>
                <div id="sprinkler1" class="panel-collapse collapse in">
                      <div class="panel-body">
                                  <div class="col-md-12">
                                          <div class="col-md-4">
                                                  <br><p> Set of 5 sprinklers  </p>
                                          </div>
                                          <div class="col-md-2">
                                                                          <div class="form-group" style="margin: 0">
                                                                                <center><label for="selsprinkler1">Quantity</label></center>
                                                                                <select class="form-control" id="selsprinkler1">
                                                                                  <option>1</option>
                                                                                  <option>2</option>
                                                                                  <option>3</option>
                                                                                  <option>4</option>
                                                                                </select>
                                                                           </div>
                                  
                                          </div>
                                          <div class="col-md-3" >
                                           <p><center><strong> Price per set</strong><br>
                                           Rs.10000</center> </p>
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
                                        <a data-toggle="collapse" data-parent="#sprinkler" href="#sprinkler2">SS Agro Traders</a>
                                      </h4>
                                    </div>
                                    <div id="sprinkler2" class="panel-collapse collapse ">
                                      <div class="panel-body">
                                        <div class="col-md-12">
                                                <div class="col-md-4">
                                                  <br><p> Set of 5 sprinklers</p>
                                                </div>
                                                <div class="col-md-2">
                                                                                <div class="form-group" style="margin: 0">
                                                                                      <center><label for="selsprinkler2">Quantity</label></center>
                                                                                      <select class="form-control" id="selsprinkler2">
                                                                                        <option>1 </option>
                                                                                        <option>2 </option>
                                                                                        <option>3 </option>
                                                                                        <option>4 </option>
                                                                                      </select>
                                                                                 </div>
                                        
                                                </div>
                                                <div class="col-md-3" >
                                                 <p><center><strong> Price per set</strong><br>
                                                 Rs.12500</center> </p>
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
                                      <a data-toggle="collapse" data-parent="#sprinkler" href="#sprinkler3">Thakur Group</a>
                                    </h4>
                                  </div>
                                  <div id="sprinkler3" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                      <div class="col-md-12">
                                              <div class="col-md-4">
                                                <br><p> Set of 5 sprinklers</p>
                                              </div>
                                              <div class="col-md-2">
                                                                              <div class="form-group" style="margin: 0">
                                                                                    <center><label for="selsprinkler3">Quantity</label></center>
                                                                                    <select class="form-control" id="selsprinkler3">
                                                                                      <option>1 </option>
                                                                                      <option>2 </option>
                                                                                      <option>3 </option>
                                                                                      <option>4 </option>
                                                                                    </select>
                                                                               </div>
                                      
                                              </div>
                                              <div class="col-md-3" >
                                               <p><center><strong> Price per set</strong><br>
                                               Rs.7500</center> </p>
                                              </div>
                                              <div class="col-md-3"><center>
                                                    <button class="btn btn-success addtocart" type="submit">Add To Cart
                                                    </button></center>
                                              </div>        
                                      </div>
                                    </div>
                                  </div>
                                  </div>
   </div> <!--sprinkler panel group closed--> 
</div>    <!--Container Closed-->

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

    </footer>
    <!-- Modal SIGN UP-->
  <div class="modal fade" id="signUpModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign Up form</h4>
        </div>
        <div class="modal-body">
         <form action="signup.php" method="post" onsubmit="return signupformValidate()">
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
      <input name="pass" class="form-control" id="pwd" placeholder="Enter aadhar card number">
    </div>
    <div class="form-group">
      <label for="aadhar">Confirm password:</label>
      <input name="cpass" class="form-control" id="pwd2" placeholder="Enter aadhar card number">
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
   
