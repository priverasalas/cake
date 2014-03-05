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
	</ul>
</div>
