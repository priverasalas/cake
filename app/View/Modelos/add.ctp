<div class="modelos form">
<?php echo $this->Form->create('Modelo'); ?>
	<fieldset>
		<legend><?php echo __('Add Modelo'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
		echo $this->Form->input('Catalogo_Database_idCatalogo_Database');
		echo $this->Form->input('idFactTable');
		echo $this->Form->input('Assunto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Modelos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Assuntos'), array('controller' => 'assuntos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assunto'), array('controller' => 'assuntos', 'action' => 'add')); ?> </li>
	</ul>
</div>
