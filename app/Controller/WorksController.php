<?php
App::uses('AppController', 'Controller');
/**
 * Works Controller
 *
 * @property Work $Work
 */
class WorksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Work->recursive = 0;
		$this->set('works', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Work->exists($id)) {
			throw new NotFoundException(__('Invalid work'));
		}
		$options = array('conditions' => array('Work.' . $this->Work->primaryKey => $id));
		$this->set('work', $this->Work->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Work->create();
			if ($this->Work->save($this->request->data)) {
				$this->Session->setFlash(__('The work has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The work could not be saved. Please, try again.'));
			}
		}
		$users = $this->Work->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Work->exists($id)) {
			throw new NotFoundException(__('Invalid work'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Work->save($this->request->data)) {
				$this->Session->setFlash(__('The work has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The work could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Work.' . $this->Work->primaryKey => $id));
			$this->request->data = $this->Work->find('first', $options);
		}
		$users = $this->Work->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Work->id = $id;
		if (!$this->Work->exists()) {
			throw new NotFoundException(__('Invalid work'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Work->delete()) {
			$this->Session->setFlash(__('Work deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Work was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Work->recursive = 0;
		$this->set('works', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Work->exists($id)) {
			throw new NotFoundException(__('Invalid work'));
		}
		$options = array('conditions' => array('Work.' . $this->Work->primaryKey => $id));
		$this->set('work', $this->Work->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Work->create();
			if ($this->Work->save($this->request->data)) {
				$this->Session->setFlash(__('The work has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The work could not be saved. Please, try again.'));
			}
		}
		$users = $this->Work->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Work->exists($id)) {
			throw new NotFoundException(__('Invalid work'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Work->save($this->request->data)) {
				$this->Session->setFlash(__('The work has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The work could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Work.' . $this->Work->primaryKey => $id));
			$this->request->data = $this->Work->find('first', $options);
		}
		$users = $this->Work->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Work->id = $id;
		if (!$this->Work->exists()) {
			throw new NotFoundException(__('Invalid work'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Work->delete()) {
			$this->Session->setFlash(__('Work deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Work was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
