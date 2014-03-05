<div class="assuntos search form">
<fieldset>
<legend></legend>
        <?php 
              echo $this->paginator->options(array('url' => $this->passedArgs));
              echo $this->Form->create('Assunto', array('type'=>'post','action' => 'find'));
 
              echo $this->Form->input('descricao', array(
                  'empty' => 'Pick a descriçao',
                  'label' => 'Descrição',
                  'option'=> $descricoes,
                  'id' => 'descricao',
                  'autocomplete' => 'on'));
              echo $this->Form->end(__('Search'));
        ?>
         
    </fieldset>
</div>
<script>
$( "#descricao" ).autocomplete({
  source: "/assuntos/find",
  minLength: 2,
  delay: 2
});
</script>