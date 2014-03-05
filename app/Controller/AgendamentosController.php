<?php
App::uses('AppController', 'Controller');
/**
 * Agendamentos Controller
 *
 * @property Agendamento $Agendamento
 * @property PaginatorComponent $Paginator
 */
class AgendamentosController extends AppController {

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
		$this->Agendamento->recursive = 0;
		$this->set('agendamentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Agendamento->exists($id)) {
			throw new NotFoundException(__('Invalid agendamento'));
		}
		$options = array('conditions' => array('Agendamento.' . $this->Agendamento->primaryKey => $id));
		$this->set('agendamento', $this->Agendamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Agendamento->create();
			if ($this->Agendamento->save($this->request->data)) {
				$this->Session->setFlash(__('The agendamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agendamento could not be saved. Please, try again.'));
			}
		}
		$instituicaos = $this->Agendamento->Instituicao->find('list');
		$catalogoDatabaseCatalogoDatabases = $this->Agendamento->CatalogoDatabaseCatalogoDatabase->find('list');
		$this->set(compact('instituicaos', 'catalogoDatabaseCatalogoDatabases'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Agendamento->exists($id)) {
			throw new NotFoundException(__('Invalid agendamento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Agendamento->save($this->request->data)) {
				$this->Session->setFlash(__('The agendamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agendamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Agendamento.' . $this->Agendamento->primaryKey => $id));
			$this->request->data = $this->Agendamento->find('first', $options);
		}
		$instituicaos = $this->Agendamento->Instituicao->find('list');
		$catalogoDatabaseCatalogoDatabases = $this->Agendamento->CatalogoDatabaseCatalogoDatabase->find('list');
		$this->set(compact('instituicaos', 'catalogoDatabaseCatalogoDatabases'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Agendamento->id = $id;
		if (!$this->Agendamento->exists()) {
			throw new NotFoundException(__('Invalid agendamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Agendamento->delete()) {
			$this->Session->setFlash(__('The agendamento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The agendamento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
