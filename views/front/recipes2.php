<?PHP
include  "C:/xampp/htdocs/pro.k/controllers/pack_bd.php";
$packet=new packet_bd();
$listpacket=$packet->afficherPack();

?>




<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!-- 

Grill Template 

http://www.templatemo.com/free-website-templates/417-grill

-->
    <head>
        <meta charset="utf-8">
        <title>Products - Grill Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="/promo/assets2/css/bootstrap.css">
        <link rel="stylesheet" href="/promo/assets2/css/font-awesome.css">
        <link rel="stylesheet" href="/promo/assets2/css/templatemo_style.css">
        <link rel="stylesheet" href="/promo/assets2/css/templatemo_misc.css">
        <link rel="stylesheet" href="/promo/assets2/css/flexslider.css">
        <link rel="stylesheet" href="/promo/assets2/css/testimonails-slider.css">

        <script src="/promo/assets2/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>

        
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

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
                                    <a href="#"><img src="/promo/assets2/images/logo.png" title="Grill Template" alt="Grill Website Template" ></a>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About</a></li>
                                        <li><a href="recipes.html">recipes</a></li>
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
                                <span><a href="about-us.html">Home </a>/ <a href="recipes.html">recipes</a></span>
                             
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>



           

            
                    <tbody>

               <?PHP
               foreach($listpacket as $row){
                   ?>
                   <tr>

                   <td>nom:<?PHP echo $row['ReferencePack']; ?> </td>
                   <td>prix:<?PHP echo $row['prix']; ?> </td>
                   <td><img src="/promo/assets1/img/<?PHP echo $row['image']; ?>"></td>
                    
                    
                   
                   </tr>
                   
                   <?PHP 
               }
               ?>
			

    
        <script src="/promo/assets2/js/vendor/jquery-1.11.0.min.js"></script>
        <script src="/promo/assets2/js/vendor/jquery.gmap3.min.js"></script>
        <script src="/promo/assets2/js/plugins.js"></script>
        <script src="/promo/assets2/js/main.js"></script>

    </body>
</html>