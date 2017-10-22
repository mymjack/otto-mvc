
<!-- Login Modal -->
<div class="modal fade" id="login-modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-user-circle" aria-hidden="true"></i><?=$text_login?></h4>
            </div>
            <div class="modal-body">
                <form role="form" id="loginForm">
                    <div class="form-group form-group-default m-t-30 ">
                            <label><?=$text_phone?></label>
                            <!-- <input type="text" name="phone" id="phone" class="form-control" value="+1&nbsp;" required> -->
                            <input type="text" name="phone" id="phone" class="form-control" required>
                    </div>
                    <div class="form-group form-group-default ">
                            <label><?=$text_password?></label>
                            <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="checkbox check-primary checkbox-circle m-t-20">
                            <input type="checkbox" value="1" id="checkbox9">
                            <label for="checkbox9"><?=$text_remember?></label>
                            <p style="float:right;text-align:right; font-size:0.9em;"><a href="#"><?=$text_forgot_password?></a></p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" id="loginButton" class="btn btn-primary" data-dismiss="modal" style="width:100%">Log In <i class="fa fa-angle-right" aria-hidden="true"></i></button> -->
                <button type="button" id="loginButton" class="btn btn-primary" style="width:100%;line-height:200%;">Log In <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                <p id="login-border" class="m-t-20"><?=$text_agree?><a href="#"><?=$link_terms?></a></p>
                <p class="m-t-20"><?=$text_no_account?><a href="<?=$url_register?>"><?=$link_register?></a></p>
            </div>
        </div>
    </div>
</div>
<!-- End Login Modal -->

<script type="text/javascript">

    $(document).ready(function() {
        $("#loginButton").click(function(){

            /****************** 2017-09-21 Jack *******************/
            $('#login-failed').css('height',0);

            login({
                success: function(data={}){
                    $wait_time = parseFloat($('.modal').css('transition').match(/\d+(\.\d+)?/)[0]) * 1000 || 150;
                    $('.modal').removeClass('show');
                    setTimeout(function(){
                        window.location.href = data.redirect;
                    }, $wait_time);
                },
                error: function(data={}){
                    if ($('#login-failed').length) $('#login-failed').html(data.message);
                    else $("#loginButton").after($('<p id="login-failed" style="height:0">'+data.message+'</p>'));
                    setTimeout(function(){$('#login-failed').css('height',$('#login-failed')[0].scrollHeight);}, 20);
                }
            });

        });
    });
</script>