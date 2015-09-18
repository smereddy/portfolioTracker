<div class="commodities form">
<?php echo $this->Form->create('Commodity'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Commodity'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('commodname');
		echo $this->Form->input('noofcommodities');
		echo $this->Form->input('purchaseprice');
		echo $this->Form->input('currentvalue');
		echo $this->Form->input('datepurchased');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Commodity.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Commodity.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Commodities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
