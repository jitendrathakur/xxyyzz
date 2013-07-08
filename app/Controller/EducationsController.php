<?php
App::uses('AppController', 'Controller');
/**
 * Educations Controller
 *
 * @property Education $Education
 */
class EducationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Education->recursive = 0;
		$this->set('educations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Education->exists($id)) {
			throw new NotFoundException(__('Invalid education'));
		}
		$options = array('conditions' => array('Education.' . $this->Education->primaryKey => $id));
		$this->set('education', $this->Education->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Education->create();
			if ($this->Education->save($this->request->data)) {
				$this->Session->setFlash(__('The education has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The education could not be saved. Please, try again.'));
			}
		}
		$users = $this->Education->User->find('list');
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
		if (!$this->Education->exists($id)) {
			throw new NotFoundException(__('Invalid education'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Education->save($this->request->data)) {
				$this->Session->setFlash(__('The education has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The education could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Education.' . $this->Education->primaryKey => $id));
			$this->request->data = $this->Education->find('first', $options);
		}
		$users = $this->Education->User->find('list');
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
		$this->Education->id = $id;
		if (!$this->Education->exists()) {
			throw new NotFoundException(__('Invalid education'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Education->delete()) {
			$this->Session->setFlash(__('Education deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Education was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Education->recursive = 0;
		$this->set('educations', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Education->exists($id)) {
			throw new NotFoundException(__('Invalid education'));
		}
		$options = array('conditions' => array('Education.' . $this->Education->primaryKey => $id));
		$this->set('education', $this->Education->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Education->create();
			if ($this->Education->save($this->request->data)) {
				$this->Session->setFlash(__('The education has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The education could not be saved. Please, try again.'));
			}
		}
		$users = $this->Education->User->find('list');
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
		if (!$this->Education->exists($id)) {
			throw new NotFoundException(__('Invalid education'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Education->save($this->request->data)) {
				$this->Session->setFlash(__('The education has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The education could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Education.' . $this->Education->primaryKey => $id));
			$this->request->data = $this->Education->find('first', $options);
		}
		$users = $this->Education->User->find('list');
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
		$this->Education->id = $id;
		if (!$this->Education->exists()) {
			throw new NotFoundException(__('Invalid education'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Education->delete()) {
			$this->Session->setFlash(__('Education deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Education was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
