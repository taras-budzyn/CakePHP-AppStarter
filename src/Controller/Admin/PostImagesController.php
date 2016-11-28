<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AdminController;

/**
 * PostImages Controller
 *
 * @property \App\Model\Table\PostImagesTable $PostImages
 */
class PostImagesController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Posts']
        ];
        $postImages = $this->paginate($this->PostImages);

        $this->set(compact('postImages'));
        $this->set('_serialize', ['postImages']);
    }

    /**
     * View method
     *
     * @param string|null $id Post Image id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postImage = $this->PostImages->get($id, [
            'contain' => ['Posts']
        ]);

        $this->set('postImage', $postImage);
        $this->set('_serialize', ['postImage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postImage = $this->PostImages->newEntity();
        if ($this->request->is('post')) {
            $allowed_ext = ["image/jpeg", "image/png", "image/gif"];
            
            $photo = $this->request->data['post_photo'];
            if (in_array($photo["type"], $allowed_ext)) {
                $fullUrl = '/uploads/img/articles/' . time() . '_' . $photo["name"];
                move_uploaded_file($photo['tmp_name'], WWW_ROOT . $fullUrl);
                $postImage->url = $fullUrl;
                
                $postImage = $this->PostImages->patchEntity($postImage, $this->request->data);
                if ($this->PostImages->save($postImage)) {
                    $this->Flash->success(__('The post image has been saved.'));

                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The post image could not be saved. Please, try again.'));
                }
                
            } else {
              $this->Flash->error(__('You can\'t upload this type of file.'));
            }
        }
        $posts = $this->PostImages->Posts->find('list', ['limit' => 200]);
        $this->set(compact('postImage', 'posts'));
        $this->set('_serialize', ['postImage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Post Image id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postImage = $this->PostImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postImage = $this->PostImages->patchEntity($postImage, $this->request->data);
            if ($this->PostImages->save($postImage)) {
                $this->Flash->success(__('The post image has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The post image could not be saved. Please, try again.'));
            }
        }
        $posts = $this->PostImages->Posts->find('list', ['limit' => 200]);
        $this->set(compact('postImage', 'posts'));
        $this->set('_serialize', ['postImage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Post Image id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postImage = $this->PostImages->get($id);
        if ($this->PostImages->delete($postImage)) {
            $this->Flash->success(__('The post image has been deleted.'));
        } else {
            $this->Flash->error(__('The post image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
