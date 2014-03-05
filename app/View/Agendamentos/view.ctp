<div class="agendamentos view">
<h2><?php echo __('Agendamento'); ?></h2>
	<dl>
		<dt><?php echo __('IdAgendamento'); ?></dt>
		<dd>
			<?php echo h($agendamento['Agendamento']['idAgendamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Agendamento'); ?></dt>
		<dd>
			<?php echo h($agendamento['Agendamento']['tipo_agendamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horario Processamento'); ?></dt>
		<dd>
			<?php echo h($agendamento['Agendamento']['horario_processamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dia Processamento'); ?></dt>
		<dd>
			<?php echo h($agendamento['Agendamento']['dia_processamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag Imediato'); ?></dt>
		<dd>
			<?php echo h($agendamento['Agendamento']['flag_imediato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instituicao'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agendamento['Instituicao']['id'], array('controller' => 'instituicaos', 'action' => 'view', $agendamento['Instituicao']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Catalogo Database IdCatalogo Database'); ?></dt>
		<dd>
			<?php echo h($agendamento['Agendamento']['Catalogo_Database_idCatalogo_Database']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($agendamento['Agendamento']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Agendamento'), array('action' => 'edit', $agendamento['Agendamento']['idAgendamento'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Agendamento'), array('action' => 'delete', $agendamento['Agendamento']['idAgendamento']), null, __('Are you sure you want to delete # %s?', $agendamento['Agendamento']['idAgendamento'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Agendamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agendamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instituicaos'), array('controller' => 'instituicaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituicao'), array('controller' => 'instituicaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
