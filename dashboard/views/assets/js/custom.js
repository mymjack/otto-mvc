// $(".menu-items a").on("click", function() {
//   $(".menu-items").find("li > .icon-thumbnail").removeClass("bg-success");
//   $(this).parent().addClass("bg-success");
// });

$(".menu-items>li").each(function() {
    var navItem = $(this);
    if (navItem.find("a").attr("href") == location.pathname.replace(/^.*[\\\/]/, '')) {
      navItem.find(".icon-thumbnail").addClass("bg-success");
    } else if (location.pathname.replace(/^.*[\\\/]/, '') == "buy_flight.php") {
      if (navItem.find("a").attr("href") == "flights.php") {
        navItem.find(".icon-thumbnail").addClass("bg-success");
      }
    } else if (location.pathname.replace(/^.*[\\\/]/, '') == "register_flight.php") {
      if (navItem.find("a").attr("href") == "flights.php") {
        navItem.find(".icon-thumbnail").addClass("bg-success");
      }
    } else if (location.pathname.replace(/^.*[\\\/]/, '') == "register_shipment.php") {
      if (navItem.find("a").attr("href") == "shipments.php") {
        navItem.find(".icon-thumbnail").addClass("bg-success");
      }
    } else if (location.pathname.replace(/^.*[\\\/]/, '') == "register_order.php") {
      if (navItem.find("a").attr("href") == "orders.php") {
        navItem.find(".icon-thumbnail").addClass("bg-success");
      }
    }
});


$('#language').change(function(e) {
  e.preventDefault();
  y = $(this).val();

  $.ajax({
   url: 'server/change_language.php?lang=' + y,
   type: 'POST',
   success: function(data){
     console.log(data);
     if (y == 'ch'){
       window.location.href = "../ch/dashboard/index.php";
     } else {
       window.location.reload();
     }
   }
   });
});

// $('#nameDropdown').click(function(){
//
// })

$('#buyFlight').click(function(){
  window.location.href = "buy_flight.php";
})

$('#createFlight').click(function(){
  window.location.href = "register_flight.php";
})

$('#createShipment').click(function(){
  window.location.href = "register_shipment.php";
})

$('#createOrder').click(function(){
  window.location.href = "register_order.php";
})

function buyFlight() {
  $.ajax({
    url: 'server/buy_flight_form.php',
     type: "POST",
    data: $('#flightInfo').serialize() + '&' +
          $('#userInfo').serialize() +
          '&finalPrice=' + $('#savingsSummary').html(),
    success: function(result) {
      data = JSON.parse(result);
      if (data.status == 'success') {
        window.location.href = "flights.php";
      } else {
        return false;
      }
    }
  });
}

function registerFlight() {
  $.ajax({
    url: 'server/register_flight_form.php',
     type: "POST",
    data: $('#depInfo').serialize() + '&' +
          $('#arriInfo').serialize() + '&' +
          $('#pricingInfo').serialize(),
    success: function(result) {
      data = JSON.parse(result);
      if (data.status == 'success') {
        window.location.href = "flights.php";
      } else {
        return false;
      }
    }
     });
};

function itemSummary() {
	$items = [];
	$('#items > div').each(function(){
		$item = {};
		$(this).find('input[type!=file]').each(function(){
			$item[$(this).attr('name')] = $(this).val();
		});
		$items.push($item);
	});
	return $items;
};

function registerShipment() {
  var items = itemSummary();
  $.ajax({
    url: 'server/register_shipment_form.php',
    type: 'POST',
    data: $('#senderInfo').serialize() + '&' +
          $('#receiverInfo').serialize() + '&items=' + JSON.stringify($items),
    success: function(result) {
      data = JSON.parse(result);
      if (data.status == 'success') {
        window.location.href = "shipments.php";
      } else {
        document.getElementById("testResult").innerHTML = "2";
      }
    }
  })
};



// Adds an empty row for item information
var itemIdCounter = 0;
function addItem() {

	var newItem = $('#item-template').clone()
    .attr('id', "Item #" + ++itemIdCounter)
    .removeClass('hidden');
  newItem.find('.itemNumber').text(newItem.attr('id'));
  $('#items').append(newItem);

  return false;
};

function getAirport(code) {
    switch (code) {
      case 'YYZ':
        airport = "YYZ - Toronto Pearson Airport";
        break;
      case 'YTZ':
        airport = "YTZ - Billy Bishop Airport";
        break;
      case 'SHA':
        airport = "SHA - Shanghai Pudong Airport";
        break;
      case 'PEK':
        airport = "PEK - Beijing Capital Airport";
        break;
  }
  return airport;
}


function headsUp($title, $msg, $footer='', $id='', $class='', $time=4000) {
  $id = $id || $.now();
  $('body').append($('<div class="modal fade '+($class? $class:'')+'" id="'+$id+'" role="dialog" aria-hidden="false">\
    <div class="modal-dialog">\
      <!-- Modal content-->\
      <div class="modal-content">'+ ($title ?
        '<div class="modal-header"><h3>\
          '+$title+
        '</h3></div>' : '') +
        '<div class="modal-body">\
          '+$msg+
        '</div>\
        <div class="modal-footer">\
          '+($footer? $footer:'<button class="btn btn-success btn-cons btn-animated from-left \
            fa fa-check pull-right" onclick="dismissHeadsUp($(\'#'+$id+'\'))"><span>Ok</span></button>')+
        '</div>\
      </div>\
    </div>\
  </div>'));
  showHeadsUp($('#'+$id));

  if ($time > 0) {
    setTimeout(function(){dismissHeadsUp($('#'+$id));}, $time);
  }
}

var modal_active = false;
function showHeadsUp($modal) {

  if (!$('.modal-backdrop').length) {
    $('body').append($('<div class="modal-backdrop fade"></div>'));
  }

  $modal.css('display','block');
  setTimeout(function(){
    $modal.addClass('in');
  }, 20);

  if (!modal_active) {
    $('.modal-backdrop').css('display','block');
    setTimeout(function(){
      $('.modal-backdrop').addClass('in');
    }, 20);
  }

  $modal_active = true;
}

function dismissHeadsUp($modal) {
  $modal.removeClass('in');
  $('.modal-backdrop').removeClass('in');

  setTimeout(function(){
    $modal.remove();
    $('.modal-backdrop').css('display','none');
    $modal_active = false;
  }, 520);
}
