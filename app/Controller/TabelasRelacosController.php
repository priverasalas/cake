<?php
App::uses('AppController', 'Controller');
/**
 * TabelasRelacos Controller
 *
 * @property TabelasRelaco $TabelasRelaco
 * @property PaginatorComponent $Paginator
 */
class TabelasRelacosController extends AppController {

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
		$this->TabelasRelaco->recursive = 0;
		$this->set('tabelasRelacos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TabelasRelaco->exists($id)) {
			throw new NotFoundException(__('Invalid tabelas relaco'));
		}
		$options = array('conditions' => array('TabelasRelaco.' . $this->TabelasRelaco->primaryKey => $id));
		$this->set('tabelasRelaco', $this->TabelasRelaco->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TabelasRelaco->create();
			if ($this->TabelasRelaco->save($this->request->data)) {
				$this->Session->setFlash(__('The tabelas relaco has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tabelas relaco could not be saved. Please, try again.'));
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
		if (!$this->TabelasRelaco->exists($id)) {
			throw new NotFoundException(__('Invalid tabelas relaco'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TabelasRelaco->save($this->request->data)) {
				$this->Session->setFlash(__('The tabelas relaco has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tabelas relaco could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TabelasRelaco.' . $this->TabelasRelaco->primaryKey => $id));
			$this->request->data = $this->TabelasRelaco->find('first', $options);
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
		$this->TabelasRelaco->id = $id;
		if (!$this->TabelasRelaco->exists()) {
			throw new NotFoundException(__('Invalid tabelas relaco'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TabelasRelaco->delete()) {
			$this->Session->setFlash(__('The tabelas relaco has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tabelas relaco could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
