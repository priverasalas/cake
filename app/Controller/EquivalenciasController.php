<?php
App::uses('AppController', 'Controller');
/**
 * Equivalencias Controller
 *
 * @property Equivalencia $Equivalencia
 * @property PaginatorComponent $Paginator
 */
class EquivalenciasController extends AppController {

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
		$this->Equivalencia->recursive = 0;
		$this->set('equivalencias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Equivalencia->exists($id)) {
			throw new NotFoundException(__('Invalid equivalencia'));
		}
		$options = array('conditions' => array('Equivalencia.' . $this->Equivalencia->primaryKey => $id));
		$this->set('equivalencia', $this->Equivalencia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Equivalencia->create();
			if ($this->Equivalencia->save($this->request->data)) {
				$this->Session->setFlash(__('The equivalencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equivalencia could not be saved. Please, try again.'));
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
		if (!$this->Equivalencia->exists($id)) {
			throw new NotFoundException(__('Invalid equivalencia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Equivalencia->save($this->request->data)) {
				$this->Session->setFlash(__('The equivalencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equivalencia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Equivalencia.' . $this->Equivalencia->primaryKey => $id));
			$this->request->data = $this->Equivalencia->find('first', $options);
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
		$this->Equivalencia->id = $id;
		if (!$this->Equivalencia->exists()) {
			throw new NotFoundException(__('Invalid equivalencia'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Equivalencia->delete()) {
			$this->Session->setFlash(__('The equivalencia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The equivalencia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
