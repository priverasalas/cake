<?php
App::uses('AppController', 'Controller');
/**
 * TipoTabelas Controller
 *
 * @property TipoTabela $TipoTabela
 * @property PaginatorComponent $Paginator
 */
class TipoTabelasController extends AppController {

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
		$this->TipoTabela->recursive = 0;
		$this->set('tipoTabelas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoTabela->exists($id)) {
			throw new NotFoundException(__('Invalid tipo tabela'));
		}
		$options = array('conditions' => array('TipoTabela.' . $this->TipoTabela->primaryKey => $id));
		$this->set('tipoTabela', $this->TipoTabela->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoTabela->create();
			if ($this->TipoTabela->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo tabela has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo tabela could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TipoTabela->exists($id)) {
			throw new NotFoundException(__('Invalid tipo tabela'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoTabela->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo tabela has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo tabela could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoTabela.' . $this->TipoTabela->primaryKey => $id));
			$this->request->data = $this->TipoTabela->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TipoTabela->id = $id;
		if (!$this->TipoTabela->exists()) {
			throw new NotFoundException(__('Invalid tipo tabela'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TipoTabela->delete()) {
			$this->Session->setFlash(__('The tipo tabela has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipo tabela could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
