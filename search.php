<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Search Result</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/camera.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>


</head>
<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <section class="clearfix">

            <div class="container">
                <div class="block_login">
                    <a href="#" class="btn btn-default"><span class="fa fa-user"></span> Open an Account <span
                            class="fa fa-sort-desc"></span></a>
                    <a href="#" class="btn btn-primary"><span class="fa fa-lock"></span> login</a>
                </div>


                <div class="navbar-header">
                    <h1 class="navbar-brand">
                        <a data-type='rd-navbar-brand' href="./">Stocx
                        </a>
                        <span class="brand_slogan">
                            Stock market
                        </span>
                    </h1>

                </div>
            </div>

            <div class="container">
                <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
                    <label class="search-form_label">
                        <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder=""/>
                        <span class="search-form_liveout"></span>
                    </label>
                    <button class="search-form_submit fa-search" type="submit"></button>
                </form>

            </div>

        </section>

        <div id="stuck_container" class="stuck_container">
            <nav class="navbar navbar-default navbar-static-top ">
                <div class="container">

                    <ul class="navbar-nav sf-menu" data-type="navbar">
                        <li>
                            <a href="index-1.html">About us</a>
                        </li>
                        <li>
                            <a href="index-2.html">Investing</a>
                        </li>
                        <li class="dropdown">
                            <a href="index-3.html">Trade</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Dolore ipsu</a>
                                </li>
                                <li>
                                    <a href="#">Consecte</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Dolore ipsu</a>
                                        </li>
                                        <li>
                                            <a href="#">Consecte</a>
                                        </li>
                                        <li>
                                            <a href="#">Elit Conseq</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Elit Conseq</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="index-4.html">research</a>
                        </li>

                        <li>
                            <a href="index-5.html">Contacts</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

  <!--========================================================
                            CONTENT
  =========================================================-->
  <main>
    <section id="content" class="content well">
        <div class="container">
            <h3>Search Results</h3>
            <div id="search-results"></div>
        </div>
    </section>
  </main>  

     <!--========================================================
                             FOOTER
   =========================================================-->
     <footer>
         <section class="bg-secondary well5">
             <div class="container center767">
                 <div class="row">

                     <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.6s">
                         <h4 class="text-primary">Highlights</h4>
                         <ul class="text-uppercase">
                             <li><a href="#">Trading Platforms</a></li>
                             <li><a href="#">Trading Groups</a></li>
                             <li><a href="#">Automated Trading</a></li>
                             <li><a href="#">Lightspeed Institutional</a></li>
                             <li><a href="#">Trade-Ideas</a></li>
                             <li><a href="#">Live Webinars</a></li>
                             <li><a href="#">Downloadable Forms</a></li>
                             <li><a href="#">Web Partner Program</a></li>
                         </ul>
                     </div>

                     <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.2s">
                         <h4 class="text-primary">Legal</h4>
                         <ul class="text-uppercase">
                             <li><a href="#">Disclosures</a></li>
                             <li><a href="#">FINRA</a></li>
                             <li><a href="#">SIPC</a></li>
                             <li><a href="#">SEC Order Routing</a></li>
                             <li><a href="#">Disclosure</a></li>
                             <li><a href="#">Forex Risk Disclosure</a></li>
                         </ul>
                     </div>

                     <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight clearboth" data-wow-duration="" data-wow-delay="0.4s">
                         <h4 class="text-primary">BLOGS</h4>
                         <ul class="marked-list">
                             <li><a href="#">Dolore ipsum </a></li>
                             <li><a href="#">eniascet ing</a></li>
                             <li><a href="#">usti cumi dia</a></li>
                             <li><a href="#">sit amet sed</a></li>
                         </ul>
                     </div>

                     <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="" data-wow-delay="0.8s">
                         <h4 class="text-primary">Connect with Us</h4>
                         <ul class="inline-list">
                             <li><a class="fa fa-facebook" href="#"></a></li>
                             <li><a class="fa fa-rss" href="#"></a></li>
                             <li><a class="fa fa-twitter" href="#"></a></li>
                             <li><a class="fa fa-google-plus" href="#"></a></li>
                         </ul>
                     </div>
                 </div>
             </div>

         </section>
             <div class="container">
                 <p class="navbar-brand brand__footer">
                     <a href="./">Stocx
                     </a>
                         <span class="brand_slogan">
                             Stock market
                         </span>
                 </p>
                 <p class="copyrights">
                     &#169; <span id="copyright-year"></span> |
                     <a href="index-5.html">Privacy Policy</a>
                     <!-- {%FOOTER_LINK} -->
                 </p>
             </div>
     </footer>
 </div>


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>
 <script src="js/tm-scripts.js"></script>
 <!-- </script> -->


 </body>
 </html>
