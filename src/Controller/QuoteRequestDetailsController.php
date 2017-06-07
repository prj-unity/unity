<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuoteRequestDetails Controller
 *
 * @property \App\Model\Table\QuoteRequestDetailsTable $QuoteRequestDetails
 */
class QuoteRequestDetailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'QuoteRequests']
        ];
        $quoteRequestDetails = $this->paginate($this->QuoteRequestDetails);

        $this->set(compact('quoteRequestDetails'));
        $this->set('_serialize', ['quoteRequestDetails']);
    }

    /**
     * View method
     *
     * @param string|null $id Quote Request Detail id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quoteRequestDetail = $this->QuoteRequestDetails->get($id, [
            'contain' => ['Users', 'QuoteRequests']
        ]);

        $this->set('quoteRequestDetail', $quoteRequestDetail);
        $this->set('_serialize', ['quoteRequestDetail']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quoteRequestDetail = $this->QuoteRequestDetails->newEntity();
        if ($this->request->is('post')) {
            $quoteRequestDetail = $this->QuoteRequestDetails->patchEntity($quoteRequestDetail, $this->request->getData());
            if ($this->QuoteRequestDetails->save($quoteRequestDetail)) {
                $this->Flash->success(__('The quote request detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quote request detail could not be saved. Please, try again.'));
        }
        $users = $this->QuoteRequestDetails->Users->find('list', ['limit' => 200]);
        $quoteRequests = $this->QuoteRequestDetails->QuoteRequests->find('list', ['limit' => 200]);
        $this->set(compact('quoteRequestDetail', 'users', 'quoteRequests'));
        $this->set('_serialize', ['quoteRequestDetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Quote Request Detail id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quoteRequestDetail = $this->QuoteRequestDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quoteRequestDetail = $this->QuoteRequestDetails->patchEntity($quoteRequestDetail, $this->request->getData());
            if ($this->QuoteRequestDetails->save($quoteRequestDetail)) {
                $this->Flash->success(__('The quote request detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quote request detail could not be saved. Please, try again.'));
        }
        $users = $this->QuoteRequestDetails->Users->find('list', ['limit' => 200]);
        $quoteRequests = $this->QuoteRequestDetails->QuoteRequests->find('list', ['limit' => 200]);
        $this->set(compact('quoteRequestDetail', 'users', 'quoteRequests'));
        $this->set('_serialize', ['quoteRequestDetail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Quote Request Detail id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quoteRequestDetail = $this->QuoteRequestDetails->get($id);
        if ($this->QuoteRequestDetails->delete($quoteRequestDetail)) {
            $this->Flash->success(__('The quote request detail has been deleted.'));
        } else {
            $this->Flash->error(__('The quote request detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
