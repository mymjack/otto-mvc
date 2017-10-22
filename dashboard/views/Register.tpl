<!DOCTYPE html>
<html>
  <?=$head?>

  <body class="fixed-header <?=$body_classes?>">
    <div class="login-wrapper ">
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">
        <!-- START Background Pic-->
        <img src="<?=IMAGEURL?>/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src="<?=IMAGEURL?>/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src-retina="<?=IMAGEURL?>/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" alt="" class="lazy">
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
          <h2 class="semi-bold text-white">
					<?=$text_logo_full?></h2>
          <p class="small">
            <?=$text_copyright?>
          </p>
        </div>
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->
      <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          <!-- <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22"> -->
          <h3 class="m-t-10" style="font-family: 'Raleway'; font-weight:bolder;color:black"><?=$text_register_account?></h3>
          <!-- <p class="p-t-35">Register Your Otto Account</p> -->
          <!-- START Login Form -->
          <form id="registerForm" class="p-t-15" role="form">
            <!-- START Form Control-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group form-group-default">
                  <label><?=$text_first_name?></label>
                  <input type="text" name="fname" id="fname" class="form-control" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group form-group-default">
                  <label><?=$text_last_name?></label>
                  <input type="text" name="lname" id="lname" class="form-control" required>
                </div>
              </div>
            </div>


            <div class="form-group form-group-default">
              <label><?=$text_phone?></label>
              <div class="controls">
                <!-- <input type="text" name="username" value="+1 " class="form-control" required> -->
                <input type="text" name="phone" id="phone" class="form-control" required>
              </div>
            </div>
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label><?=$text_password?></label>
              <div class="controls">
                <input type="password" name="password" id="password" class="form-control" name="password" required>
              </div>
            </div>
            <!-- START Form Control-->
            <div class="row">
              <div class="col-md-12 no-padding sm-p-l-10">
                <div class="checkbox">
                  <input type="checkbox" value="1" id="checkbox-terms" required>
                  <label for="checkbox-terms"><?=$text_agree?><a href="<?=$url_terms?>"><?=$link_terms?></a></label>
                </div>
              </div>
              <div class="col-md-6 no-padding sm-p-l-10">
                <div class="checkbox ">
                  <input type="checkbox" value="1" id="checkbox3">
                  <label for="checkbox3"><?=$text_remember?></label>
                </div>
              </div>
              <!-- <div class="col-md-6 d-flex align-items-center justify-content-end">
                <a href="#" class="text-info small"><?=$text_help?></a>
              </div> -->
            </div>
            <!-- END Form Control-->
          </form>
          <button id="registerButton" class="btn btn-primary btn-cons m-t-10" type="submit">Register</button>
          <!--END Login Form-->
        </div>
      </div>
      <!-- END Login Right Container-->
    </div>

    <!-- BEGIN VENDOR JS -->
    <?=$footer_scripts?>

    <!-- BEGIN VENDOR JS -->
    
    <script>
    $(function(){$('#form-login').validate()});
    $(document).ready(function() {
      $('#registerButton').click(function(){register();});
    });
    </script>
  </body>
</html>
