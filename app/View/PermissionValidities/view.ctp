<div class="permissionValidities view">
<h2><?php  echo __('Permission Validity'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($permissionValidity['PermissionValidity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permission'); ?></dt>
		<dd>
			<?php echo $this->Html->link($permissionValidity['Permission']['id'], array('controller' => 'permissions', 'action' => 'view', $permissionValidity['Permission']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid From'); ?></dt>
		<dd>
			<?php echo h($permissionValidity['PermissionValidity']['valid_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid To'); ?></dt>
		<dd>
			<?php echo h($permissionValidity['PermissionValidity']['valid_to']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Permission Validity'), array('action' => 'edit', $permissionValidity['PermissionValidity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Permission Validity'), array('action' => 'delete', $permissionValidity['PermissionValidity']['id']), null, __('Are you sure you want to delete # %s?', $permissionValidity['PermissionValidity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Permission Validities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permission Validity'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Permissions'), array('controller' => 'permissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permission'), array('controller' => 'permissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
