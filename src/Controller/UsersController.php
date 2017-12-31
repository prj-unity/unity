<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $userDatas = $this->Users->find()
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
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
        $this->viewBuilder()->layout('cake');
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
        $this->viewBuilder()->layout('cake');
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
        $this->viewBuilder()->layout('cake');
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
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
        $users = [];
        if ($this->request->is('post')) {
            $datas = $this->request->data;

            $conditions = [];
            foreach ($datas as $key => $data) if ($data != '') $conditions[$key] = $data;

            $users = $this->Users->find()
                ->where($conditions)
                ->all()
                ->toArray();
        }
        $this->set(compact('users'));
    }

    /**
     * 詳細画面表示
     */
    public function detail($id)
    {
        $data = $this->Users->find()
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
