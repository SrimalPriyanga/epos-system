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
                        <div class="panel-body" id="" >
                            <form action="<?php echo base_url();?>receipt/generate" method="POST" class="form-horizontal" role="form">
                          
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="date" id="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" required="required" title="">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Name of customer</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="customer_name" id="customer_name" class="form-control" value="" required="required" placeholder="" pattern="^(\s*[a-zA-Z]+(([\'\-\+\s]\s*[a-zA-Z])?[a-zA-Z]*)\s*)+$" title="Customer Name. Letters only">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Discount</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="discount" id="discount" class="form-control" value="" required="required" placeholder=""  title="Numbers only" pattern="(^[0-9]*[0-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[0-9]+[0-9]*$)|(^[0-9]*[0-9]+[0-9]*$)">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Tax</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="tax" id="tax" class="form-control" value="" required="required" placeholder=""  title="Numbers only" pattern="(^[0-9]*[1-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[1-9]+[0-9]*$)|(^[0-9]*[1-9]+[0-9]*$)">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" name="address" id="address" class="form-control" value="" placeholder="" title=""></textarea>
                                    </div>
                                </div>
                                <?php
                                for ($i=1; $i <11 ; $i++) { ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Select Category</label>
                                    <div class="col-sm-3">
                                        <?php if($i==1) {    ?>
                                        <select name="category_<?php echo $i?>_id" id="category_<?php echo $i?>_id" class="form-control" onchange='load_products("#products_<?php echo $i?>_div","<?php echo base_url(); ?>receipt/load_products","category_<?php echo $i?>_id","<?php echo $i?>");disabling_used_products();'>
                                        <?php }else{ ?>
                                        <select name="category_<?php echo $i?>_id" id="category_<?php echo $i?>_id" disabled="disabled" class="form-control" onchange='load_products("#products_<?php echo $i?>_div","<?php echo base_url(); ?>receipt/load_products","category_<?php echo $i?>_id","<?php echo $i?>");disabling_used_products();'>
                                        <?php }     ?>    
                                            <option selected="selected" value="-" >Select a category ...</option>
                                            <?php $count=1?>                                            
                                            <?php foreach ($categories as $row) { ?>
                                            <option value="<?php echo $row['category_id'];?>"><?php echo $row['name'];?></option>
                                            <?php $count++; }?>
                                        </select>
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Select Product <?php echo $i?></label>
                                    <div class="col-sm-3" id="products_<?php echo $i?>_div" >
                                        <select name="product_<?php echo $i?>_id" id="product_<?php echo $i?>_id" class="form-control magic-select product-qua" onchange="enable_quantity(<?php echo $i?>);" disabled="disabled">
                                            <option selected="selected" value="-">Select a product ...</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input ng-model="a.b" ng-change="change()" ng-init="init('#category_<?php echo $i+1?>_id','#product_<?php echo $i?>_que')" data-number="<?php echo $i?>" type="text" name="product_<?php echo $i?>_que" id="product_<?php echo $i?>_que" onkeypress="enable_next_categoryquantity(<?php echo $i?>);" class="form-control" value="" placeholder="Quantity" disabled="disabled" title="Numbers only" pattern="(^[0-9]*[1-9]+[0-9]*\.[0-9]*$)|(^[0-9]*\.[0-9]*[1-9]+[0-9]*$)|(^[0-9]*[1-9]+[0-9]*$)">
                                    </div>
                                </div>
                                <?php } ?>
                                <script>
                                    function load_products(id,urlprefix,cat_sel_id,num_id) {
                                        
                                        var selected_products = [];
                                        for(i=1;i<11;i++){ //Preparing the array of already selected Products
                                            if($("#product_"+i+"_id").val()!=="-"){
                                                selected_products[i]=$("#product_"+i+"_id").val();
                                            }
                                        }
                                        //JSON encode the array for post request 
                                        var json_selected_products = JSON.stringify(selected_products);
                                        
                                        cat_id = $("#"+cat_sel_id).val();
                                        if(cat_id==="-"){ //If no category is selected
                                            cat_id=null;
                                        }
                                        //URL with parameters for the php function
                                        durl=urlprefix+'/'+cat_id+'/'+num_id;
                                        
                                        //AJAX Post Request
                                        $.ajax({        
                                           type: "POST",
                                           url: durl,
                                           data: { selected_products_array : json_selected_products },
                                           success: function(html_response) {
                                                $(id).html(html_response);        
                                           }
                                        });        
                                        
                                        //Disable the Generate Button
                                        $("#generate").attr('disabled', 'disabled');
                                    }
                                    
                                    function enable_quantity(number){ 
                                        cat_id = $("#product_"+number+"_id").val();
                                        if(cat_id!=="-"){ //If any Product is selected
                                            $("#product_"+number+"_que").removeAttr('disabled');            
                                        }else{ //If any Product is not selected
                                            $("#product_"+number+"_que").attr('disabled', 'disabled');
                                            $("#generate").attr('disabled', 'disabled');
                                        }
                                    }
                                    function enable_next_categoryquantity(number){
                                        cat_id = $("#product_"+number+"_que").val();
                                        if(cat_id!=="" || cat_id!==" " || cat_id!==null){ //If a quantity has been entered
                                            $("#category_"+(number+1)+"_id").removeAttr('disabled');
                                            $("#generate").removeAttr('disabled'); 
                                        }else{ //If a quantity has not been entered
                                            $("#category_"+(number+1)+"_id").attr('disabled', 'disabled');
                                            $("#generate").attr('disabled', 'disabled');
                                        }
                                    }

                                </script>

                                
                                <div class="form-group">
                                  <div class="col-sm-10 col-sm-offset-2">
                                      <button type="submit" class="btn btn-warning" disabled="disabled" id="generate">Generate</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

<script type="text/javascript">

function disabling_used_products(){
//    alert(newVal);
//                alert('old:'+oldVal);
//    $(function () {
        var selects = $('select.magic-select');
//        $(selects).bind('change', function (evt) {
            var newVal = $('select.magic-select').val(), oldVal = $('select.magic-select').data('old-val');
//                alert('newVal');
            if (newVal !== 0) {
                $(selects).not(this).find('option[value="' + newVal + '"]').attr('disabled', 'disabled');
                
                
            }

            $(selects).not(this).find('option[value="' + oldVal + '"]').removeAttr('disabled');
            $(this).data('old-val', newVal);
//        });
//    });
}
    
</script>

<?php
//    $players = array('Ben', 'Jack', 'James', 'John', 'Foo', 'Bar', 'Allmighty Foobar');
//    $numPlayers = count($players);
//
//    for ($i = 1; $i <= $numPlayers; $i += 1) {
//        echo '<select class="magic-select" name="pl%s" size="%s"><option value="0"></option>'.$i.($numPlayers + 1);
//        $i2=1;
//        foreach ($players as $j => $name) {
//            echo '<option value="'.$i2.'">'.$i2.'</option>'.($j + 1).$name;
//            $i2++;
//        }
//
//        echo '</select>';
//    }
?>
                
                
            </div>  <!-- Home-block end -->
        </div>
    </div>  <!-- Home Content end -->

    
    
    

