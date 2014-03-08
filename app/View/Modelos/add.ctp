<div class="modelos form">
<?php echo $this->Form->create('Modelo'); ?>
	<fieldset>
		<legend><?php echo __('Add Modelo'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
		echo $this->Form->input('Catalogo_Database_idCatalogo_Database', array(
                                        'options' => $selectList1,
                                        'type' => 'select'
                                     ));
		echo $this->Form->input('idFactTable', array(
                                        'options' => $selectList,
                                        'type' => 'select'
                                     ));
		//echo $this->Form->input('Assunto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Modelos'), array('action' => 'index')); ?></li>
	</ul>
</div>
