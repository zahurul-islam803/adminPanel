<?php 
require '../admins/db.php';

//Menus
$select_menu = "SELECT * FROM menus";
$select_menu_result = mysqli_query($db_connect, $select_menu);

//banners
$select_banners = "SELECT * FROM banners WHERE status=1";
$select_banners_result = mysqli_query($db_connect, $select_banners);
$after_assoc_banner = mysqli_fetch_assoc($select_banners_result);

//Abouts
$select_about = "SELECT * FROM abouts";
$select_about_result = mysqli_query($db_connect, $select_about);
$after_assoc_about = mysqli_fetch_assoc($select_about_result);

//About Image
$select_image = "SELECT * FROM images WHERE status=1";
$select_image_result = mysqli_query($db_connect, $select_image);
$after_assoc_image = mysqli_fetch_assoc($select_image_result);

//Educations
$select_educations = "SELECT * FROM educations WHERE status=1";
$select_educations_result = mysqli_query($db_connect, $select_educations);

//logos
$select_logo = "SELECT * FROM logos WHERE status=1";
$select_logo_result = mysqli_query($db_connect, $select_logo);
$after_assoc_logo = mysqli_fetch_assoc($select_logo_result);

//Icons
$select_icon = "SELECT * FROM icons";
$select_icon_result = mysqli_query($db_connect, $select_icon);

//testimonials
$select_testimonial = "SELECT * FROM testimonials";
$select_testimonial_result = mysqli_query($db_connect, $select_testimonial);

//Brand
$select_brand = "SELECT * FROM brands WHERE status=1";
$select_brand_result = mysqli_query($db_connect, $select_brand);

//Counter
$select_counter = "SELECT * FROM counters";
$select_counter_result = mysqli_query($db_connect, $select_counter);


//service
$select_service = "SELECT * FROM services";
$select_service_result = mysqli_query($db_connect, $select_service);

//Contact
$select_contact = "SELECT * FROM contacts";
$select_contact_result = mysqli_query($db_connect, $select_contact);
$after_assoc_contact = mysqli_fetch_assoc($select_contact_result);

//Portfolios
$select_portfolio = "SELECT * FROM portfolios WHERE status=1";
$select_portfolio_result = mysqli_query($db_connect, $select_portfolio);

?>


<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.html" class="navbar-brand logo-sticky-none"><img width="80" height="40" src="../uploads/logos/<?=$after_assoc_logo['logo']?>" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img width="80" height="40" src="../uploads/logos/<?=$after_assoc_logo['logo']?>" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                        
                                        <?php foreach($select_menu_result as $menu) { ?>
                                            <li class="nav-item active"><a class="nav-link" href="#home"><?=$menu['menu_name']?></a></li>
                             
                                            <?php } ?>
                                              <!-- <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> -->
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img width="80" height="40" src="../uploads/logos/<?=$after_assoc_logo['logo']?>" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?=$after_assoc_contact['address']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p><?=$after_assoc_contact['phone']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><?=$after_assoc_contact['email']?></p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                <?php foreach($select_icon_result as $icon) { ?>
                    <a href="<?=$icon['icon_link']?>"><i class="fab <?=$icon['icon_class']?>"></i></a>
                    
                    <?php } ?>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                 
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?=$after_assoc_banner['title']?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$after_assoc_banner['description']?></p>
                                   
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    
                                    <ul>
                                    <?php foreach($select_icon_result as $icon) { ?>
                                        <li><a href="<?=$icon['icon_link']?>"><i class="fab <?=$icon['icon_class']?>"></i></a></li>
                                        <?php } ?>
                                    </ul>
                                   
                                </div>
                                <a href="single_portfolio.php" class="btn wow fadeInUp" data-wow-delay="1s"><?=$after_assoc_banner['btn']?></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img width="700" height="700" src="../uploads/banners/<?=$after_assoc_banner['image']?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img width="650" height="750" src="../uploads/images/<?=$after_assoc_image['image']?>" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p><?=$after_assoc_about['description']?></p>
                                <h3>Education:</h3>
                            </div>
                            <?php foreach($select_educations_result as $education) { ?>
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year"><?=$education['date']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$education['education_name']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$education['percentage']?>%;" aria-valuenow="<?=$education['percentage']?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Education Item -->
                            <?php } ?>
                          
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>                    
					<div class="row">
																
						<?php foreach($select_service_result as $service) { ?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.6s">
                                <i class="fa <?=$service['icon']?>"></i>
								<h3><?=$service['title']?></h3>
								<p>
                                <?=$service['description']?>
								</p>
							</div>
						</div>
                       <?php } ?>
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php foreach($select_portfolio_result as $portfolio) { ?>
                        <div class="col-lg-4 col-md-6 pitem">                        
                            <div class="speaker-box">
								<div class="speaker-thumb">                               
									<img height="400" src="../uploads/portfolios/<?=$portfolio['image']?>" alt="img">
                                    
								</div>
								<div class="speaker-overlay">
									<span>Design</span>
									<h4><a href="portfolio-single.php">Hamble Triangle</a></h4>
									<a href="portfolio-single.php?id=<?=$portfolio['id']?>" class="arrow-btn">More information <span></span></a>
								</div>
							</div>                     
                        </div>
                        <?php } ?>
                      
					

                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                       <?php foreach($select_counter_result as $counter) {?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="fa <?=$counter['icon']?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <?php if((int)$counter['number']>1000){?>
                                        <h2><span class="count"><?=(int)$counter['number']/1000?></span>K</h2>
                                        <?php } else{?>
                                            <h2><span class="count"><?=$counter['number']?></span></h2>
                                        <?php }?>
                                        <span><?=$counter['name']?></span>
                                    </div>                                  
                                </div>                               
                            </div>
                          <?php } ?>
                                                     
                          

                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                               <?php foreach($select_testimonial_result as $testimonial) { ?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img width="100" height="100" class="rounded" src="../uploads/testimonials/<?=$testimonial['image']?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?=$testimonial['description']?><span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?=$testimonial['name']?></h5>
                                            <span><?=$testimonial['designation']?></span>
                                        </div>
                                    </div>
                                </div>
                                 <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                    <?php foreach($select_brand_result as $brand) { ?>
                        <div class="col-xl-2">                       
                            <div class="single-brand">                                                        
                                <img width="200" height="100" src="../uploads/brands/<?=$brand['image']?>" alt="img">                               
                            </div>                         
                        </div>
                        <?php } ?> 
                     
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p><?=$after_assoc_contact['description']?></p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?=$after_assoc_contact['address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$after_assoc_contact['phone']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=$after_assoc_contact['email']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="message_post.php" method="POST">
                                    <input type="text" name="name" placeholder="your name *">
                                    <input type="email" name="email" placeholder="your email *">
                                    <textarea name="message" id="message" placeholder="your message *"></textarea>
                                    <button class="btn">BUY TICKET</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/one-page-nav-min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
</html>
