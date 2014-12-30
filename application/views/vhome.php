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
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-items menu-items-active">
                            <h4>Home</h4>
                        </div>
                    </a>
                    <a href="<?php echo base_url();?>transactions">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-items">
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
                    <a href="<?php echo base_url("login/perform_logout");?>">
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
                    <div class="table-responsive">
                        <table id="home-table" class="table table-hover">
                            <tbody>
                                <tr style="border-left:10px solid #FFFF66;">
                                    <td><h1>Daily Transactions</h1>             <!-- Navigation + Block1 -->
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </td>
                                    <td class="alert-warning">
                                        <a href="<?php echo base_url();?>transactions">
                                            <span class="glyphicon glyphicon glyphicon-chevron-right btn btn-lg"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr style="border-left:10px solid #FFCC00;">
                                    <td><h1>Receipt Genarater</h1>              <!-- Navigation + Block2 -->
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </td>
                                    <td class="alert-warning">
                                        <a href="<?php echo base_url();?>receipt">
                                            <span class="glyphicon glyphicon glyphicon-chevron-right btn btn-lg"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr style="border-left:10px solid #FF9900;">
                                    <td><h1>Reporting</h1>                      <!-- Navigation + Block3 -->
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </td>
                                    <td class="alert-warning">
                                        <a href="<?php echo base_url();?>reporting">
                                            <span class="glyphicon glyphicon glyphicon-chevron-right btn btn-lg"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr style="border-left:10px solid #C13100;">
                                    <td><h1>Products</h1>                      <!-- Navigation + Block3 -->
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                    </td>
                                    <td class="alert-warning">
                                        <a href="<?php echo base_url();?>products">
                                            <span class="glyphicon glyphicon glyphicon-chevron-right btn btn-lg"></span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>  <!-- Home-block end -->
            </div>
        </div>  <!-- Home Content end -->
    </div>
