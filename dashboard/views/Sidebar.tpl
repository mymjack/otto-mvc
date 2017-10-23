<!-- BEGIN SIDEBAR -->
<nav class="page-sidebar" data-pages="sidebar">
  
  <!-- BEGIN SIDEBAR MENU HEADER-->
  <div class="sidebar-header">
    <img src="<?=IMAGECOMMONURL?>logos/logo_white.png" alt="OTTO" class="brand" data-src="<?=IMAGECOMMONURL?>logos/logo_white.png" data-src-retina="<?=IMAGECOMMONURL?>logos/logo_white_2x.png" width="78" >

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

      <?php  foreach ($menus as $menu) { ?>
          <li class="<?php if (isset($menu['padding_top']) && $menu['padding_top']) { ?> m-t-30 <?php } ?>
            <?php if (isset($menu['active']) && $menu['active']) { ?> active <?php } ?>
          ">
            <a href="<?=$menu['href']?>" class="<?php if (isset($menu['details'])) { ?> detailed <?php } ?>">
              <span class="title"><?=$menu['title']?></span>
              <?php if (isset($menu['details'])) { ?>
                <span class="details"><?=$menu['details']?></span>
              <?php } ?>
            </a>
            <span class="icon-thumbnail"><i class="<?=$menu['icon']?>"></i></span>
          </li>
      <?php } ?>

    </ul>
    <div class="clearfix"></div>
  </div>
  <!-- END SIDEBAR MENU -->
</nav>
<!-- END SIDEBAR -->

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