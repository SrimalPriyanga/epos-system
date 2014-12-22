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
                                    <label for="" class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Date</label>
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
                    <div class="well well-sm">
                        <div class="media">
                            <a class="media-left media-middle" href="#">
                                <button type="button" class="btn btn-large btn-block btn-default">01</button>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Order bollywood -Details</h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                    <div class="well well-sm">
                        <div class="media">
                            <a class="media-left media-middle" href="#">
                                <button type="button" class="btn btn-large btn-block btn-default">02</button>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Order bollywood -Details</h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
