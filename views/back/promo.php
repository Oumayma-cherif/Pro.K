


<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="/promo/assets1/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="/promo/assets1/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="/promo/assets1/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
            
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="/promo/assets1/img/find_user.jpg" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a  href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	
                      <li  >
                        <a  href="pac.html"><i class="fa fa-table fa-3x"></i> pack</a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a class="active-menu"  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>promo Page</h2>   
                        <h5>Welcome mazen , Love to see you back. </h5>


                        <div class="container-contact100">
                            <div class="wrap-contact100">
                                <form class="contact100-form validate-form"  method="POST" action="ajouterpromotion.php" >
                                    <span class="contact100-form-title">
                    
                                       
                                    </span>
                    
                                    <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                                        <span class="label-input100">Reference Promotion</span>
                                        <input  class="input100" type="text" name="Reference" placeholder="Enter Your Reference">
                                    </div>
                    
                                    <div class="wrap-input100 validate-input bg1 " >
                                        <span class="label-input100">identifiant produit</span>
                                        <input id="id" class="input100" type="text" name="idpromo" placeholder="Enter id ">
                                    </div>
                    
                                    <div class="wrap-input100 bg1 rs1-wrap-input100">
                                        <span class="label-input100">Date debut promotion</span>
                                        <input  class="input100" type="date" name="date_debut" >
                                    </div>
                                    <div class="wrap-input100 bg1 rs1-wrap-input100">
                                        <span class="label-input100">Date fin promotion</span>
                                        <input  class="input100" type="date" name="date_fin" >
                                    </div>
                                   <div class="wrap-input100 bg1 rs1-wrap-input100">
                                        <span class="label-input100">pourcentage</span>
                                        <input  class="input100" type="text" name="pourcentage" placeholder="%  " >
                                    </div>
                                    <div class="wrap-input100 bg1 rs1-wrap-input100">
                                        <span class="label-input100">identifiantpack</span>
                                        <input  class="input100" type="text" name="identifiantpack"  >
                                    </div>
                    
                                    
                    
                                    <div class="container-contact100-form-btn">
                                        
                                           
                                                
                                                <button type="submit" name="ajouter" value="ajouter">Ajouter</button>
                                            
                                    </div>
                                
                                    <div class="container-contact100-form-btn">
                                        <button class="contact100-form-btn">
                                            <span>
                                                Annuler
                                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>




                        <a href="affichage.php"> afficher les promotions </a>



                    
                                    </main>
                                    <footer class="py-4 bg-light mt-auto">
                                        <div class="container-fluid">
                                            <div class="d-flex align-items-center justify-content-between small">
                                                <div class="text-muted">Copyright &copy; Your Website 2020</div>
                                                <div>
                                                    <a href="#">Privacy Policy</a>
                                                    &middot;
                                                    <a href="#">Terms &amp; Conditions</a>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                </div>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="/promo/assets1/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="/promo/assets1/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="/promo/assets1/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="/promo/assets1/js/custom.js"></script>
    
   
</body>
</html>
