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
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="home-block">
                    <div class="page-header" style="margin:10px">
                        <h1 class="text-warning" style="margin:0">Generate Receipt</h1>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4 style="margin:0;">Enter the details bellow</h4></div>
                        <div class="panel-body">
                            <form action="<?php echo base_url();?>receipt/generate" method="POST" class="form-horizontal" role="form">
                          
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="date" id="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" required="required" title="">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Name of customer</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="customer_name" id="customer_name" class="form-control" value="" required="required" placeholder="" title="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Discount</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="discount" id="discount" class="form-control" value="" required="required" placeholder=""  title="Numbers only" pattern="(^[0-9]*[1-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[1-9]+[0-9]*$)|(^[0-9]*[1-9]+[0-9]*$)">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Tax</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="tax" id="tax" class="form-control" value="" required="required" placeholder=""  title="Numbers only" pattern="(^[0-9]*[1-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[1-9]+[0-9]*$)|(^[0-9]*[1-9]+[0-9]*$)">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" name="address" id="address" class="form-control" value="" required="required" placeholder="" title=""></textarea>
                                    </div>
                                </div>
                                <?php
                                for ($i=1; $i <11 ; $i++) { ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Select Category</label>
<!--                                    <select class="form-control" id="batch" name="batch" onchange='loadacyear_with_batch("#acyeardiv","<?php //echo base_url(); ?>coordinator/select/select_acyears_from_batch");'>
                                        <option value="-">Select a Batch</option>
                                        <?php                    
                                        //foreach($batches as $lec_batches) {
                                            //echo'<option value="'.$lec_batches->batch_id.'">' .$lec_batches->batch_name. '</option>';
//                                        }
                                        ?>
                                    </select>

                                    <h4 style="text-align: center; margin: 35px auto 5px auto">Batch Academic year</h4>
                                    <hr class="hr-style-two">
                                    <div id="acyeardiv">
                                    <select class="form-control" name="acyear">
                                        <option value="-">Select an Academic Year</option>

                                    </select>
                                    </div>-->
                                    
                                    <div class="col-sm-3">
                                        <select name="category_<?php echo $i?>_id" id="category_<?php echo $i?>_id" class="form-control" onchange='load_products("#products_<?php echo $i?>_div","<?php echo base_url(); ?>receipt/load_products","category_<?php echo $i?>_id","product_<?php echo $i?>_id");'>
                                            <option selected="selected">Select a category ...</option>
                                            <?php $count=1?>                                            
                                            <?php foreach ($categories as $row) { ?>
                                            <option value="<?php echo $row['category_id'];?>"><?php echo $count;?> <?php echo $row['name'];?></option>
                                            <?php $count++; }?>
                                        </select>
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Select Product <?php echo $i?></label>
                                    <div class="col-sm-3" id="products_<?php echo $i?>_div">
                                        <select name="product_<?php echo $i?>_id" id="product_<?php echo $i?>_id" class="form-control">
                                            <option selected="selected">Select a product ...</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" name="product_<?php echo $i?>_que" id="product_<?php echo $i?>_que" class="form-control" value="" placeholder="Quentity"  title="Numbers only" pattern="(^[0-9]*[1-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[1-9]+[0-9]*$)|(^[0-9]*[1-9]+[0-9]*$)">
                                    </div>
                                </div>
                                <?php } ?>
                                <script>
                                    function load_products(id,urlprefix,cat_sel_id,proct_no_id) {
                                        cat_id = $("#"+cat_sel_id).val();
                                        url=urlprefix+'/'+cat_id+'/'+proct_no_id;
                                        //alert(url);
                                        $(id).load(url);
                                    }
                                </script>
                                
                                <div class="form-group">
                                  <div class="col-sm-10 col-sm-offset-2">
                                      <button type="submit" class="btn btn-warning">Generate</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  <!-- Home-block end -->
        </div>
    </div>  <!-- Home Content end -->
