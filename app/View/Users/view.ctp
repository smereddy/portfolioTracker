<div class="users view">
<h2><?php echo __('user'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($user['user']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['user']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['user']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['user']['role']); ?>
			&nbsp;
		</dd>
		</dl>
</div>
<?php foreach ($data as $val):
foreach ($val['export_my_data'] as &$cell):
// Escape double quotation marks
$cell = '"' . preg_replace('/"/','""',$cell) . '"';
endforeach;
echo implode(',', $val['export_my_data']) . "\n";
endforeach; ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit user'), array('action' => 'edit', $user['user']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete user'), array('action' => 'delete', $user['user']['id']), array(), __('Are you sure you want to delete # %s?', $user['user']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New user'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->url('export', array(
'controller' => 'export_my_data',
'action' => 'export',
'ext' => 'csv'
)); ?> </li>
	
	</ul>
</div>
