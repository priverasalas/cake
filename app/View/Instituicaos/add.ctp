<div class="instituicaos form">
<?php echo $this->Form->create('Instituicao'); ?>
	<fieldset>
		<legend><?php echo __('Add Instituicao'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Instituicaos'), array('action' => 'index')); ?></li>
	</ul>
</div>
