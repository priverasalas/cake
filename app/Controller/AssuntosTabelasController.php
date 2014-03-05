<?php
App::uses('AppController', 'Controller');
/**
 * AssuntosTabelas Controller
 *
 * @property AssuntosTabela $AssuntosTabela
 * @property PaginatorComponent $Paginator
 */
class AssuntosTabelasController extends AppController {

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
		$this->AssuntosTabela->recursive = 0;
		$this->set('assuntosTabelas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AssuntosTabela->exists($id)) {
			throw new NotFoundException(__('Invalid assuntos tabela'));
		}
		$options = array('conditions' => array('AssuntosTabela.' . $this->AssuntosTabela->primaryKey => $id));
		$this->set('assuntosTabela', $this->AssuntosTabela->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AssuntosTabela->create();
			if ($this->AssuntosTabela->save($this->request->data)) {
				$this->Session->setFlash(__('The assuntos tabela has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assuntos tabela could not be saved. Please, try again.'));
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
		if (!$this->AssuntosTabela->exists($id)) {
			throw new NotFoundException(__('Invalid assuntos tabela'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AssuntosTabela->save($this->request->data)) {
				$this->Session->setFlash(__('The assuntos tabela has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assuntos tabela could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AssuntosTabela.' . $this->AssuntosTabela->primaryKey => $id));
			$this->request->data = $this->AssuntosTabela->find('first', $options);
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
		$this->AssuntosTabela->id = $id;
		if (!$this->AssuntosTabela->exists()) {
			throw new NotFoundException(__('Invalid assuntos tabela'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AssuntosTabela->delete()) {
			$this->Session->setFlash(__('The assuntos tabela has been deleted.'));
		} else {
			$this->Session->setFlash(__('The assuntos tabela could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
