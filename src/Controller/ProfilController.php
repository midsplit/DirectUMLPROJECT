<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Profil Controller
 *
 * @property \App\Model\Table\ProfilTable $Profil
 */
class ProfilController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $profil = $this->paginate($this->Profil);

        $this->set(compact('profil'));
        $this->set('_serialize', ['profil']);
    }

    /**
     * View method
     *
     * @param string|null $id Profil id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profil = $this->Profil->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('profil', $profil);
        $this->set('_serialize', ['profil']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $condition = array('user_id' =>  $this->request->session()->read('Auth.User.id'));
        if($this->Profil->exists($condition)){
            $profil = $this->Profil->find('all', ['conditions' => array('user_id' => $this->request->session()->read('Auth.User.id'))]);
        } else {
            $profil = $this->Profil->newEntity();
        }
        if ($this->request->is('post')) {
            $profil = $this->Profil->patchEntity($profil, $this->request->data);
            if ($this->Profil->save($profil)) {
                $this->Flash->success(__('The profil has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The profil could not be saved. Please, try again.'));
            }
        }
        $users = $this->Profil->Users->find('list', ['limit' => 200]);
        $this->set(compact('profil', 'users'));
        $this->set('_serialize', ['profil']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Profil id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit()
    {
        $condition = array('user_id' =>  $this->request->session()->read('Auth.User.id'));
        if($this->Profil->exists($condition)){
            $query = $this->Profil->find('all', ['conditions' => array('user_id' => $this->request->session()->read('Auth.User.id'))]);
            $profil = $query->first();
        } else {
            $profil = $this->Profil->newEntity();
        }
        if ($this->request->is('post')) {
            $profil = $this->Profil->patchEntity($profil, $this->request->data);
            if ($this->Profil->save($profil)) {
                $this->Flash->success(__('The profil has been saved.'));
                return $this->redirect(['action' => 'edit']);
            } else {
                $this->Flash->error(__('The profil could not be saved. Please, try again.'));
            }
        }
        $users = $this->Profil->Users->find('list', ['limit' => 200]);
        $this->set(compact('profil', 'users'));
        $this->set('_serialize', ['profil']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Profil id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profil = $this->Profil->get($id);
        if ($this->Profil->delete($profil)) {
            $this->Flash->success(__('The profil has been deleted.'));
        } else {
            $this->Flash->error(__('The profil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function isAuthorized($user) {
        if ($this->request->action === 'add') {
            if(parent::isEntreprise($user)){
                return true;
            }
            if(parent::isAdmin($user)){
                return true;
            } 
        }
        
        if ($this->request->action === 'view') {
            return true;
        }
        
        if ($this->request->action === 'edit') {
            if (isset($user['role']) && $user['role'] === 'user') {
                return true;
            }
        }
        
        if (isset($user['role']) && $user['role'] === 'super-user') {
            return true;
        }
        
        return parent::isAuthorized($user);
    }
}
