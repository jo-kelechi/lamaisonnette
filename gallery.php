<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="font2/css/fontawesome.css" rel="stylesheet">
    <link href="font2/css/brands.css" rel="stylesheet">
    <link href="font2/css/solid.css" rel="stylesheet">

    <!-- font-awesome css -->
    <link rel="stylesheet" href="font/css/font-awesome.css">
    <link rel="stylesheet" href="font/css/font-awesome.min.css">

      <!-- favicon icon -->
    <link rel="shortcut icon" href="images/logo-wide.png" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Settings CSS -->
    <link rel="stylesheet" href="css/settings.css">
    <!-- Jquery Fancybox CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css" media="screen" />
    <!-- Owl Carousel CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet" id="colors">
    <link href="css/T-style.css" rel="stylesheet" id="colors">

    <!-- Open Sans Family -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Roboto Family -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>La Maisonnette - Home</title>
  </head>
  <body>
    <?php include ('include/header.php'); ?>

    <!--Inner Heading Start-->
    <div class="inner-heading">
      <div class="container">
        <h1>gallery</h1>
      </div>
    </div>

    <div class="inner-content">
      <!--Navegation Start-->
      <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container"> <a class="navbar-brand" href="#">Menu</a>
          <div class="navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
          </div>
          <div class="collapse navbar-collapse" id="myBtnContainer">
            <ul class="navbar-nav mr-auto" id="navbarhdr">
              <li class="nav-item active"> <a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"> <a class="nav-link" href="about.php">About</a> </li>
              <li class="nav-item"> <a class="nav-link" href="admission.php">Admission</a> </li>
              <li class="nav-item"> <a class="nav-link" href="curriculum.php">Curriculum</a> </li>
              <li class="nav-item"> <a class="nav-link" href="form.php"> forms</a> </li>
              <li class="nav-item"> <a class="nav-link" href="gallery.php">Gallery</a> </li>
              <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>
            </ul>
          </div>
        </div>
      </nav> -->
      
      <!--Navegation End--> 
      <div id="myBtnContainer">
        <a class="btn active" onclick="filterSelection('all')"> Show all</a>
        <a class="btn" onclick="filterSelection('class1')"> Class One</a>
        <a class="btn" onclick="filterSelection('class2')"> Class Two</a>
        <a class="btn" onclick="filterSelection('class3')"> Class Three</a>
        <a class="btn" onclick="filterSelection('class4')"> Class Four</a>
        <a class="btn" onclick="filterSelection('kinder')"> Kindergarten</a>
      </div>
      <div class="container">
        <div class="galleryWrp">
          <ul class="row">
            <li class="col-lg-4 col-md-6 column class2">
              <div class="galleryImg"><img src="images/gallery/g1.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                    <div class="jx-title jx-uppercase">Science Class</div>
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g1.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class1">
              <div class="galleryImg"><img src="images/gallery/g2.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                    <div class="jx-title jx-uppercase">Science Class</div>
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g2.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class3">
              <div class="galleryImg"><img src="images/gallery/g3.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                    <div class="jx-title jx-uppercase">Science Class</div>
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g3.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class4">
              <div class="galleryImg"><img src="images/gallery/g4.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                            
                  <div class="jx-portfolio-top-hover">
                    <div class="jx-title jx-uppercase">Science Class</div>
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g4.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class3">
              <div class="galleryImg"><img src="images/gallery/g5.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                    <div class="jx-title jx-uppercase">Science Class</div>
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g5.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class2">
              <div class="galleryImg"><img src="images/gallery/g6.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                    <div class="jx-title jx-uppercase">Science Class</div>
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g6.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class1">
              <div class="galleryImg"><img src="images/gallery/g7.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                    <div class="jx-title jx-uppercase">Science Class</div>
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g7.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class2">
              <div class="galleryImg"><img src="images/gallery/g8.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g8.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class4">
              <div class="galleryImg"><img src="images/gallery/g9.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
      
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g9.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class3">
              <div class="galleryImg"><img src="images/gallery/g10.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g10.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class1">
              <div class="galleryImg"><img src="images/gallery/g11.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
      
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g11.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class3">
              <div class="galleryImg"><img src="images/gallery/g12.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g12.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class2">
              <div class="galleryImg"><img src="images/gallery/g13.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g13.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class4">
              <div class="galleryImg"><img src="images/gallery/g14.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g14.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class3">
              <div class="galleryImg"><img src="images/gallery/g15.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g15.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class2">
              <div class="galleryImg"><img src="images/gallery/g16.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g16.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class1">
              <div class="galleryImg"><img src="images/gallery/g17.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g17.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class2">
              <div class="galleryImg"><img src="images/gallery/g18.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g18.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class3">
              <div class="galleryImg"><img src="images/gallery/g19.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g19.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class4">
              <div class="galleryImg"><img src="images/gallery/g20.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g20.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class1">
              <div class="galleryImg"><img src="images/gallery/g21.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g21.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class3">
              <div class="galleryImg"><img src="images/gallery/g22.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g22.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class2">
              <div class="galleryImg"><img src="images/gallery/g23.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g23.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-6 column class4">
              <div class="galleryImg"><img src="images/gallery/g24.png" alt="">
                <div class="jx-portfolio-hoverlayer"></div>
                <div class="jx-portfolio-hover">
                  <div class="jx-portfolio-top-hover">
                  </div>
                  <div class="jx-portfolio-plus-hover"> <a href="images/gallery/g24.png" data-fancybox="gallery">
                    <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                    </a> </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--Gallery End--> 

    <?php include ('include/footer.php'); ?>
    
    <!-- Optional JavaScript --> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    <script src="js/jquery-3.2.1.slim.min.js"></script> 
    <!-- Popper min --> 
    <script src="js/popper.min.js"></script> 
    <!-- Bootstrap min file --> 
    <script src="js/bootstrap.min.js"></script> 
    <!-- Revolution Slider file --> 
    <script src="js/jquery.themepunch.tools.min.js"></script> 
    <script src="js/jquery.themepunch.revolution.min.js"></script> 
    <!-- Isotope --> 
    <script src="js/isotope.js"></script> 
    <!-- Owl Carousel --> 
    <script src="js/owl.carousel.js"></script> 
    <!-- Jquery Fancybox --> 
    <script src="js/jquery.fancybox.min.js"></script> 
    <!-- Counter --> 
    <script src="js/counter.js"></script> 
    <!-- general script file --> 
    <script src="js/script.js"></script>
  </body>
</html>