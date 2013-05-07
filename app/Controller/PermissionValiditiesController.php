<?php
App::uses('AppController', 'Controller');
/**
 * PermissionValidities Controller
 *
 * @property PermissionValidity $PermissionValidity
 */
class PermissionValiditiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PermissionValidity->recursive = 0;
		$this->set('permissionValidities', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PermissionValidity->exists($id)) {
			throw new NotFoundException(__('Invalid permission validity'));
		}
		$options = array('conditions' => array('PermissionValidity.' . $this->PermissionValidity->primaryKey => $id));
		$this->set('permissionValidity', $this->PermissionValidity->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PermissionValidity->create();
			if ($this->PermissionValidity->save($this->request->data)) {
				$this->Session->setFlash(__('The permission validity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The permission validity could not be saved. Please, try again.'));
			}
		}
		$permissions = $this->PermissionValidity->Permission->find('list');
		$this->set(compact('permissions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PermissionValidity->exists($id)) {
			throw new NotFoundException(__('Invalid permission validity'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PermissionValidity->save($this->request->data)) {
				$this->Session->setFlash(__('The permission validity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The permission validity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PermissionValidity.' . $this->PermissionValidity->primaryKey => $id));
			$this->request->data = $this->PermissionValidity->find('first', $options);
		}
		$permissions = $this->PermissionValidity->Permission->find('list');
		$this->set(compact('permissions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PermissionValidity->id = $id;
		if (!$this->PermissionValidity->exists()) {
			throw new NotFoundException(__('Invalid permission validity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PermissionValidity->delete()) {
			$this->Session->setFlash(__('Permission validity deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Permission validity was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
