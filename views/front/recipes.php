<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<!-- 

Grill Template 

http://www.templatemo.com/free-website-templates/417-grill

-->

<?php
include_once "../../controllers/categoriecontroller.php";
$categorieC = new categoriecontroller();
$listecategorie = $categorieC->afficherCategorie();



require_once "../../controllers/recettecontroller.php";

$recettec = new recettecontroller();
$listrecette = $recettec->afficherRecette();
?>

<head>
    <meta charset="utf-8">
    <title>Pro.k - Recipes </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/testimonails-slider.css">

    <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>

<body>

    <header>
        <div id="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="home-account">
                            <a href="#">Home</a>
                            <a href="#">My account</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cart-info">
                            <i class="fa fa-shopping-cart"></i>
                            (<a href="#">5 items</a>) in your cart (<a href="#">$45.80</a>)
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="#"><img src="images/logo.png" title="Grill Template"
                                    alt="Grill Website Template"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="recipes.php">recipes</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="search-box">









                            <form name="search_form" method="get" class="search_form">
                                <input id="search" type="text" />
                                <input type="submit" id="search-button" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div id="heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content">
                        <h2>Recipes</h2>
                        <span><a href="index.html">Home </a>/ <a href="recipes.php">recipes</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div id="products-post">
        <div class="container">
            <div class="row">
                <div class="col-md-14 col-sm-16">
                    <div id="product-heading">
                        <h2>Hungry ?</h2>
                        <img src="images/under-heading.png" alt="">
                    </div>
                </div>
            </div>

            <!-- SECTION -->
            <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- ASIDE -->
                        <div id="aside" class="col-md-3">
                            <!-- aside Widget -->
                            <div class="aside">
                                <h3 class="aside-title">Categories</h3>
                                <div class="checkbox-filter">
                                    <?php foreach ($listecategorie as $l) { ?>
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="category-1">
                                        <label for="category-1">

                                            <h4>
                                                <?php echo $l['nom']  , "\n" ?>
                                            </h4>

                                        </label>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                            <!-- /aside Widget -->

                            <!-- aside Widget -->



                            <!-- /aside Widget -->
                        </div>
                        <!-- /ASIDE -->

                        <!-- STORE -->
                        <div id="store" class="col-md-7">

                            <div class="col-md-5 col-sm-5">
                                <?PHP foreach ( $listrecette as  $l) {?>
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="../back/uploads/<?= $l['image'] ?>" style="width:300px">
                                    </div>
                                    <div class="blog-content">
                                        <div class="content-show">
                                            <h4><a href="single-post.php">
                                                    <?php echo $l['nom'] ?>
                                                </a></h4>

                                        </div>
                                        <div class="content-hide">
                                            <p>
                                                <?php echo $l['description'] ?>
                                            </p>
                                        </div>
                                    </div>
                                   
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

    </div>
    </div>

    </div>





    <!-- /container -->
    </div>
    </div>
    </div>
    </div>





    <div id="product-post">
        <div class="container">

            <div id="contact-us">
                <div class="container">
                    <div class="row">
                        <div class="product-item col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="message-form">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <footer>
        <div class="container">
            <div class="top-footer">
                <div class="row">
                    <div class="col-md-9">
                        <div class="subscribe-form">
                            <span>Get in touch with us</span>
                            <form method="get" class="subscribeForm">
                                <input id="subscribe" type="text" />
                                <input type="submit" id="submitButton" />
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="social-bottom">
                            <span>Follow us:</span>
                            <ul>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-rss"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-footer">
                <div class="row">
                    <div class="col-md-3">
                        <div class="about">
                            <h4 class="footer-title">About Grill</h4>
                            <p>Grill is free HTML5 template by <span class="blue">template</span><span
                                    class="green">mo</span> and it is a free responsive bootstrap layout
                                that can be
                                applied for any purpose.
                                <br><br>Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for
                                photos used in this template. Nam commodo erat quis ligula placerat
                                viverra.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="shop-list">
                            <h4 class="footer-title">Shop Categories</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>New Grill Menu</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Healthy Fresh
                                        Juices</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Spicy Delicious
                                        Meals</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Simple Italian
                                        Pizzas</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Pure Good Yogurts</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Ice-cream for kids</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="recent-posts">
                            <h4 class="footer-title">Recent posts</h4>
                            <div class="recent-post">
                                <div class="recent-post-thumb">
                                    <img src="images/recent-post1.jpg" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <h6><a href="#">Delicious and Healthy Menus</a></h6>
                                    <span>24/12/2084</span>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-thumb">
                                    <img src="images/recent-post2.jpg" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <h6><a href="#">Simple and effective meals</a></h6>
                                    <span>18/12/2084</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="more-info">
                            <h4 class="footer-title">More info</h4>
                            <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in
                                pulvinar velit
                                massa id elit.</p>
                            <ul>
                                <li><i class="fa fa-phone"></i>010-020-0340</li>
                                <li><i class="fa fa-globe"></i>123 Dagon Studio, Yakin Street, Digital
                                    Estate</li>
                                <li><i class="fa fa-envelope"></i><a href="#">info@company.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <p>Copyright © 2084 <a href="#">Your Company Name</a></p>
            </div>

        </div>
    </footer>




</body>

</html>