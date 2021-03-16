
<?php
include_once('con_db.php');
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | SHIVAMANI TRAVELS</title>
	
	<!-- core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="../images/ico/f.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/f.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/f.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/f.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/f.png">
</head><!--/head-->


<body>

    <header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="../images/logo/logo.png" alt="logo" class="logoItem"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="service.php">Services</a></li>
                        <li><a href="packageList.php">Packages</a></li> 
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact-us.html">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->


	<section class="pricing-page">
        <div class="container">
        <ul class="portfolio-filter text-center">
                <li>
                    <a class="btn btn-default active" href="#" data-filter="*">Fare Chart</a>
                </li>
                <!--<li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>--->
            </ul><!--/#portfolio-filter-->
            <div class="pricing-area text-center">
                <div class="row">
                <?php
				    if(!$con) 
                    {
                        die("Connection failed: " . mysqli_connect_error());
                    }
												
				$sql="SELECT c.carName, c.carDescription, s.servicePer40km, s.servicePer80km, s.servicePer100km, s.extraPerHour, s.extraPerKm, s.nightHalts FROM car_details c INNER JOIN services s ON c.id = s.carId";
				$res=mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($res))
						{
                        echo "
                            <div class='col-sm-4 plan price-one wow fadeInDown'>
                                <ul>
                                    <li class='heading-two'>
                                        <span>$row[0] Details</span>
                                    </li>
                                    <li>$row[1]</li>
                                    <li> 4 hours 40 km Rs: $row[2]/-</li>
                                     <li>8 hours 80 km Rs: $row[3]/-</li>
                                     <li>10 hours 100km Rs: $row[4]/-</li>
                                     <li>Extra per hour Rs: $row[5]/-</li>
                                     <li>Extra per km Rs: $row[6]/-</li>
                                     <li>Night Halts Rs: $row[7]/-</li>
                                    <li class='plan-action'>
                                        <a  href='contact-us.html' class='btn btn-success'>Contact now</a>
                                    </li>
                                </ul>
                            </div>";
                        }
                        ?>
                    </section>
     <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="widget">
                        <h3>Who We are</h3>
                        <ul>
                            <li><a href="#">Car Rental</a></li>
                            <li><a href="#">Cars for wedding</a></li>
                            <li><a href="#">Train Tickets</a></li>
                            <li><a href="#">Air Tickets</a></li>
                            
                        </ul>
                    </div>    
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6">
                    <div class="widget">
                        <h3>Information</h3>
                        <ul>
                            <li><a href="#">Tollgates </a></li>
                            <li><a href="#">Driver Beta & Food extra </a></li>
                            <li><a href="#">*Service Tax as applicable </a></li>
							<li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6">
                    <div class="widget">
                        <h3>Contact Us </h3>
                        <ul>
                            <li><a href="tel:9494668844">9494668844</a></li>
                            <li><a href="tel:9866609137">9866609137</a></li>
                            <li><a href="#"> Find us</a></li>
                            
                        </ul>
                    </div>    
                </div><!--/.col-md-4-->

                
            </div>
        </div>
    </section><!--/#bottom-->

    
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2021 <a title="Shivamani travels">Shivamanitravels</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/jquery.isotope.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/wow.min.js"></script>
</body>
</html>