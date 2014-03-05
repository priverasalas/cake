<div class="instituicaos form">
<?php echo $this->Form->create('Instituicao'); ?>
	<fieldset>
		<legend><?php echo __('Edit Instituicao'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Nome');
		echo $this->Form->input('Sigla');
		echo $this->Form->input('dominio');
		echo $this->Form->input('descricao');
		echo $this->Form->input('url_web_service');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Instituicao.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Instituicao.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Instituicaos'), array('action' => 'index')); ?></li>
	</ul>
</div>
