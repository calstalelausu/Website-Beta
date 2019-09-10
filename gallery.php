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
    <!--	jquery-->
		<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>



    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <script src="https://kit.fontawesome.com/2b3a6bf91c.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
    
    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    <style>
        html{
          scroll-behavior: smooth;
        }
        </style>
        <script type="text/javascript">
            
                    $(document).ready(function(){
        //             $(".menu-toggle").click(
        //                  function () {
        //                    $(".menu-toggle").css("background", " #fff url(https://cdn0.iconfinder.com/data/icons/octicons/1024/x-512.png) 50% 50%/25px 25px no-repeat;!important"); 
        //
        //					
        //                  }
        //
        //             );
        //			
                    
        //			  $(".menu-toggle").click(
        //                  function () {
        //                    $(".menu-toggle").toggleClass("ex"); 
        //
        //					
        //                  }
        //
        //             );
        //			
                    
                    
                        $(".pop").click(function(){
               
                             
                             $(".DeptOverlay").fadeToggle(200);
                            
        //					        $(".button a").fadeToggle(200);
               
            });
                      
                                
        //					        $(".button a").fadeToggle(200);
               
         
        //			  
        //			  
                                  $(".backIcon").click(function(){
                                    
                $(".DeptOverlay").fadeToggle(200);
        //					
        //					        $(".button a").fadeToggle(200);
               
            });
                      
                      
                      
                      
            $(".DeptOverlay" ).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.scrollIcon').fadeIn();
                } else {
                    $('.scrollIcon').fadeOut();
                }
            });
        
            $('.scrollIcon').click(function () {
                $(".DeptOverlay").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
        
        
        
        
        
        
        });
        //$('.overlay').on('click', function(){
        ////    $(".overlay").fadeToggle(200);   
        //    $(".button a").toggleClass('btn-open').toggleClass('btn-close');
        //    open = false;
        //			
        //        });
            </script>
         
</head>
<?php
include_once "includes/dbConfig.php"; 
?>
<body>  
    <div class="DeptOverlay " > 
	
        <div class="wrap">
            <div class="backIcon"><i class="fas fa-angle-up"></i></div>
            <ul class="wrap-nav">
                
                
                
                
                    <li class="First" ><a class="deptHeading" href="#">Recreation</a>
                <ul>
                    <ul>
                                <li class="link" ><a class="deptLink" href="/xtremefitness"> Xtreme Fitness </a></li>
                        
                        
                    <li class="link" ><a class="deptLink"  href="/pit"> The Pit</a></li>     
                    </ul>
                </ul>
                    <a class="deptHeading" href="#">Graffix</a>	
                        
                        <ul>
                    <ul>
                                <li class="link" ><a class="deptLink"  href="/acui">ACUI Awards</a></li>
                            </ul>
                </ul>
                        
                        <a class="deptHeading" href="#">Operations</a>
                                    <ul>
                    <ul>
                            
                        
                        <li class="link" ><a class="deptLink"  href="/meetingrooms.php">Meeting Rooms</a></li>  
                        
                            <li class="link" ><a class="deptLink"  href="/Applications.php" title="Menu option 'Forms'">Forms</a></li>
                        
                        
                            </ul>
                </ul>
                        
                </li>
                
                
        
                
                
            
                <li class="second"><a class="deptHeading" hxref="#">Cross Cultural Centers</a>
                <ul>
                    <li class="link" ><a class="deptLink"   href="/apisrc">Asian Pacific Islander<br/> Student Resource Center</a></li>
                                
                                <li class="link" ><a class="deptLink"   href="/clsrc">Chicana/o Latina/o<br/>	Student Resource Center</a></li>
                                <li class="link"><a class="deptLink"   href="/ccc-cgc">Cultural Graduate Celebrations</a></li>
                                <li class="link"><a class="deptLink"   href="/women.php">Distinguished Women Awards</a></li>
                                <li class="link"><a class="deptLink"   href="/gsrc">Gender and Sexuality Resource Center</a></li>
                                <li class="link" ><a class="deptLink"  href="/leadershipforsocialjustice">Leadership For Social Justice Series</a></li>
                                <li class="link" ><a class="deptLink"   href="/allyship">LGTQIA+ Allyship<br/> Training</a></li>
                                <li class="link" ><a class="deptLink"   href="/ccc-goals">Operations, Goals, and<br/> Learning Outcomes</a></li>
                                <li class="link" ><a class="deptLink"   href="/pasrc">Pan African Student<br/>	Resource Center</a></li>
                                <li class="link" ><a class="deptLink"   href="/ccc-services">Services & Resources</a></li>
                                <li class="link" ><a class="deptLink"   href="/wocc">Womyn and Femmes Of Color Symposium</a></li>
                            
                </ul>
                </li>
    
                
                
                
                
                
                
                
                
                
                    <li class="third"><a class="deptHeading " href="#">Center For Student Involvment</a>
                <ul>
                    <li class="link" ><a class="deptLink"  href="#">Activities, Programs,<br/> and Trips</a></li>
                    <li class="link" ><a class="deptLink"  href="#">Eagles Care</a></li>
                    <li class="link" ><a class="deptLink"  href="#">Fraternity &amp; Sorority Life</a></li>
                    <li class="link" ><a class="deptLink"  href="/GEEK">Golden Eagle Event Krew (GEEK)</a> </li>
                    <li class="link" ><a class="deptLink"  href="https://www.calstatela.edu/studentservices/golden-eagle-handbook" target="_blank">Golden Eagle Handbook</a></li>
                    <li class="link" ><a class="deptLink"  title="Leadershape Institute" href="/leadershape.php">LeaderShape&nbsp;</a></li>
                                <li class="link" ><a class="deptLink"  href="/leadership-academy">Leadership Academy</a></li>
                                <li class="link" ><a class="deptLink"  href="/leap">Leadership Exploration And Advancement Program (L.E.A.P.)</a></li>
                                <li class="link" ><a class="deptLink"  href="/LeadershipRetreat.php">Leadership Retreat (FLY)</a></li>
                                <li class="link" ><a  class="deptLink"  href="/music">Music & Talent </a></li> 
                                <li class="link" ><a class="deptLink"  href="/sla">Student Leader Awards</a></li>
                                <li class="link" ><a class="deptLink"  href="/studentorglist">Student Organizations</a></li>
                                <li class="link" ><a class="deptLink"  href="/csi-forms">Student Organization<br/>	Handbook, Forms, and Policies</a> </li>
                                <li class="link" ><a class="deptLink" 	href="/ulead">U-Lead</a></li>
                                <!--<li><a href="#">Awards, Scholarships, and<br/>Recognition</a></li>-->
                </ul>
                </li>
                
                
    
                
    
                    
                
                
            
                
            </ul>
            <div class="scrollIcon">
            <i class="fas fa-angle-double-up"></i>
            </div>
        </div>
    </div>



    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?" required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

        <?php include ("./includes/header.php");?>

           
       

        <section class="section lb p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Gallery</h3>
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Gallery</li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">
                    <div class="shop-top">
                        <div class="clearfix">
                      
                        <div class="pull-left">
                        <p> Year</p>
                            <select class="selectpicker">
                                <option>2019</option>
                                <option>2018</option>
                           
                            </select>
                            </div>

                            <div class="pull-left">
                        <p> Semester</p>
                            <select class="selectpicker">
                                <option>Fall</option>
                                <option>Winter</option>
                                <option>Spring</option>
                                <option>Summer</option>
                            </select>
                            </div>
                        </div>
                    </div>

                    <div class="row blog-grid shop-grid">
                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="images/SweetSummerLand.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="http://localhost/Website-Beta/photos.php" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="shop-single.html" title="">Sweet Summer Land</a>
                                        <small> 5-28-19</small>

                                       

                                    </h4>
                                </div>
                                <!-- end details -->
                                
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="images/thumb2.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="shop-single.html" title="">Apida Mentorship Program</a>
                                        <small> 03-19-19</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="images/thumb3.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="shop-single.html" title="">Biliards Tournament </a>
                                        <small> 04-19-19</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="images/thumb5.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="shop-single.html" title="">Lunar year </a>
                                        <small> 01-31-19</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                
                            </div><!-- end box -->
                        </div><!-- end col -->



                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="images/thumb1.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="shop-single.html" title="">Break 4 Paws</a>
                                        <small> 5-08-19</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="images/thumb2.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="shop-single.html" title="">Apida Mentorship Program</a>
                                        <small> 03-19-19</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="images/thumb3.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="shop-single.html" title="">Biliards Tournament </a>
                                        <small> 04-19-19</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="images/thumb5.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="shop-single.html" title="">Lunar year </a>
                                        <small> 01-31-19</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                
                            </div><!-- end box -->
                        </div><!-- end col -->



                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="images/thumb1.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="shop-single.html" title="">Break 4 Paws</a>
                                        <small> 5-08-19</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="images/thumb2.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="shop-single.html" title="">Apida Mentorship Program</a>
                                        <small> 03-19-19</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="images/thumb3.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="shop-single.html" title="">Biliards Tournament </a>
                                        <small> 04-19-19</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="images/thumb5.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="shop-single.html" title="">Lunar year </a>
                                        <small> 01-31-19</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                
                            </div><!-- end box -->
                        </div><!-- end col -->
    
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="row text-center">
                        <div class="col-md-12">
                            <ul class="pagination">
                                <li class="disabled"><a href="javascript:void(0)">&laquo;</a></li>
                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">3</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">&raquo;</a></li>
                            </ul>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
            </div><!-- end container -->
        </section>

     

        
      <?php include ("./includes/footer.php");?>
    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>