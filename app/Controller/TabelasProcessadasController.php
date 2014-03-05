<?php
App::uses('AppController', 'Controller');
/**
 * TabelasProcessadas Controller
 *
 * @property TabelasProcessada $TabelasProcessada
 * @property PaginatorComponent $Paginator
 */
class TabelasProcessadasController extends AppController {

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
		$this->TabelasProcessada->recursive = 0;
		$this->set('tabelasProcessadas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TabelasProcessada->exists($id)) {
			throw new NotFoundException(__('Invalid tabelas processada'));
		}
		$options = array('conditions' => array('TabelasProcessada.' . $this->TabelasProcessada->primaryKey => $id));
		$this->set('tabelasProcessada', $this->TabelasProcessada->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TabelasProcessada->create();
			if ($this->TabelasProcessada->save($this->request->data)) {
				$this->Session->setFlash(__('The tabelas processada has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tabelas processada could not be saved. Please, try again.'));
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
		if (!$this->TabelasProcessada->exists($id)) {
			throw new NotFoundException(__('Invalid tabelas processada'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TabelasProcessada->save($this->request->data)) {
				$this->Session->setFlash(__('The tabelas processada has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tabelas processada could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TabelasProcessada.' . $this->TabelasProcessada->primaryKey => $id));
			$this->request->data = $this->TabelasProcessada->find('first', $options);
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
		$this->TabelasProcessada->id = $id;
		if (!$this->TabelasProcessada->exists()) {
			throw new NotFoundException(__('Invalid tabelas processada'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TabelasProcessada->delete()) {
			$this->Session->setFlash(__('The tabelas processada has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tabelas processada could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
