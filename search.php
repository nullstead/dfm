<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Search results</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/superfish.css">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script>
        $(window).load( function(){
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <script src="search/search.js"></script>
  <!--[if lt IE 8]>
      <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
  <![endif]-->
  <!--[if lt IE 9]>
     
    <link rel="stylesheet" href="css/ie.css" >
    <script src="js/html5shiv.js"></script>
  <![endif]-->
</head>
<body>    
 <div class="bg-1">
<!--==============================header=================================-->
<header>
    <div class="container_16">
        <div class="row">
            <div class="grid_16">
                <h1><a href="index.html"><img src="images/logo.png" alt="Modern Church Make your life beautiful"></a></h1>
                <nav class="clearfix">
                    <ul class="sf-menu clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index-1.html">About</a></li>
                        <li><a href="index-2.html">Ministry</a></li>
                        <li><a href="index-3.html">Life Groups</a></li>
                        <li><a href="index-4.html">Events</a>
                            <ul>
                                <li><a href="#">Calendar</a></li>
                                <li><a href="#">Our Gallery</a>
                                    <ul>
                                        <li><a href="#">Gallery #1</a></li>
                                        <li><a href="#">Gallery #2</a></li>
                                        <li><a href="#">Gallery #3</a></li>
                                    </ul> 
                               </li>
                                <li><a href="#">Friends</a></li>
                           </ul>
                        </li>
                        <li><a href="index-5.html">Mail</a></li>
                    </ul>
                    <form id="search1" class="search" action="search.php" method="GET">
                        <div>
                            <input type="text" name="s">
                            <a onClick="document.getElementById('search1').submit()" class="button1"></a>
                        </div>
                    </form>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="grid_16">
                <div class="slider">
                    <div><img class="wrapper" src="images/img-banner.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</header>
  <!--==============================content=================================-->
<div class="content">
    <div class="container_16">
        <div class="row">
            <div class="grid_16">
                <h2>Search result:</h2>
                <div id="search-results"></div>
            </div>
        </div>      
    </div>
</div> 
<!--==============================footer=================================-->
<footer>
    <div class="bg-3">
        <div class="container_16">
            <div class="row">
                <div class="grid_16">
                    <div class="fright">
                        <a href="#" class="h-underline">Twitter</a>&nbsp;  |  &nbsp;<a href="#" class="h-underline">Google +</a>&nbsp;  |  &nbsp;<a href="#" class="h-underline">Facebook</a>
                    </div>
                    <div class="fleft">
                        Modern Church &copy; 2013 <a href="index-6.html" class="h-underline">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div> <!-- end bg-1 -->
</body>
</html>