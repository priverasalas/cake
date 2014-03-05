<?php
App::uses('AppController', 'Controller');
/**
 * Carrossels Controller
 *
 * @property Carrossel $Carrossel
 * @property PaginatorComponent $Paginator
 */
class CarrosselsController extends AppController {

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
		$this->Carrossel->recursive = 0;
		$this->set('carrossels', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Carrossel->exists($id)) {
			throw new NotFoundException(__('Invalid carrossel'));
		}
		$options = array('conditions' => array('Carrossel.' . $this->Carrossel->primaryKey => $id));
		$this->set('carrossel', $this->Carrossel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Carrossel->create();
			if ($this->Carrossel->save($this->request->data)) {
				$this->Session->setFlash(__('The carrossel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carrossel could not be saved. Please, try again.'));
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
		if (!$this->Carrossel->exists($id)) {
			throw new NotFoundException(__('Invalid carrossel'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Carrossel->save($this->request->data)) {
				$this->Session->setFlash(__('The carrossel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carrossel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Carrossel.' . $this->Carrossel->primaryKey => $id));
			$this->request->data = $this->Carrossel->find('first', $options);
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
		$this->Carrossel->id = $id;
		if (!$this->Carrossel->exists()) {
			throw new NotFoundException(__('Invalid carrossel'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Carrossel->delete()) {
			$this->Session->setFlash(__('The carrossel has been deleted.'));
		} else {
			$this->Session->setFlash(__('The carrossel could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
