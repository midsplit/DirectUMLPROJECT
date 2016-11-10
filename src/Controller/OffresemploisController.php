<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Offresemplois Controller
 *
 * @property \App\Model\Table\OffresemploisTable $Offresemplois
 */
class OffresemploisController extends AppController
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
        
        $offresemplois = $this->paginate($this->Offresemplois);
        
        $this->set(compact('offresemplois'));
        $this->set('_serialize', ['offresemplois']);
    }
    
    public function myoffers()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        
        $offresemplois = $this->paginate($this->Offresemplois);
        
        $this->set(compact('offresemplois'));
        $this->set('_serialize', ['offresemplois']);
    }

    /**
     * View method
     *
     * @param string|null $id Offresemplois id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $offresemplois = $this->Offresemplois->get($id, [
            'contain' => ['Users']
        ]);
        $this->loadModel('Files');
        $file = $this->Files->newEntity();
        $this->set('offresemplois', $offresemplois, $file);
        $this->set('_serialize', ['offresemplois']);
        $this->set(compact('file', 'offresemplois'));
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $offresemplois = $this->Offresemplois->newEntity();
        if ($this->request->is('post')) {
            $offresemplois = $this->Offresemplois->patchEntity($offresemplois, $this->request->data);
            if ($this->Offresemplois->save($offresemplois)) {
                $this->Flash->success(__('The offresemplois has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The offresemplois could not be saved. Please, try again.'));
            }
        }
        $users = $this->Offresemplois->Users->find('list', ['limit' => 200]);
        $this->set(compact('offresemplois', 'users'));
        $this->set('_serialize', ['offresemplois']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Offresemplois id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $offresemplois = $this->Offresemplois->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $offresemplois = $this->Offresemplois->patchEntity($offresemplois, $this->request->data);
            if ($this->Offresemplois->save($offresemplois)) {
                $this->Flash->success(__('The offresemplois has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The offresemplois could not be saved. Please, try again.'));
            }
        }
        $users = $this->Offresemplois->Users->find('list', ['limit' => 200]);
        $this->set(compact('offresemplois', 'users'));
        $this->set('_serialize', ['offresemplois']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Offresemplois id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $offresemplois = $this->Offresemplois->get($id);
        if ($this->Offresemplois->delete($offresemplois)) {
            $this->Flash->success(__('The offresemplois has been deleted.'));
        } else {
            $this->Flash->error(__('The offresemplois could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function beforeFilter(\Cake\Event\Event $event) {
        $this->Auth->allow(['index', 'view']);
        parent::beforeFilter($event);
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
        
        if ($this->request->action === 'myoffers') {
            if (isset($user['role']) && $user['role'] === 'entreprise') {
                return true;
            }
        }
        
        if (in_array($this->request->action, ['edit', 'delete'])) {
            $id = (int)$this->request->params['pass'][0];
            if ($this->Offresemplois->isOwnedBy($id, $user['id'])) {
                return true;
            }
        }
        
        if ($this->request->action === 'delete') {
            if (isset($user['role']) && $user['role'] === 'admin') {
                return true;
            }
        }
        
        if (isset($user['role']) && $user['role'] === 'super-user') {
            return true;
        }
        
        return parent::isAuthorized($user);
    }
    
    
    
}
