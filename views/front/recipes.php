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

include_once "../../controllers/commentairecontroller.php";

$commentaire1 = new commentairecontroller();

include "../../controllers/recettecontroller.php";

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

                                    <div class="input-checkbox">
                                        <input type="checkbox" id="category-1">
                                        <label for="category-1">

                                            <!--

                                            <?php foreach ($listecategorie as $l) { ?>
                                            <tr>

                                                <td>
                                                    <?php echo $l['nom'] ?>
                                                </td>

                                                <?php } ?>-->
                                        </label>
                                    </div>


                                </div>
                            </div>
                            <!-- /aside Widget -->

                            <!-- aside Widget -->



                            <!-- /aside Widget -->
                        </div>
                        <!-- /ASIDE -->

                        <!-- STORE -->
                        <div id="store" class="col-md-9">


                            <!-- store products -->
                            <div class="row">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <!-- Advanced Tables -->
                                            <div class="panel panel-default">

                                                <style>
                                                    div.gallery {
                                                        border: 1px solid #ccc;
                                                    }

                                                    div.gallery:hover {
                                                        border: 1px solid #777;
                                                    }

                                                    div.gallery img {
                                                        width: 100%;
                                                        height: auto;
                                                    }

                                                    div.desc {
                                                        padding: 15px;
                                                        text-align: center;
                                                    }

                                                    * {
                                                        box-sizing: border-box;
                                                    }

                                                    .responsive {
                                                        padding: 0 6px;
                                                        float: left;
                                                        width: 24.99999%;
                                                    }

                                                    @media only screen and (max-width: 700px) {
                                                        .responsive {
                                                            width: 49.99999%;
                                                            margin: 6px 0;
                                                        }
                                                    }

                                                    @media only screen and (max-width: 500px) {
                                                        .responsive {
                                                            width: 100%;
                                                        }
                                                    }

                                                    .clearfix:after {
                                                        content: "";
                                                        display: table;
                                                        clear: both;
                                                    }
                                                </style>

                                                <?PHP foreach ( $listrecette as  $l) {?>
                                                <div class="responsive">
                                                    <div class="gallery">
                                                        <img src="../back/uploads/<?= $l['image'] ?>"
                                                            style="width:200px">
                                                        <div class="panel-heading">
                                                            <h4>
                                                                <?php echo $l['nom'] ?>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php } ?>

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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="heading-section">
                                        <h2>Feel free to send a message</h2>
                                        <img src="images/under-heading.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div id="contact-us">
                                <div class="container">
                                    <div class="row">
                                        <div class="product-item col-md-12">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="message-form">
                                                    <form id="formajoutercategorie" method="POST" >
                                                    <form action="ajoutercommentaire.php">
                                                            <div class="row">
                                                                <div class="name col-md-4">
                                                                <input type="text"  name="nom" required=""
                                                                        placeholder="Name" />
                                                                </div>
                                                                <div class="email col-md-4">
                                                                    <input type="text" name="email" required=""
                                                                        placeholder="Email" />
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="row">
                                                                <div class="text col-md-12">
                                                                    <textarea type="text"   name="Commentaire" required=""
                                                                        placeholder="Commentaire"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="send">
                                                                <button type="submit" class="btn btn-default" style="float:right;" value="submit" onclick="validateSubmit()" name="submit"> send</button>
                                                            
                                                                <script>
                                                function validateSubmit() {
                                                    result = confirm("Are you sure you want to submit this form ?");
                                                    if (result) {
                                                        $('#form').submit();


                                                    }
                                                }
                                            </script>

                                                            
                                                            
                                                            
                                                            
                                                            
                                                            </div>
                                                        </form>
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
                                                <br><br>Credit goes to <a rel="nofollow"
                                                    href="http://unsplash.com">Unsplash</a> for
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