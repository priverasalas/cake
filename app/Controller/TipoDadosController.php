<?php
App::uses('AppController', 'Controller');
/**
 * TipoDados Controller
 *
 * @property TipoDado $TipoDado
 * @property PaginatorComponent $Paginator
 */
class TipoDadosController extends AppController {

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
		$this->TipoDado->recursive = 0;
		$this->set('tipoDados', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoDado->exists($id)) {
			throw new NotFoundException(__('Invalid tipo dado'));
		}
		$options = array('conditions' => array('TipoDado.' . $this->TipoDado->primaryKey => $id));
		$this->set('tipoDado', $this->TipoDado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoDado->create();
			if ($this->TipoDado->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo dado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo dado could not be saved. Please, try again.'));
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
		if (!$this->TipoDado->exists($id)) {
			throw new NotFoundException(__('Invalid tipo dado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoDado->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo dado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo dado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoDado.' . $this->TipoDado->primaryKey => $id));
			$this->request->data = $this->TipoDado->find('first', $options);
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
		$this->TipoDado->id = $id;
		if (!$this->TipoDado->exists()) {
			throw new NotFoundException(__('Invalid tipo dado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TipoDado->delete()) {
			$this->Session->setFlash(__('The tipo dado has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipo dado could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
