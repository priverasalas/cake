<div class="modelos index">
	<h2><?php echo __('Modelos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idModelos'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('Catalogo_Database_idCatalogo_Database'); ?></th>
			<th><?php echo $this->Paginator->sort('idFactTable'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($modelos as $modelo): ?>
	<tr>
		<td><?php echo h($modelo['Modelo']['idModelos']); ?>&nbsp;</td>
		<td><?php echo h($modelo['Modelo']['nome']); ?>&nbsp;</td>
		<td><?php echo h($modelo['Modelo']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($modelo['Modelo']['Catalogo_Database_idCatalogo_Database']); ?>&nbsp;</td>
		<td><?php echo h($modelo['Modelo']['idFactTable']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $modelo['Modelo']['idModelos'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $modelo['Modelo']['idModelos'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $modelo['Modelo']['idModelos']), null, __('Are you sure you want to delete # %s?', $modelo['Modelo']['idModelos'])); ?>
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
		<li><?php echo $this->Html->link(__('New Modelo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Assuntos'), array('controller' => 'assuntos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assunto'), array('controller' => 'assuntos', 'action' => 'add')); ?> </li>
	</ul>
</div>
