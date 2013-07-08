<div class="works form">
<?php echo $this->Form->create('Work'); ?>
	<fieldset>
		<legend><?php echo __('Add Work'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('company_name');
		echo $this->Form->input('designation');
		echo $this->Form->input('info');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Works'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
