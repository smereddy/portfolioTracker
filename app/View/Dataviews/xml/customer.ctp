<?xml version="1.0" encoding="UTF-8"?>
<stocks>
   <?php foreach ($customer['Stocks] as $s) {
     $value = $s['noshares'] * $s['purchaseprice'];
         ?>
         <stsymbol><?php echo htmlspecialchars($s['stsymbol'])?></stsymbol>
         <value><?php echo htmlspecialchars($value)?></value>
    <?php } ?>
</stocks>