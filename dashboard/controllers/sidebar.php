<?php
  // include("../utils.php");
  // configSession();

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sidebar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public function index()
    {

        // if( !isset($_SESSION['login_id'])){
        //     // Redirect to log in
        //     return;
        // }

        // Load language
        $this->load->lang('Sidebar', 'en-gb');
        $data = array();

        // $this->load->model('flight');
        // $this->load->model('order');
        // $this->load->model('item');
        // $data['flight_count'] = $this->model_flight->getTotalFlights();
        // $data['order_count'] = $this->model_order->getTotalOrders();
        // $data['item_count'] = $this->model_item->getTotalItems();
        $data['flight_count'] = 0;
        $data['order_count'] = 0;
        $data['item_count'] = 0;

        $data['menus'] = array();
        $data['menus'][] = array(
            'title'       => $this->lang->line('link_dashboard'),
            'href'        => APPURL,
            'padding_top' => true,
            'icon'        => 'pg-home',
            'active'      => true
        );
        $data['menus'][] = array(
            'title'       => $this->lang->line('link_flights'),
            'href'        => APPURL . 'flights',
            'details'      => $data['flight_count']. ' ' . $this->lang->line('text_flights'),
            'padding_top' => true,
            'icon'        => 'fa fa-plane'
        );
        $data['menus'][] = array(
            'title'       => $this->lang->line('link_orders'),
            'href'        => APPURL . 'orders',
            'details'      => $data['order_count']. ' ' . $this->lang->line('text_orders'),
            'icon'        => 'fa fa-truck'
        );
        $data['menus'][] = array(
            'title'       => $this->lang->line('link_items'),
            'href'        => APPURL . 'items',
            'details'      => $data['item_count']. ' ' . $this->lang->line('text_items'),
            'icon'        => 'pg-bag'
        );
        $data['menus'][] = array(
            'title'       => $this->lang->line('link_settings'),
            'href'        => APPURL  . 'settings',
            'padding_top' => true,
            'icon'        => 'pg-settings_small_1'
        );
        $data['menus'][] = array(
            'title'       => $this->lang->line('link_logout'),
            'href'        => APPURL . 'logout',
            'icon'        => 'pg-power'
        );

        return $this->load->view('Sidebar', $data, true);
    }
}

// <-?php
  // if(isset($_SESSION['login_id'])){
  //   $resultFlight = mysqli_query($db, "SELECT count(*) AS total FROM flights WHERE u_id = '".$_SESSION['login_id']."' ");
  //   $resultTicket = mysqli_query($db, "SELECT count(*) AS total FROM tickets WHERE u_id = '".$_SESSION['login_id']."' ");
  //   $resultShipment = mysqli_query($db, "SELECT count(*) AS total FROM shipments WHERE senderID = '".$_SESSION['login_id']."'");
  //   // $resultOrder = mysqli_query($db, "SELECT count(*) AS total FROM orders WHERE userID = '".$_SESSION['login_id']."'");

  //   $flightNum = mysqli_fetch_assoc($resultFlight);
  //   $ticketNum = mysqli_fetch_assoc($resultTicket);
  //   $shipmentNum = mysqli_fetch_assoc($resultShipment);
  //   // $orderNum = mysqli_fetch_assoc($resultDel);
  //   $totalNum = $flightNum['total'] + $ticketNum['total'];
  // }
// ?->


// <li class="m-t-30 ">
      //   <a href="index.php">
      //     <span class="title">Dashboard</span>
      //   </a>
      //   <span class="icon-thumbnail"><i class="pg-home"></i></span>
      // </li>
      // <li class="">
      //   <a href="flights.php" class="detailed">
      //     <span class="title">My Flights</span>
      //     <span class="details">0 flights</span>
      //   </a>
      //   <span class="icon-thumbnail"><i class="fa fa-plane"></i></span>
      // </li>
      // <li class="">
      //   <a href="shipments.php" class="detailed">
      //     <span class="title">My Shipments</span>
      //     <span class="details">0 shipments</span>
      //   </a>
      //   <span class="icon-thumbnail"><i class="fa fa-truck"></i></span>
      // </li>
      // <li class="">
      //   <a href="orders.php" class="detailed">
      //     <span class="title">My Orders</span>
      //     <span class="details">2 orders</span>
      //   </a>
      //   <span class="icon-thumbnail"><i class="pg-bag"></i></span>
      // </li>
      // <li class="">
      //   <a href="setting.php">
      //     <span class="title">Setting</span>
      //   </a>
      //   <span class="icon-thumbnail"><i class="pg-settings_small_1"></i></span>
      // </li>
      // <li class="">
      //   <a href="../server/logout.php">
      //     <span class="title">Log out</span>
      //   </a>
      //   <span class="icon-thumbnail"><i class="pg-power"></i></span>
      // </li>

