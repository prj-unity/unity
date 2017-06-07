<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuoteRequests Controller
 *
 * @property \App\Model\Table\QuoteRequestsTable $QuoteRequests
 */
class QuoteRequestsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $quoteRequests = $this->paginate($this->QuoteRequests);

        $this->set(compact('quoteRequests'));
        $this->set('_serialize', ['quoteRequests']);
    }

    /**
     * View method
     *
     * @param string|null $id Quote Request id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quoteRequest = $this->QuoteRequests->get($id, [
            'contain' => ['Users', 'ProviderMessages', 'Quotations', 'QuoteRequestDetails', 'UserMessages']
        ]);

        $this->set('quoteRequest', $quoteRequest);
        $this->set('_serialize', ['quoteRequest']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quoteRequest = $this->QuoteRequests->newEntity();
        if ($this->request->is('post')) {
            $quoteRequest = $this->QuoteRequests->patchEntity($quoteRequest, $this->request->getData());
            if ($this->QuoteRequests->save($quoteRequest)) {
                $this->Flash->success(__('The quote request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quote request could not be saved. Please, try again.'));
        }
        $users = $this->QuoteRequests->Users->find('list', ['limit' => 200]);
        $this->set(compact('quoteRequest', 'users'));
        $this->set('_serialize', ['quoteRequest']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Quote Request id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quoteRequest = $this->QuoteRequests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quoteRequest = $this->QuoteRequests->patchEntity($quoteRequest, $this->request->getData());
            if ($this->QuoteRequests->save($quoteRequest)) {
                $this->Flash->success(__('The quote request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quote request could not be saved. Please, try again.'));
        }
        $users = $this->QuoteRequests->Users->find('list', ['limit' => 200]);
        $this->set(compact('quoteRequest', 'users'));
        $this->set('_serialize', ['quoteRequest']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Quote Request id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quoteRequest = $this->QuoteRequests->get($id);
        if ($this->QuoteRequests->delete($quoteRequest)) {
            $this->Flash->success(__('The quote request has been deleted.'));
        } else {
            $this->Flash->error(__('The quote request could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
