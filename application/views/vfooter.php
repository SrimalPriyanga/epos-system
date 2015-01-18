        <div class="footer"> <!--Footer bar start-->
            <div class="col-lg-7 col-md-7 col-xs-7">
                <p>Best of India Manage Version 1.0 - Best of India &COPY; <?php echo date("Y")?></p>
            </div>
            <div class="col-lg-5 col-md-5 col-xs-5">
                <ul id="footer-nav-list" class="list-inline pull-right">
                    <li><a href="http://www.bestofindia.fr" target="_blank">Bestofindia.fr</a></li>
                    <li><a href="#" data-target="#con-user" data-toggle="modal"><span class="glyphicon glyphicon-cog"></span></a></li>
                </ul>
            </div>
        </div>

<!-- Change User name Password model-->
<div class="modal fade" id="con-user">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel" style="color: #ff0066">Chnage User name & Password</h4>
            </div>
            <div class="modal-body">
            <form action="<?php echo base_url("login/user_config")?>" method="POST" role="form">
                <div class="form-group">
                    <label for="">Enter New Password</label>
                    <input type="password" class="form-control" name="user-password" id="user-password" placeholder="Enter the New Password to change"  title="" req>
                </div>
                <div class="form-group">
                    <label for="">Confirm New Password</label>
                    <input type="password" class="form-control" onkeyup="checkpassword();" name="user-password-conf" id="user-password-conf" placeholder="Enter the New Password again to confirm"  title="">
                </div>
                <div class="form-group">
                    <div id="change_password_error"></div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--  Login Failed Modal End-->  

<script>
    function checkpassword(){ //Check Password and confirm Password
        password=$("#user-password").val();
        confpassword=$("#user-password-conf").val();
        if(password!==confpassword){ //Check Password and confirm Password
            var msghtml = ('<div class="alert alert-danger" role="alert"><p class="text-center"><strong>Please enter the same New Password again correctly on Confirm New Password field.</strong></p></div>');
            $("#change_password_error").html(msghtml);
        }else{
            var msghtml = ('<div class="alert alert-success" role="alert"><p class="text-center"><strong>Password Confirmation is valid.</strong></p></div>');
            $("#change_password_error").html(msghtml);
        }
    }
</script>
    <?php include 'includes/footer_mapping.php';?>
    </body>
</html>