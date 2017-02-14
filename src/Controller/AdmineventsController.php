<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Adminevents Controller
 *
 * @property \App\Model\Table\AdmineventsTable $Adminevents
 */
class AdmineventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $adminevents = $this->paginate($this->Adminevents);

        $this->set(compact('adminevents'));
        $this->set('_serialize', ['adminevents']);
    }

    /**
     * View method
     *
     * @param string|null $id Adminevent id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminevent = $this->Adminevents->get($id, [
            'contain' => []
        ]);

        $this->set('adminevent', $adminevent);
        $this->set('_serialize', ['adminevent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminevent = $this->Adminevents->newEntity();
        if ($this->request->is('post')) {
            $adminevent = $this->Adminevents->patchEntity($adminevent, $this->request->data);
            if ($this->Adminevents->save($adminevent)) {
                $this->Flash->success(__('The adminevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The adminevent could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('adminevent'));
        $this->set('_serialize', ['adminevent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Adminevent id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminevent = $this->Adminevents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminevent = $this->Adminevents->patchEntity($adminevent, $this->request->data);
            if ($this->Adminevents->save($adminevent)) {
                $this->Flash->success(__('The adminevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The adminevent could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('adminevent'));
        $this->set('_serialize', ['adminevent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Adminevent id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminevent = $this->Adminevents->get($id);
        if ($this->Adminevents->delete($adminevent)) {
            $this->Flash->success(__('The adminevent has been deleted.'));
        } else {
            $this->Flash->error(__('The adminevent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function beforeFilter(Event $event){
        $this->Auth->allow();
    }
}
