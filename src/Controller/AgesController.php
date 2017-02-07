<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ages Controller
 *
 * @property \App\Model\Table\AgesTable $Ages
 */
class AgesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $ages = $this->paginate($this->Ages);

        $this->set(compact('ages'));
        $this->set('_serialize', ['ages']);
    }

    /**
     * View method
     *
     * @param string|null $id Age id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $age = $this->Ages->get($id, [
            'contain' => ['Profiles']
        ]);

        $this->set('age', $age);
        $this->set('_serialize', ['age']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $age = $this->Ages->newEntity();
        if ($this->request->is('post')) {
            $age = $this->Ages->patchEntity($age, $this->request->data);
            if ($this->Ages->save($age)) {
                $this->Flash->success(__('The age has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The age could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('age'));
        $this->set('_serialize', ['age']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Age id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $age = $this->Ages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $age = $this->Ages->patchEntity($age, $this->request->data);
            if ($this->Ages->save($age)) {
                $this->Flash->success(__('The age has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The age could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('age'));
        $this->set('_serialize', ['age']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Age id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $age = $this->Ages->get($id);
        if ($this->Ages->delete($age)) {
            $this->Flash->success(__('The age has been deleted.'));
        } else {
            $this->Flash->error(__('The age could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
