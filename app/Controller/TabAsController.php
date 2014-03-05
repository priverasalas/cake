<?php
App::uses('AppController', 'Controller');
/**
 * TabAs Controller
 *
 * @property TabA $TabA
 * @property PaginatorComponent $Paginator
 */
class TabAsController extends AppController {

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
		$this->TabA->recursive = 0;
		$this->set('tabAs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TabA->exists($id)) {
			throw new NotFoundException(__('Invalid tab a'));
		}
		$options = array('conditions' => array('TabA.' . $this->TabA->primaryKey => $id));
		$this->set('tabA', $this->TabA->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TabA->create();
			if ($this->TabA->save($this->request->data)) {
				$this->Session->setFlash(__('The tab a has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tab a could not be saved. Please, try again.'));
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
		if (!$this->TabA->exists($id)) {
			throw new NotFoundException(__('Invalid tab a'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TabA->save($this->request->data)) {
				$this->Session->setFlash(__('The tab a has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tab a could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TabA.' . $this->TabA->primaryKey => $id));
			$this->request->data = $this->TabA->find('first', $options);
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
		$this->TabA->id = $id;
		if (!$this->TabA->exists()) {
			throw new NotFoundException(__('Invalid tab a'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TabA->delete()) {
			$this->Session->setFlash(__('The tab a has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tab a could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
