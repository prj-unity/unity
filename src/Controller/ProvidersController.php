<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Providers Controller
 *
 * @property \App\Model\Table\ProvidersTable $Providers
 */
class ProvidersController extends AppController
{

	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function index()
	{
		$userDatas = $this->Providers->find()
			->select(['pref', 'addr_1', 'addr_2', 'region'])
			->all()
			->toArray();

		$datas = [
			'pref'   => [],
			'addr_1' => [],
			'addr_2' => [],
			'region' => [],
		];

		foreach ($userDatas as $key => $data) {
			foreach ($datas as $k => $v) {
				if ($data[$k] && !in_array($data[$k], $datas[$k])) {
					$datas[$k][] = $data[$k];
				}
			}
		}

		$this->set(compact('datas'));
	}

	/**
	 * View method
	 *
	 * @param string|null $id Provider id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$provider = $this->Providers->get($id, [
			'contain' => ['ProviderMessages', 'Quotations', 'UserMessages']
		]);

		$this->set('provider', $provider);
		$this->set('_serialize', ['provider']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$provider = $this->Providers->newEntity();
		if ($this->request->is('post')) {
			$provider = $this->Providers->patchEntity($provider, $this->request->getData());
			if ($this->Providers->save($provider)) {
				$this->Flash->success(__('The provider has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The provider could not be saved. Please, try again.'));
		}
		$this->set(compact('provider'));
		$this->set('_serialize', ['provider']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Provider id.
	 * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$provider = $this->Providers->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$provider = $this->Providers->patchEntity($provider, $this->request->getData());
			if ($this->Providers->save($provider)) {
				$this->Flash->success(__('The provider has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The provider could not be saved. Please, try again.'));
		}
		$this->set(compact('provider'));
		$this->set('_serialize', ['provider']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Provider id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$provider = $this->Providers->get($id);
		if ($this->Providers->delete($provider)) {
			$this->Flash->success(__('The provider has been deleted.'));
		} else {
			$this->Flash->error(__('The provider could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}

	/**
	 * 検索結果表示
	 */
	public function search()
	{
		$search = '検索画面を作成します';
		$this->set(compact('search'));
		$providers = [];
		$conditions = [];
		if ($this->request->is('post')) {
			$datas = $this->request->data;
			foreach ($datas as $key => $data) if ($data != '') $conditions[$key] = $data;
		}
		$providers = $this->Providers->find()
			->where($conditions)
			->all()
			->toArray();
		$this->set(compact('providers'));
	}

	/**
	 * 詳細画面表示
	 */
	public function detail($id)
	{
		$data = $this->Providers->find()
			->where(['id' => $id])
			->all()
			->toArray();
		if (!$data) throw new NotFoundException();
		echo '<pre>';var_dump($data);exit;
	}

	/**
	 * Login method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function login()
	{
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error('ユーザー名またはパスワードが違います。');
		}
		$this->viewBuilder()->layout('cake');
	}


	/**
	 * Logout method
	 */
	public function logout()
	{
		$this->redirect($this->Auth->logout());
	}
}
