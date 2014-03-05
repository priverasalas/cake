<div class="assuntos form">
<?php echo $this->Form->create('Assunto'); ?>
	<fieldset>
		<legend><?php echo __('Add Assunto'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		echo $this->Form->input('palavras_chave');
		echo $this->Form->input('urls');
		echo $this->Form->input('Modelo');
		echo $this->Form->input('Tabela', array(
                                        'options' => $selectList,
                                        'type' => 'select'
                                     ));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Assuntos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Modelos'), array('controller' => 'modelos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modelo'), array('controller' => 'modelos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tabelas'), array('controller' => 'tabelas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tabela'), array('controller' => 'tabelas', 'action' => 'add')); ?> </li>
	</ul>
</div>
