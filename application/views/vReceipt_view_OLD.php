<body>
    <div class="container">
        <!-- Home Header bar start -->
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 pull-left"  style="padding-right:0">
                <img src="<?php echo base_url();?>assets/img/best_of_india.png" class="img-responsive header-logo" alt="Image">
            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 pull-right">
                <div class="row" style="margin-right:0">
                    <a href="<?php echo base_url();?>home">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-items">
                            <h4>Home</h4>
                        </div>
                    </a>
                    <a href="<?php echo base_url();?>transactions">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-items">
                            <h4>Transactions</h4>
                        </div>
                    </a>
                    <a href="<?php echo base_url();?>receipt">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-items menu-items-active">
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
        <div class="row" >
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="receipt">
                <div id="home-block">
                    <div id="header-text" class="page-header">
                      <h1>Receipt Ready For Print<small> Click print button..</small></h1>
                    </div>
                    <!-- Hidden logo, visible only for print -->
                    <div id="logo-for-print" class="row">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <img src="<?php echo base_url();?>assets/img/best_of_india.png" class="img-responsive" alt="Image" height="200">
                        </div>
                    </div>
                    <div id="receipt-table" class="row" >
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <table border="1" style="background-color: #FFFFFF" class="col-xs-12 col-sm-12 col-md-12">
                                <tr>
                                    <td style="padding:0px;" >
                                        <table class="col-xs-8 col-sm-8 col-md-8" >
                                            <tr><td ><b></b><?php echo $customer_name?></td></tr>
                                            <tr><td ><b></b><?php echo $address?></td></tr>
                                        </table>
                                        <table border="1" style="padding:0px;" class="col-xs-4 col-sm-4 col-md-4" style="border-style: hidden">
                                            <tr><td border="0" class="col-xs-6 col-sm-6 col-md-6" align="center">Facture N</td><td class="col-xs-4 col-sm-4 col-md-6" style="border-style: inset;padding:0px;" align="right"><?php echo $receipt_id?>&nbsp;</td></tr>
                                            <tr><td border="0" align="center">Date</td><td style="border-style: inset" align="right"><?php echo date("Y-m-d") ?></td></tr>
                                        </table> 
                                        <table border="0" style="margin:0px;border-style: hidden" class="col-xs-12 col-sm-12 col-md-12">
                                            <tr><td border="0" class="col-xs-10 col-sm-10 col-md-10" style="color:#FFFFFF;visibility: hidden">Text</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr >
                                    <td border="0" class="col-xs-12 col-sm-12 col-md-12" style="padding:0px;border-color: #fff">
                                        <table border="1" style="margin:0px;border-style: hidden;" class="col-xs-12 col-sm-12 col-md-12">
                                            <tr>
                                                <th border="0" class="col-xs-6 col-sm-6 col-md-6"></th>
                                                <th border="0" class="col-xs-2 col-sm-2 col-md-2">Quantité</th>
                                                <th border="0" class="col-xs-2 col-sm-2 col-md-2">Prix Unitaire</th>
                                                <th border="0" class="col-xs-2 col-sm-2 col-md-2">Montant</th>
                                            </tr>
                                            <?php 
                                            $i=1;
                                            foreach($receipt_list as $product){ //Generate the selected Items and their details
                                            ?>
                                            <tr>
                                                <td border="0" style="padding:5px"><?php echo $product['product_'.$i.'_name'] ?></td>
                                                <td align="center"><?php echo $product['product_'.$i.'_que'] ?></td>
                                                <td align="right"><?php echo $product['product_'.$i.'_unit_price'] ?>&euro;</td>
                                                <td align="right"><?php echo $product['product_'.$i.'_total'] ?>&euro;</td>
                                            </tr>
                                                <?php
                                                $i++;
                                            } ?>
                                        </table>                                        
                                    </td>
                                </tr>
                                <tr >
                                    <td border="0" class="col-xs-12 col-sm-12 col-md-12" style="padding:0px;border-color: #fff">
                                        <table border="1" style="border-style: none;border-collapse: collapse" class="col-xs-12 col-sm-12 col-md-12">
                                            <tr><td border="0" class="col-xs-10 col-sm-10 col-md-10" style="border-style: inset;" align="center">Sub Total</td><td border="0" class="col-xs-2 col-sm-2 col-md-2" align="right" style="border-style: inset;padding:0px;"><?php echo $sub_total ?>&euro;</td></tr>
                                        </table>                                        
                                    </td>
                                </tr>
                                <tr >
                                    <td border="0" class="col-xs-12 col-sm-12 col-md-12" style="padding:0px;border-color: #fff">
                                        <table border="0" style="padding:0px;" class="col-xs-12 col-sm-12 col-md-12" >
                                            <tr><td border="0" class="col-xs-6 col-sm-6 col-md-6"></td>
                                                <td border="0" class="col-xs-6 col-sm-6 col-md-6" align="right" style="padding:0px;">
                                                    <table border="0" style="margin:0px;border-style: hidden" class="col-xs-12 col-sm-12 col-md-12">
                                                        <tr><td border="0" class="col-xs-10 col-sm-10 col-md-10" style="color:#FFFFFF;visibility: hidden">Text</td>
                                                        </tr>
                                                    </table>
                                                    <table border="1" style="margin:0px;" class="col-xs-12 col-sm-12 col-md-12">
                                                        <tr>
                                                            <th border="0" class="col-xs-4 col-sm-4 col-md-4" align="center" style="border-style: inset;">Hors Taxe</th>
                                                            <th border="0" class="col-xs-4 col-sm-4 col-md-4" align="center" style="border-style: inset">Tva</th>
                                                            <th border="0" class="col-xs-4 col-sm-4 col-md-4" align="center" style="border-style: inset">TTC</th>
                                                        </tr>
                                                        <tr>
                                                            <td border="0" class="col-xs-4 col-sm-4 col-md-4" align="right" style="border-style: inset;padding:0px;"><?php echo $tax_reduced_total ?>&euro;</td>
                                                            <td border="0" class="col-xs-4 col-sm-4 col-md-4" align="right" style="border-style: inset;padding:0px;"><?php echo $tax_amount ?>&euro;</td>
                                                            <td border="0" class="col-xs-4 col-sm-4 col-md-4" align="right" style="border-style: inset;padding:0px;"><?php echo $sub_total ?>&euro;</td>
                                                        </tr>
                                                        <tr>
                                                            <td border="0" class="col-xs-4 col-sm-4 col-md-4" align="center" style="border-style: inset;color:#FFFFFF;visibility: hidden">Text</td>
                                                            <th border="0" class="col-xs-4 col-sm-4 col-md-4" align="center" style="border-style: inset">Reduction</th>
                                                            <th border="0" class="col-xs-4 col-sm-4 col-md-4" align="center" style="border-style: inset">Total</th>
                                                        </tr>
                                                        <tr>
                                                            <td border="0" class="col-xs-4 col-sm-4 col-md-4" align="center" style="border-style: inset;color:#FFFFFF;visibility: hidden">Text</td>
                                                            <td border="0" class="col-xs-4 col-sm-4 col-md-4" align="right" style="border-style: inset;padding:0px;"><?php echo $discount ?>&euro;</td>
                                                            <td border="0" class="col-xs-4 col-sm-4 col-md-4" align="right" style="border-style: inset;padding:0px;"><?php echo $total ?>&euro;</td>
                                                        </tr>
                                                    </table>  
                                                    <table border="0" style="margin:0px;border-style: hidden" class="col-xs-12 col-sm-12 col-md-12">
                                                        <tr><td border="0" class="col-xs-10 col-sm-10 col-md-10" style="color:#FFFFFF;visibility: hidden">Text</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>                                        
                                    </td>
                                </tr>
                                <tr >
                                    <td border="0" class="col-xs-12 col-sm-12 col-md-12" style="padding:0px;border-color: #fff">
                                        <table border="1" style="margin:0px" class="col-xs-12 col-sm-12 col-md-12">
                                            <tr><td border="0" class="col-xs-6 col-sm-6 col-md-6">Nom du compte bancaire</td><td border="0" class="col-xs-6 col-sm-6 col-md-6">SARL UNITED KITCHEN - BEST OF INDIA</td></tr>
                                            <tr><td border="0" class="col-xs-6 col-sm-6 col-md-6">Nom de la banque</td><td border="0" class="col-xs-6 col-sm-6 col-md-6">CREDIT DU NORD</td></tr>
                                            <tr><td border="0" class="col-xs-6 col-sm-6 col-md-6">Adresse de la banque</td><td border="0" class="col-xs-6 col-sm-6 col-md-6">101 AV PHILLEPE AUGUSTE PARIS 75011</td></tr>
                                            <tr><td border="0" class="col-xs-6 col-sm-6 col-md-6">SWIFT BIC</td><td border="0" class="col-xs-6 col-sm-6 col-md-6">NORDDFRPP</td></tr>
                                            <tr><td border="0" class="col-xs-6 col-sm-6 col-md-6">No IBAN</td><td border="0" class="col-xs-6 col-sm-6 col-md-6">FR76 3007 6020 5722 7459 0020 094</td></tr>
                                        </table>                                        
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <br />
                        <div class="col-xs-12 col-sm-12 col-md-12" id="receipt_address" style="visibility: hidden;">
                            <address>
                                170, Rue du Faubourg Saint Denis, 75010 Paris France. 01 40 05 06 06<br>
                                SARL United Kitchen RCS Paris: 524 266 012<br>
                                www.bestofindia.fr
                            </address>
                        </div>
                    </div>
                    <br /><br />
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-warning center-block" onclick="Print_Receipt();" id="printbtn">Print the Receipt</button>
                        </div>
                    </div>
                    <br />
                </div>  <!-- Home block end -->
            </div>
        </div>  <!-- Home Content end -->
    </div>
    
    <!-- Specific Stylesh and Script for print -->
    <style type="text/css">
/*        #receipt_address{
            visibility: hidden;
        }*/
        
        @media print {
            * {
                visibility:hidden;
            }
            #receipt-table * {
                visibility:visible;
                font-size: 13px;
            }
            
            #logo-for-print * {
                visibility:visible;
                /*display: table-header-group;*/
                display: block;
                position:fixed;
                /*position:absolute;*/
                /*top:30px;*/
                left: 30px;
                top: 0px;
                
                /*top: 0%;*/
/*                top: -10%;*/
            }
            #logo-for-print {
                display: block;
            }
            #receipt-table {
                width: 100%;
                /*height: 80%;*/
                position: absolute;
                /*top: -70%;*/
                top: -80px;
                left: 15px;
/*                margin-left: auto;
                margin-right: auto;
                zoom: 95%;
*/            
            }
            /* #receipt-table #page_break{
                page-break-after:always;
            }*/
            #receipt_address * {
              visibility:visible;
              display: table-footer-group;
              position: fixed;
              left:0;
/*              position: absolute;*/
                /*bottom: -90%;*/
                bottom: -60px;
            }
        }
    </style>
    <script>
        function Print_Receipt(){
            window.print();
        }                        
    </script>