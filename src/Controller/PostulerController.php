<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Postuler Controller
 *
 * @property \App\Model\Table\PostulerTable $Postuler
 */
class PostulerController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($id = null)
    {
        $this->set('id', $id);
        $this->paginate = [
            'contain' => ['Users', 'Offresemplois', 'Files']
        ];
        
        $postuler = $this->paginate($this->Postuler);
        
        $this->set(compact('postuler'));
        $this->set('_serialize', ['postuler']);
    }

    /**
     * View method
     *
     * @param string|null $id Postuler id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postuler = $this->Postuler->get($id, [
            'contain' => ['Users', 'Offresemplois', 'Files']
        ]);

        $this->set('postuler', $postuler);
        $this->set('_serialize', ['postuler']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $postuler = $this->Postuler->newEntity();
        $postuler->offresemploi_id = $id;
        if ($this->request->is('post')) {
            $postuler = $this->Postuler->patchEntity($postuler, $this->request->data);
            if ($this->Postuler->save($postuler)) {
                $this->Flash->success(__('Vous avez postulé avec succès. Bonne chance!'));

                return $this->redirect(['controller' => 'Offresemplois', 'action' => 'view', $id]);
            } else {
                $this->Flash->error(__('Erreur lors de la postulation.'));
            }
        }
        $loguserid = $this->request->session()->read('Auth.User.id');
        $users = $this->Postuler->Users->find('list', ['limit' => 200]);
        $offresemplois = $this->Postuler->Offresemplois->find('list', ['limit' => 200]);
        $files = $this->Postuler->Files->find('list', ['limit' => 200])->where(['user_id' => $loguserid]);
        $this->set(compact('postuler', 'users', 'offresemplois', 'files'));
        $this->set('_serialize', ['postuler']);
        
    }

    /**
     * Edit method
     *
     * @param string|null $id Postuler id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postuler = $this->Postuler->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postuler = $this->Postuler->patchEntity($postuler, $this->request->data);
            if ($this->Postuler->save($postuler)) {
                $this->Flash->success(__('The postuler has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The postuler could not be saved. Please, try again.'));
            }
        }
        $users = $this->Postuler->Users->find('list', ['limit' => 200]);
        $offresemplois = $this->Postuler->Offresemplois->find('list', ['limit' => 200]);
        $files = $this->Postuler->Files->find('list', ['limit' => 200]);
        $this->set(compact('postuler', 'users', 'offresemplois', 'files'));
        $this->set('_serialize', ['postuler']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Postuler id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postuler = $this->Postuler->get($id);
        if ($this->Postuler->delete($postuler)) {
            $this->Flash->success(__('The postuler has been deleted.'));
        } else {
            $this->Flash->error(__('The postuler could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index', $postuler['offresemploi_id']]);
    }
    
    public function isAuthorized($user) {
        if ($this->request->action === 'add') {
            return true;
        }
        
        if ($this->request->action === 'view') {
            return true;
        }
        
        if ($this->request->action === 'index') {
            return true;
        }
        
        if ($this->request->action === 'delete') {
            if (isset($user['role']) && $user['role'] === 'entreprise') {
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
    
    public function filter($filter = null)
    {
        $query = $this->Postuler
            ->find('search', ['search' => $this->request->query])
            ->where(['name EQUALS' => $filter]);
        $this->set(compact('postuler'));
        $this->set('_serialize', ['postuler']);
    }
}
