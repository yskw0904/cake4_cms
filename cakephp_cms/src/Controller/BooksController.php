<?php

namespace App\Controller;

Class BooksController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
    }

    public function index()
    {
        $this->loadComponent('Paginator');
        $books = $this->Paginator->paginate($this->Books->find());
        $this->set(compact('books'));
    }

    public function view($slug = null)
    {
        $book = $this->Books->findBySlug($slug)->firstOrFail();
        $this->set(compact('book'));
    }

    public function add()
    {
        $book = $this->Books->newEmptyEntity();
        if ($this->request->is('post')) {
            $book = $this->Books->patchEntity($book, $this->request->getData());

            // user_id の決め打ちは一時的なもので、あとで認証を構築する際に削除されます。
            $book->user_id = 1;

            if ($this->Books->save($book)) {
                $this->Flash->success(__('Your book has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your book.'));
        }
        $this->set('book', $book);
    }

    public function edit($slug)
    {
        $book = $this->Books->findBySlug($slug)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Books->patchEntity($book, $this->request->getData());
            if ($this->Books->save($book)) {
                $this->Flash->success(__('Your book has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your book.'));
        }
    
        $this->set('book', $book);
    }

    public function delete($slug)
    {
        $this->request->allowMethod(['post', 'delete']);
    
        $book = $this->Books->findBySlug($slug)->firstOrFail();
        if ($this->Books->delete($book)) {
            $this->Flash->success(__('The {0} book has been deleted.', $book->title));
            return $this->redirect(['action' => 'index']);
        }
    }
}
