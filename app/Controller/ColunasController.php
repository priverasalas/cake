<?php
App::uses('AppController', 'Controller');
/**
 * Colunas Controller
 *
 * @property Coluna $Coluna
 * @property PaginatorComponent $Paginator
 */
class ColunasController extends AppController {

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
		$this->Coluna->recursive = 0;
		$this->set('colunas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Coluna->exists($id)) {
			throw new NotFoundException(__('Invalid coluna'));
		}
		$options = array('conditions' => array('Coluna.' . $this->Coluna->primaryKey => $id));
		$this->set('coluna', $this->Coluna->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Coluna->create();
			if ($this->Coluna->save($this->request->data)) {
				$this->Session->setFlash(__('The coluna has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coluna could not be saved. Please, try again.'));
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
		if (!$this->Coluna->exists($id)) {
			throw new NotFoundException(__('Invalid coluna'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Coluna->save($this->request->data)) {
				$this->Session->setFlash(__('The coluna has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coluna could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Coluna.' . $this->Coluna->primaryKey => $id));
			$this->request->data = $this->Coluna->find('first', $options);
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
		$this->Coluna->id = $id;
		if (!$this->Coluna->exists()) {
			throw new NotFoundException(__('Invalid coluna'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Coluna->delete()) {
			$this->Session->setFlash(__('The coluna has been deleted.'));
		} else {
			$this->Session->setFlash(__('The coluna could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
