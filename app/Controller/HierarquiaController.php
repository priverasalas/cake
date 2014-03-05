<?php
App::uses('AppController', 'Controller');
/**
 * Hierarquia Controller
 *
 * @property Hierarquium $Hierarquium
 * @property PaginatorComponent $Paginator
 */
class HierarquiaController extends AppController {

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
		$this->Hierarquium->recursive = 0;
		$this->set('hierarquia', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hierarquium->exists($id)) {
			throw new NotFoundException(__('Invalid hierarquium'));
		}
		$options = array('conditions' => array('Hierarquium.' . $this->Hierarquium->primaryKey => $id));
		$this->set('hierarquium', $this->Hierarquium->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hierarquium->create();
			if ($this->Hierarquium->save($this->request->data)) {
				$this->Session->setFlash(__('The hierarquium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hierarquium could not be saved. Please, try again.'));
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
		if (!$this->Hierarquium->exists($id)) {
			throw new NotFoundException(__('Invalid hierarquium'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Hierarquium->save($this->request->data)) {
				$this->Session->setFlash(__('The hierarquium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hierarquium could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hierarquium.' . $this->Hierarquium->primaryKey => $id));
			$this->request->data = $this->Hierarquium->find('first', $options);
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
		$this->Hierarquium->id = $id;
		if (!$this->Hierarquium->exists()) {
			throw new NotFoundException(__('Invalid hierarquium'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Hierarquium->delete()) {
			$this->Session->setFlash(__('The hierarquium has been deleted.'));
		} else {
			$this->Session->setFlash(__('The hierarquium could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
