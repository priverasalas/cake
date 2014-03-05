<?php
App::uses('AppController', 'Controller');
/**
 * TipoDatabases Controller
 *
 * @property TipoDatabase $TipoDatabase
 * @property PaginatorComponent $Paginator
 */
class TipoDatabasesController extends AppController {

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
		$this->TipoDatabase->recursive = 0;
		$this->set('tipoDatabases', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoDatabase->exists($id)) {
			throw new NotFoundException(__('Invalid tipo database'));
		}
		$options = array('conditions' => array('TipoDatabase.' . $this->TipoDatabase->primaryKey => $id));
		$this->set('tipoDatabase', $this->TipoDatabase->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoDatabase->create();
			if ($this->TipoDatabase->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo database has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo database could not be saved. Please, try again.'));
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
		if (!$this->TipoDatabase->exists($id)) {
			throw new NotFoundException(__('Invalid tipo database'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoDatabase->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo database has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo database could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoDatabase.' . $this->TipoDatabase->primaryKey => $id));
			$this->request->data = $this->TipoDatabase->find('first', $options);
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
		$this->TipoDatabase->id = $id;
		if (!$this->TipoDatabase->exists()) {
			throw new NotFoundException(__('Invalid tipo database'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TipoDatabase->delete()) {
			$this->Session->setFlash(__('The tipo database has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipo database could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
