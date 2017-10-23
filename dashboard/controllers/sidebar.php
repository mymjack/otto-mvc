<?php
  if(isset($_SESSION['login_id'])){
    $resultFlight = mysqli_query($db, "SELECT count(*) AS total FROM flights WHERE u_id = '".$_SESSION['login_id']."' ");
    $resultTicket = mysqli_query($db, "SELECT count(*) AS total FROM tickets WHERE u_id = '".$_SESSION['login_id']."' ");
    $resultShipment = mysqli_query($db, "SELECT count(*) AS total FROM shipments WHERE senderID = '".$_SESSION['login_id']."'");
    // $resultOrder = mysqli_query($db, "SELECT count(*) AS total FROM orders WHERE userID = '".$_SESSION['login_id']."'");

    $flightNum = mysqli_fetch_assoc($resultFlight);
    $ticketNum = mysqli_fetch_assoc($resultTicket);
    $shipmentNum = mysqli_fetch_assoc($resultShipment);
    // $orderNum = mysqli_fetch_assoc($resultDel);
    $totalNum = $flightNum['total'] + $ticketNum['total'];
  }
?>

<nav class="page-sidebar" data-pages="sidebar">
  <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
  <div class="sidebar-overlay-slide from-top" id="appMenu">
    <div class="row">
      <div class="col-xs-6 no-padding">
        <a href="#" class="p-l-40"><img src="assets/img/demo/social_app.svg" alt="socail">
        </a>
      </div>
      <div class="col-xs-6 no-padding">
        <a href="#" class="p-l-10"><img src="assets/img/demo/email_app.svg" alt="socail">
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6 m-t-20 no-padding">
        <a href="#" class="p-l-40"><img src="assets/img/demo/calendar_app.svg" alt="socail">
        </a>
      </div>
      <div class="col-xs-6 m-t-20 no-padding">
        <a href="#" class="p-l-10"><img src="assets/img/demo/add_more.svg" alt="socail">
        </a>
      </div>
    </div>
  </div>
  <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
  <!-- BEGIN SIDEBAR MENU HEADER-->
  <div class="sidebar-header">
    <img src="assets/img/logo_white.png" alt="logo" class="brand" data-src="assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22" style="visibility:hidden">

    <div class="sidebar-header-controls">
      <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20 hidden-md-down" data-pages-toggle="#appMenu" style="visibility: hidden;"><i class="fa fa-angle-down fs-16"></i>
      </button>
      <button type="button" class="btn btn-link hidden-md-down" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
      </button>
    </div>
  </div>
  <!-- END SIDEBAR MENU HEADER-->


  <!-- START SIDEBAR MENU -->
  <div class="sidebar-menu">
    <!-- BEGIN SIDEBAR MENU ITEMS-->
    <ul class="menu-items">
      <li class="m-t-30 ">
        <a href="index.php">
          <span class="title">Dashboard</span>
        </a>
        <span class="icon-thumbnail"><i class="pg-home"></i></span>
      </li>
      <li class="">
        <a href="flights.php" class="detailed">
          <span class="title">My Flights</span>
          <span class="details"><?php echo $totalNum; ?> flights</span>
        </a>
        <span class="icon-thumbnail"><i class="fa fa-plane"></i></span>
      </li>
      <li class="">
        <a href="shipments.php" class="detailed">
          <span class="title">My Shipments</span>
          <span class="details"><?php echo $shipmentNum['total']; ?> shipments</span>
        </a>
        <span class="icon-thumbnail"><i class="fa fa-truck"></i></span>
      </li>
      <li class="">
        <a href="orders.php" class="detailed">
          <span class="title">My Orders</span>
          <span class="details">2 orders</span>
        </a>
        <span class="icon-thumbnail"><i class="pg-bag"></i></span>
      </li>
      <li class="">
        <a href="setting.php">
          <span class="title">Setting</span>
        </a>
        <span class="icon-thumbnail"><i class="pg-settings_small_1"></i></span>
      </li>
      <li class="">
        <a href="../server/logout.php">
          <span class="title">Log out</span>
        </a>
        <span class="icon-thumbnail"><i class="pg-power"></i></span>
      </li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!-- END SIDEBAR MENU -->
</nav>

<script type="text/javascript">
/****************** 2017-09-21 Jack *******************/
  // Append a href to all icons. No jQuery at this point
  var icons = document.getElementsByClassName('icon-thumbnail');
  for (var i = icons.length - 1; i >= 0; i--) {
    if (icons[i].previousElementSibling.tagName.toLowerCase() == 'a') {
      var a = document.createElement('a');
      a.href = icons[i].previousElementSibling.href;
      a.className='icon-after';
      icons[i].appendChild(a);
    }
  }
</script>
