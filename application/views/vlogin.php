<?php
/* 
 * Copyright © 2014 - 2015 Best of India.
 * All Rights Reserved.

 * Developer : S.Priyanga < s.priyanga22@gmail.com > 
 * Created on : Dec 21, 2014, 3:38:29 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="<?php echo $mDescription;?>">
        <meta name="keywords" content="<?php echo $mKeywords;?>">
        <title><?php echo $title;?></title>
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/favi.png")?>"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <style>
            body {background:url(assets/img/login_pattern.png) repeat center 0 #fff;}
            .wrapper{background:url(assets/img/login_bgLight.png) no-repeat center 0 #222;padding:13% 0 2px; border-bottom: 6px solid rgb(163, 37, 37);}
            .loginBlk{background:rgb(182, 142, 38); padding:18px 18px 14px; max-width:444px; text-align:center; border:4px solid #fff;margin:0 auto -80px; min-height:130px; box-shadow: 0 0 188px rgb(101, 102, 101);}
            .clr{clear:both;}
            .loginBlk button, .loginBlk input{width: 100%; padding:11px 4%;}
            .loginBlk h1 {line-height: 60px; margin:0}
            .copyright{padding-top:100px; color:#444; text-align:center}
            .loginBlk {background: rgb(144, 80, 49);color: #fff; border-color:rgb(227, 141, 19);}
            .wrapper {border-bottom-color:rgb(227, 141, 19);} 
        </style>
    </head>

<?php if($this->session->userdata('login_attempt') > 0){ ?>
    <body onload="$('#loginfailed').modal('show')">
<?php }else { ?>
    <body>
<?php }?>   
        
        <div class="wrapper">
            <div class="loginBlk">
                <h4>Best of India<i><small style="color: #cccccc;"> / Admin</small></i></h4>
                <h1 style="color: #333333; font-family: serif">Let's get started ...</h1>
                <div class="panel panel-warning" style="border-radius:0;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign in</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form" role="form" action="<?php echo base_url("login/login_check");?>" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="username" type="text" required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="password" name="password" type="password" required="required">
                                </div>
                                <input class="btn btn-lg btn-warning btn-block" style="border-radius: 0" type="submit" value="Sign in" />
                            </fieldset>
                        </form>
                    </div>
                </div>
                <br class="clr">
            </div>
        </div>
        <div class="copyright">	Best of India &copy; 2014.</div>

<!-- Login Failed Modal Start-->
<div class="modal fade" id="loginfailed">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel" style="color: #ff0066">Login failed..!</h4>
            </div>
            <div class="modal-body">
            <p>Please check the username and the password</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--  Login Failed Modal End-->        

    </body>
</html>