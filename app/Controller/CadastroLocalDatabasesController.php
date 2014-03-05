<?php
App::uses('AppController', 'Controller');
/**
 * CadastroLocalDatabases Controller
 *
 * @property CadastroLocalDatabase $CadastroLocalDatabase
 * @property PaginatorComponent $Paginator
 */
class CadastroLocalDatabasesController extends AppController {

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
		$this->CadastroLocalDatabase->recursive = 0;
		$this->set('cadastroLocalDatabases', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CadastroLocalDatabase->exists($id)) {
			throw new NotFoundException(__('Invalid cadastro local database'));
		}
		$options = array('conditions' => array('CadastroLocalDatabase.' . $this->CadastroLocalDatabase->primaryKey => $id));
		$this->set('cadastroLocalDatabase', $this->CadastroLocalDatabase->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CadastroLocalDatabase->create();
			if ($this->CadastroLocalDatabase->save($this->request->data)) {
				$this->Session->setFlash(__('The cadastro local database has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cadastro local database could not be saved. Please, try again.'));
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
		if (!$this->CadastroLocalDatabase->exists($id)) {
			throw new NotFoundException(__('Invalid cadastro local database'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CadastroLocalDatabase->save($this->request->data)) {
				$this->Session->setFlash(__('The cadastro local database has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cadastro local database could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CadastroLocalDatabase.' . $this->CadastroLocalDatabase->primaryKey => $id));
			$this->request->data = $this->CadastroLocalDatabase->find('first', $options);
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
		$this->CadastroLocalDatabase->id = $id;
		if (!$this->CadastroLocalDatabase->exists()) {
			throw new NotFoundException(__('Invalid cadastro local database'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CadastroLocalDatabase->delete()) {
			$this->Session->setFlash(__('The cadastro local database has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cadastro local database could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
