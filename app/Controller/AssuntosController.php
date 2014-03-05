<?php
App::uses('AppController', 'Controller');
/**
 * Assuntos Controller
 *
 * @property Assunto $Assunto
 * @property PaginatorComponent $Paginator
 */
class AssuntosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Assunto->recursive = 0;
		$this->set('assuntos', $this->Paginator->paginate());
	}

/**
 * --- AJAX ----
 */

public function descricao_dropdown ()
{
    $descricoes = '';
    $this->set('descricoes', $descricoes);
}

public function find_descricao() {
   $this->Assunto->recursive = -1;
   if ($this->request->is('ajax')) {
      $this->autoRender = false;
      $this->layout = 'ajax';
      $results = $this->Assunto->find('all', array('fields' => array('Assunto.descricao'),
          'conditions' => array('Assunto.descricao LIKE ' => $this->request->query['term'] . '%'),
          'group' => array('Assunto.descricao'),
       ));
      $descricoes = Set::extract('../Assunto/descricao', $results);           
      echo json_encode($descricoes);
   }
}

public function find_palavrachave() {
   $this->Assunto->recursive = -1;
   if ($this->request->is('ajax')) {
      $this->autoRender = false;
      $this->layout = 'ajax';
      $results = $this->Assunto->find('all', array('fields' => array('Assunto.palavras_chave'),
          'conditions' => array('Assunto.palavras_chave LIKE ' => $this->request->query['term'] . '%'),
          'group' => array('Assunto.palavras_chave'),
       ));
      $palavras = Set::extract('../Assunto/palavras_chave', $results);           
      echo json_encode($palavras);
   }
}

/**
 * --- AJAX ----
 */


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Assunto->exists($id)) {
			throw new NotFoundException(__('Invalid assunto'));
		}
		$options = array('conditions' => array('Assunto.' . $this->Assunto->primaryKey => $id));
		$this->set('assunto', $this->Assunto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		$descricoes = '';
    	$this->set('descricoes', $descricoes);
    	$palavras = '';
    	$this->set('palavras', $palavras);

		if ($this->request->is('post')) {
			$this->Assunto->create();
			if ($this->Assunto->save($this->request->data)) {
				$this->Session->setFlash(__('The assunto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assunto could not be saved. Please, try again.'));
			}
		}
		/*$modelos = $this->Assunto->Modelo->find('list');
		$tabelas = $this->Assunto->Tabela->find('list');
		$this->set(compact('modelos'));
		$this->set('selectList', $tabelas);*/
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Assunto->exists($id)) {
			throw new NotFoundException(__('Invalid assunto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Assunto->save($this->request->data)) {
				$this->Session->setFlash(__('The assunto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assunto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Assunto.' . $this->Assunto->primaryKey => $id));
			$this->request->data = $this->Assunto->find('first', $options);
		}
		/*$modelos = $this->Assunto->Modelo->find('list');
		$tabelas = $this->Assunto->Tabela->find('list');
		$this->set(compact('modelos', 'tabelas'));*/
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Assunto->id = $id;
		if (!$this->Assunto->exists()) {
			throw new NotFoundException(__('Invalid assunto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Assunto->delete()) {
			$this->Session->setFlash(__('The assunto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The assunto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
