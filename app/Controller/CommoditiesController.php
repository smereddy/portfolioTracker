<?php
App::uses('AppController', 'Controller');
/**
 * Commodities Controller
 *
 * @property Commodity $Commodity
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CommoditiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Commodity->recursive = 0;
		$this->set('commodities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Commodity->exists($id)) {
			throw new NotFoundException(__('Invalid commodity'));
		}
		$options = array('conditions' => array('Commodity.' . $this->Commodity->primaryKey => $id));
		$this->set('commodity', $this->Commodity->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Commodity->create();
			if ($this->Commodity->save($this->request->data)) {
				$this->Session->setFlash(__('The commodity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The commodity could not be saved. Please, try again.'));
			}
		}
		$customers = $this->Commodity->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Commodity->exists($id)) {
			throw new NotFoundException(__('Invalid commodity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Commodity->save($this->request->data)) {
				$this->Session->setFlash(__('The commodity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The commodity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Commodity.' . $this->Commodity->primaryKey => $id));
			$this->request->data = $this->Commodity->find('first', $options);
		}
		$customers = $this->Commodity->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Commodity->id = $id;
		if (!$this->Commodity->exists()) {
			throw new NotFoundException(__('Invalid commodity'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Commodity->delete()) {
			$this->Session->setFlash(__('The commodity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The commodity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
