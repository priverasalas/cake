<div class="agendamentos form">
<?php echo $this->Form->create('Agendamento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Agendamento'); ?></legend>
	<?php
		echo $this->Form->input('idAgendamento');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Agendamento.idAgendamento')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Agendamento.idAgendamento'))); ?></li>
		<li><?php echo $this->Html->link(__('List Agendamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instituicaos'), array('controller' => 'instituicaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituicao'), array('controller' => 'instituicaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
