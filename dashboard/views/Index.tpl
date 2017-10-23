<!DOCTYPE html>
<html>
  <?=$head?>
  <body class="fixed-header <?=$body_classes?>">
    <!-- BEGIN SIDEBPANEL-->
    <?=$sidebar?>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      
      <?=$header?>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid padding-25 sm-padding-10">
            <!-- START ROW -->
            <div class="row">
              <div class="col-lg-9 col-xlg-6">
                <div class="row">


                  <div class="col-sm-4 m-b-10">
                    <div class="ar-1-2" id="flightButton" style="cursor: pointer;">
                      <!-- START WIDGET widget_imageWidgetBasic-->
                      <div class="widget-flights card no-border bg-primary widget widget-loader-circle-lg no-margin">
                        <div class="card-header ">
                          <div class="card-controls">
                            <ul>
                              <li><a href="#" class="card-refresh" data-toggle="refresh"><i class="card-icon card-icon-refresh-lg-white"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>

                        <div class="card-block">
                          <div class="pull-bottom bottom-left bottom-right padding-25">
                            <span class="label font-montserrat fs-11">FLIGHT</span>
                            <br>
                            <h3 class="text-white">Your Flights</h3>
                            <p class="text-white hint-text hidden-lg-down">Receive 50% Off Your Flights At Otto!</p>
                          </div>
                        </div>
                      </div>
                      <!-- END WIDGET -->
                    </div>
                  </div>

                  <div class="col-sm-4 m-b-10">
                    <div class="ar-1-2" id="itemButton" style="cursor: pointer;">
                      <!-- START WIDGET widget_imageWidgetBasic-->
                      <div class="widget-shipments card no-border bg-primary widget widget-loader-circle-lg no-margin">
                        <div class="card-header ">
                          <div class="card-controls">
                            <ul>
                              <li><a href="#" class="card-refresh" data-toggle="refresh"><i class="card-icon card-icon-refresh-lg-white"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>

                        <div class="card-block">
                          <div class="pull-bottom bottom-left bottom-right padding-25">
                            <span class="label font-montserrat fs-11">SHIPMENT</span>
                            <br>
                            <h3 class="text-white">Your Shipments</h3>
                            <p class="text-white hint-text hidden-lg-down">Send Items To China Or Receive Goods With Low Price And High Speed.</p>
                          </div>
                        </div>
                      </div>
                      <!-- END WIDGET -->
                    </div>
                  </div>



                  <div class="col-sm-4 m-b-10">
                    <div class="ar-1-2" id="orderButton" style="cursor: pointer;">
                      <!-- START WIDGET widget_imageWidgetBasic-->
                      <div class="widget-orders card no-border bg-primary widget widget-loader-circle-lg no-margin">
                        <div class="card-header ">
                          <div class="card-controls">
                            <ul>
                              <li><a href="#" class="card-refresh" data-toggle="refresh"><i class="card-icon card-icon-refresh-lg-white"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>

                        <div class="card-block">
                          <div class="pull-bottom bottom-left bottom-right padding-25">
                            <span class="label font-montserrat fs-11">ORDER</span>
                            <br>
                            <h3 class="text-white">Your Orders</h3>
                            <p class="text-white hint-text hidden-lg-down">Purchase Taobao, Tmall Items With Ease.</p>
                          </div>
                        </div>
                      </div>
                      <!-- END WIDGET -->
                    </div>
                  </div>


                </div>
              </div>
            </div>
            <!-- END ROW -->
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->

        <!-- START FOOTER -->
        <?=$footer?>
        <!-- END FOOTER -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- BEGIN VENDOR JS -->
    <?=$footer_scripts?>
    <!-- END VENDOR JS -->
    <script>
      $('#flightButton').click(function(){
        window.location.href = "<?=$url_flights?>";
      })
      $('#itemButton').click(function(){
        window.location.href = "<?=$url_shipments?>";
      })
      $('#orderButton').click(function(){
        window.location.href = "<?=$url_orders?>";
      })
    </script>
    <!-- END CUSTOM JS -->
  </body>
</html>
