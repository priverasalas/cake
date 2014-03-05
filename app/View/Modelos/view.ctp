<div class="modelos view">
<h2><?php echo __('Modelo'); ?></h2>
	<dl>
		<dt><?php echo __('IdModelos'); ?></dt>
		<dd>
			<?php echo h($modelo['Modelo']['idModelos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($modelo['Modelo']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($modelo['Modelo']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Catalogo Database IdCatalogo Database'); ?></dt>
		<dd>
			<?php echo h($modelo['Modelo']['Catalogo_Database_idCatalogo_Database']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdFactTable'); ?></dt>
		<dd>
			<?php echo h($modelo['Modelo']['idFactTable']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Modelo'), array('action' => 'edit', $modelo['Modelo']['idModelos'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Modelo'), array('action' => 'delete', $modelo['Modelo']['idModelos']), null, __('Are you sure you want to delete # %s?', $modelo['Modelo']['idModelos'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modelos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modelo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assuntos'), array('controller' => 'assuntos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assunto'), array('controller' => 'assuntos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Assuntos'); ?></h3>
	<?php if (!empty($modelo['Assunto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdAssuntos'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Palavras Chave'); ?></th>
		<th><?php echo __('Urls'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($modelo['Assunto'] as $assunto): ?>
		<tr>
			<td><?php echo $assunto['idAssuntos']; ?></td>
			<td><?php echo $assunto['descricao']; ?></td>
			<td><?php echo $assunto['palavras_chave']; ?></td>
			<td><?php echo $assunto['urls']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'assuntos', 'action' => 'view', $assunto['idAssuntos'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'assuntos', 'action' => 'edit', $assunto['idAssuntos'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'assuntos', 'action' => 'delete', $assunto['idAssuntos']), null, __('Are you sure you want to delete # %s?', $assunto['idAssuntos'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Assunto'), array('controller' => 'assuntos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
