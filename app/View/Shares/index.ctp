<div class="shares index">
	<h2><?php echo __('Shares'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('shareID'); ?></th>
			<th><?php echo $this->Paginator->sort('LastName'); ?></th>
			<th><?php echo $this->Paginator->sort('FirstName'); ?></th>
			<th><?php echo $this->Paginator->sort('Address'); ?></th>
			<th><?php echo $this->Paginator->sort('City'); ?></th>
			<th><?php echo $this->Paginator->sort('Cost'); ?></th>
			
	</tr>
	</thead>
	<tbody>
	<?php foreach ($shares as $share): ?>
	<tr>
		<td><?php echo h($share['Share']['shareID']); ?>&nbsp;</td>
		<td><?php echo h($share['Share']['LastName']); ?>&nbsp;</td>		<td><?php echo h($share['Share']['FirstName']); ?>&nbsp;</td>
        	<td><?php echo h($share['Share']['Address']); ?>&nbsp;</td>
		<td><?php echo h($share['Share']['City']); ?>&nbsp;</td>
		<td><?php echo h($share['Share']['Cost']); ?>&nbsp;</td>
		
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
		<li><?php echo $this->Html->link(__('New Share'), array('action' => 'add')); ?></li>
<li><?php echo $this->Html->link(__('List share'), array('controller' => 'share', 'action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('New Investments'), array('controller' => 'investments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stocks'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
	</ul>
</div>
