<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Log\LogTrait;
use Cake\Routing\Router;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 */
class PostsController extends AppController
{
    use LogTrait;
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    
      public function isAuthorized($user) {
        return true;
    }
    
   
    
    
    public function index()
    {
        
    
        $posts = $this->paginate($this->Posts);
	
        //$this->log($posts->toArray());

        // make into elements e.g.
        // <posts id="1">
        // instead of 
        // <posts>
        //      <id>1</id>
        
        $elements = ['id'];
        $all_posts = $this->Posts->find('all');
        $qs = $this->request->query;
        $this->set(compact('posts', 'elements', 'all_posts', 'qs'));
//        $this->set('_serialize', ['posts']);
//	$this->set('_rootNode', 'rooter');
    }

    
    
    /**
     * View method
     *
     * @param string|null $id Post id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => []
        ]);

        $this->set('post', $post);
        $this->set('_serialize', ['post']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $post = $this->Posts->newEntity();
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->data);
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The post could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('post'));
        $this->set('_serialize', ['post']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Post id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->data);
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The post could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('post'));
        $this->set('_serialize', ['post']);
    }

    public function ajaxedit($id = null){
        $this->set("_serialize", true);
        
        // edit and add is the same except for passing id in
        if ( $id != null ) {
            $post = $this->Posts->get($id, [
                'contain' => []
            ]); 
        } else {
            $post = $this->Posts->newEntity();
        }
        
         if ($this->request->is('ajax')){
             
            // $this->log($this->request->data);
             
             $post = $this->Posts->patchEntity($post, $this->request->data);
             
               if ($this->Posts->save($post)) {
                    $message = 'The post has been saved.';
                    $data = $this->request->data;
                    $redirect = Router::url(['controller' => 'posts', 'action' => 'index']);
                    $this->set('success', compact('message', 'data', 'redirect'));
               } else {
                    $message = "The data could not be saved";
                    $data = $post->errors();
                    $this->set('errors', compact('message', 'data'));
                }
         }
    }
    /**
     * Delete method
     *
     * @param string|null $id Post id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success(__('The post has been deleted.'));
        } else {
            $this->Flash->error(__('The post could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
