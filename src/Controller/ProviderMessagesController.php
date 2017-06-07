<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProviderMessages Controller
 *
 * @property \App\Model\Table\ProviderMessagesTable $ProviderMessages
 */
class ProviderMessagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Providers', 'QuoteRequests', 'Messages']
        ];
        $providerMessages = $this->paginate($this->ProviderMessages);

        $this->set(compact('providerMessages'));
        $this->set('_serialize', ['providerMessages']);
    }

    /**
     * View method
     *
     * @param string|null $id Provider Message id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $providerMessage = $this->ProviderMessages->get($id, [
            'contain' => ['Users', 'Providers', 'QuoteRequests', 'Messages']
        ]);

        $this->set('providerMessage', $providerMessage);
        $this->set('_serialize', ['providerMessage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $providerMessage = $this->ProviderMessages->newEntity();
        if ($this->request->is('post')) {
            $providerMessage = $this->ProviderMessages->patchEntity($providerMessage, $this->request->getData());
            if ($this->ProviderMessages->save($providerMessage)) {
                $this->Flash->success(__('The provider message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The provider message could not be saved. Please, try again.'));
        }
        $users = $this->ProviderMessages->Users->find('list', ['limit' => 200]);
        $providers = $this->ProviderMessages->Providers->find('list', ['limit' => 200]);
        $quoteRequests = $this->ProviderMessages->QuoteRequests->find('list', ['limit' => 200]);
        $messages = $this->ProviderMessages->Messages->find('list', ['limit' => 200]);
        $this->set(compact('providerMessage', 'users', 'providers', 'quoteRequests', 'messages'));
        $this->set('_serialize', ['providerMessage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Provider Message id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $providerMessage = $this->ProviderMessages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $providerMessage = $this->ProviderMessages->patchEntity($providerMessage, $this->request->getData());
            if ($this->ProviderMessages->save($providerMessage)) {
                $this->Flash->success(__('The provider message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The provider message could not be saved. Please, try again.'));
        }
        $users = $this->ProviderMessages->Users->find('list', ['limit' => 200]);
        $providers = $this->ProviderMessages->Providers->find('list', ['limit' => 200]);
        $quoteRequests = $this->ProviderMessages->QuoteRequests->find('list', ['limit' => 200]);
        $messages = $this->ProviderMessages->Messages->find('list', ['limit' => 200]);
        $this->set(compact('providerMessage', 'users', 'providers', 'quoteRequests', 'messages'));
        $this->set('_serialize', ['providerMessage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Provider Message id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $providerMessage = $this->ProviderMessages->get($id);
        if ($this->ProviderMessages->delete($providerMessage)) {
            $this->Flash->success(__('The provider message has been deleted.'));
        } else {
            $this->Flash->error(__('The provider message could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
