<div class="agendamentos form">
<?php echo $this->Form->create('Agendamento'); ?>
	<fieldset>
		<legend><?php echo __('Add Agendamento'); ?></legend>
	<?php
		echo $this->Form->input('tipo_agendamento');
		echo $this->Form->input('horario_processamento');
		echo $this->Form->input('dia_processamento');
		echo $this->Form->input('flag_imediato');
		echo $this->Form->input('Instituicao_id');
		echo $this->Form->input('Catalogo_Database_idCatalogo_Database');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Agendamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instituicaos'), array('controller' => 'instituicaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituicao'), array('controller' => 'instituicaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
