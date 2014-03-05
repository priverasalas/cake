<?php
App::uses('AppController', 'Controller');
/**
 * Relacaos Controller
 *
 * @property Relacao $Relacao
 * @property PaginatorComponent $Paginator
 */
class RelacaosController extends AppController {

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
		$this->Relacao->recursive = 0;
		$this->set('relacaos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Relacao->exists($id)) {
			throw new NotFoundException(__('Invalid relacao'));
		}
		$options = array('conditions' => array('Relacao.' . $this->Relacao->primaryKey => $id));
		$this->set('relacao', $this->Relacao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Relacao->create();
			if ($this->Relacao->save($this->request->data)) {
				$this->Session->setFlash(__('The relacao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relacao could not be saved. Please, try again.'));
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
		if (!$this->Relacao->exists($id)) {
			throw new NotFoundException(__('Invalid relacao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Relacao->save($this->request->data)) {
				$this->Session->setFlash(__('The relacao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relacao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Relacao.' . $this->Relacao->primaryKey => $id));
			$this->request->data = $this->Relacao->find('first', $options);
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
		$this->Relacao->id = $id;
		if (!$this->Relacao->exists()) {
			throw new NotFoundException(__('Invalid relacao'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Relacao->delete()) {
			$this->Session->setFlash(__('The relacao has been deleted.'));
		} else {
			$this->Session->setFlash(__('The relacao could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
