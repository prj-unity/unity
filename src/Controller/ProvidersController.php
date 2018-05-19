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
		$providers = $this->Providers->find('all')
			->contain(['GenreProviders', 'GenreProviders.Genres'])
			->where($conditions)
			->all()
			->toArray();
		$searchCond = $this->request->data;
		$this->set(compact('providers', 'searchCond'));
	}

	/**
	 * 詳細画面表示
	 */
	public function detail($id)
	{
		$provider = $this->Providers->find()
			->contain(['GenreProviders', 'GenreProviders.Genres'])
			->where(['id' => $id])
			->all()
			->toArray();
		if (!isset($provider[0])) throw new NotFoundException();
		$this->set(array(
			'provider' => $provider[0],
			'searchCond' => $this->request->data,
			'id' => $id,
		));
	}

	/**
	 * 問い合わせ画面表示
	 */
	public function request()
	{
		if (!isset($this->request->data['provider_id'])) throw new NotFoundException();
		$ids = explode(',', $this->request->data['provider_id']);
		$providers = $this->Providers->find()
			->where(['id in' => $ids])
			->all()
			->toArray();
		if (!isset($providers[0])) throw new NotFoundException();
		$this->set(compact('providers'));
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
