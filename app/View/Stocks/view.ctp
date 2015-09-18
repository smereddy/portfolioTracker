<div class="stocks view">
<h2><?php echo __('Stock'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stock['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $stock['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stsymbol'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stsymbol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stname'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['stname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Noshares'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['noshares']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchaseprice'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['purchaseprice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datepurchased'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['datepurchased']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stock'), array('action' => 'edit', $stock['Stock']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Stock'), array('action' => 'delete', $stock['Stock']['id']), array(), __('Are you sure you want to delete # %s?', $stock['Stock']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
