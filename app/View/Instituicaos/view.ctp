<div class="instituicaos view">
<h2><?php echo __('Instituicao'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instituicao['Instituicao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($instituicao['Instituicao']['Nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sigla'); ?></dt>
		<dd>
			<?php echo h($instituicao['Instituicao']['Sigla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dominio'); ?></dt>
		<dd>
			<?php echo h($instituicao['Instituicao']['dominio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($instituicao['Instituicao']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Web Service'); ?></dt>
		<dd>
			<?php echo h($instituicao['Instituicao']['url_web_service']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instituicao'), array('action' => 'edit', $instituicao['Instituicao']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instituicao'), array('action' => 'delete', $instituicao['Instituicao']['id']), null, __('Are you sure you want to delete # %s?', $instituicao['Instituicao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Instituicaos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituicao'), array('action' => 'add')); ?> </li>
	</ul>
</div>
