<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BadgesUsers Controller
 *
 * @property \App\Model\Table\BadgesUsersTable $BadgesUsers
 */
class BadgesUsersController extends AppController
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
        $badgesUsers = $this->paginate($this->BadgesUsers);

        $this->set(compact('badgesUsers'));
        $this->set('_serialize', ['badgesUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Badges User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $badgesUser = $this->BadgesUsers->get($id, [
            'contain' => ['Users', 'Badges']
        ]);

        $this->set('badgesUser', $badgesUser);
        $this->set('_serialize', ['badgesUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $badgesUser = $this->BadgesUsers->newEntity();
        if ($this->request->is('post')) {
            $badgesUser = $this->BadgesUsers->patchEntity($badgesUser, $this->request->data);
            if ($this->BadgesUsers->save($badgesUser)) {
                $this->Flash->success(__('The badges user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The badges user could not be saved. Please, try again.'));
            }
        }
        $users = $this->BadgesUsers->Users->find('list', ['limit' => 200]);
        $badges = $this->BadgesUsers->Badges->find('list', ['limit' => 200]);
        $this->set(compact('badgesUser', 'users', 'badges'));
        $this->set('_serialize', ['badgesUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Badges User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $badgesUser = $this->BadgesUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $badgesUser = $this->BadgesUsers->patchEntity($badgesUser, $this->request->data);
            if ($this->BadgesUsers->save($badgesUser)) {
                $this->Flash->success(__('The badges user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The badges user could not be saved. Please, try again.'));
            }
        }
        $users = $this->BadgesUsers->Users->find('list', ['limit' => 200]);
        $badges = $this->BadgesUsers->Badges->find('list', ['limit' => 200]);
        $this->set(compact('badgesUser', 'users', 'badges'));
        $this->set('_serialize', ['badgesUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Badges User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $badgesUser = $this->BadgesUsers->get($id);
        if ($this->BadgesUsers->delete($badgesUser)) {
            $this->Flash->success(__('The badges user has been deleted.'));
        } else {
            $this->Flash->error(__('The badges user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
