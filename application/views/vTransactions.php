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
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 pull-left"  style="padding-right:0">
                <img src="assets/img/best_of_india.png" class="img-responsive header-logo" alt="Image">
            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 pull-right">
                <div class="row" style="margin-right:0">
                    <a href="<?php echo base_url();?>home">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-items">
                            <h4>Home</h4>
                        </div>
                    </a>
                    <a href="<?php echo base_url();?>transactions">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-items menu-items-active">
                            <h4>Transactions</h4>
                        </div>
                    </a>
                    <a href="<?php echo base_url();?>receipt">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-items">
                            <h4>Receipt</h4>
                        </div>
                    </a>
                    <a href="<?php echo base_url();?>reporting">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-items">
                            <h4>Reporting</h4>
                        </div>
                    </a>
                    <a href="<?php echo base_url();?>products">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-items">
                            <h4>Products</h4>
                        </div>
                    </a>
                    <a href="<?php echo base_url();?>">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-items">
                            <h4>Log Out</h4>
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
                        <h1 class="text-warning" style="margin:0">Daily Transactions</h1>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4 style="margin:0;">Add new transaction</h4></div>
                        <div class="panel-body">
                            <form action="" method="POST" class="form-horizontal" role="form">
                          
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="" id="input" class="form-control" value="<?php echo date('Y-m-d'); ?>" required="required" title="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">CB</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Cheque</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">TR</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">ESPECES</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-sm-10 col-sm-offset-2">
                                      <button type="submit" class="btn btn-warning">Add Record</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Todays orders start -->
                    <div class="page-header">
                        <h2 style="margin:0">Today Orders<small> find information bellow</small></h2>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="well well-sm">
                                <div class="media">
                                    <!-- <a class="media-left media-middle" href="">
                                        <button type="button" class="btn btn-large btn-block btn-default">01</button>
                                    </a> -->
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                <h4 class="media-heading">Customer: <span class="text-primary">Srimal Priyanaga sfsfs</span><br />
                                                 <small class="text-info">No:54, Maharagama, Sri lnaka</small></h4>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                <h5 class="font-ubuntu">Discount: <span class="text-danger">10%</span><br />Tax: <span class="text-danger">0.45</span></h5>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Product</th>
                                                        <th>Quantity</th>
                                                        <th>Quantity</th>
                                                        <th>Quantity</th>
                                                        <th>Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Majno Masala</td>
                                                        <td>10</td>
                                                        <td>10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Majno Masala</td>
                                                        <td>10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Majno Masala</td>
                                                        <td>10</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="well well-sm">
                                <div class="media">
                                    <a class="media-left media-middle" href="">
                                        <button type="button" class="btn btn-large btn-block btn-default">01</button>
                                    </a>
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <h4 class="media-heading">Customer: <span class="text-primary">Srimal Priyanaga</span><br />
                                                 <small class="text-info">No:54, Maharagama, Sri lnaka</small></h4>
                                            </div>
                                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xs-offset-1">
                                                <h5 class="font-ubuntu">Discount: <span class="text-danger">10%</span>  Tax: <span class="text-danger">0.45</span></h5>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Product</th>
                                                        <th>Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Majno Masala</td>
                                                        <td>10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Majno Masala</td>
                                                        <td>10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Majno Masala</td>
                                                        <td>10</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Todays orders End -->

                    <!-- Previous recordes History start -->
                    <div class="page-header">
                        <h2 class="text-success" style="margin:0">Previous Recordes<small> of daily transactions</small></h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="alert-success">
                                    <th>CB</th>
                                    <th>CHEQUE</th>
                                    <th>TR</th>
                                    <th>ESPECES</th>
                                    <th>Total</th>
                                    <th>Depences</th>
                                    <th>Bank 25%</th>
                                    <th>Safe 75%</th>
                                    <th>Balance</th>
                                    <th>In Hand</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                </tr>
                                <tr>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                </tr>
                                <tr>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                </tr>
                                <tr>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                    <td>table data</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>  <!-- Previous recordes History End -->
                </div>
            </div>  <!-- Home-block end -->
        </div>
    </div>  <!-- Home Content end -->
