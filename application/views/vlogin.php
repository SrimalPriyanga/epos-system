<!DOCTYPE html>
<!--
Copyright © 2012 - 2014 D2Real Solutions.
All Rights Reserved.

These materials are unpublished, proprietary, confidential source code of
D2Real Solutions (pvt) Limited and constitute a TRADE SECRET of D2Real Solutions (pvt) Limited.

Author : S.Priyanga < s.priyanga22@gmail.com >
Description : 
Created on : Jun 21, 2014, 3:38:29 PM
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>BOI-Administrator</title>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <style>
            body {background:url(assets/img/login_pattern.png) repeat center 0 #fff;}
            .wrapper{background:url(assets/img/login_bgLight.png) no-repeat center 0 #222;padding:13% 0 2px; border-bottom: 6px solid rgb(163, 37, 37);}
            .comingsoonBlk{background:rgb(182, 142, 38); padding:18px 18px 14px; max-width:444px; text-align:center; border:4px solid #fff;margin:0 auto -80px; min-height:130px; box-shadow: 0 0 188px rgb(101, 102, 101);}
            .clr{clear:both;}
            .comingsoonBlk button, .comingsoonBlk input{width: 100%; padding:11px 4%;}
            .comingsoonBlk h1 {line-height: 60px; margin:0}
            .copyright{padding-top:100px; color:#444; text-align:center}
            .comingsoonBlk {background: rgb(182, 142, 38);color: #fff; border-color:rgb(46, 130, 138);}
            .wrapper {border-bottom-color:rgb(46, 130, 138);} 
        </style>
        <script>
            function loadmodal($modal) { // load bootstrap modals
                $($modal).modal({ show: true});            
            }
        
        </script>
    </head>
<?php if(isset($login_failed) && $login_failed==TRUE){ ?>
    <body onload='loadmodal("#loginfailed");'>
<?php }else{ ?>
    <body>
<?php } ?>    
        
        <div class="wrapper">
            <div class="comingsoonBlk">
                <h4>Best of India<i><small style="color: #cccccc;"> / Admin</small></i></h4>
                <h1 style="color: #333333; font-family: serif">Let's get started ...</h1>
                <div class="panel panel-default" style="border-radius:0;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign in</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form" role="form" action="<?php echo base_url();?>admin/login_validate" method="POST">
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
        <div class="copyright">	best of india &copy; 2014.</div>
        
        
<!-- Delete Modal Start-->
<div class="modal fade" id="loginfailed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
<!--                <form method="post" action="" id="mdeleteform">-->
                <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
<!--                </form>-->
            </div>
        </div>
    </div>
</div> 
<!-- Delete Modal End-->
        
    </body>
</html>