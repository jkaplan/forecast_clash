<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Educationlevels Controller
 *
 * @property \App\Model\Table\EducationlevelsTable $Educationlevels
 */
class EducationlevelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $educationlevels = $this->paginate($this->Educationlevels);

        $this->set(compact('educationlevels'));
        $this->set('_serialize', ['educationlevels']);
    }

    /**
     * View method
     *
     * @param string|null $id Educationlevel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $educationlevel = $this->Educationlevels->get($id, [
            'contain' => []
        ]);

        $this->set('educationlevel', $educationlevel);
        $this->set('_serialize', ['educationlevel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $educationlevel = $this->Educationlevels->newEntity();
        if ($this->request->is('post')) {
            $educationlevel = $this->Educationlevels->patchEntity($educationlevel, $this->request->data);
            if ($this->Educationlevels->save($educationlevel)) {
                $this->Flash->success(__('The educationlevel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The educationlevel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('educationlevel'));
        $this->set('_serialize', ['educationlevel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Educationlevel id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $educationlevel = $this->Educationlevels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $educationlevel = $this->Educationlevels->patchEntity($educationlevel, $this->request->data);
            if ($this->Educationlevels->save($educationlevel)) {
                $this->Flash->success(__('The educationlevel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The educationlevel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('educationlevel'));
        $this->set('_serialize', ['educationlevel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Educationlevel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $educationlevel = $this->Educationlevels->get($id);
        if ($this->Educationlevels->delete($educationlevel)) {
            $this->Flash->success(__('The educationlevel has been deleted.'));
        } else {
            $this->Flash->error(__('The educationlevel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
