<!DOCTYPE html>
<html>
    <head>
        <title><?php $this->widgetOutput('headerPosition'); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta http-equiv="imagetoolbar" content="no" />
        <link rel="stylesheet" href="<?php echo $this->getCurrentTemplatePath(); ?>css/style.css" type="text/css" />
        <script type="text/javascript" src="<?php echo $this->getCurrentTemplatePath(); ?>js/jquery-1.4.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $this->getCurrentTemplatePath(); ?>js/jquery.jcarousel.pack.js"></script>
        <script type="text/javascript" src="<?php echo $this->getCurrentTemplatePath(); ?>js/jquery.jcarousel.setup.js"></script>
    </head>
    <body id="top">
        <!-- ####################################################################################################### -->
        <div class="wrapper col1">
            <div id="header">
                <div id="logo">
                    <h1><a href="#"><?php $this->widgetOutput('logoPosition'); ?></a></h1>
                    <p>Free CSS Website Template</p>
                </div>
                <div id="topnav">
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="?task=addcontent">Style Demo</a></li>
                        <li><a href="?task=anyothertask">Full Width</a></li>
                        <li><a href="#">DropDown</a>
                            <ul>
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                            </ul>
                        </li>
                        <li class="last"><a href="#">A Long Link Text</a></li>
                    </ul>
                </div>
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col2">
            <div id="featured_slide">
                <div id="featured_content">
                    <ul>
                        <li><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/demo/1.gif" alt="" />
                            <div class="floater">
                                <h2>About This Template !</h2>
                                <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
                                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                            </div>
                        </li>
                        <li><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/demo/2.gif" alt="" />
                            <div class="floater">
                                <h2>Cursus penati saccum ut curabitur nulla.</h2>
                                <p>Temperinte interdum sempus odio urna eget curabitur semper convallis nunc laoreet. Nullain convallis ris elis vest liberos nis diculis feugiat in rutrum. Suspendreristibulumfaucibulum lobortor quis tortortor ris sapien sce enim et volutpat sus. Urnaretiumorci orci fauctor leo justo nulla cras ridiculum&hellip;</p>
                                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                            </div>
                        </li>
                        <li><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/demo/3.gif" alt="" />
                            <div class="floater">
                                <h2>Cursus penati saccum ut curabitur nulla.</h2>
                                <p>Temperinte interdum sempus odio urna eget curabitur semper convallis nunc laoreet. Nullain convallis ris elis vest liberos nis diculis feugiat in rutrum. Suspendreristibulumfaucibulum lobortor quis tortortor ris sapien sce enim et volutpat sus. Urnaretiumorci orci fauctor leo justo nulla cras ridiculum&hellip;</p>
                                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="javascript:void(0);" id="featured-item-prev"><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/prev.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/next.png" alt="" /></a> </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col3">
            <div id="container">
                <div class="homepage">
                    <?php echo $this->appOutput(); ?>
                    <!--
                    <ul>
                        <li>
                            <h2><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/demo/60x60.gif" alt="" />Nullamlacus dui ipsum conseque loborttis</h2>
                            <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
                            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                        </li>
                        <li>
                            <h2><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/demo/60x60.gif" alt="" />Nullamlacus dui ipsum conseque loborttis</h2>
                            <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
                            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                        </li>
                        <li class="last">
                            <h2><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/demo/60x60.gif" alt="" />Nullamlacus dui ipsum conseque loborttis</h2>
                            <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
                            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                        </li>
                    </ul>
                    -->
                    <br class="clear" />
                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col4">
            <div id="footer">
                <div class="box1">
                    <h2>A Little Company Information !</h2>
                    <img class="imgl" src="<?php echo $this->getCurrentTemplatePath(); ?>images/demo/imgl.gif" alt="" />
                    <p><?php $this->widgetOutput('sidebarPosition'); ?></p>
                </div>
                <div class="box contactdetails">
                    <h2>Our Contact Details !</h2>
                    <ul>
                        <li>Company Name</li>
                        <li>Street Name &amp; Number</li>
                        <li>Town</li>
                        <li>Postcode/Zip</li>
                        <li>Tel: xxxxx xxxxxxxxxx</li>
                        <li>Fax: xxxxx xxxxxxxxxx</li>
                        <li>Email: info@domain.com</li>
                        <li class="last">LinkedIn: <a href="#">Company Profile</a></li>
                    </ul>
                </div>
                <div class="box flickrbox">
                    <h2>Latest Flickr Images !</h2>
                    <div class="wrap">
                        <div class="fix"></div>
                        <div class="flickr_badge_image" id="flickr_badge_image1"><a href="#"><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/demo/80x80.gif" alt="" /></a></div>
                        <div class="flickr_badge_image" id="flickr_badge_image2"><a href="#"><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/demo/80x80.gif" alt="" /></a></div>
                        <div class="flickr_badge_image" id="flickr_badge_image3"><a href="#"><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/demo/80x80.gif" alt="" /></a></div>
                        <div class="flickr_badge_image" id="flickr_badge_image4"><a href="#"><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/demo/80x80.gif" alt="" /></a></div>
                        <div class="flickr_badge_image" id="flickr_badge_image5"><a href="#"><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/demo/80x80.gif" alt="" /></a></div>
                        <div class="flickr_badge_image" id="flickr_badge_image6"><a href="#"><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/demo/80x80.gif" alt="" /></a></div>
                        <div class="fix"></div>
                    </div>
                </div>
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col5">
            <div id="copyright">
                <p class="fl_left">Copyright &copy; 2011 - All Rights Reserved - <a href="#">Domain Name</a></p>
                <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
                <br class="clear" />
            </div>
        </div>
    </body>
</html>
