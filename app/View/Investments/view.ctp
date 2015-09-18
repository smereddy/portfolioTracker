<div class="investments view">
<h2><?php echo __('Investment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($investment['Investment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($investment['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $investment['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($investment['Investment']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($investment['Investment']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acquiredvalue'); ?></dt>
		<dd>
			<?php echo h($investment['Investment']['acquiredvalue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acquireddate'); ?></dt>
		<dd>
			<?php echo h($investment['Investment']['acquireddate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recentvalue'); ?></dt>
		<dd>
			<?php echo h($investment['Investment']['recentvalue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recentdate'); ?></dt>
		<dd>
			<?php echo h($investment['Investment']['recentdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($investment['Investment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($investment['Investment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Investment'), array('action' => 'edit', $investment['Investment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Investment'), array('action' => 'delete', $investment['Investment']['id']), array(), __('Are you sure you want to delete # %s?', $investment['Investment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Investments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Investment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
