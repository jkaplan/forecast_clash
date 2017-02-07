<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Avatars Controller
 *
 * @property \App\Model\Table\AvatarsTable $Avatars
 */
class AvatarsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $avatars = $this->paginate($this->Avatars);

        $this->set(compact('avatars'));
        $this->set('_serialize', ['avatars']);
    }

    /**
     * View method
     *
     * @param string|null $id Avatar id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $avatar = $this->Avatars->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('avatar', $avatar);
        $this->set('_serialize', ['avatar']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $avatar = $this->Avatars->newEntity();
        if ($this->request->is('post')) {
            $avatar = $this->Avatars->patchEntity($avatar, $this->request->data);
            if ($this->Avatars->save($avatar)) {
                $this->Flash->success(__('The avatar has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The avatar could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('avatar'));
        $this->set('_serialize', ['avatar']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Avatar id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $avatar = $this->Avatars->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $avatar = $this->Avatars->patchEntity($avatar, $this->request->data);
            if ($this->Avatars->save($avatar)) {
                $this->Flash->success(__('The avatar has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The avatar could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('avatar'));
        $this->set('_serialize', ['avatar']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Avatar id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $avatar = $this->Avatars->get($id);
        if ($this->Avatars->delete($avatar)) {
            $this->Flash->success(__('The avatar has been deleted.'));
        } else {
            $this->Flash->error(__('The avatar could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
