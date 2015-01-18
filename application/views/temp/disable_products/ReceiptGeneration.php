<!-- ******************* Start vReceipt View ******************* -->

<!--This is the Categories which is loaded with the categories details on $categories array-->

<!--This JS function will be triggered with the drop down onchange-->
<!--onchange='load_products("#products_<?php //echo $i?>_div","<?php //echo base_url(); ?>receipt/load_products","category_<?php //echo $i?>_id","<?php //echo $i?>");disabling_used_products();'-->

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

<!--Thi is where Products is listed. -->
<!--products_<?php //echo $i?>_div will be the id used to load products.-->
<label for="" class="col-sm-2 control-label">Select Product <?php echo $i?></label>
<div class="col-sm-3" id="products_<?php echo $i?>_div" >
    <select name="product_<?php echo $i?>_id" id="product_<?php echo $i?>_id" class="form-control magic-select product-qua" onchange="enable_quantity(<?php echo $i?>);" disabled="disabled">
        <option selected="selected" value="-">Select a product ...</option>
    </select>
</div>


<!--Javascript Function used to load categories and also with the hiding the already selected products-->
<script>
    function load_products(id,urlprefix,cat_sel_id,num_id) {

        var selected_products = [];
        for(i=1;i<11;i++){
            if($("#product_"+i+"_id").val()!=="-"){
                selected_products[i]=$("#product_"+i+"_id").val();
            }
        }

        var json_selected_products = JSON.stringify(selected_products);

        cat_id = $("#"+cat_sel_id).val();
        if(cat_id==="-"){
            cat_id=null;
        }
        durl=urlprefix+'/'+cat_id+'/'+num_id;


        $.ajax({        
           type: "POST",
           url: durl,
           data: { selected_products_array : json_selected_products },
           success: function(html_response) {
                $(id).html(html_response);        
           }
        });                                   

        $("#generate").attr('disabled', 'disabled');
    }
</script>


<!-- ******************* End vReceipt View ******************* -->


<!-- ******************* Start receipt Controller ******************* -->
<?php
        function load_products($cat_id,$number){	if ($this->session->userdata('logged_in') != TRUE) redirect(''); //Check login status
            if($cat_id!=NULL){
		$products= $this->m_products->retrieve_products_by_category($cat_id);
                if(isset($_POST['selected_products_array'])){
                    $selected_products_array=json_decode($_POST['selected_products_array']);
                }
                echo'
                <select name="product_'.$number.'_id" id="product_'.$number.'_id" class="form-control" onchange="enable_quantity('.$number.');">
                    <option selected="selected" value="-">Select a product ...</option>';
                    foreach ($products as $row){
                        for($i=1;$i<11;$i++){
                            if(!empty($selected_products_array)){
                                if($row['product_id']===$selected_products_array[$i]){
                                    $disablility='style="display:none;"';
                                    break;
                                }else{
                                    $disablility='';
                                }
                            }else{
                                break;
                            }
                        }
                    echo '<option value="'.$row['product_id'].'" '.$disablility.'>'.$row['name'].'</option>';
                    }
                echo '</select>';
            }else{
                echo'
                <select name="product_'.$number.'_id" id="product_'.$number.'_id" class="form-control" onchange="enable_quantity('.$number.');">
                    <option selected="selected" value="-">Select a product ...</option>';
                echo '</select>';
            }
	}
?>
<!-- ******************* End receipt Controller ********************* -->