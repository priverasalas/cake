<div class="assuntos view">
<h2><?php echo __('Assunto'); ?></h2>
	<dl>
		<dt><?php echo __('IdAssuntos'); ?></dt>
		<dd>
			<?php echo h($assunto['Assunto']['idAssuntos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($assunto['Assunto']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Palavras Chave'); ?></dt>
		<dd>
			<?php echo h($assunto['Assunto']['palavras_chave']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Urls'); ?></dt>
		<dd>
			<?php echo h($assunto['Assunto']['urls']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assunto'), array('action' => 'edit', $assunto['Assunto']['idAssuntos'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assunto'), array('action' => 'delete', $assunto['Assunto']['idAssuntos']), null, __('Are you sure you want to delete # %s?', $assunto['Assunto']['idAssuntos'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Assuntos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assunto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modelos'), array('controller' => 'modelos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modelo'), array('controller' => 'modelos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tabelas'), array('controller' => 'tabelas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tabela'), array('controller' => 'tabelas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Modelos'); ?></h3>
	<?php if (!empty($assunto['Modelo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdModelos'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Catalogo Database IdCatalogo Database'); ?></th>
		<th><?php echo __('IdFactTable'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assunto['Modelo'] as $modelo): ?>
		<tr>
			<td><?php echo $modelo['idModelos']; ?></td>
			<td><?php echo $modelo['nome']; ?></td>
			<td><?php echo $modelo['descricao']; ?></td>
			<td><?php echo $modelo['Catalogo_Database_idCatalogo_Database']; ?></td>
			<td><?php echo $modelo['idFactTable']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'modelos', 'action' => 'view', $modelo['idModelos'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'modelos', 'action' => 'edit', $modelo['idModelos'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'modelos', 'action' => 'delete', $modelo['idModelos']), null, __('Are you sure you want to delete # %s?', $modelo['idModelos'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Modelo'), array('controller' => 'modelos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tabelas'); ?></h3>
	<?php if (!empty($assunto['Tabela'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdTabelas'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Owner'); ?></th>
		<th><?php echo __('IdTipo Tabela'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assunto['Tabela'] as $tabela): ?>
		<tr>
			<td><?php echo $tabela['idTabelas']; ?></td>
			<td><?php echo $tabela['nome']; ?></td>
			<td><?php echo $tabela['descricao']; ?></td>
			<td><?php echo $tabela['owner']; ?></td>
			<td><?php echo $tabela['idTipo_Tabela']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tabelas', 'action' => 'view', $tabela['idTabelas'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tabelas', 'action' => 'edit', $tabela['idTabelas'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tabelas', 'action' => 'delete', $tabela['idTabelas']), null, __('Are you sure you want to delete # %s?', $tabela['idTabelas'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tabela'), array('controller' => 'tabelas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
