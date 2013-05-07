<div class="permissionValidities form">
<?php echo $this->Form->create('PermissionValidity'); ?>
	<fieldset>
		<legend><?php echo __('Add Permission Validity'); ?></legend>
	<?php
		echo $this->Form->input('permission_id');
		echo $this->Form->input('valid_from');
		echo $this->Form->input('valid_to');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Permission Validities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Permissions'), array('controller' => 'permissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permission'), array('controller' => 'permissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
