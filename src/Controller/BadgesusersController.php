<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Badgesusers Controller
 *
 * @property \App\Model\Table\BadgesusersTable $Badgesusers
 */
class BadgesusersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Badges']
        ];
        $badgesusers = $this->paginate($this->Badgesusers);

        $this->set(compact('badgesusers'));
        $this->set('_serialize', ['badgesusers']);
    }

    /**
     * View method
     *
     * @param string|null $id Badgesuser id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $badgesuser = $this->Badgesusers->get($id, [
            'contain' => ['Users', 'Badges']
        ]);

        $this->set('badgesuser', $badgesuser);
        $this->set('_serialize', ['badgesuser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $badgesuser = $this->Badgesusers->newEntity();
        if ($this->request->is('post')) {
            $badgesuser = $this->Badgesusers->patchEntity($badgesuser, $this->request->data);
            if ($this->Badgesusers->save($badgesuser)) {
                $this->Flash->success(__('The badgesuser has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The badgesuser could not be saved. Please, try again.'));
            }
        }
        $users = $this->Badgesusers->Users->find('list', ['limit' => 200]);
        $badges = $this->Badgesusers->Badges->find('list', ['limit' => 200]);
        $this->set(compact('badgesuser', 'users', 'badges'));
        $this->set('_serialize', ['badgesuser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Badgesuser id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $badgesuser = $this->Badgesusers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $badgesuser = $this->Badgesusers->patchEntity($badgesuser, $this->request->data);
            if ($this->Badgesusers->save($badgesuser)) {
                $this->Flash->success(__('The badgesuser has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The badgesuser could not be saved. Please, try again.'));
            }
        }
        $users = $this->Badgesusers->Users->find('list', ['limit' => 200]);
        $badges = $this->Badgesusers->Badges->find('list', ['limit' => 200]);
        $this->set(compact('badgesuser', 'users', 'badges'));
        $this->set('_serialize', ['badgesuser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Badgesuser id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $badgesuser = $this->Badgesusers->get($id);
        if ($this->Badgesusers->delete($badgesuser)) {
            $this->Flash->success(__('The badgesuser has been deleted.'));
        } else {
            $this->Flash->error(__('The badgesuser could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
