<div class="educations view">
<h2><?php  echo __('Education'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($education['Education']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($education['User']['id'], array('controller' => 'users', 'action' => 'view', $education['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo h($education['Education']['course']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($education['Education']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($education['Education']['end_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Info'); ?></dt>
		<dd>
			<?php echo h($education['Education']['info']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specialization'); ?></dt>
		<dd>
			<?php echo h($education['Education']['specialization']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($education['Education']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($education['Education']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Education'), array('action' => 'edit', $education['Education']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Education'), array('action' => 'delete', $education['Education']['id']), null, __('Are you sure you want to delete # %s?', $education['Education']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Educations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
