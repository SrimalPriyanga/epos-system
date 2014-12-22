<?php

/* 
 * Copyright © 2012 - 2013 D2Real Solutions.
 * All Rights Reserved.
 * 
 * These materials are unpublished, proprietary, confidential source code of
 * D2Real Solutions (pvt) Limited and constitute a TRADE SECRET of D2Real Solutions (pvt) Limited.
 * 
 * Creater : Srimal Priyanga < s.priyanga22@gmail.com >
 * Created on : Sep 1, 2014, 8:33:32 PM
 */
?>
<body>
    <div class="container">
        <!-- Home Header bar start -->
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-left"  style="padding-right:0">
                <img src="http://dummyimage.com/700x75/000/ababab.jpg" class="img-responsive header-banner" alt="Image">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right">
                <div class="row" style="margin-right:0">
                    <a href="<?php echo base_url();?>transactions">
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 menu-items">
                            <h4>Transactions</h4>
                        </div>
                    </a>
                    <a href="<?php echo base_url();?>receipt">
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 menu-items menu-items-active">
                            <h4>Receipt</h4>
                        </div>
                    </a>
                    <a href="<?php echo base_url();?>reporting">
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 menu-items">
                            <h4>Reporting</h4>
                        </div>
                    </a>
                    <a href="<?php echo base_url();?>products">
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 menu-items">
                            <h4>Products</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Home Header bar End -->
        
        <!-- Home Content start -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="home-block">
                    <div class="page-header" style="margin:10px">
                        <h1 class="text-warning" style="margin:0">Genarate Receipt</h1>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4 style="margin:0;">Enter the details bellow</h4></div>
                        <div class="panel-body">
                            <form action="" method="POST" class="form-horizontal" role="form">
                          
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="" id="input" class="form-control" value="" required="required" title="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Name of customer</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Product</label>
                                    <div class="col-sm-10">
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Discount</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Tax</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-sm-10 col-sm-offset-2">
                                      <button type="submit" class="btn btn-warning">Genarate</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  <!-- Home-block end -->
        </div>
    </div>  <!-- Home Content end -->
