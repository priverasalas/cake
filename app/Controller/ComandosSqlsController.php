<?php
App::uses('AppController', 'Controller');
/**
 * ComandosSqls Controller
 *
 * @property ComandosSql $ComandosSql
 * @property PaginatorComponent $Paginator
 */
class ComandosSqlsController extends AppController {

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
		$this->ComandosSql->recursive = 0;
		$this->set('comandosSqls', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ComandosSql->exists($id)) {
			throw new NotFoundException(__('Invalid comandos sql'));
		}
		$options = array('conditions' => array('ComandosSql.' . $this->ComandosSql->primaryKey => $id));
		$this->set('comandosSql', $this->ComandosSql->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ComandosSql->create();
			if ($this->ComandosSql->save($this->request->data)) {
				$this->Session->setFlash(__('The comandos sql has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comandos sql could not be saved. Please, try again.'));
			}
		}
		$tipoDatabaseTipoDatabases = $this->ComandosSql->TipoDatabaseTipoDatabase->find('list');
		$this->set(compact('tipoDatabaseTipoDatabases'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ComandosSql->exists($id)) {
			throw new NotFoundException(__('Invalid comandos sql'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ComandosSql->save($this->request->data)) {
				$this->Session->setFlash(__('The comandos sql has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comandos sql could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ComandosSql.' . $this->ComandosSql->primaryKey => $id));
			$this->request->data = $this->ComandosSql->find('first', $options);
		}
		$tipoDatabaseTipoDatabases = $this->ComandosSql->TipoDatabaseTipoDatabase->find('list');
		$this->set(compact('tipoDatabaseTipoDatabases'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ComandosSql->id = $id;
		if (!$this->ComandosSql->exists()) {
			throw new NotFoundException(__('Invalid comandos sql'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ComandosSql->delete()) {
			$this->Session->setFlash(__('The comandos sql has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comandos sql could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
