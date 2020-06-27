<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Marques Controller
 *
 * @property \App\Model\Table\MarquesTable $Marques
 *
 * @method \App\Model\Entity\Marque[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MarquesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $marques = $this->paginate($this->Marques);

        $this->set(compact('marques'));
    }

    /**
     * View method
     *
     * @param string|null $id Marque id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $marque = $this->Marques->get($id, [
            'contain' => ['Pieces'],
        ]);

        $this->set('marque', $marque);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $marque = $this->Marques->newEmptyEntity();
        if ($this->request->is('post')) {
            $marque = $this->Marques->patchEntity($marque, $this->request->getData());
            if ($this->Marques->save($marque)) {
                $this->Flash->success(__('The marque has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The marque could not be saved. Please, try again.'));
        }
        $this->set(compact('marque'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Marque id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $marque = $this->Marques->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $marque = $this->Marques->patchEntity($marque, $this->request->getData());
            if ($this->Marques->save($marque)) {
                $this->Flash->success(__('The marque has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The marque could not be saved. Please, try again.'));
        }
        $this->set(compact('marque'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Marque id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $marque = $this->Marques->get($id);
        if ($this->Marques->delete($marque)) {
            $this->Flash->success(__('The marque has been deleted.'));
        } else {
            $this->Flash->error(__('The marque could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
