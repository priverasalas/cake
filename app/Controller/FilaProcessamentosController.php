<?php
App::uses('AppController', 'Controller');
/**
 * FilaProcessamentos Controller
 *
 * @property FilaProcessamento $FilaProcessamento
 * @property PaginatorComponent $Paginator
 */
class FilaProcessamentosController extends AppController {

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
		$this->FilaProcessamento->recursive = 0;
		$this->set('filaProcessamentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FilaProcessamento->exists($id)) {
			throw new NotFoundException(__('Invalid fila processamento'));
		}
		$options = array('conditions' => array('FilaProcessamento.' . $this->FilaProcessamento->primaryKey => $id));
		$this->set('filaProcessamento', $this->FilaProcessamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FilaProcessamento->create();
			if ($this->FilaProcessamento->save($this->request->data)) {
				$this->Session->setFlash(__('The fila processamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fila processamento could not be saved. Please, try again.'));
			}
		}
		$agendamentoAgendamentos = $this->FilaProcessamento->AgendamentoAgendamento->find('list');
		$this->set(compact('agendamentoAgendamentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FilaProcessamento->exists($id)) {
			throw new NotFoundException(__('Invalid fila processamento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FilaProcessamento->save($this->request->data)) {
				$this->Session->setFlash(__('The fila processamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fila processamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FilaProcessamento.' . $this->FilaProcessamento->primaryKey => $id));
			$this->request->data = $this->FilaProcessamento->find('first', $options);
		}
		$agendamentoAgendamentos = $this->FilaProcessamento->AgendamentoAgendamento->find('list');
		$this->set(compact('agendamentoAgendamentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FilaProcessamento->id = $id;
		if (!$this->FilaProcessamento->exists()) {
			throw new NotFoundException(__('Invalid fila processamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FilaProcessamento->delete()) {
			$this->Session->setFlash(__('The fila processamento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fila processamento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
