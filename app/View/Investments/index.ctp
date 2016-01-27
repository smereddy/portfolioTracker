<div class="investments index">
	<h2><?php echo __('Investments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('acquiredvalue'); ?></th>
			<th><?php echo $this->Paginator->sort('acquireddate'); ?></th>
			<th><?php echo $this->Paginator->sort('recentvalue'); ?></th>
			<th><?php echo $this->Paginator->sort('recentdate'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($investments as $investment): ?>
	<tr>
		<td><?php echo h($investment['Investment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($investment['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $investment['Customer']['id'])); ?>
		</td>
		<td><?php echo h($investment['Investment']['category']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['description']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['acquiredvalue']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['acquireddate']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['recentvalue']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['recentdate']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['created']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $investment['Investment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $investment['Investment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $investment['Investment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $investment['Investment']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Investment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
