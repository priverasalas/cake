<?php
App::uses('AppModel', 'Model');
/**
 * PedidosProcessamento Model
 *
 */
class PedidosProcessamento extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'pedidos_processamento';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idFila_Processamento';

}
