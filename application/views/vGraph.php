<div id="chart_div"></div>
<?php 
$i=0;
foreach ($graph_data as $bars) {

    $bar_data[$i]="{Date: '".$bars['date']."', ";
    if($cb==1) { 
       $bar_data[$i]=$bar_data[$i].'a: '.$bars['cb'].",";
    }
    if($cheque==1) { 
       $bar_data[$i]=$bar_data[$i].'b: '.$bars['cheque'].",";
    }
    if($tr==1) { 
       $bar_data[$i]=$bar_data[$i].'c: '.$bars['tr'].",";
    }
    if($especes==1) { 
       $bar_data[$i]=$bar_data[$i].'d: '.$bars['especes'].",";
    }
    
    $bar_data[$i]=$bar_data[$i].'},';
    $i++;
}
?>
    
<script type="text/javascript">
//Creating the Graph
    Morris.Bar({

     element: 'chart_div',
     data: [
        <?php 
        foreach ($bar_data as $bars) {
             echo $bars;
        } 
        ?>                    
         ],
     xkey: 'Date',     
     ykeys: ['a', 'b','c','d'],
     labels: ['CB', 'Cheque','TR','ESPECES'],
     resize:true
    });

</script>