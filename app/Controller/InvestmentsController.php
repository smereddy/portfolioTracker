<?php
App::uses('AppController', 'Controller');
/**
 * Investments Controller
 *
 * @property Investment $Investment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class InvestmentsController extends AppController {

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
		$this->Investment->recursive = 0;
		$this->set('investments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Investment->exists($id)) {
			throw new NotFoundException(__('Invalid investment'));
		}
		$options = array('conditions' => array('Investment.' . $this->Investment->primaryKey => $id));
		$this->set('investment', $this->Investment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Investment->create();
			if ($this->Investment->save($this->request->data)) {
				$this->Session->setFlash(__('The investment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The investment could not be saved. Please, try again.'));
			}
		}
		$customers = $this->Investment->Customer->find('list');
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
		if (!$this->Investment->exists($id)) {
			throw new NotFoundException(__('Invalid investment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Investment->save($this->request->data)) {
				$this->Session->setFlash(__('The investment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The investment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Investment.' . $this->Investment->primaryKey => $id));
			$this->request->data = $this->Investment->find('first', $options);
		}
		$customers = $this->Investment->Customer->find('list');
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
		$this->Investment->id = $id;
		if (!$this->Investment->exists()) {
			throw new NotFoundException(__('Invalid investment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Investment->delete()) {
			$this->Session->setFlash(__('The investment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The investment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
