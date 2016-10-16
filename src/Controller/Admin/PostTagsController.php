<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * PostTags Controller
 *
 * @property \App\Model\Table\PostTagsTable $PostTags
 */
class PostTagsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Posts', 'Tags']
        ];
        $postTags = $this->paginate($this->PostTags);

        $this->set(compact('postTags'));
        $this->set('_serialize', ['postTags']);
    }

    /**
     * View method
     *
     * @param string|null $id Post Tag id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postTag = $this->PostTags->get($id, [
            'contain' => ['Posts', 'Tags']
        ]);

        $this->set('postTag', $postTag);
        $this->set('_serialize', ['postTag']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postTag = $this->PostTags->newEntity();
        if ($this->request->is('post')) {
            $postTag = $this->PostTags->patchEntity($postTag, $this->request->data);
            if ($this->PostTags->save($postTag)) {
                $this->Flash->success(__('The post tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The post tag could not be saved. Please, try again.'));
            }
        }
        $posts = $this->PostTags->Posts->find('list', ['limit' => 200]);
        $tags = $this->PostTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('postTag', 'posts', 'tags'));
        $this->set('_serialize', ['postTag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Post Tag id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postTag = $this->PostTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postTag = $this->PostTags->patchEntity($postTag, $this->request->data);
            if ($this->PostTags->save($postTag)) {
                $this->Flash->success(__('The post tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The post tag could not be saved. Please, try again.'));
            }
        }
        $posts = $this->PostTags->Posts->find('list', ['limit' => 200]);
        $tags = $this->PostTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('postTag', 'posts', 'tags'));
        $this->set('_serialize', ['postTag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Post Tag id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postTag = $this->PostTags->get($id);
        if ($this->PostTags->delete($postTag)) {
            $this->Flash->success(__('The post tag has been deleted.'));
        } else {
            $this->Flash->error(__('The post tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
