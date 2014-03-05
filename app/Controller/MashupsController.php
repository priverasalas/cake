<?php
App::uses('AppController', 'Controller');
/**
 * Mashups Controller
 *
 * @property Mashup $Mashup
 * @property PaginatorComponent $Paginator
 */
class MashupsController extends AppController {

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
		$this->Mashup->recursive = 0;
		$this->set('mashups', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mashup->exists($id)) {
			throw new NotFoundException(__('Invalid mashup'));
		}
		$options = array('conditions' => array('Mashup.' . $this->Mashup->primaryKey => $id));
		$this->set('mashup', $this->Mashup->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mashup->create();
			if ($this->Mashup->save($this->request->data)) {
				$this->Session->setFlash(__('The mashup has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mashup could not be saved. Please, try again.'));
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
		if (!$this->Mashup->exists($id)) {
			throw new NotFoundException(__('Invalid mashup'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mashup->save($this->request->data)) {
				$this->Session->setFlash(__('The mashup has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mashup could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mashup.' . $this->Mashup->primaryKey => $id));
			$this->request->data = $this->Mashup->find('first', $options);
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
		$this->Mashup->id = $id;
		if (!$this->Mashup->exists()) {
			throw new NotFoundException(__('Invalid mashup'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mashup->delete()) {
			$this->Session->setFlash(__('The mashup has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mashup could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
