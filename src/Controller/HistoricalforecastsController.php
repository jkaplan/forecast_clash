<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Historicalforecasts Controller
 *
 * @property \App\Model\Table\HistoricalforecastsTable $Historicalforecasts
 */
class HistoricalforecastsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'WeatherEvents']
        ];
        $historicalforecasts = $this->paginate($this->Historicalforecasts);

        $this->set(compact('historicalforecasts'));
        $this->set('_serialize', ['historicalforecasts']);
    }

    /**
     * View method
     *
     * @param string|null $id Historicalforecast id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $historicalforecast = $this->Historicalforecasts->get($id, [
            'contain' => ['Users', 'WeatherEvents']
        ]);

        $this->set('historicalforecast', $historicalforecast);
        $this->set('_serialize', ['historicalforecast']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $historicalforecast = $this->Historicalforecasts->newEntity();
        if ($this->request->is('post')) {
            $historicalforecast = $this->Historicalforecasts->patchEntity($historicalforecast, $this->request->data);
            if ($this->Historicalforecasts->save($historicalforecast)) {
                $this->Flash->success(__('The historicalforecast has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The historicalforecast could not be saved. Please, try again.'));
            }
        }
        $users = $this->Historicalforecasts->Users->find('list', ['limit' => 200]);
        $weatherEvents = $this->Historicalforecasts->WeatherEvents->find('list', ['limit' => 200]);
        $this->set(compact('historicalforecast', 'users', 'weatherEvents'));
        $this->set('_serialize', ['historicalforecast']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Historicalforecast id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $historicalforecast = $this->Historicalforecasts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $historicalforecast = $this->Historicalforecasts->patchEntity($historicalforecast, $this->request->data);
            if ($this->Historicalforecasts->save($historicalforecast)) {
                $this->Flash->success(__('The historicalforecast has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The historicalforecast could not be saved. Please, try again.'));
            }
        }
        $users = $this->Historicalforecasts->Users->find('list', ['limit' => 200]);
        $weatherEvents = $this->Historicalforecasts->WeatherEvents->find('list', ['limit' => 200]);
        $this->set(compact('historicalforecast', 'users', 'weatherEvents'));
        $this->set('_serialize', ['historicalforecast']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Historicalforecast id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $historicalforecast = $this->Historicalforecasts->get($id);
        if ($this->Historicalforecasts->delete($historicalforecast)) {
            $this->Flash->success(__('The historicalforecast has been deleted.'));
        } else {
            $this->Flash->error(__('The historicalforecast could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function beforeFilter(Event $event){
        $this->Auth->allow();
    }
}
