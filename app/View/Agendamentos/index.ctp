<div class="agendamentos index">
	<h2><?php echo __('Agendamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idAgendamento'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_agendamento'); ?></th>
			<th><?php echo $this->Paginator->sort('horario_processamento'); ?></th>
			<th><?php echo $this->Paginator->sort('dia_processamento'); ?></th>
			<th><?php echo $this->Paginator->sort('flag_imediato'); ?></th>
			<th><?php echo $this->Paginator->sort('Instituicao_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Catalogo_Database_idCatalogo_Database'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($agendamentos as $agendamento): ?>
	<tr>
		<td><?php echo h($agendamento['Agendamento']['idAgendamento']); ?>&nbsp;</td>
		<td><?php echo h($agendamento['Agendamento']['tipo_agendamento']); ?>&nbsp;</td>
		<td><?php echo h($agendamento['Agendamento']['horario_processamento']); ?>&nbsp;</td>
		<td><?php echo h($agendamento['Agendamento']['dia_processamento']); ?>&nbsp;</td>
		<td><?php echo h($agendamento['Agendamento']['flag_imediato']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($agendamento['Instituicao']['id'], array('controller' => 'instituicaos', 'action' => 'view', $agendamento['Instituicao']['id'])); ?>
		</td>
		<td><?php echo h($agendamento['Agendamento']['Catalogo_Database_idCatalogo_Database']); ?>&nbsp;</td>
		<td><?php echo h($agendamento['Agendamento']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $agendamento['Agendamento']['idAgendamento'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $agendamento['Agendamento']['idAgendamento'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $agendamento['Agendamento']['idAgendamento']), null, __('Are you sure you want to delete # %s?', $agendamento['Agendamento']['idAgendamento'])); ?>
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
		<li><?php echo $this->Html->link(__('New Agendamento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Instituicaos'), array('controller' => 'instituicaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituicao'), array('controller' => 'instituicaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
