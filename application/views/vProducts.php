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
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-items menu-items-active">
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
        </div> <!-- Home Header bar End -->
        
        <!-- Home Content start -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="home-block">
                    <div class="page-header" style="margin:10px">
                        <h1 class="text-warning" style="margin:0">Products Managment</h1>
                    </div>
                    <div class="panel panel-default"> <!-- Product ADD Start-->
                        <div class="panel-heading"><h4 style="margin:0;">Add Products</h4></div>
                        <div class="panel-body">
                            <form onsubmit="return validate_form();" action="<?php echo base_url();?>products/insert" method="POST" class="form-horizontal" role="form" id="products_form">
                                <div class="form-group">
                                    
                                    <label for="" class="col-sm-2 control-label">Product Name</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="name" id="name" class="form-control" value="" required="required" placeholder="Enter product name here" pattern="^(\s*[a-zA-Z]+(([\'\-\+\s]\s*[a-zA-Z])?[a-zA-Z]*)\s*)+$" title="Product Name. Letters only" >
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Select Category</label>
                                    <div class="col-sm-3">
                                        <select name="category" id="category" class="form-control" required="required" onchange="enable_disable_generate();">
                                            <option selected="selected" value='-'>Select a category ...</option>
                                                <?php $count=1?>
                                                <?php foreach ($categories as $row) { ?>
                                                    <option value="<?php echo $row['category_id'];?>"><?php echo $count;?> <?php echo $row['name'];?></option>
                                                <?php $count++; }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-5">
                                        <textarea type="text" name="description" id="description" class="form-control" value="" pattern="^(\s*[a-zA-Z]+(([\'\-\+\s]\s*[a-zA-Z])?[a-zA-Z]*)\s*)+$" title="Product Description. Letters only." placeholder="Enter product description here" ></textarea>
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Price</label>
                                    <div class="col-sm-3">
                                        <div class="input-group">
                                        <input type="text" name="price" id="price" class="form-control" value="" required="required" placeholder="Enter product price here (ex: 10.99)"  title="Numbers only" pattern="(^[0-9]*[1-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[1-9]+[0-9]*$)|(^[0-9]*[1-9]+[0-9]*$)">
                                        <div class="input-group-addon">&euro;</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-sm-10 col-sm-offset-2">
                                      <button type="submit" class="btn btn-warning" id="submit_btn" disabled="disabled">Add</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- Product ADD END-->
                    
                    <script>
                        function enable_disable_generate() {
                            cat_id = $("#category").val();
                            if(cat_id==="-"){ //If a category is not selected
                                $('#submit_btn').attr('disabled', "disabled");
                            }else{ //If a category is selected
                                $('#submit_btn').removeAttr('disabled');
                            }
                        }
                    </script>
                    <div class="panel panel-primary"> <!-- Product list start-->
                        <div class="panel-heading">
                            <h3 class="panel-title">Product Details</h3>
                        </div>
                        <div class="panel-body"  style="padding:0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover" style="margin-bottom:0px" id="data_table">
                                    <thead>
                                        <tr class="alert-info">
                                            <th >#</th>
                                            <th data-column-id="Name">Name</th>
                                            <th data-column-id="Category">Category</th>
                                            <th data-column-id="Description">Description</th>
                                            <th data-column-id="Price">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $count=1?>
                                        <?php foreach ($content as $row) { //Generate Products List ?>
                                        <tr>
                                            <td><?php echo $count;?>
                                            <a href="#" onclick="confirm_delete(<?php echo $row['product_id']?>)" data-toggle="modal" data-target="#modal-delete" class="pull-right text-danger" style="margin-left: 8px;"><span class="glyphicon glyphicon-remove"></span></a>
                                            <a href="#" onclick="confirm_edit(<?php echo $row['product_id']?>)" data-toggle="modal" data-target="#modal-edit" class="pull-right"><span class="glyphicon glyphicon-pencil"></span></a>
                                            </td>
                                            <td id="product-<?php echo $row['product_id'];?>-name" ><?php echo $row['name'];?></td>
                                            <td id="product-<?php echo $row['product_id'];?>-cat_name" ><?php echo $row['cat_name'];?></td>
                                            <td id="product-<?php echo $row['product_id'];?>-description" ><?php echo $row['description'];?></td>
                                            <td id="product-<?php echo $row['product_id'];?>-price" align="right"><span id="product-<?php echo $row['product_id'];?>-price_span"><?php echo $row['price'];?></span> &euro;</td>
                                        </tr>
                                        <?php $count++; }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- Product list END-->
                    

                </div>  <!-- Home-block end -->
            </div>
        </div> <!-- Home Content end -->
    </div>  <!-- Container end -->

<!-- Model for confirem to selected item to delete -->
<div class="modal fade" id="modal-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-danger">Confirm the deletion</h4>
            </div>
            <div class="modal-body">
            <p>Are you sure you want to delete this product....?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="href-delete" href="#" class="btn btn-danger">Delete</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Model for edit items -->
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-success">Edit the product</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>products/update" method="POST" class="form-horizontal" role="form">
                    <input type="hidden" name="selected_product" id="selected_product" value="">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="new_name" id="new_name" class="form-control" value="" placeholder="Enter new name here" required="required" pattern="^(\s*[a-zA-Z]+(([\'\-\+\s]\s*[a-zA-Z])?[a-zA-Z]*)\s*)+$" title="Product Name. Letters only">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Select Category</label>
                        <div class="col-sm-9">
                            <select name="category" id="input" class="form-control" required="required">
                                <option selected="selected">Select a category ...</option>
                                <?php $count=1?>
                                <?php foreach ($categories as $row) { ?>
                                <option value="<?php echo $row['category_id'];?>"><?php echo $count;?> <?php echo $row['name'];?></option>
                                <?php $count++; }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-9">
                            <textarea type="text" name="new_description" id="new_description" class="form-control" placeholder="Enter the description" placeholder="Enter product description here" pattern="^(\s*[a-zA-Z]+(([\'\-\+\s]\s*[a-zA-Z])?[a-zA-Z]*)\s*)+$" title="Product Description. Letters only."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Price</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                            <input style="text-align:right;" type="text" name="new_price" id="new_price" class="form-control" placeholder="Enter the price (ex: 10.54)" required="required" title="Numbers only" pattern="(^[0-9]*[1-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[1-9]+[0-9]*$)|(^[0-9]*[1-9]+[0-9]*$)">
                            <div class="input-group-addon">&euro;</div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    function confirm_edit($id){
        //Preparing the values
        var name = document.getElementById("product-"+$id+"-name").innerHTML;
        var description = document.getElementById("product-"+$id+"-description").innerHTML;
        var price = document.getElementById("product-"+$id+"-price_span").innerHTML;
        
        //Setting the values
        document.getElementById("selected_product").value= $id;
        document.getElementById("new_name").value= name;
        document.getElementById("new_description").value= description;
        document.getElementById("new_price").value= price;
    }
    
    function confirm_delete($id){
        document.getElementById("href-delete").href='<?php echo base_url("products/delete?selected_product=")?>'+$id;
    }
</script>


<script>
    $( document ).ready(function() {
        $('#data_table').dataTable();
    });   
</script>