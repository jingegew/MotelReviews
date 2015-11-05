<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Likerts Controller
 *
 * @property \App\Model\Table\LikertsTable $Likerts
 */
class LikertsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Reviews']
        ];
        $this->set('likerts', $this->paginate($this->Likerts));
        $this->set('_serialize', ['likerts']);
    }

    /**
     * View method
     *
     * @param string|null $id Likert id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $likert = $this->Likerts->get($id, [
            'contain' => ['Reviews']
        ]);
        $this->set('likert', $likert);
        $this->set('_serialize', ['likert']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $likert = $this->Likerts->newEntity();
        if ($this->request->is('post')) {
            $likert = $this->Likerts->patchEntity($likert, $this->request->data);
            if ($this->Likerts->save($likert)) {
                $this->Flash->success(__('The likert has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The likert could not be saved. Please, try again.'));
            }
        }
        $reviews = $this->Likerts->Reviews->find('list', ['limit' => 200]);
        $this->set(compact('likert', 'reviews'));
        $this->set('_serialize', ['likert']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Likert id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $likert = $this->Likerts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $likert = $this->Likerts->patchEntity($likert, $this->request->data);
            if ($this->Likerts->save($likert)) {
                $this->Flash->success(__('The likert has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The likert could not be saved. Please, try again.'));
            }
        }
        $reviews = $this->Likerts->Reviews->find('list', ['limit' => 200]);
        $this->set(compact('likert', 'reviews'));
        $this->set('_serialize', ['likert']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Likert id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $likert = $this->Likerts->get($id);
        if ($this->Likerts->delete($likert)) {
            $this->Flash->success(__('The likert has been deleted.'));
        } else {
            $this->Flash->error(__('The likert could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
