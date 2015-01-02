<body>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    
    
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
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-items">
                            <h4>Receipt</h4>
                        </div>
                    </a>
                    <a href="<?php echo base_url();?>reporting">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-items menu-items-active">
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
                    <div class="page-header" style="margin:10px">
                        <h1 class="text-warning" style="margin:0">Report</h1>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4 style="margin:0;">Submit bellow details to get the report</h4></div>
                        <div class="panel-body">
                            <form id="report_form" action="<?php echo base_url(); ?>reporting/generate_graph" method="post" class="form-horizontal" role="form">
                          
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Time Period- from:</label>
                                    <div class="col-sm-3">
                                        <input name="date_start" id="start_date" type="date" name="" id="input" class="form-control" value="" required="required" title="" >
                                    </div>
                                    <label for="" class="col-sm-3 control-label">To:</label>
                                    <div class="col-sm-3">
                                        <input name="date_end" id="end_date" type="date" name="" id="input" class="form-control" value="<?php echo date('Y-m-d'); ?>" required="required" title="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">CB:</label>
                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input name="cb" type="checkbox" value="cb" id="cb">
                                            </label>
                                        </div>
                                    </div>
                                    <label for="" class="col-sm-3 control-label">Cheque:</label>
                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input name="cheque" type="checkbox" value="cheque" id="cheque">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">TR:</label>
                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input name="tr" type="checkbox" value="tr" id="tr">
                                            </label>
                                        </div>
                                    </div>
                                    <label for="" class="col-sm-3 control-label">ESPECES:</label>
                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label>
                                                <input name="especes" type="checkbox" value="especes" id="especes">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-sm-9 col-sm-offset-3">
                                      <button type="submit" class="btn btn-warning" >Genarate</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="chart_main">
                        <div class="hidden-xs hidden-sm col-md-2 col-lg-2" ></div>
                        <center>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" id="chart">
                             
                            </div>
                        </center>
                        <div class="hidden-xs hidden-sm col-md-2 col-lg-2"></div> 
                        
                            <script type="text/javascript">
                             $( "#report_form" ).submit(function( event ) {

                                  // Stop form from submitting normally
                                  event.preventDefault();
                                  var selectedItems = 0;

                                  //Checking the selected types
                                  if($('#cb').is(':checked')){
                                      cb=1;
                                      selectedItems++;
                                  }else{
                                      cb=0;
                                  }
                                  if($('#cheque').is(':checked')){
                                      cheque=1;
                                      selectedItems++;
                                  }else{
                                      cheque=0;
                                  }
                                  if($('#tr').is(':checked')){
                                      tr=1;
                                      selectedItems++;
                                  }else{
                                      tr=0;
                                  }
                                  if($('#especes').is(':checked')){
                                      especes=1;
                                      selectedItems++;
                                  }else{
                                      especes=0;
                                  }


                                  if(selectedItems<1){
                                      //If nothing selected
                                        $( "#chart" ).html(
                                          '<div class="alert alert-warning" role="alert">\n\
                                              <p class="text-center">Please select at least one to get the Report</p>\n\
                                            </div>');
                                  }else{
                                      //If something selected
                                        var start_d = document.getElementById("start_date").value;
                                        var end_d = document.getElementById("end_date").value;

                                        $.post( "reporting/generate_graph", { 
                                            cb: cb,
                                            cheque: cheque,
                                            tr: tr,
                                            especes: especes,
                                            start_date: start_d,
                                            end_date: end_d
                                        })
                                        .done(function(chart) {
                                            $( "#chart" ).html(chart);
                                        });

                                  }
                                }); 
                            </script>
                    </div>
                </div>
                </div>
            </div>  <!-- Home-block end -->
        </div>
    </div>  <!-- Home Content end -->
