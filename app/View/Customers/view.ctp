

<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">






</style>




<?php setlocale(LC_MONETARY,"en_US"); ?>
<div class="customers view">

<?php
$total_stock_purchase_value=0;
$total_stock_current_value=0;
$total_investment_acquired_value=0;
$total_investment_recent_value=0;
$total_portfolio_stock =0;
$total_portfolio_investment =0;

$total_portfolio_orginal_value =0;
$total_portfolio_current_value =0;
$total_share_value=0;
?>

<h2><?php  echo __('Customer'); ?></h2>
	
	
	




	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Streetaddress'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['streetaddress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primaryemail'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['primaryemail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Homephone'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['homephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cellphone'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cellphone']); ?>
			&nbsp;
		</dd>

	</dl>



<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</dd>


	</dl>

<BR>
    <div>


<h2><?php  echo __('Stocks'); ?></h2>
 <table class="gridtable">
       


		<tr>
		
		<th><?php echo __('Stock Symbol'); ?></th>
		<th><?php echo __('Stock Name'); ?></th>
		<th><?php echo __('No. Shares'); ?></th>
		<th><?php echo __('Purchase Price'); ?></th>
		<th><?php echo __('Date of Purchase'); ?></th>
		<th><?php echo __('Original Value'); ?></th>
		<th><?php echo __('Current Price'); ?></th>
		<th><?php echo __('Current Value'); ?></th>

		</tr>




       


     
       <?php
                
			

        
//$currentprice = 50;
                foreach ($customer['Stock'] as $stock) {


	require_once('nusoap.php');
	$c = new nusoap_client('http://loki.ist.unomaha.edu/~groyce/ws/stockquoteservice.php');
	//$c = new nusoap_client('http://sysint-roycedev.rhcloud.com/ws/stockquoteservice.php');
	$currentprice=$c->call('getStockQuote',array('symbol'=>$stock['stsymbol']));
				
?>
            <tr>
             
           
	
		<td><?php echo $stock['stsymbol']?></td>
		<td><?php echo $stock['stname']?></td>
		<td><?php echo $stock['noshares']?></td>
		<td>$ <?php echo $stock['purchaseprice']?></td>
		<td><?php echo $stock['datepurchased']?></td>
		<td>$ <?php echo ($stock['purchaseprice'] * $stock['noshares'] )?></td>
		 <?php $total_stock_purchase_value = $total_stock_purchase_value + ($stock['purchaseprice'] * $stock['noshares'] )?>
		<td>$ <?php echo $currentprice?></td>
		<td>$ <?php echo $currentprice * $stock['noshares'] ?></td>
		 <?php $total_stock_current_value = $total_stock_current_value + ($currentprice * $stock['noshares'] )?>
 </tr>

		


        <?php } // end foreach ?>

 <tr>
		<td><b><?php echo __('Total Stock Value'); ?></b></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><b>$ <?php echo $total_stock_purchase_value ?></b></td>
		<td></td>
		<td><b>$ <?php echo $total_stock_current_value ?></b></td>
		 </tr>

       </table>


<h2><?php  echo __('Investments'); ?></h2>


 <table class="gridtable">
       


		<tr>
		
		<th><?php echo __('Category'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Acquired Value'); ?></th>
		<th><?php echo __('Acquired Date'); ?></th>
		<th><?php echo __('Recent Value'); ?></th>
		<th><?php echo __('Recent Date'); ?></th>

		</tr>

       

        <?php
$currentprice = 50;
                foreach ($customer['Investment'] as $investment) { ?>

            <tr>
             
           

		<td><?php echo $investment['category']?></td>
	        <td><?php echo $investment['description']?></td>
		<td>$<?php echo $investment['acquiredvalue']?></td>
		<?php $total_investment_acquired_value = $total_investment_acquired_value + $investment['acquiredvalue'] ?>
		<td><?php echo $investment['acquireddate']?></td>
		<td>$<?php echo $investment['recentvalue']?></td>
		<?php $total_investment_recent_value = $total_investment_recent_value + $investment['recentvalue'] ?>
		<td><?php echo $investment['recentdate']?></td>



 </tr>




        <?php } // end foreach ?>
<tr>
		<td><b><?php echo __('Total Investment Value'); ?></b></td>
		<td></td>
		<td>$<b><?php echo $total_investment_acquired_value ?></b></td>
		<td></td>
		<td>$<b><?php echo  $total_investment_recent_value ?></b></td>
		<td></td>
		 </tr>


       </table>





      
<h2><?php  echo __('Total Portfolio Value'); ?></h2>
 <table class="gridtable">
       


		<tr>
		
		<th><?php echo __('Category'); ?></th>
		<th><?php echo __('Original Value'); ?></th>
		<th><?php echo __('Current Value'); ?></th>
		</tr>


		<tr>
		<td><?php echo __ ('Stocks')?></td>
		<td>$<?php echo $total_stock_purchase_value?></td>
		<td>$<?php echo $total_stock_current_value?></td>
		</tr>

		<tr>
		<td><?php echo __ ('Investments')?></td>
		<td>$<?php echo $total_investment_acquired_value?></td>
		<td>$<?php echo $total_investment_recent_value?></td>
		</tr>

<?php $total_portfolio_stock = $total_stock_purchase_value + $total_investment_acquired_value  ?>
<?php $total_portfolio_investment =  $total_stock_current_value +  $total_investment_recent_value ?>
		<tr>
		<td><b><?php echo __ ('Total Portfolio Value')?></b></td>
		<td>$<b><?php echo $total_portfolio_stock?></b></td>
		<td>$<b><?php echo $total_portfolio_investment?></b></td>
		</tr>

</table>

<h2><?php  echo __('shares'); ?></h2>
 <table class="gridtable">
       


		<tr>
		
		<th><?php echo __('Total shares '); ?></th>
		<th><?php echo __('Value '); ?></th>
       
		</tr>
		<?php $total_share_value = $total_portfolio_stock +
$total_portfolio_investment  ?>
		<tr>
		<td><?php echo __ ('All shares')?></td>
		<td>$<b><?php echo $total_share_value?></b></td>
		</tr>
		

		
 
		
		</tr>
</table>

    </div>

</div>



<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Home Page'), array('controller' => 'introductions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('New Share'), array('controller' => 'share', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>

	</ul>
</div>
