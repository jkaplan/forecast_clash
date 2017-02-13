<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Weatherevents Controller
 *
 * @property \App\Model\Table\WeathereventsTable $Weatherevents
 */
class WeathereventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $weatherevents = $this->paginate($this->Weatherevents);

        $this->set(compact('weatherevents'));
        $this->set('_serialize', ['weatherevents']);
    }

    /**
     * View method
     *
     * @param string|null $id Weatherevent id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $weatherevent = $this->Weatherevents->get($id, [
            'contain' => []
        ]);

        $this->set('weatherevent', $weatherevent);
        $this->set('_serialize', ['weatherevent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $weatherevent = $this->Weatherevents->newEntity();
        if ($this->request->is('post')) {
            $weatherevent = $this->Weatherevents->patchEntity($weatherevent, $this->request->data);
            if ($this->Weatherevents->save($weatherevent)) {
                $this->Flash->success(__('The weatherevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The weatherevent could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('weatherevent'));
        $this->set('_serialize', ['weatherevent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Weatherevent id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $weatherevent = $this->Weatherevents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $weatherevent = $this->Weatherevents->patchEntity($weatherevent, $this->request->data);
            if ($this->Weatherevents->save($weatherevent)) {
                $this->Flash->success(__('The weatherevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The weatherevent could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('weatherevent'));
        $this->set('_serialize', ['weatherevent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Weatherevent id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $weatherevent = $this->Weatherevents->get($id);
        if ($this->Weatherevents->delete($weatherevent)) {
            $this->Flash->success(__('The weatherevent has been deleted.'));
        } else {
            $this->Flash->error(__('The weatherevent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
