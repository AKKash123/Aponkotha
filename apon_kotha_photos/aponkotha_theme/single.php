


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>আপনকথা | সংবাদ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/gijgo.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css"> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    <?php get_header();
           // the_post();
        //echo get_template_directory_uri();
        //blog_info('template directory');
    ?>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        
                        <div class="slider_text ">
                            <!-- <span>আপনকথা</span> -->
                            <h3> আপনকথা </h3>
                            <p>-একটি অলাভজনক সংস্থা শিক্ষার প্রচার এবং শেখার সুযোগ বৃদ্ধির জন্য নিবেদিত,
                                ডুয়ার্স অঞ্চলের প্রত্যন্ত অঞ্চলে শিক্ষার্থীদের জীবনে ইতিবাচক প্রভাব ফেলতে প্রতিশ্রুতিবদ্ধ।</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
 

<?php  $imagepath  = wp_get_attachment_image_src(get_post_thumbnail_id(),'small'); ?>
        <section class="reson_area section_padding" id="#">
              <div class="container">
                    <div class="row justify-content-center">
                    
                        <div class="col-lg-6">
                            <div class="section_title text-center mb-65">
                                <h3><span>সংবাদ</span></h3>
                                <div class="thum">
                                    <div class="thum_1">
                                        <img class="img-fluid mr-0"width="270px" height="360px"src="<?php echo $imagepath[0]; ?>">
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-8 col-md-3">
                                        <div class="single_reson">
                                        
                                             <p class="text-success"><?php echo get_the_date();?></p>
                                             <h5 class="text-warning"><?php the_title();?></h5><br>
                                             <h5 class="text-danger"><?php the_author_meta('display_name', 1); ?></h5><br>
                                             <p class="mycontent text-info"><?php the_content();?></p>
                                     
                                        </div>
                            </div>
                        </div>
                             
                             
                    </div>
                </div>
            </section>
    <!-- news__area_end  -->
    
   
   

    <!-- footer_start  -->
    <?php get_footer();?>
    <!-- footer_end  -->

    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="<?php echo get_template_directory_uri();?>/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/ajax-form.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.counterup.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/scrollIt.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/nice-select.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.slicknav.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="<?php echo get_template_directory_uri();?>/js/contact.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.form.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.validate.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/mail-script.js"></script>

    <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
</body>

</html>