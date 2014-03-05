<?php
App::uses('AppController', 'Controller');
/**
 * TabBs Controller
 *
 * @property TabB $TabB
 * @property PaginatorComponent $Paginator
 */
class TabBsController extends AppController {

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
		$this->TabB->recursive = 0;
		$this->set('tabBs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TabB->exists($id)) {
			throw new NotFoundException(__('Invalid tab b'));
		}
		$options = array('conditions' => array('TabB.' . $this->TabB->primaryKey => $id));
		$this->set('tabB', $this->TabB->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TabB->create();
			if ($this->TabB->save($this->request->data)) {
				$this->Session->setFlash(__('The tab b has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tab b could not be saved. Please, try again.'));
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
		if (!$this->TabB->exists($id)) {
			throw new NotFoundException(__('Invalid tab b'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TabB->save($this->request->data)) {
				$this->Session->setFlash(__('The tab b has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tab b could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TabB.' . $this->TabB->primaryKey => $id));
			$this->request->data = $this->TabB->find('first', $options);
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
		$this->TabB->id = $id;
		if (!$this->TabB->exists()) {
			throw new NotFoundException(__('Invalid tab b'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TabB->delete()) {
			$this->Session->setFlash(__('The tab b has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tab b could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
