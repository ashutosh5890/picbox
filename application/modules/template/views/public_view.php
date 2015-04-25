<!DOCTYPE html>
<html>
<head>
    <title>Picbox - A Photo sharing plateform</title>
    <link rel="short icon" href="<?=$assets?>image/icon/favicon.png" />
    <link rel="stylesheet" type="text/css" href="<?=$assets?>css/style1.css" />
    <link rel="stylesheet" type="text/css" href="<?=$assets?>css/carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?=$assets?>css/template.css" />
    <script type="text/javascript" src="<?=$assets?>js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?=$assets?>js/main.js"></script>
    <script type="text/javascript" src="<?=$assets?>js/jquery.waterwheelCarousel.min.js"></script>
    <script type="text/javascript" src="<?=$assets?>js/jquery.fullPage.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 3,
          autoPlay: 1500
        });
        
        $('#fullpage').fullpage({
            anchors: ['firstPage', 'secondPage', '3rdPage'],
            scrollBar: true
        });
      });
    </script>
</head>
<body>
<!--Background slider-->
<ul class="cb-slideshow">
     <li><span>Image 01</span></li>
     <li><span>Image 02</span></li>
     <li><span>Image 03</span></li>
     <li><span>Image 04</span></li>
     <li><span>Image 05</span></li>
     <li><span>Image 06</span></li>
     <li><span>Image 07</span></li>
</ul> 
    <div id="container">
        <div id="header-wrapper">
            <div id="header">
                <ul class="nav fleft">
                    <li><a href="#"><img src="<?=$assets?>image/icon/logo.png" alt="Picbox" height="40" /></a></li>
                </ul>
                <ul class="nav fright">
                    <li><input type="text" name="search" placeholder="Search" list='listid'/>
                        <datalist id='listid'>
                            <option label='label1' value='value1'>
                            <option label='label2' value='value2'>
                        </datalist>
                    </li>
                    <li class="apad login"><a href="#">Log in</a>
                        <ul>
                            <li><div class="login-box">
                                    <div class="fleft social-login"><                        
                                        <div><a href="#"><img src="<?=$assets?>image/fb-login.png" width="130" height="30" /></a></div>
                                        <div><a href="#"><img src="<?=$assets?>image/twitter-login.png" width="130" height="30" /></a></div>                                      
                                    </div>
                                    <div class="fright normal-login">
                                        <div class="lfield"><input type="text" name="uname" placeholder="Username/Email" /></div>
                                        <div class="lfield"><input type="password" name="pwd" placeholder="Password" /></div>
                                        <div class="lfield"><input type="checkbox" name="rememver" />&nbsp;Remember</div>
                                        <div class="lfield"><input type="submit" name="submit" value="Log in" /></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="apad"><a href="#" class="signup">Sign up</a></li>
                </ul>
            </div>
        </div>
        <div id="main-wrapper">
            <div id="main">
                <div id="fullpage">
                    <div class="section " id="section0">
                        <div id="carousel">
                            <a href="#"><img src="<?=$assets?>image/pics/1.jpg" id="item-1" width="600"/></a>
                            <a href="#"><img src="<?=$assets?>image/pics/2.jpg" id="item-2" width="600"/></a>
                            <a href="#"><img src="<?=$assets?>image/pics/3.jpg" id="item-3" width="600"/></a>
                            <a href="#"><img src="<?=$assets?>image/pics/4.jpg" id="item-4" width="600"/></a>
                            <a href="#"><img src="<?=$assets?>image/pics/5.jpg" id="item-5" width="600"/></a>
                            <a href="#"><img src="<?=$assets?>image/pics/6.jpg" id="item-6" width="600"/></a>
                            <a href="#"><img src="<?=$assets?>image/pics/7.jpg" id="item-7" width="600"/></a>
                            <a href="#"><img src="<?=$assets?>image/pics/8.jpg" id="item-8" width="600"/></a>
                            <a href="#"><img src="<?=$assets?>image/pics/9.jpg" id="item-9" width="600"/></a>
                        </div>
                    </div>
                    <div class="section" id="section1">
                        
                    </div>
                    <div class="section" id="section2">
                        
                    </div>
                </div>              
            </div>
        </div>
        <div id="footer-wrapper">
            
        </div>
    </div>
</body>
</html>