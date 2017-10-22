<!DOCTYPE html>
<html>
  <?=$head?>
  <body class="pace-dark <?=$body_classes?>">
    <!-- BEGIN HEADER -->
    <?=$header?>
    <!-- END HEADER -->
    <!-- BEGIN JUMBOTRON -->
    <section id="demo-hero-1" class="jumbotron full-vh" data-pages="parallax">
      <div class="inner full-height">
        <!-- BEGIN SLIDER -->
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <!-- BEGIN SLIDE -->
            <div class="swiper-slide fit slide-1">
              <!-- BEGIN IMAGE PARRALAX -->
              <div class="slider-wrapper">
                <div class="bg-image full-width full-height" data-swiper-parallax="30%" data-pages-bg-image="<?=IMAGEURL?>bg_pattern_1.jpg">
                </div>
              </div>
              <!-- END IMAGE PARRALAX -->
              <!-- BEGIN CONTENT -->
              <div class="content-layer">
                <div class="inner full-height">
                  <div class="container-xs-height full-height">
                    <div class="col-xs-height col-middle text-center">
                      <div class="container sm-m-b-30">
                        <div class="row sm-m-b-30">
                          <div class="col-md-6 col-md-offset-3 p-b-90 sm-p-b-40 sm-m-b-30">
                            <h1 class="light text-white sm-no-margin" data-swiper-parallax="-15%">
                                      <a href="estimate_price.php" style="color:white"><?=$text_buy_ticket?></a>
                                        </h1>
                            <a href="estimate_price.php" class="block-title text-white link"><?=$link_estimate?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END CONTENT -->
              <img class="ipad lazy" draggable="false" src="<?=IMAGEURL?>ipad_1.png" alt="" title="" data-swiper-parallax="80%">
              <img class="bg-elements hidden-xs lazy" src="<?=IMAGEURL?>bg_elements_1.png" data-swiper-parallax="-20%" alt="">
            </div>
            <!-- END SLIDE -->
            <!-- BEGIN SLIDE -->
            <div class="swiper-slide fit slide-3">
              <!-- BEGIN IMAGE PARRALAX -->
              <div class="slider-wrapper">
                <div class="bg-image full-width full-height" data-swiper-parallax="30%" data-pages-bg-image="<?=IMAGEURL?>bg_pattern_3.jpg">
                </div>
              </div>
              <!-- END IMAGE PARRALAX -->
              <!-- BEGIN CONTENT -->
              <div class="content-layer">
                <div class="inner full-height">
                  <div class="container-xs-height full-height">
                    <div class="col-xs-height col-middle text-center">
                      <div class="container sm-m-b-30">
                        <div class="row sm-m-b-30">
                          <div class="col-md-6 col-md-offset-3 p-b-90 sm-p-b-40 sm-m-b-30">
                            <h1 class="light text-white sm-no-margin" data-swiper-parallax="-15%">
                                      <a href="register_order.php" style="color:white"><?=$text_send_item?></a>
                                        </h1>
                            <a href="register_order.php" class="block-title text-white link"><?=$link_send_item?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END CONTENT -->
              <img class="ipad lazy" draggable="false" src="<?=IMAGEURL?>ipad_4.png" alt="" title="" data-swiper-parallax="80%">
              <img class="bg-elements hidden-xs lazy" src="<?=IMAGEURL?>bg_elements_3.png" data-swiper-parallax="-20%" alt="">
            </div>
            <!-- END SLIDE -->
            <!-- BEGIN SLIDE -->
            <div class="swiper-slide fit slide-2">
              <!-- BEGIN IMAGE PARRALAX -->
              <div class="slider-wrapper">
                <div class="bg-image full-width full-height" data-swiper-parallax="30%" data-pages-bg-image="<?=IMAGEURL?>bg_pattern_2.jpg">
                </div>
              </div>
              <!-- END IMAGE PARRALAX -->
              <!-- BEGIN CONTENT -->
              <div class="content-layer">
                <div class="inner full-height">
                  <div class="container-xs-height full-height">
                    <div class="col-xs-height col-middle text-center">
                      <div class="container sm-m-b-30">
                        <div class="row sm-m-b-30">
                          <div class="col-md-6 col-md-offset-3 p-b-90 sm-p-b-40 sm-m-b-30">
                            <h1 class="light text-white sm-no-margin" data-swiper-parallax="-15%">
                                      <?=$text_purchase_taobao?>
                                        </h1>
                            <a href="#" class="block-title text-white link"><?=$link_purchase_taobao?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END CONTENT -->
              <img class="ipad lazy" draggable="false" src="<?=IMAGEURL?>ipad_3.png" alt="" title="" data-swiper-parallax="80%">
              <img class="bg-elements hidden-xs lazy" src="<?=IMAGEURL?>bg_elements_2.png" data-swiper-parallax="-20%" alt="">
            </div>
            <!-- END SLIDE -->
          </div>
          <!-- Add Navigation -->
          <div class="swiper-navigation swiper-white-solid swiper-button-prev"></div>
          <div class="swiper-navigation swiper-white-solid swiper-button-next"></div>
        </div>
      </div>
      <!-- END SLIDER -->
    </section>
    <!-- END JUMBOTRON -->
    <!-- BEGIN CONTENT SECTION -->
    <section class="p-b-60 p-t-70">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h6 class="block-title m-b-0"><?=$text_tracking?></h6>
            <h1 class="m-t-5 light"><?=$desc_tracking?></h1>
            <p class="m-t-20"><?=$text_track_order?></p>
            <br>
            <input type="text" style="height:33px;width:40%" placeholder="OTXXXXXXXXXXXXXXXX"><span><button class="btn btn-primary"><?=$button_submit?></button></span>
            <br>
            <img src="<?=IMAGEURL?>arrow_down.png" class="m-t-30" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- END CONTENT SECTION -->
    <!-- START CONTENT SECTION -->
    <section class="p-b-100 p-t-30">
      <div class="container-sm-height">
        <div class="row row-sm-height sm-m-l-15 sm-m-r-15">
          <div class="col-lg-2 col-md-1 hidden-sm"></div>
          <div class="col-sm-6 col-lg-4 col-md-5 col-sm-height col-middle sm-text-center">
            <img class="p-r-40 m-t-10 xs-image-responsive-height sm-no-padding lazy" src="<?=IMAGEURL?>ipad_2.jpg" alt="">
          </div>
          <div class="col-sm-6 col-sm-height col-middle col-lg-4 col-md-4 xs-text-center sm-p-l-30">
            <h1 class="light md-no-margin sm-m-t-30"><?=$text_how_it_works?></h1>
            <!-- <h6 class="block-title m-t-50">1) List your current flight or purchase ticket from us</h6>
            <p class="m-t-15">Our long standing vision has been to bypass the usual admin dashboard structure, and move forward with a more vary and sophisticated yet simple framework </p>
            <p class="muted font-arial small-text m-t-30">A product is accessible when all people&mdash;regardless of ability&mdash;can navigate it,
              <br> understand it, and use it to achieve their goals.</p> -->
            <!-- <h6 class="block-title m-t-50">2) Wait for contact to receive your luggages or items to be delivered</h6> -->
            <!-- <h6 class="block-title m-t-50">3) Finish the delivery and get paid</h6> -->
            <p class="m-t-15"><?=$text_how_it_works_1?></p>
            <p class="m-t-15"><?=$text_how_it_works_2?></p>
            <p class="m-t-15"><?=$text_how_it_works_3?></p>
          </div>
          <div class="col-lg-2 col-md-1 hidden-sm"></div>
        </div>
      </div>
    </section>
    <!-- END CONTENT SECTION -->
    <!-- START CONTENT SECTION -->
    <section id="demo-content-1" class="p-b-100 bg-master-lighter relative" data-pages="parallax">
      <div class="container p-b-50">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
            <div class="text-center relative p-b-100 m-b-70 p-t-40">
              <h6 class="block-title m-t-70 m-b-0"><?=$text_recent?></h6>
              <h1 class="col-sm-12 p-b-10 m-t-5"><?=$desc_recent?></h1>
              <button type="button" class="btn btn-lg btn-primary btn-cons btn-rounded m-t-20"><?=$button_explore?></button>
              <br>
            </div>
          </div>
        </div>
      </div>
      <div class="top-left bottom-right no-overflow full-width full-height">
        <img src="<?=IMAGEURL?>elements_1.png" class="inner lazy" alt="">
      </div>
      <img class="iphone lazy" src="<?=IMAGEURL?>iphone.png" data-pages="float" data-max-top-translate="40" data-max-bottom-translate="40" data-speed="0.1" data-delay="1000" data-curve="ease" alt="">
    </section>
    <!-- END CONTENT SECTION -->
    <!-- START CONTENT SECTION -->
    <section class="p-b-100 p-t-50 m-t-100">
      <div class="container">
        <div class="col-md-8 col-md-offset-2 ">
          <div class="text-center">
            <img src="<?=IMAGEURL?>arrow_down.png" alt="">
            <h5 class="block-title m-t-40 hint-text m-b-0"><?=$text_achievements?></h5>
            <h1 class="light m-t-5"><?=$desc_achievements?></h1>
            <h5 class="hint-text"><?=$text_achievements_2?></h5>
          </div>
          <div class="row m-t-45">
            <div class="col-sm-4">
              <div class="progress progress-small m-t-15">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-pages-animate="progressbar" data-percentage="79%">
                </div>
              </div>
              <h3 class="no-margin"><span data-pages-animate="number" data-value="2000" data-animation-duration="800">0</span>+</h3>
              <p class="font-arial hint-text fs-12"><i class="fa fa-globe" aria-hidden="true"></i> <?=$text_items?>
              </p>
              <p>
              </p>
            </div>
            <div class="col-sm-4">
              <div class="progress progress-small m-t-15">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-pages-animate="progressbar" data-percentage="79%">
                </div>
              </div>
              <h3 class=" no-margin"><span data-pages-animate="number" data-value="120" data-animation-duration="800">0</span>+</h3>
              <p class="font-arial hint-text fs-12"><i class="fa fa-plane" aria-hidden="true"></i> <?=$text_shipments?>
              </p>
              <p>
              </p>
            </div>
            <div class="col-sm-4">
              <div class="progress progress-small m-t-15">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-pages-animate="progressbar" data-percentage="79%">
                </div>
              </div>
              <h3 class=" no-margin"><span data-pages-animate="number" data-value="60" data-animation-duration="800">0</span>%</h3>
              <p class="font-arial hint-text fs-12"><i class="fa fa-money" aria-hidden="true"></i> <?=$text_savings?>
              </p>
              <p>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- END CONTENT SECTION -->
    <!-- START CONTENT SECTION -->
    <section class="p-b-50 p-t-50 bg-master-dark">
      <div class="container p-b-50 p-t-50">
        <div class="text-center">
          <h1 class="text-white col-sm-12 p-b-10"><?=$text_coming_soon?></h1>
        </div>
        <!-- <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="col-xs-height col-middle">
              <div class="text-center">
                <h1 class="text-white col-sm-12 p-b-10">Crafted with detail for a great start!
                        front-end plus back-end.</h1>
                <img src="<?=IMAGEURL?>themeforest_logo.png" class="m-t-5" alt="">
                <p class="fs-12 text-white m-t-30 font-arial"><span class="hint-text">Exclusive only at
                        Envato Marketplace,<br></span> Themeforest See Standard licenses &amp; Extended licenses
                </p>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </section>
    <!-- END CONTENT SECTION -->
    <!-- START FOOTER -->
    <?=$footer?>
    <!-- END FOOTER -->

    <?=$modal_login?>

    <!-- BEGIN VENDOR JS -->
    <?=$footer_scripts?>

    <!-- END PAGES LIB -->
  </body>
</html>
