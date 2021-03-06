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
                                        <input type="date" name="date" id="date" class="form-control date1" value="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d'); ?>" required="required" title="" onchange="date_exist('<?php echo base_url().'transactions/' ?>','<?php echo date('Y-m-d') ?>');">
                                    </div>
                                    <script>
                                        function date_exist(urlprefix,today){
                                            seldate=$("#date").val();
                                            if(today!==seldate){
                                                url=urlprefix+"exist_dates/"+seldate;
                                                $("#message").load(url);
                                            }else{
                                                url=urlprefix+"date_today";
                                                $("#message").load(url);
                                            }
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
<!--                            <script>
                                var dates = [];
                            </script>-->
                            <?php 
                            $total = array("cb"=>0, "cheque"=>0, "tr"=>0, "especes"=>0, "total"=>0, "defences"=>0, "bank"=>0, "safe"=>0, "balance"=>0, "inhand"=>0);
                            $dates=array();
                            $i=0;
                            echo '<script>var dates = [];</script>';
                            if(isset($data_of_transactions) && !empty($data_of_transactions)){
                                foreach ($data_of_transactions as $value) {
                                    echo'<script>dates['.$i.']='.$value['date'].';</script>';
                                ?>
                                <tr>
                                    <td><span id="date_<?php echo $value['transaction_id'];?>" name="dates"><?php echo $value['date'];$dates[$i]=$value['date'];?></span>&nbsp;&nbsp;
                                        <a class="pull-leftt text-danger" onclick="confirm_delete(<?php echo $value['transaction_id'];?>)" href="#" data-toggle="modal" data-target="#modal-delete" title="Click to delete this record"><span class="glyphicon glyphicon-remove"></span></a>
                                        <a href="#" onclick="confirm_edit(<?php echo $value['transaction_id'];?>)" data-toggle="modal" data-target="#modal-edit" class="pull-right"><span class="glyphicon glyphicon-pencil"></span></a>
                                    </td>
                                    <td align="right" ><span id="cb_<?php echo $value['transaction_id'];?>"><?php echo $value['cb']; $total['cb'] += $value['cb'];?></span> &euro;</td>
                                    <td align="right"><span id="cheque_<?php echo $value['transaction_id'];?>"><?php echo $value['cheque']; $total['cheque'] += $value['cheque'];?></span> &euro;</td>
                                    <td align="right"><span id="tr_<?php echo $value['transaction_id'];?>"><?php echo $value['tr']; $total['tr'] += $value['tr'];?></span> &euro;</td>
                                    <td align="right"><span id="especes_<?php echo $value['transaction_id'];?>"><?php echo $value['especes']; $total['especes'] += $value['especes'];?></span> &euro;</td>
                                    <td align="right"><span id="total_<?php echo $value['transaction_id'];?>"><?php echo $value['total']; $total['total'] += $value['total'];?></span> &euro;</td>
                                    <td align="right"><span id="defences_<?php echo $value['transaction_id'];?>"><?php echo $value['defences']; $total['defences'] += $value['defences'];?></span> &euro;</td>
                                    <td align="right"><span id="bank_<?php echo $value['transaction_id'];?>"><?php echo $value['bank']; $total['bank'] += $value['bank'];?></span> &euro;</td>
                                    <td align="right"><span id="safe_<?php echo $value['transaction_id'];?>"><?php echo $value['safe']; $total['safe'] += $value['safe'];?></span> &euro;</td>
                                    <td align="right"><span id="balance_<?php echo $value['transaction_id'];?>"><?php echo $value['balance']; $total['balance'] += $value['balance'];?></span> &euro;</td>
                                    <td align="right"><span id="inhand_<?php echo $value['transaction_id'];?>"><?php echo $value['inhand']; $total['inhand'] += $value['inhand'];?></span> &euro;</td>
                                </tr>
                            <?php 
                                    $i++;
                                
                                }
                            }?>
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
                        <?php 
//                        echo '<script>alert("te");';
//                        for($i1=0;$i1<$o;$i1++){
//                            echo 'console.log(document.getElementById("date_'.$value['transaction_id'].'").innerHTmL);';
//                        }
//                              
//                                echo '</script>';
                        ?>
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
                                                <div class="media-body" style="display:block;">
                                                    <div class="row">
                                                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                            <h4 class="media-heading">Customer: <span class="text-primary"><?php echo $content[$index]['customer_name']?></span><br />
                                                             <small class="text-info">Addres:<?php echo $content[$index]['address']?></small></h4>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <h5 class="font-ubuntu">
                                                                Discount: <span class="text-danger"><?php echo $content[$index]['discount']?>&euro;</span>
                                                            </h5>
                                                            <h5 class="font-ubuntu">
                                                                Tax: <span class="text-danger"><?php echo $content[$index]['tax']?>%</span>
                                                            </h5>
                                                            <h5 class="font-ubuntu">
                                                                Total: <span class="text-danger"><?php if(isset($content[$index]['total'])) { echo $content[$index]['total'];}?>&euro;</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Product</th>
                                                                    <th>Quantity</th>
                                                                    <th>Total Cost</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $id =1;
                                                            do{ ?>
                                                                <tr>
                                                                    <td><?php echo $id;?></td>
                                                                    <td><?php echo $content[$index]['name']?></td>
                                                                    <td><?php echo $content[$index]['quantity']?></td>
                                                                    <td><?php echo $content[$index]['sub_total']?>&euro;</td>
                                                                </tr>
                                                            <?php $index++; $id++;
                                                            if ($index >= $number_of_records) { break; }
                                                            }while($content[$index-1]['receipt_id'] == $content[$index]['receipt_id'])?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
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

<!-- Model for edit transactions -->
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-danger">Enter details to edit record</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>transactions/update" method="POST" class="form-horizontal" role="form" id="edit_form">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" >
                        <!--<input type="text" id="id2">-->
                        <label for="" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-4">
                        <input type="date" name="new_date" id="new_date" class="form-control date1" required="required" title="" max="<?php echo date('Y-m-d'); ?>" >
                        </div>
                        <label for="" class="col-sm-2 control-label">Defences</label>
                        <div class="col-sm-4">
                        <input type="text" name="new_defences" id="new_defences" class="form-control" required="required" placeholder="Enter Defences" title="Numbers only" pattern="(^[0-9]*[0-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[0-9]+[0-9]*$)|(^[0-9]*[0-9]+[0-9]*$)">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">CB</label>
                        <div class="col-sm-4">
                            <input type="text" name="new_cb" id="new_cb" value="" class="form-control" required="required" placeholder="Enter CB" title="Numbers only" pattern="(^[0-9]*[0-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[0-9]+[0-9]*$)|(^[0-9]*[0-9]+[0-9]*$)">
                        </div>
                        <label for="" class="col-sm-2 control-label">Cheque</label>
                        <div class="col-sm-4">
                        <input type="text" name="new_cheque" id="new_cheque" class="form-control" value="" required="required" placeholder="Enter Cheque" title="Numbers only" pattern="(^[0-9]*[0-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[0-9]+[0-9]*$)|(^[0-9]*[0-9]+[0-9]*$)">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">TR</label>
                        <div class="col-sm-4">
                        <input type="text" name="new_tr" id="new_tr" class="form-control" value="" required="required" placeholder="Enter TR" title="Numbers only" pattern="(^[0-9]*[0-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[0-9]+[0-9]*$)|(^[0-9]*[0-9]+[0-9]*$)">
                        </div>
                        <label for="" class="col-sm-2 control-label">ESPECES</label>
                        <div class="col-sm-4">
                        <input type="text" name="new_especes" id="new_especes" class="form-control" value="" required="required" placeholder="Enter ESPECES" title="Numbers only" pattern="(^[0-9]*[0-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[0-9]+[0-9]*$)|(^[0-9]*[0-9]+[0-9]*$)">
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-10 col-sm-offset-2">
                          
                      </div>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    function confirm_delete($id){
        document.getElementById("href-delete").href='<?php echo base_url("transactions/delete/?id=")?>'+$id;
    }
    
    function confirm_edit(id){

        var date = document.getElementById("date_"+id).innerHTML;
        var cb = document.getElementById("cb_"+id).innerHTML;
        var cheque = document.getElementById("cheque_"+id).innerHTML;
        var tr = document.getElementById("tr_"+id).innerHTML;
        var especes = document.getElementById("especes_"+id).innerHTML;
        var defences = document.getElementById("defences_"+id).innerHTML;        
        
        document.getElementById("id").value= id;
        document.getElementById("new_date").value= date;
        document.getElementById("new_defences").value= defences;
        document.getElementById("new_cb").value= cb;
        document.getElementById("new_cheque").value= cheque;
        document.getElementById("new_tr").value= tr;
        document.getElementById("new_especes").value= especes;
    }
</script>

<script>
    $( document ).ready(function() {
        $('#data_table').dataTable({
                "aaSorting": []
        });
    });  
    
//    $( document ).ready(function() {
//        $('#data_table').bootgrid();
//    });  

</script>