<?php
include ('dbconnect.php');
$id = $_GET['id'];
$query = "select * from pagecontent where id='".$id."'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
$pageContent = "<h3 style='font-family:Trebuchet MS; font:Trebuchet MS; font-size:15px; font-weight:bold; color:#000;' ></h3>";
$pageContent .= html_entity_decode($row['content']);
$PageName= $row['title'];
$description= $row['description'];
$keywords= $row['keywords'];

?>
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

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="favicon.ico">
    
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
    <h1>About Us</h1>
  </div>
</div>
<!--Inner Heading End--> 
<!--Classes Start--> 
  <div class="inner-content">
    <div class="container"> 
      <div class="blog-wrapr">
        <div class="row">
          <div class="col-lg-8">
            

            <div class="single-post">
         
              <div class="post-content">
                




              </div>
              <div class="content-bottom">
            
                <ul class="post-share">
                  <li><span class="flaticon-share"></span> Share :</li>
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                </ul>
              </div><!-- content-bottom -->
            </div>


          </div>

          <div class="col-lg-4">
            <div class="sidebar">
              <div class="sidebar-item">
                <form>
                  <input type="text" name="text" placeholder="Search Your Catagorie...">
                  <button><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
              </div><!-- sidebar item -->

              <div class="sidebar-item">
                <h3 class="sidebar-title">Navigation Links</h3>
                <ul class="categories">
          <li > <a href="about.html">About</a> </li>
   <li > <a  href="about.html">Admission</a> </li>
    <li > <a  href="about.html">Curriculum</a> </li>
  <li > <a  href="about.html">Forms</a> </li>
    <li > <a href="about.html">Gallery</a> </li>
                </ul>
              </div>
              <!-- sidebar item -->
            


        
            </div>
          </div>


        </div>
      </div>



    </div>
  </div>
  <!--Classes End--> 

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