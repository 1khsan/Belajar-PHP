<?php 

$ar_bln = [1=>'jan','feb','mar','apr','mei','jun','jul','agus','sept','okt','nov','des'];
?>
<select name="bln">
    <?php
    foreach($ar_bln as $k => $v){
        echo "<option>$v</option>";
    }
    
    ?>
</select>