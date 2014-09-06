<!DOCTYPE html>
<!--
Copyright (C) 2014 darkfr3ak <info at darkfr3ak.de>

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
-->
<html>
    <head>
        <title><?php $this->widgetOutput('headerPosition'); ?></title>
        <link type='text/css' rel='stylesheet' href='<?php echo $this->getCurrentTemplatePath(); ?>css/style.css' />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="navi">
            <ul>
                <div id="left">
                    <li><a href="./">Startseite</a></li>
                    <li><a href="?task=addcontent">Registration</a></li>
                    <li><a href="?s=downloads">Downloads</a></li>
                </div>

                <div id="right">
                    <li><a href="?s=ranking_chars">Rangliste</a></li>
                    <li><a href="./">Youtube</a></li>
                    <li><a href="./forum" target="_blank">Community</a></li>
                </div>
            </ul>
        </div>

        <a href="./"><div id="header"></div></a>
        <div id="container_top">	  </div>
        <div id="container_mid">

            <div id="sidebar-l">
                <div class="sb-top">Userpanel</div>
                <div class="sb-mid">
                    <form id="userInfo" action="index.php?s=login" method="POST" style="text-align:center; margin-left:18px;">
                        <input type="text" maxlength="16" size="10" name="userid" class="id" onFocus="if (this.value == 'Account-ID')
                                    this.value = '';" onBlur="if (this.value == '')
                                                this.value = 'Account-ID';" value="Account-ID">
                        <input type="password" maxlength="16" size="10" name="userpass" class="pw" onFocus="if (this.value == 'Passwort')
                                    this.value = '';" onBlur="if (this.value == '')
                                                this.value = 'Passwort';" value="Passwort"><br/>
                        <div class="login_btn">
                            <input type="submit" value="Login" name="submit"> 
                        </div><br>
                        <div class="pw">
                            <a href="index.php?s=lostpw">Passwort vergessen</a>
                        </div>
                    </form>
                </div>

                <div class="sb-bot"></div>

                </br>

                <a href="?s=downloads" id="download"></a>
                <a href="./forum" id="community"></a>

                </br>

                <div class="sb-top">Serverstatus</div>
                <div class="sb-mid">
                    <div id="sidebar_main_rank">
                        <?php $this->widgetOutput('sidebarPosition'); ?>
                    </div>
                </div>

                <div class="sb-bot"></div>

                </br>

                <div class="sb-top">Newsbox</div>
                <div class="sb-mid">
                    <div id="mid_text">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren 
                    </div>
                </div>

                <div class="sb-bot"></div>


            </div>



            <div id="sidebar-r">

                <div class="sb-top">Top 5 Player</div>
                <div class="sb-mid">
                    <div id="sidebar_main_rank">
                        <?php $this->widgetOutput('logoPosition'); ?>
                    </div>
                </div>
                <div class="sb-bot">
                    <a href="?s=ranking_chars" style="margin-left:43px;">» Komplette Rangliste</a>
                </div>

                </br>

                <a href="?s=vote" id="vote"></a>
                <a href="./ts3" id="ts3"></a>

                </br>

                <div class="sb-top">Trailer</div>
                <div class="sb-mid">
                    <div id="mid">
                        <iframe width="190" height="200" src="//www.youtube.com/embed/CYwDJjsmQX4" frameborder="0" allowfullscreen></iframe> </div>
                </div>

                <div class="sb-bot"></div>

                </br>

                <div class="sb-top">Shortcuts</div>
                <div class="sb-mid">
                    <div id="mid_text">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren </div>
                </div>

                <div class="sb-bot"></div>


                <a href="http://vgm-designs.de" target="_blank"><div id="partner"></div></a>


            </div>



            <div id="content">
                <?php echo $this->appOutput(); ?>
                <br><br><br><br><br>
            </div>

            <div class="clear"></div>

        </div>
        <div id="container_bot">	  </div>

        <br/>
        <div id="footer">
            Copyright © 2014 - Polaria  </br>
            All rights reserved  </br>
            Design & Code by <a href="http://www.elitepvpers.com/forum/trading/2671748-service-shop-vgm-designs-webdesigns-more.html" target="_blank">DarkBozZ</a>. </br>

        </div>
    </body>
</html>