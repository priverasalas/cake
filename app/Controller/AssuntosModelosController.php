<?php
App::uses('AppController', 'Controller');
/**
 * AssuntosModelos Controller
 *
 * @property AssuntosModelo $AssuntosModelo
 * @property PaginatorComponent $Paginator
 */
class AssuntosModelosController extends AppController {

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
		$this->AssuntosModelo->recursive = 0;
		$this->set('assuntosModelos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AssuntosModelo->exists($id)) {
			throw new NotFoundException(__('Invalid assuntos modelo'));
		}
		$options = array('conditions' => array('AssuntosModelo.' . $this->AssuntosModelo->primaryKey => $id));
		$this->set('assuntosModelo', $this->AssuntosModelo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AssuntosModelo->create();
			if ($this->AssuntosModelo->save($this->request->data)) {
				$this->Session->setFlash(__('The assuntos modelo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assuntos modelo could not be saved. Please, try again.'));
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
		if (!$this->AssuntosModelo->exists($id)) {
			throw new NotFoundException(__('Invalid assuntos modelo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AssuntosModelo->save($this->request->data)) {
				$this->Session->setFlash(__('The assuntos modelo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assuntos modelo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AssuntosModelo.' . $this->AssuntosModelo->primaryKey => $id));
			$this->request->data = $this->AssuntosModelo->find('first', $options);
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
		$this->AssuntosModelo->id = $id;
		if (!$this->AssuntosModelo->exists()) {
			throw new NotFoundException(__('Invalid assuntos modelo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AssuntosModelo->delete()) {
			$this->Session->setFlash(__('The assuntos modelo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The assuntos modelo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
