<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Piecegalleries Controller
 *
 * @property \App\Model\Table\PiecegalleriesTable $Piecegalleries
 *
 * @method \App\Model\Entity\Piecegallery[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PiecegalleriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pieces'],
        ];
        $piecegalleries = $this->paginate($this->Piecegalleries);

        $this->set(compact('piecegalleries'));
    }

    /**
     * View method
     *
     * @param string|null $id Piecegallery id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $piecegallery = $this->Piecegalleries->get($id, [
            'contain' => ['Pieces'],
        ]);

        $this->set('piecegallery', $piecegallery);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $piecegallery = $this->Piecegalleries->newEmptyEntity();
        if ($this->request->is('post')) {
            $piecegallery = $this->Piecegalleries->patchEntity($piecegallery, $this->request->getData());
            if ($this->Piecegalleries->save($piecegallery)) {
                $this->Flash->success(__('The piecegallery has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The piecegallery could not be saved. Please, try again.'));
        }
        $pieces = $this->Piecegalleries->Pieces->find('list', ['limit' => 200]);
        $this->set(compact('piecegallery', 'pieces'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Piecegallery id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $piecegallery = $this->Piecegalleries->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $piecegallery = $this->Piecegalleries->patchEntity($piecegallery, $this->request->getData());
            if ($this->Piecegalleries->save($piecegallery)) {
                $this->Flash->success(__('The piecegallery has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The piecegallery could not be saved. Please, try again.'));
        }
        $pieces = $this->Piecegalleries->Pieces->find('list', ['limit' => 200]);
        $this->set(compact('piecegallery', 'pieces'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Piecegallery id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $piecegallery = $this->Piecegalleries->get($id);
        if ($this->Piecegalleries->delete($piecegallery)) {
            $this->Flash->success(__('The piecegallery has been deleted.'));
        } else {
            $this->Flash->error(__('The piecegallery could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
