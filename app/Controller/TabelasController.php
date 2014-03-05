<?php
App::uses('AppController', 'Controller');
/**
 * Tabelas Controller
 *
 * @property Tabela $Tabela
 * @property PaginatorComponent $Paginator
 */
class TabelasController extends AppController {

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
		$this->Tabela->recursive = 0;
		$this->set('tabelas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tabela->exists($id)) {
			throw new NotFoundException(__('Invalid tabela'));
		}
		$options = array('conditions' => array('Tabela.' . $this->Tabela->primaryKey => $id));
		$this->set('tabela', $this->Tabela->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tabela->create();
			if ($this->Tabela->save($this->request->data)) {
				$this->Session->setFlash(__('The tabela has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tabela could not be saved. Please, try again.'));
			}
		}
		$assuntos = $this->Tabela->Assunto->find('list');
		$this->set(compact('assuntos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tabela->exists($id)) {
			throw new NotFoundException(__('Invalid tabela'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tabela->save($this->request->data)) {
				$this->Session->setFlash(__('The tabela has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tabela could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tabela.' . $this->Tabela->primaryKey => $id));
			$this->request->data = $this->Tabela->find('first', $options);
		}
		$assuntos = $this->Tabela->Assunto->find('list');
		$this->set(compact('assuntos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tabela->id = $id;
		if (!$this->Tabela->exists()) {
			throw new NotFoundException(__('Invalid tabela'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tabela->delete()) {
			$this->Session->setFlash(__('The tabela has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tabela could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
