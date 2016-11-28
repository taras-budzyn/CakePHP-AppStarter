<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 */
class PostsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Categories']
        ];
        $posts = $this->paginate($this->Posts);

        $this->set(compact('posts'));
        $this->set('_serialize', ['posts']);
    }

    /**
     * View method
     *
     * @param string|null $id Post id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($slug = null, $id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => ['Users', 'Categories', 'PostImages', 'PostTags']
        ]);

        $this->set('post', $post);
        $this->set('_serialize', ['post']);
    }
    
    public function tags()
    {
        // The 'pass' key is provided by CakePHP and contains all
        // the passed URL path segments in the request.
        $tags = $this->request->params['pass'];

        $posts = $this->Posts->find('tagged', [
            'tags' => $tags
        ]);
        
        $posts = $this->paginate($posts);
        
        // Pass variables into the view template context.
        $this->set([
            'posts' => $posts,
            'tags' => $tags
        ]);
    }
}
