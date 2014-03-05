<?php
/**
 * ColunaFixture
 *
 */
class ColunaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'coluna';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Tabelas_idTabelas' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'idColuna' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descricao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tamanho_coluna' => array('type' => 'integer', 'null' => false, 'default' => null),
		'aceita_valor_nulo' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'faz_parte_pk' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'chave_estrangeira' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'flag_metrica' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'tipo_metrica' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Tipo_Dados' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('Tabelas_idTabelas', 'idColuna'), 'unique' => 1),
			'fk_Coluna_Tipo_Dados1_idx' => array('column' => 'Tipo_Dados', 'unique' => 0),
			'fk_Coluna_Tabelas1_idx' => array('column' => 'Tabelas_idTabelas', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'Tabelas_idTabelas' => 1,
			'idColuna' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'descricao' => 'Lorem ipsum dolor sit amet',
			'tamanho_coluna' => 1,
			'aceita_valor_nulo' => 1,
			'faz_parte_pk' => 1,
			'chave_estrangeira' => 1,
			'flag_metrica' => 1,
			'tipo_metrica' => 'L',
			'Tipo_Dados' => 'Lorem ipsum dolor sit amet'
		),
	);

}
