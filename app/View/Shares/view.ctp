<div class="shares view">
<h2><?php echo __('Share'); ?></h2>
	<dl>
		<dt><?php echo __('ShareID'); ?></dt>
		<dd>
			<?php echo h($share['Share']['shareID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastName'); ?></dt>
		<dd>
			<?php echo h($share['Share']['LastName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FirstName'); ?></dt>
		<dd>
			<?php echo h($share['Share']['FirstName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($share['Share']['Address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($share['Share']['City']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($share['Share']['Cost']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
<li><?php echo $this->Html->link(__('Home Page'), array('controller' => 'introductions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Share'), array('action' => 'edit', $share['Share']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Share'), array('action' => 'delete', $share['Share']['ID']), array(), __('Are you sure you want to delete # %s?', $share['Share']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shares'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Share'), array('action' => 'add')); ?> </li>
	</ul>
</div>
