<div class="assuntos form">
<?php echo $this->Form->create('Assunto'); ?>
	<fieldset>
		<legend><?php echo __('Add Assunto'); ?></legend>
	<?php
        
        echo $this->Form->input('descricao', array(
                  'empty' => 'Pick a descriçao',
                  'label' => 'Descrição',
                  'option'=> $descricoes,
                  'id' => 'descricao',
                  'autocomplete' => 'on'));

		//echo $this->Form->input('descricao');
		//echo $this->Form->input('palavras_chave');
		echo $this->Form->input('palavras_chave', array(
                  'empty' => 'Pick a palavras_chave',
                  'label' => 'Palavra Chave',
                  'option'=> $palavras,
                  'id' => 'palavras_chave',
                  'autocomplete' => 'on'));

		echo $this->Form->input('urls');
		/*echo $this->Form->input('Modelo');
		echo $this->Form->input('Tabela', array(
                                        'options' => $selectList,
                                        'type' => 'select'
                                     ));*/
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Assuntos'), array('action' => 'index')); ?></li>
	</ul>
</div>

<script>
$( "#descricao" ).autocomplete({
  source: "/assuntos/find_descricao",
  minLength: 2,
  delay: 2
});
$( "#AssuntoPalavrasChave" ).autocomplete({
  source: "/assuntos/find_palavrachave",
  minLength: 2,
  delay: 2
});
</script>