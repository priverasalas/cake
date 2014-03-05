<?php
App::uses('AppController', 'Controller');
/**
 * Msgagendamentos Controller
 *
 * @property Msgagendamento $Msgagendamento
 * @property PaginatorComponent $Paginator
 */
class MsgagendamentosController extends AppController {

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
		$this->Msgagendamento->recursive = 0;
		$this->set('msgagendamentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Msgagendamento->exists($id)) {
			throw new NotFoundException(__('Invalid msgagendamento'));
		}
		$options = array('conditions' => array('Msgagendamento.' . $this->Msgagendamento->primaryKey => $id));
		$this->set('msgagendamento', $this->Msgagendamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Msgagendamento->create();
			if ($this->Msgagendamento->save($this->request->data)) {
				$this->Session->setFlash(__('The msgagendamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The msgagendamento could not be saved. Please, try again.'));
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
		if (!$this->Msgagendamento->exists($id)) {
			throw new NotFoundException(__('Invalid msgagendamento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Msgagendamento->save($this->request->data)) {
				$this->Session->setFlash(__('The msgagendamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The msgagendamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Msgagendamento.' . $this->Msgagendamento->primaryKey => $id));
			$this->request->data = $this->Msgagendamento->find('first', $options);
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
		$this->Msgagendamento->id = $id;
		if (!$this->Msgagendamento->exists()) {
			throw new NotFoundException(__('Invalid msgagendamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Msgagendamento->delete()) {
			$this->Session->setFlash(__('The msgagendamento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The msgagendamento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
