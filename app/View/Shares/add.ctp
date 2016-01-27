<div class="shares form">
<?php echo $this->Form->create('Share'); ?>
	<fieldset>
		<legend><?php echo __('Add Share'); ?></legend>
	<?php
		echo $this->Form->input('shareID');
		echo $this->Form->input('LastName');
		echo $this->Form->input('FirstName');
		echo $this->Form->input('Address');
		echo $this->Form->input('City');
		echo $this->Form->input('Cost');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Shares'), array('action' => 'index')); ?></li>
<li><?php echo $this->Html->link(__('List share'), array('controller' => 'share', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Investment'), array('controller' => 'investments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
