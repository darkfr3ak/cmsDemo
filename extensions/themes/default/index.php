<!DOCTYPE html>
<html>
    <head>
        <title><?php $this->widgetOutput('headerPosition'); ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="<?php echo $this->getCurrentTemplatePath(); ?>css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="main">
            <div class="header">
                <div class="header_resize">
                    <div class="logo">
                        <h1><a href="index.php"><span><?php $this->widgetOutput('logoPosition'); ?></span> <small>put your slogan here</small></a></h1>
                    </div>
                    <nav>
                        <div class="menu_nav">
                            <?php
                            $menu = $this->generateMenu();
                            echo $menu->asUl(['class' => '']);
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="content">
                <div class="content_resize">
                    <div class="mainbar">
                        <?php echo $this->appOutput(); ?>
                        <!--
                        <div class="article">
                            <p class="date">aug<span>28</span></p>
                            <h2><span>Template License</span></h2>
                            <p>Posted by <a href="#">Owner</a> &nbsp;|&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a></p>
                            <img src="<?php echo $this->getCurrentTemplatePath(); ?>images/img1.jpg" width="605" height="197" alt="" />
                            <p>This is a free CSS website template by FreeWebsiteTemplateZ.com. This work is distributed under the Creative Commons Attribution 3.0 License, which means that you are free to use it for any personal or commercial purpose provided you credit me in the form of a link back to FreeWebsiteTemplateZ.com.</p>
                            <p class="spec"><a href="#" class="rm">Read more</a> &nbsp;||&nbsp; <a href="#" class="com">Comments (3)</a></p>
                        </div>
                        <div class="article">
                            <p class="date">aug<span>27</span></p>
                            <h2><span>Lorem Ipsum</span> Dolor Sit</h2>
                            <p>Posted by <a href="#">Owner</a> &nbsp;|&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a></p>
                            <img src="<?php echo $this->getCurrentTemplatePath(); ?>images/img2.jpg" width="605" height="197" alt="" />
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</a> Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam.</p>
                            <p>Aenean commodo elit ac ante dignissim iaculis sit amet non velit. Donec magna sapien, molestie sit amet faucibus sit amet, fringilla in urna. Aliquam erat volutpat. Fusce a dui est. Sed in volutpat elit. Nam odio tortor, pulvinar non scelerisque in, eleifend nec nunc. Sed pretium, massa sed dictum dapibus, nibh purus posuere magna, ac porta felis lectus ut neque. Nullam sagittis ante vitae velit facilisis lacinia. Cras vehicula lacinia ornare. Duis et cursus risus. Curabitur consectetur justo sit amet odio viverra vel iaculis odio gravida. Ut imperdiet metus nec erat.</p>
                            <p class="spec"><a href="#" class="rm">Read more</a> &nbsp;||&nbsp; <a href="#" class="com">Comments (7)</a></p>
                        </div>
                        <p class="pages"><small>Page 1 of 2 &nbsp;&nbsp;&nbsp;</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
                        -->
                    </div>
                    <div class="sidebar">
                        <div class="searchform">
                            <form id="formsearch" name="formsearch" method="post" action="#">
                                <span>
                                    <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
                                </span>
                                <input name="button_search" src="<?php echo $this->getCurrentTemplatePath(); ?>images/search_btn.gif" class="button_search" type="image" />
                            </form>
                        </div>
                        <div class="gadget">
                            <h2 class="star"><span>Sidebar</span> Menu</h2>
                            <div class="clr"></div>
                            <ul class="sb_menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">TemplateInfo</a></li>
                                <li><a href="#">Style Demo</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Archives</a></li>
                            </ul>
                        </div>
                        <div class="gadget">
                            <h2 class="star"><span>Twitter</span></h2>
                            <div class="clr"></div>
                            <?php $this->widgetOutput('sidebarPosition'); ?>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="fbg">
                <div class="fbg_resize">
                    <div class="col c1">
                        <h2><span>Image Gallery</span></h2>
                        <a href="#"><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/pix1.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/pix2.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/pix3.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/pix4.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/pix5.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="<?php echo $this->getCurrentTemplatePath(); ?>images/pix6.jpg" width="58" height="58" alt="" /></a> </div>
                    <div class="col c2">
                        <h2><span>Lorem Ipsum</span></h2>
                        <p>Lorem ipsum dolor<br />
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam</a>, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
                    </div>
                    <div class="col c3">
                        <h2><span>About</span></h2>
                        <img src="<?php echo $this->getCurrentTemplatePath(); ?>images/white.jpg" width="56" height="56" alt="" />
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. llorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum. <a href="#">Learn more...</a></p>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="footer">
                <div class="footer_resize">
                    <p class="lf">Copyright &copy; <a href="#">Domain Name</a>. All Rights Reserved</p>
                    <p class="rf">Design by <a target="_blank" href="http://www.freewebsitetemplatez.com/">FreeWebsiteTemplatez</a></p>
                    <div class="clr"></div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="<?php echo $this->getCurrentTemplatePath(); ?>js/cufon-yui.js"></script>
    <script type="text/javascript" src="<?php echo $this->getCurrentTemplatePath(); ?>js/arial.js"></script>
    <script type="text/javascript" src="<?php echo $this->getCurrentTemplatePath(); ?>js/cuf_run.js"></script>
</html>
