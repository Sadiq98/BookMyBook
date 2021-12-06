<!DOCTYPE html>
<html>

<head>
  
  <title>Wishlist</title>
  <!-- Favicon -->
  <link href="assets/img/books.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="assets/css/argon.css?v=1.0.0" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="assets/css/docs.min.css" rel="stylesheet">

  <!-- Core -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/popper/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.0.0"></script>
</head>


<body>

  <header class="header-global">

    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="home.php">
          <img src="assets/img/logo.png" style="width:150px;height:120px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="home.php">
                  <img src="assets/img/books.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text">Options</span>
              </a>
              <div class="dropdown-menu dropdown-menu-xl">
                <div class="dropdown-menu-inner">
                  <a href="buy.php" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                      <i class="ni ni-spaceship"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">Buy</h6>
                      <p class="description d-none d-md-inline-block mb-0">Search for the books or add a book to your Wishlist</p>
                    </div>
                  </a>
                  <a href="sell.php" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                      <i class="ni ni-ui-04"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h5 class="heading text-warning mb-md-1">Sell</h5>
                      <p class="description d-none d-md-inline-block mb-0">Upload an Ad for your book or view people's Wishlist</p>
                    </div>
                  </a>
                </div>
              </div>
            </li>
             <li class="nav-item">
              <a href="home.php" class="nav-link" href="home.php" role="button">
                
                <i class="ni ni-home d-lg-none"></i> 
                <span class="nav-link-inner--text">Home </a></span>
              </a>
             
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">Account</span>
              </a>
              <div class="dropdown-menu">

                
                
                <a href="index.php" class="dropdown-item">Logout</a>

              </div>
            </li>
          </ul>
          

          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://www.facebook.com/shreyas.naidu.5" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
                <i class="fa fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://twitter.com/shreyasnaidu5?s=08" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
                <i class="fa fa-twitter-square"></i>
                <span class="nav-link-inner--text d-lg-none">Twitter</span>
              </a>
            </li>
          </ul>
        </div>
      </div>


    </nav>

  </header>

  <main>
    <section class="section section-shaped section-lg my-0">
      <form action="addwish.php" method="post" role="form">
        <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small><font color="white" size="5">Add a Book to Wishlist</font></small><br><br>
                  <p align="center"><b><font size="2" color="white">YOU CAN VIEW THE WISHLISTS BELOW</font></b></p>
                </div>

                <label><font color="white"><b>Enter the book you wish:</b></font></label>
                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                      </div>
                      <input required style="color:black" class="form-control" placeholder="Book Name" type="text" name="demandbook">
                    </div>
                  </div>

                <label><font color="white"><b>Enter Your Request:</b></font></label>
                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                      </div>
                      <input style="color:black" class="form-control" placeholder="Request" type="text" name="demanddesc">
                    </div>
                  </div>  

                  <font color="white"><b>Enter Your Name:(To be displayed on the list)</b></font>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                      </div>
                      <input required style="color:black" class="form-control" placeholder="Name" type="text" name="wishername">
                    </div>
                  </div>

                  <font color="white"><b>Contact Number:(For seller to Contact)</b></font>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                      </div>
                      <input required style="color:black" class="form-control" placeholder="Phone Number" type="text" name="wishernumber">
                    </div>
                  </div> 

                  
                <font color="white"><b>Location:</b></font>
                  <div class="form-group">
                    
                  <select name="wisherlocation">
                    <option value="Mumbai">Mumbai</option>
                    <option value="Bengaluru">Bengaluru</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Gujrat">Gujrat</option>
                    <option value="Kolkata">Kolkata</option>
                  </select>
                </div>  
                
                <div class="text-center">
                  <input type="submit" class="btn btn-primary mt-4"value="Create Wishlist">
                </div><br><br>

                <p align="center"><b><font size="2" color="white">SCROLL TO VIEW THE WISHLISTS</font></b></p>

              
              </div>
            </div>
          </div>
          </div>
        </form>
        
        <div class="container shape-container d-flex align-items-center">
          <div class="col px-0">
            <div class="row justify-content-center align-items-center">
              <div class="col-lg-7 text-center pt-lg">


                
                <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="book_my_book";

$conn = new mysqli($servername, $username, $password,$dbname);
$result=mysqli_query($conn,"select * from bookdemand");
while($data = $result->fetch_assoc()){
  echo"
               <div class='card' style='border-radius: 25px'>
                 <img src='assets/img/sellimage.png' alt='Book' style='width:25%;height:100px;padding-left:50px;padding-top: 10px'>
                   <h2>".$data['demand_name']."</h2>
                   <p class='title'>Request:-<font color='black'><b>".$data['demand_desc']."</b></font></p>
                   

                   <p>Asked by:-<font color='black'><b>".$data['wisher_name']."</b></font></p>
                   <p>Contact No:-<font color='black'><b>".$data['wisher_no']."</b></font></p>
                   <p>From:-<font color='black'><b>".$data['wisher_location']."</b></font></p>
                   
                   
                   
                    
                   
              </div><br><br>";
            }
          ?>


              </div>
            </div>
      </div>
    </div>
      <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      
    </section>
</main>

<footer class="footer">
    <div class="container">
      <div class="row row-grid align-items-center mb-5">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
          <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <a target="_blank" href="https://twitter.com/shreyasnaidu5?s=08" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-twitter"></i>
          </a>
          <a target="_blank" href="https://www.facebook.com/shreyas.naidu.5" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
            <i class="fa fa-facebook-square"></i>
          </a>
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="help.php" class="nav-link" target="_blank">Help</a>
            </li>
            <li class="nav-item">
              <a href="aboutus.php" class="nav-link" target="_blank">About Us</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

</body>


</html>