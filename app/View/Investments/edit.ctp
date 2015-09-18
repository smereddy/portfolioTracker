<div class="investments form">
<?php echo $this->Form->create('Investment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Investment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('category');
		echo $this->Form->input('description');
		echo $this->Form->input('acquiredvalue');
		echo $this->Form->input('acquireddate');
		echo $this->Form->input('recentvalue');
		echo $this->Form->input('recentdate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Investment.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Investment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Investments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
