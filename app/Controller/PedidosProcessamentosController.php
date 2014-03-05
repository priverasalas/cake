<?php
App::uses('AppController', 'Controller');
/**
 * PedidosProcessamentos Controller
 *
 * @property PedidosProcessamento $PedidosProcessamento
 * @property PaginatorComponent $Paginator
 */
class PedidosProcessamentosController extends AppController {

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
		$this->PedidosProcessamento->recursive = 0;
		$this->set('pedidosProcessamentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PedidosProcessamento->exists($id)) {
			throw new NotFoundException(__('Invalid pedidos processamento'));
		}
		$options = array('conditions' => array('PedidosProcessamento.' . $this->PedidosProcessamento->primaryKey => $id));
		$this->set('pedidosProcessamento', $this->PedidosProcessamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PedidosProcessamento->create();
			if ($this->PedidosProcessamento->save($this->request->data)) {
				$this->Session->setFlash(__('The pedidos processamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pedidos processamento could not be saved. Please, try again.'));
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
		if (!$this->PedidosProcessamento->exists($id)) {
			throw new NotFoundException(__('Invalid pedidos processamento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PedidosProcessamento->save($this->request->data)) {
				$this->Session->setFlash(__('The pedidos processamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pedidos processamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PedidosProcessamento.' . $this->PedidosProcessamento->primaryKey => $id));
			$this->request->data = $this->PedidosProcessamento->find('first', $options);
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
		$this->PedidosProcessamento->id = $id;
		if (!$this->PedidosProcessamento->exists()) {
			throw new NotFoundException(__('Invalid pedidos processamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PedidosProcessamento->delete()) {
			$this->Session->setFlash(__('The pedidos processamento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pedidos processamento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
