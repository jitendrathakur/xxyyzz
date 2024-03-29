<div class="educations index">
	<h2><?php echo __('Educations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('course'); ?></th>
			<th><?php echo $this->Paginator->sort('start_time'); ?></th>
			<th><?php echo $this->Paginator->sort('end_time'); ?></th>
			<th><?php echo $this->Paginator->sort('info'); ?></th>
			<th><?php echo $this->Paginator->sort('specialization'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($educations as $education): ?>
	<tr>
		<td><?php echo h($education['Education']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($education['User']['id'], array('controller' => 'users', 'action' => 'view', $education['User']['id'])); ?>
		</td>
		<td><?php echo h($education['Education']['course']); ?>&nbsp;</td>
		<td><?php echo h($education['Education']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($education['Education']['end_time']); ?>&nbsp;</td>
		<td><?php echo h($education['Education']['info']); ?>&nbsp;</td>
		<td><?php echo h($education['Education']['specialization']); ?>&nbsp;</td>
		<td><?php echo h($education['Education']['created']); ?>&nbsp;</td>
		<td><?php echo h($education['Education']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $education['Education']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $education['Education']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $education['Education']['id']), null, __('Are you sure you want to delete # %s?', $education['Education']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Education'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
