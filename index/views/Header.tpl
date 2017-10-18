<nav class="header bg-header transparent-light " data-pages="header" data-pages-header="autoresize" data-pages-resize-class="dark">
    <div class="container relative">
        <!-- BEGIN LEFT CONTENT -->
        <div class="pull-left">
            <!-- .header-inner Allows to vertically Align elements to the Center-->
            <div class="header-inner">
                <!-- BEGIN LOGO -->
                <a href="index.php">
                    <!-- <img src="assets/images/logo_white.png" width="152" height="21" data-src-retina="assets/images/logo_white_2x.png" alt=""> -->
                    <h3 class="m-t-25" style="font-family: 'Raleway'; font-weight:bolder;color:white">OTTO</h3>
                </a>
            </div>
        </div>



        <!-- BEGIN HEADER TOGGLE FOR MOBILE & TABLET -->
        <!-- <div class="pull-right">
            <div class="header-inner">
                <div class="visible-sm-inline visible-xs-inline menu-toggler pull-right p-l-10" data-pages="header-toggle" data-pages-element="#header">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
            </div>
        </div> -->
        <!-- END HEADER TOGGLE FOR MOBILE & TABLET -->





        <!-- BEGIN RIGHT CONTENT -->
        <!-- <div class="pull-right menu-content clearfix" data-pages-direction="slideRight" id="header"> -->
        <div class="pull-right clearfix" id="header">
            <!-- BEGIN HEADER CLOSE TOGGLE FOR MOBILE -->
            <!-- <div class="pull-right">
                <a href="#" class="padding-10 visible-xs-inline visible-sm-inline pull-right m-t-10 m-b-10 m-r-10" data-pages="header-toggle" data-pages-element="#header">
                    <i class=" pg-close_line"></i>
                </a>
            </div> -->
            <!-- END HEADER CLOSE TOGGLE FOR MOBILE -->
            <!-- BEGIN MENU ITEMS -->
            <div class="header-inner">
                <ul class="menu">
                    <li>
                        <?=$user_button?>
                    </li>

                </ul>
            </div>
            <!-- END MENU ITEMS -->
        </div>
    </div>
</nav>

<?=VIEW_RETURN_SIGNAL?>