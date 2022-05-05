<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CommentsPosts Controller
 *
 * @property \App\Model\Table\CommentsPostsTable $CommentsPosts
 *
 * @method \App\Model\Entity\CommentsPost[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommentsPostsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $commentsPosts = $this->paginate($this->CommentsPosts);

        $this->set(compact('commentsPosts'));
    }

    /**
     * View method
     *
     * @param string|null $id Comments Post id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commentsPost = $this->CommentsPosts->get($id, [
            'contain' => ['CommentsPosts'],
        ]);

        $this->set('commentsPost', $commentsPost);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $commentsPost = $this->CommentsPosts->newEntity();
        if ($this->request->is('post')) {
            $commentsPost = $this->CommentsPosts->patchEntity($commentsPost, $this->request->getData());
            if ($this->CommentsPosts->save($commentsPost)) {
                $this->Flash->success(__('The comments post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comments post could not be saved. Please, try again.'));
        }
        $this->set(compact('commentsPost'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Comments Post id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commentsPost = $this->CommentsPosts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commentsPost = $this->CommentsPosts->patchEntity($commentsPost, $this->request->getData());
            if ($this->CommentsPosts->save($commentsPost)) {
                $this->Flash->success(__('The comments post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comments post could not be saved. Please, try again.'));
        }
        $this->set(compact('commentsPost'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comments Post id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commentsPost = $this->CommentsPosts->get($id);
        if ($this->CommentsPosts->delete($commentsPost)) {
            $this->Flash->success(__('The comments post has been deleted.'));
        } else {
            $this->Flash->error(__('The comments post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
