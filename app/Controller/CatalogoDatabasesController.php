<?php
App::uses('AppController', 'Controller');
/**
 * CatalogoDatabases Controller
 *
 * @property CatalogoDatabase $CatalogoDatabase
 * @property PaginatorComponent $Paginator
 */
class CatalogoDatabasesController extends AppController {

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
		$this->CatalogoDatabase->recursive = 0;
		$this->set('catalogoDatabases', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CatalogoDatabase->exists($id)) {
			throw new NotFoundException(__('Invalid catalogo database'));
		}
		$options = array('conditions' => array('CatalogoDatabase.' . $this->CatalogoDatabase->primaryKey => $id));
		$this->set('catalogoDatabase', $this->CatalogoDatabase->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CatalogoDatabase->create();
			if ($this->CatalogoDatabase->save($this->request->data)) {
				$this->Session->setFlash(__('The catalogo database has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The catalogo database could not be saved. Please, try again.'));
			}
		}
		$tipoDatabaseTipoDatabases = $this->CatalogoDatabase->TipoDatabaseTipoDatabase->find('list');
		$instituicaos = $this->CatalogoDatabase->Instituicao->find('list');
		$this->set(compact('tipoDatabaseTipoDatabases', 'instituicaos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CatalogoDatabase->exists($id)) {
			throw new NotFoundException(__('Invalid catalogo database'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CatalogoDatabase->save($this->request->data)) {
				$this->Session->setFlash(__('The catalogo database has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The catalogo database could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CatalogoDatabase.' . $this->CatalogoDatabase->primaryKey => $id));
			$this->request->data = $this->CatalogoDatabase->find('first', $options);
		}
		$tipoDatabaseTipoDatabases = $this->CatalogoDatabase->TipoDatabaseTipoDatabase->find('list');
		$instituicaos = $this->CatalogoDatabase->Instituicao->find('list');
		$this->set(compact('tipoDatabaseTipoDatabases', 'instituicaos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CatalogoDatabase->id = $id;
		if (!$this->CatalogoDatabase->exists()) {
			throw new NotFoundException(__('Invalid catalogo database'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CatalogoDatabase->delete()) {
			$this->Session->setFlash(__('The catalogo database has been deleted.'));
		} else {
			$this->Session->setFlash(__('The catalogo database could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
