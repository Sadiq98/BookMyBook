<!DOCTYPE html>
<html>

<head>
  
  <title>SELL - Book My Book</title>
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

      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small><font color="white" size="5">Enter Book details</font></small>
                </div>

                <form action="sellcode.php" method="post" role="form">
                  <font color="white"><b>Enter Book Name:</b></font>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                      </div>
                      <input required style="color: black" class="form-control" placeholder="Book Name" type="text" name="bookname">


                    </div>
                    <font color="white"><b>Enter Your Name to be displayed to Buyer:</b></font>
                      <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                      </div>
                      <input required name="sellername" style="color: black;" class="form-control" placeholder="Name "> 
                    </div>
                  </div>

                  </div>

                  <font color="white"><b>Enter MRP of the book:</b></font>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                      </div>
                      <input required style= "color: black" class="form-control" placeholder="MRP" type="number" name="mrp">
                    </div>
                  </div>

                <div class="form-group">
                    <label style="padding-right:10px"><font color="white" size="4">Condition:</font></label>
                  <select required name="condition">
                    <option value="Average">Average</option>
                    <option value="Good">Good</option>
                    <option value="Execellent">Excellent</option>
                    
                    
                  </select>
                </div>
                <p><font color="white" size="2">The resale price will be 30% of MRP if condition is average<br>
                  The resale price will be 40% of MRP if condition is good<br>
                The resale price will be 50% of MRP if condition is excellent</font></p>

                 

                  <div class="form-group">
                    <label style="padding-right: 20px"><font color="white" size="4">Location:</font></label>
                  <select required="" name="location">
                    <option value="Mumbai">Mumbai</option>
                    <option value="Bengaluru">Bengaluru</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Gujrat">Gujrat</option>
                    <option value="Kolkata">Kolkata</option>
                  </select>
                </div>

                <div class="form-group">
                    <label style="padding-right: 20px"><font color="white" size="4">Category:</font></label>
                  <select required name="category">
                    <option value="Novels">Novels</option>
                    <option value="Science">Science</option>
                    <option value="Commerce">Commerce</option>
                    <option value="Kids">Kids</option>
                    <option value="Maths">Maths</option>
                    <option value="Computers & Programming">Computers & Programming</option>
                    <option value="Biography">Biography</option>
                    <option value="Technology">Tech </option>
                    <option value="Others">Others</option>
                  </select>
                </div>

                  
                  <font color="white"><b>Describe the Book:</b></font>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                      </div>
                      <textarea name="description" style="color: black;" class="form-control" placeholder="Description"></textarea> 
                    </div>
                  </div>

                  <font color="white"><b>Enter Your Phone Number for Buyer to Contact:</b></font>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                      </div>
                      <input required name="userphone" style="color: black;" class="form-control" placeholder="Phone Number "> 
                    </div>
                  </div>

                  


                  
                  <div class="text-center">
                    <input type="submit" class="btn btn-primary mt-4" value="Post AD">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>


        <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small><font color="white" size="5">View Other People's Wishlist</font></small>
                </div>

                
                
                <div class="text-center">
                  <a href="wishlist.php">
                  <button type="button" class="btn btn-primary mt-4">View</button>
                </a>
                </div>
              </div>
            </div>
          </div>
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