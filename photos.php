<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Edulogy</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <script src="https://kit.fontawesome.com/2b3a6bf91c.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
    
    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

 
   
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


        <!-- jQuery Files -->
        <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/custom.js"></script>
    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

<!-- MDBootstrap Masonry  -->
<script type="text/javascript" src="js/addons/masonry.pkgd.min.js"></script>

<script type="text/javascript" src="js/addons/imagesloaded.pkgd.min.js"></script>
    

    <style>
   	// Within style tags in your html file
* { box-sizing: border-box; }

.grid:after {
  content: '';
  display: block;
  clear: both;
}

.grid-sizer,
.grid-item {
  width: 33.333%;
}
@media (max-width: 575px) {
  .grid-sizer,
  .grid-item {
    width: 100%;
  }
}
@media (min-width: 576px) and (max-width: 767px) {
  .grid-sizer,
  .grid-item {
    width: 50%;
  }
}

/* To change the amount of columns on larger devices, uncomment the code below */

/* @media (min-width: 768px) and (max-width: 991px) {
  .grid-sizer,
  .grid-item {
    width: 33.333%;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .grid-sizer,
  .grid-item {
    width: 25%;
  }
}
@media (min-width: 1200px) {
  .grid-sizer,
  .grid-item {
    width: 20%;
  }
} */

.container-fluid{
		    width: 100%;
    padding-right: unset; 
     padding-left: unset; 
     margin-right: auto; 
     margin-left: auto; 
} 
.grid-item {
  float: left;
  
    padding-top: 8px;
    padding-right: 8px;
   
    padding-left: 8px;
}

.grid-item img {
  display: block;
  max-width: 100%;
}
  /* Light box */

  .row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that floats next to eachother */
.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 100000;
  padding-top: 10%;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
  margin:0;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: #6d4918;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

/* Hide the slides by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Caption text */
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

/* content */
.photos{
  margin-bottom:10px;
}

/* bremove mbd styling */
.navbar {
    box-shadow: none;
   
}
    </style>

</head>
<body>  

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

   


        <?php include ("./includes/header.php");?>

        <div class="spacer">
    &nbsp;
</div>

        <section class="section cb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tagline-message page-title">
                            <h3>Event Title</h3>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-6 text-right">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"> <a href="gallery.php"> Gallery</a>   </li>
                            <li class="active">Event Title - Photos</li>
                        </ul>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

       
        










        <section class="photos">



        <div class="container-fluid">
  
  

  <div class="grid">
    <div class="grid-sizer"></div>
    <div class="grid-item" data-toggle="modal" data-target="#CafeNight">
    <img onclick="openModal();currentSlide(1)" class="hover-shadow" src="https://live.staticflickr.com/65535/48251329962_c589cb460a_o.jpg" />
    </div>
    <div class="grid-item">
      <img onclick="openModal();currentSlide(2)" class="hover-shadow" src="https://live.staticflickr.com/65535/48251261506_933ed29d41_o.jpg" />
    </div>
    <div class="grid-item">
      <img onclick="openModal();currentSlide(3)" class="hover-shadow" src="https://live.staticflickr.com/65535/48251261751_8b34a355dd_o.jpg" />
    </div>
    <div class="grid-item">
    <img onclick="openModal();currentSlide(4)" class="hover-shadow" src="https://live.staticflickr.com/65535/48251330167_b6dc87960e_o.jpg" />
    </div>
   
  </div>
  
</div>










<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="https://live.staticflickr.com/65535/48251329962_c589cb460a_o.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="https://live.staticflickr.com/65535/48251261506_933ed29d41_o.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="https://live.staticflickr.com/65535/48251261751_8b34a355dd_o.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="https://live.staticflickr.com/65535/48251330167_b6dc87960e_o.jpg" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->

  </div>
</div>








</section >
   



<?php include ("./includes/footer.php");?>

  



  <script  type="text/javascript" >
// init Masonry
var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  columnWidth: '.grid-sizer'
});

// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});
  
  </script>


<script>
// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

    

</body>
</html>