<?php

class Login extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public function index()
    {

?>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-user-circle" aria-hidden="true"></i> Log In</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="loginForm">
                    <div class="form-group form-group-default m-t-30 ">
                            <label>Phone</label>
                            <!-- <input type="text" name="phone" id="phone" class="form-control" value="+1&nbsp;" required> -->
                            <input type="text" name="phone" id="phone" class="form-control" required>
                    </div>
                    <div class="form-group form-group-default ">
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="checkbox check-primary checkbox-circle m-t-20">
                            <input type="checkbox" value="1" id="checkbox9">
                            <label for="checkbox9">Remember me</label>
                            <p style="float:right;text-align:right; font-size:0.9em;"><a href="#">Forgot Password?</a></p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" id="loginButton" class="btn btn-primary" data-dismiss="modal" style="width:100%">Log In <i class="fa fa-angle-right" aria-hidden="true"></i></button> -->
                <button type="button" id="loginButton" class="btn btn-primary" style="width:100%;line-height:200%;">Log In <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                <p id="login-border" class="m-t-20">By using Otto services, I agree to <a href="#">Terms & Services</a></p>
                <p class="m-t-20">No account? <a href="dashboard/register.php">Register</a></p>
            </div>
        </div>
    </div>
</div>

<?php

    }
}
?>