<div class="commodities view">
<h2><?php echo __('Commodity'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($commodity['Commodity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($commodity['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $commodity['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commodname'); ?></dt>
		<dd>
			<?php echo h($commodity['Commodity']['commodname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Noofcommodities'); ?></dt>
		<dd>
			<?php echo h($commodity['Commodity']['noofcommodities']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchaseprice'); ?></dt>
		<dd>
			<?php echo h($commodity['Commodity']['purchaseprice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currentvalue'); ?></dt>
		<dd>
			<?php echo h($commodity['Commodity']['currentvalue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datepurchased'); ?></dt>
		<dd>
			<?php echo h($commodity['Commodity']['datepurchased']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Commodity'), array('action' => 'edit', $commodity['Commodity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Commodity'), array('action' => 'delete', $commodity['Commodity']['id']), array(), __('Are you sure you want to delete # %s?', $commodity['Commodity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Commodities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commodity'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
