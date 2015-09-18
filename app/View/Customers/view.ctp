<div class="customers view">
<h2><?php echo __('Customer'); ?></h2>
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
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), array(), __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Investments'), array('controller' => 'investments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Investment'), array('controller' => 'investments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Investments'); ?></h3>
	<?php if (!empty($customer['Investment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Category'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Acquiredvalue'); ?></th>
		<th><?php echo __('Acquireddate'); ?></th>
		<th><?php echo __('Recentvalue'); ?></th>
		<th><?php echo __('Recentdate'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['Investment'] as $investment): ?>
		<tr>
			<td><?php echo $investment['id']; ?></td>
			<td><?php echo $investment['customer_id']; ?></td>
			<td><?php echo $investment['category']; ?></td>
			<td><?php echo $investment['description']; ?></td>
			<td><?php echo $investment['acquiredvalue']; ?></td>
			<td><?php echo $investment['acquireddate']; ?></td>
			<td><?php echo $investment['recentvalue']; ?></td>
			<td><?php echo $investment['recentdate']; ?></td>
			<td><?php echo $investment['created']; ?></td>
			<td><?php echo $investment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'investments', 'action' => 'view', $investment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'investments', 'action' => 'edit', $investment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'investments', 'action' => 'delete', $investment['id']), array(), __('Are you sure you want to delete # %s?', $investment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Investment'), array('controller' => 'investments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Stocks'); ?></h3>
	<?php if (!empty($customer['Stock'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Stsymbol'); ?></th>
		<th><?php echo __('Stname'); ?></th>
		<th><?php echo __('Noshares'); ?></th>
		<th><?php echo __('Purchaseprice'); ?></th>
		<th><?php echo __('Datepurchased'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['Stock'] as $stock): ?>
		<tr>
			<td><?php echo $stock['id']; ?></td>
			<td><?php echo $stock['customer_id']; ?></td>
			<td><?php echo $stock['stsymbol']; ?></td>
			<td><?php echo $stock['stname']; ?></td>
			<td><?php echo $stock['noshares']; ?></td>
			<td><?php echo $stock['purchaseprice']; ?></td>
			<td><?php echo $stock['datepurchased']; ?></td>
			<td><?php echo $stock['created']; ?></td>
			<td><?php echo $stock['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stocks', 'action' => 'view', $stock['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stocks', 'action' => 'edit', $stock['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stocks', 'action' => 'delete', $stock['id']), array(), __('Are you sure you want to delete # %s?', $stock['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
