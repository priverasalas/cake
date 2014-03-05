<?php
App::uses('AppController', 'Controller');
/**
 * TabAbs Controller
 *
 * @property TabAb $TabAb
 * @property PaginatorComponent $Paginator
 */
class TabAbsController extends AppController {

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
		$this->TabAb->recursive = 0;
		$this->set('tabAbs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TabAb->exists($id)) {
			throw new NotFoundException(__('Invalid tab ab'));
		}
		$options = array('conditions' => array('TabAb.' . $this->TabAb->primaryKey => $id));
		$this->set('tabAb', $this->TabAb->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TabAb->create();
			if ($this->TabAb->save($this->request->data)) {
				$this->Session->setFlash(__('The tab ab has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tab ab could not be saved. Please, try again.'));
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
		if (!$this->TabAb->exists($id)) {
			throw new NotFoundException(__('Invalid tab ab'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TabAb->save($this->request->data)) {
				$this->Session->setFlash(__('The tab ab has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tab ab could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TabAb.' . $this->TabAb->primaryKey => $id));
			$this->request->data = $this->TabAb->find('first', $options);
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
		$this->TabAb->id = $id;
		if (!$this->TabAb->exists()) {
			throw new NotFoundException(__('Invalid tab ab'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TabAb->delete()) {
			$this->Session->setFlash(__('The tab ab has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tab ab could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
