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
                        <h1 class="text-warning" style="margin:0">Daily Transactions</h1>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4 style="margin:0;">Add new transaction</h4></div>
                        <div class="panel-body">
                            <form action="<?php echo base_url();?>transactions/insert" method="POST" class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="date" id="date" class="form-control date1" value="<?php echo date('Y-m-d'); ?>" required="required" title="" onchange="date_exist();">
                                    </div>
                                    <script>
                                        function date_exist(){
                                            date=$(".date1").val();
                                            console.log(date);
                                            $(document).ready(function(){
//                                                $('#data_table tr').each(function(){
                                                        console.log('inside1');
                                                    if($(this).find('td').eq(0).text() === date){
                                                        console.log('inside2');
                                                        $( "#message" ).html(
                                                              '<div class="alert alert-warning" role="alert">\n\
                                                                  <p class="text-center">Please select at least one to get the Report</p>\n\
                                                                </div>');
                                                                        }
//                                                });
                                            });
                                            
                                        }
                                    </script>
                                    <label for="" class="col-sm-2 control-label">Defences</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="defences" id="defences" class="form-control" value="" required="required" placeholder="Enter Defences" title="Numbers only" pattern="(^[0-9]*[0-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[0-9]+[0-9]*$)|(^[0-9]*[0-9]+[0-9]*$)">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">CB</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="cb" id="cb" class="form-control" value="" required="required" placeholder="Enter CB" title="Numbers only" pattern="(^[0-9]*[0-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[0-9]+[0-9]*$)|(^[0-9]*[0-9]+[0-9]*$)">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Cheque</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="cheque" id="cheque" class="form-control" value="" required="required" placeholder="Enter Cheque" title="Numbers only" pattern="(^[0-9]*[0-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[0-9]+[0-9]*$)|(^[0-9]*[0-9]+[0-9]*$)">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">TR</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="tr" id="tr" class="form-control" value="" required="required" placeholder="Enter TR" title="Numbers only" pattern="(^[0-9]*[0-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[0-9]+[0-9]*$)|(^[0-9]*[0-9]+[0-9]*$)">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">ESPECES</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="especes" id="especes" class="form-control" value="" required="required" placeholder="Enter ESPECES" title="Numbers only" pattern="(^[0-9]*[0-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[0-9]+[0-9]*$)|(^[0-9]*[0-9]+[0-9]*$)">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-sm-10 col-sm-offset-2">
                                      <button type="submit" class="btn btn-warning">Add Record</button>
                                  </div>
                                </div>
                            </form>
                            
                            <div id="message"></div>
                        </div>
                    </div>

                    <!-- Previous recordes History start -->
                    <div class="page-header">
                        <h2 class="text-success" style="margin:0">Previous Recordes<small> of daily transactions</small></h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-condensed table-hover table-striped" id="data_table" data-toggle="bootgrid">
                            <thead>
                                <tr class="alert-success">
                                    <th>Date</th>
                                    <th><span class="pull-right">CB</span></th>
                                    <th><span class="pull-right">CHEQUE</span></th>
                                    <th><span class="pull-right">TR</span></th>
                                    <th><span class="pull-right">ESPECES</span></th>
                                    <th><span class="pull-right">Total</span></th>
                                    <th><span class="pull-right">Depences</span></th>
                                    <th><span class="pull-right">Bank 25%</span></th>
                                    <th><span class="pull-right">Safe 75%</span></th>
                                    <th><span class="pull-right">Balance</span></th>
                                    <th><span class="pull-right">In Hand</span></th>
<!--                                    <th data-column-id="Date" data-order="desc">Date</th>
                                    <th data-column-id="CB">CB</th>
                                    <th data-column-id="CHEQUE">CHEQUE</th>
                                    <th data-column-id="TR">TR</th>
                                    <th data-column-id="ESPECES">ESPECES</th>
                                    <th data-column-id="Total">Total</th>
                                    <th data-column-id="Depences">Depences</th>
                                    <th data-column-id="Bank 25%">Bank 25%</th>
                                    <th data-column-id="Safe 75%">Safe 75%</th>
                                    <th data-column-id="Balance">Balance</th>
                                    <th data-column-id="In Hand">In Hand</th>-->
                                </tr>
                            </thead>
                            <tbody>
                            <?php $total = array("cb"=>0, "cheque"=>0, "tr"=>0, "especes"=>0, "total"=>0, "defences"=>0, "bank"=>0, "safe"=>0, "balance"=>0, "inhand"=>0);
                            foreach ($data_of_transactions as $value) {?>
                                <tr>
                                    <td clas="dates"><?php echo $value['date'];?>&nbsp;&nbsp;
                                        <a class="pull-leftt text-danger" onclick="confirm_delete(<?php echo $value['transaction_id'];?>)" href="#" data-toggle="modal" data-target="#modal-delete" title="Click to delete this record"><span class="glyphicon glyphicon-remove"></span></a>
                                        <a href="#" onclick="confirm_edit(<?php echo $value['transaction_id'];?>)" data-toggle="modal" data-target="#modal-edit" class="pull-right"><span class="glyphicon glyphicon-pencil"></span></a>
                                    </td>
                                    <td align="right"><?php echo $value['cb']; $total['cb'] += $value['cb'];?> &euro;</td>
                                    <td align="right"><?php echo $value['cheque']; $total['cheque'] += $value['cheque'];?> &euro;</td>
                                    <td align="right"><?php echo $value['tr']; $total['tr'] += $value['tr'];?> &euro;</td>
                                    <td align="right"><?php echo $value['especes']; $total['especes'] += $value['especes'];?> &euro;</td>
                                    <td align="right"><?php echo $value['total']; $total['total'] += $value['total'];?> &euro;</td>
                                    <td align="right"><?php echo $value['defences']; $total['defences'] += $value['defences'];?> &euro;</td>
                                    <td align="right"><?php echo $value['bank']; $total['bank'] += $value['bank'];?> &euro;</td>
                                    <td align="right"><?php echo $value['safe']; $total['safe'] += $value['safe'];?> &euro;</td>
                                    <td align="right"><?php echo $value['balance']; $total['balance'] += $value['balance'];?> &euro;</td>
                                    <td align="right"><?php echo $value['inhand']; $total['inhand'] += $value['inhand'];?> &euro;</td>
                                </tr>
                            <?php }?>
                            </tbody>
<!--                            <tfoot>-->
                                <tr class="bg-danger bootgrid-footer">
                                    <th>Sub Total</th>
                                    <td align="right"><b><?php echo $total['cb']?> &euro;</b></td>
                                    <td align="right"><b><?php echo $total['cheque']?> &euro;</td>
                                    <td align="right"><b><?php echo $total['tr']?> &euro;</b></td>
                                    <td align="right"><b><?php echo $total['especes']?> &euro;</b></td>
                                    <td align="right"><b><?php echo $total['total']?> &euro;</b></td>
                                    <td align="right"><b><?php echo $total['defences']?> &euro;</b></td>
                                    <td align="right"><b><?php echo $total['bank']?> &euro;</b></td>
                                    <td align="right"><b><?php echo $total['safe']?> &euro;</b></td>
                                    <td align="right"><b><?php echo $total['balance']?> &euro;</b></td>
                                    <td align="right"><b><?php echo $total['inhand']?> &euro;</b></td>
                                </tr>
                            <!--</tfoot>-->
                        </table>
                    </div>  <!-- Previous recordes History End -->
                    
                    <!-- Todays orders start -->
                    <div class="page-header">
                        <h2 style="margin:0">Today Orders<small> find information bellow</small></h2>
                    </div>

                    <?php if ($availability === TRUE) {
                    $count =0; $index =0;
                    for ($i=1; $i <=$num_of_orders; $i+=2) { ?>
                    <div class="row">
                        <?php for ($j=0; $j<2; $j++) {
                                if ($count<$num_of_orders) { ?>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <div class="well well-sm">
                                            <div class="media">
                                                <!-- <a class="media-left media-middle" href="">
                                                    <button type="button" class="btn btn-large btn-block btn-default">01</button>
                                                </a> -->
                                                <div class="media-body">
                                                <!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">-->
                                                    <div class="row">
                                                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                            <h4 class="media-heading">Customer: <span class="text-primary"><?php echo $content[$index]['customer_name']?></span><br />
                                                             <small class="text-info"><?php echo $content[$index]['address']?></small></h4>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <h5 class="font-ubuntu">Discount: <span class="text-danger"><?php echo $content[$index]['discount']?></span><br />Tax: <span class="text-danger"><?php echo $content[$index]['tax']?>%</span></h5>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Product</th>
                                                                    <th>Quantity</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $id =1;
                                                            do{ ?>
                                                                <tr>
                                                                    <td><?php echo $id;?></td>
                                                                    <td><?php echo $content[$index]['name']?></td>
                                                                    <td><?php echo $content[$index]['quantity']?></td>
                                                                </tr>
                                                            <?php $index++; $id++;
                                                            if ($index >= $number_of_records) { break; }
                                                            }while($content[$index-1]['receipt_id'] == $content[$index]['receipt_id'])?>
                                                            </tbody>
                                                        </table>
                                                    <!--<div class="row">-->
                                                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                            <h4 class="media-heading">Total: <span class="text-primary"><?php if(isset($content[$index]['total'])) { echo $content[$index]['total'];}?></span>
                                                    </div>
                                                    </div>
                                                </div>
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div>
                        <?php   }
                                $count++;
                              }?>
                    </div>
                    <?php } //end for
                    }else { ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4>You haven't any orders today</h4>
                        </div>
                    </div> 
                    <?php }?>
                    <!-- Todays orders End -->
                    
                    
                </div>
            </div>  <!-- Home-block end -->
        </div>
    </div>  <!-- Home Content end -->

<!-- Model for confirem to selected item to delete -->
<div class="modal fade" id="modal-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-danger">Confirm the deletion</h4>
            </div>
            <div class="modal-body">
            <p>are you sure you want to delete this product....?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="href-delete" href="#" class="btn btn-danger">Delete</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    function confirm_delete($id){
        document.getElementById("href-delete").href='<?php echo base_url("transactions/delete/?id=")?>'+$id;
    }
    
    function confirm_edit($id){
        var name = document.getElementById("product-"+$id+"-name").innerHTML;
        //var cat_name = document.getElementById("product-"+$id+"-cat_name").innerHTML;
        var description = document.getElementById("product-"+$id+"-description").innerHTML;
        var price = document.getElementById("product-"+$id+"-price_span").innerHTML;
        document.getElementById("selected_product").value= $id;
        document.getElementById("new_name").value= name;
        document.getElementById("new_description").value= description;
        document.getElementById("new_price").value= price;
    }
</script>

<script>
    $( document ).ready(function() {
        $('#data_table').dataTable({
//                "bSort": false
                "aaSorting": []
//                "order": [[ 0, "desc" ]] ,
//                "aaSorting": [[ 2, 'desc' ]], 
//                "cache": false
//                "aaSorting" : [[0, "desc"]]
        });
    });  
    
//    $( document ).ready(function() {
//        $('#data_table').bootgrid();
//    });  

</script>