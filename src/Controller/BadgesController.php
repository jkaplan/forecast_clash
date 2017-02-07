<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Badges Controller
 *
 * @property \App\Model\Table\BadgesTable $Badges
 */
class BadgesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $badges = $this->paginate($this->Badges);

        $this->set(compact('badges'));
        $this->set('_serialize', ['badges']);
    }

    /**
     * View method
     *
     * @param string|null $id Badge id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $badge = $this->Badges->get($id, [
            'contain' => ['BadgesUsers']
        ]);

        $this->set('badge', $badge);
        $this->set('_serialize', ['badge']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $badge = $this->Badges->newEntity();
        if ($this->request->is('post')) {
            $badge = $this->Badges->patchEntity($badge, $this->request->data);
            if ($this->Badges->save($badge)) {
                $this->Flash->success(__('The badge has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The badge could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('badge'));
        $this->set('_serialize', ['badge']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Badge id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $badge = $this->Badges->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $badge = $this->Badges->patchEntity($badge, $this->request->data);
            if ($this->Badges->save($badge)) {
                $this->Flash->success(__('The badge has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The badge could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('badge'));
        $this->set('_serialize', ['badge']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Badge id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $badge = $this->Badges->get($id);
        if ($this->Badges->delete($badge)) {
            $this->Flash->success(__('The badge has been deleted.'));
        } else {
            $this->Flash->error(__('The badge could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
