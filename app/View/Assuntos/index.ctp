<div class="assuntos index">
	<h2><?php echo __('Assuntos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idAssuntos'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('palavras_chave'); ?></th>
			<th><?php echo $this->Paginator->sort('urls'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assuntos as $assunto): ?>
	<tr>
		<td><?php echo h($assunto['Assunto']['idAssuntos']); ?>&nbsp;</td>
		<td><?php echo h($assunto['Assunto']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($assunto['Assunto']['palavras_chave']); ?>&nbsp;</td>
		<td><?php echo h($assunto['Assunto']['urls']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $assunto['Assunto']['idAssuntos'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assunto['Assunto']['idAssuntos'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assunto['Assunto']['idAssuntos']), null, __('Are you sure you want to delete # %s?', $assunto['Assunto']['idAssuntos'])); ?>
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
		<li><?php echo $this->Html->link(__('New Assunto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Modelos'), array('controller' => 'modelos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modelo'), array('controller' => 'modelos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tabelas'), array('controller' => 'tabelas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tabela'), array('controller' => 'tabelas', 'action' => 'add')); ?> </li>
	</ul>
</div>
