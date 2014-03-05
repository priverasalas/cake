<div class="assuntos form">
<?php echo $this->Form->create('Assunto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Assunto'); ?></legend>
	<?php
		echo $this->Form->input('idAssuntos');
		echo $this->Form->input('descricao');
		echo $this->Form->input('palavras_chave');
		echo $this->Form->input('urls');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Assunto.idAssuntos')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Assunto.idAssuntos'))); ?></li>
		<li><?php echo $this->Html->link(__('List Assuntos'), array('action' => 'index')); ?></li>
	</ul>
</div>
