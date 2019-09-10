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
    <title>University-Student Union</title>
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
    <link rel="stylesheet" href="css/carousel.css">
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
    </script></head>
<body>


		
	<div class="DeptOverlay " > 
	
	<div class="wrap">
		<div class="backIcon"><i class="fas fa-angle-up"></i></div>
		<ul class="wrap-nav">
			
			
			
			
				<li  ><a class="deptHeading" href="#">Recreation</a>
		
				<ul class="one";>
							<li class="link" ><a class="deptLink" href="/xtremefitness"> Xtreme Fitness </a></li>
					
					
				<li class="link" ><a class="deptLink"  href="/pit"> The Pit</a></li>     
			
			</ul>
				<a class="deptHeading" href="#">Graffix</a>	
					
			
				<ul class="two";>
							<li class="link" ><a class="deptLink"  href="/acui">ACUI Awards</a></li>
			
			</ul>
					
					<a class="deptHeading" href="#">Operations</a>
							
				<ul >
						
					
					<li class="link" ><a class="deptLink"  href="/meetingrooms.php">Meeting Rooms</a></li>  
					
						<li class="link" ><a class="deptLink"  href="/Applications.php" title="Menu option 'Forms'">Forms</a></li>
					
			
			</ul>
					
			</li>
			
			
	
			
			
		
			<li class="second"><a class="deptHeading" hxref="#">Cross Cultural Centers</a>
			<ul >
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

<section class="fullPage">


<video muted autoplay loop src="/Website-Beta/images/Graffix Paralax Video.mov" type="video/mp4" height="100%" >
    </video>

</section>


      <?php include ("./includes/footer.php");?>

<!-- <div class="copyrights">
    <div class="container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="cop-logo">
                    <a href="#"><img src="images/logo.png" alt=""></a>
                </div>
            </div>

            <div class="pull-right">
                <div class="footer-links">
                    <ul class="list-inline">
                        <li>Design : <a href="https://html.design">HTML.Design</a></li>
                        <li>Distributed by : <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></li>
                    </ul>
                </div>
            </div>
        </div> -->
    <!-- </div><!-- end container -->
<!-- </div><!-- end copy -->
<!-- </div><!-- end wrapper -->

<!-- jQuery Files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/carousel.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<!-- VIDEO BG PLUGINS -->
<script src="js/videobg.js"></script>

</body>
</html>
