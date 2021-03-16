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
    <link rel="shortcut icon" href="images/ico/f.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/f.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/f.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/f.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/f.png">
</head><!--/head-->

<body class="homepage">

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
                        
                        <li><a href="service.php">Services</a></li>
                        
                         <li class="active"><a href="packageList.php">packages</a></li> 
                         <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact-us.html">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
    
    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Packages</h2>
            </div>
            <div class="row">
                <div class="portfolio-items">
                    <?php
					if(!$con) 
					{
							die("Connection failed: " . mysqli_connect_error());
					}	
					$x=$_GET['id'];
                    if($x==1) {
                        header("Location: packageList.php");
                    } else {
                    $sql="select * from `package_details` where packageId='$x'";
					$res=mysqli_query($con,$sql);
					while($row=mysqli_fetch_array($res))
					{
				    	echo " <div class='portfolio-item apps col-xs-12 col-sm-4 col-md-3'>
								<div class='recent-work-wrap'>
								<img class='img-responsive' src='../images/packages/$row[3]' alt=''>
                            <div class='overlay'>
                                <div class='recent-work-inner'>
                                    <h3><a href=''>$row[7]</a></h3>
                                    
                                    <a  class='preview' href='../images/packages/$row[3]'><i class='fa fa-eye'></i> View</a>
                                </div> 
                            </div>
                        </div>
						</div>
						<div class='portfolio-item apps col-xs-12 col-sm-4 col-md-3'>
						<div class='recent-work-wrap'>
								<img class='img-responsive' src='../images/packages/$row[4]' alt=''>
                            <div class='overlay'>
                                <div class='recent-work-inner'>
                                    <h3><a href=''>$row[8]</a></h3>
                                    
                                    <a  class='preview' href='../images/packages/$row[4]'><i class='fa fa-eye'></i> View</a>
                                </div> 
                            </div>
                        </div>
						</div>
						<div class='portfolio-item apps col-xs-12 col-sm-4 col-md-3'>
						<div class='recent-work-wrap'>
								<img class='img-responsive' src='../images/packages/$row[5]' alt=''>
                            <div class='overlay'>
                                <div class='recent-work-inner'>
                                    <h3><a href=''>$row[9]</a></h3>
                                    
                                    <a  class='preview' href='../images/packages/$row[5]'><i class='fa fa-eye'></i> View</a>
                                </div> 
                            </div>
                        </div>
						</div>
						<div class='portfolio-item apps col-xs-12 col-sm-4 col-md-3'>
						<div class='recent-work-wrap'>
								<img class='img-responsive' src='../images/packages/$row[6]' alt=''>
                            <div class='overlay'>
                                <div class='recent-work-inner'>
                                    <h3><a href=''>$row[10]</a></h3>
                                    
                                    <a  class='preview' href='../images/packages/$row[6]'><i class='fa fa-eye'></i> View</a>
                                </div> 
                            </div>
                        </div>
						</div>
                    </div>
					        </div>
            </div>
        </div>
    </section>
	
        <div class='container'>
            <div class='pricing-area text-center'>
                <div class='row'>
					<div class='col-sm-4 plan price-one wow fadeInDown'></div>
                    <div class='col-sm-4 plan price-one wow fadeInDown'>
                        <ul>
                            <li class='heading-two'>
                                <span>List of Places</span>
                            </li>
                            <li>$row[7]</li>
                            <li>$row[8]</li>
                             <li>$row[9]</li>
                             <li>$row[10]</li>
							 <li class='plan-action'>
                                <a href='#'class='btn btn-success'>Contact Now</a>
                            </li>
                        </ul>
                    </div>
					<div class='col-sm-4 plan price-one wow fadeInDown'></div>
					</div>
					</div>
				</div>
                </div>";
					}
                }
              
?>
                    <!--/.portfolio-item-->
				
                    <!--/.portfolio-item-->

                    <!--/.portfolio-item-->

                    <!--/.portfolio-item-->
        <!--/#portfolio-item-->

	 
   
	
    
    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="widget">
                        <h3>Who We are</h3>
                        <ul>
                            <li><a href="#">Car Rental</a></li>
                            <li><a href="#">Bus Tickets</a></li>
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
                            <li><a href="#"> 9494914823</a></li>
                            <li><a href="#"> 9866609137</a></li>
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
                    &copy; 2021 <a  href="#">SHIVAMANI TRAVELS</a>. All Rights Reserved.
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
