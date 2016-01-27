<?php // sample for doing something from scratch. ?>


Name : <?php echo $customer['Customer']['name']?>
<?php $totalPort = 0; ?>

    <?php foreach ($customer['Stock'] as $s) {
     $value = $s['noshares'] * $s['purchaseprice'];
     $totalPort += $value;
    ?>
         <?php echo $s ['stsymbol']?>
           <?php echo $value?>

    <?php } ?>

Total value : $<?php echo number_format($totalPort) ?>