<!DOCTYPE html>
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
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        
                        <li>
                            <a href="service.php">Services</a>
                        </li>
                        
                         <li class="active">
                             <a href="packageList.php">Packages</a>
                         </li> 
                         <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact-us.html">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

    





    <section id="portfolio">
        <div class="container">
            <ul class="portfolio-filter text-center">
                <li>
                    <a class="btn btn-default active" href="#" data-filter="*">Packages</a>
                </li>
                <!--<li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>--->
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
				<?php
					if(!$con) 
					{
							die("Connection failed: " . mysqli_connect_error());
					}	
					$sql="select * from `package_list`";
					$res=mysqli_query($con,$sql);
					while($row=mysqli_fetch_array($res))
					{	
						echo " <div class='portfolio-item apps col-xs-12 col-sm-4 col-md-3'>
								<div class='recent-work-wrap'>
								<img class='img-responsive' src='../images/packages/$row[2]' alt=''>
                            <div class='overlay'>
                                <div class='recent-work-inner'>
                                    <p>$row[3]</p>
                                    <p>Cost: $row[4] /-</p>
                                    <a  class='preview' href= 'package_details.php?id=$row[0]'>
                                        <i class='fa fa-eye'></i> View
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>";
					}
                    
			?>
             </div>
            </div>
			 <div class="row">
                <div class="portfolio-items">
				<?php
					if(!$con) 
					{
							die("Connection failed: " . mysqli_connect_error());
					}	
					$sql="select * from `package`";
					$res=mysqli_query($con,$sql);
					while($row=mysqli_fetch_array($res))
					{	
						echo " <div class='portfolio-item apps col-xs-12 col-sm-4 col-md-3'>
								<div class='recent-work-wrap'>
								<img class='img-responsive' src='../images/packages/$row[1]' alt=''>
                            <div class='overlay'>
                                <div class='recent-work-inner'>
                                    <h3><a href=''>$row[1]</a></h3>
                                    <p>Cost: $row[4]</p>
                                    <a  class='preview' href='packages.php?id=$row[0]'><i class='fa fa-eye'></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div>";
					}
                    
			?>
             </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->


    	
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
