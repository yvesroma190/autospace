<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Etats Controller
 *
 * @property \App\Model\Table\EtatsTable $Etats
 *
 * @method \App\Model\Entity\Etat[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EtatsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $etats = $this->paginate($this->Etats);

        $this->set(compact('etats'));
    }

    /**
     * View method
     *
     * @param string|null $id Etat id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $etat = $this->Etats->get($id, [
            'contain' => ['Pieces', 'Voitures'],
        ]);

        $this->set('etat', $etat);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $etat = $this->Etats->newEmptyEntity();
        if ($this->request->is('post')) {
            $etat = $this->Etats->patchEntity($etat, $this->request->getData());
            if ($this->Etats->save($etat)) {
                $this->Flash->success(__('The etat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The etat could not be saved. Please, try again.'));
        }
        $this->set(compact('etat'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Etat id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $etat = $this->Etats->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $etat = $this->Etats->patchEntity($etat, $this->request->getData());
            if ($this->Etats->save($etat)) {
                $this->Flash->success(__('The etat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The etat could not be saved. Please, try again.'));
        }
        $this->set(compact('etat'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Etat id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $etat = $this->Etats->get($id);
        if ($this->Etats->delete($etat)) {
            $this->Flash->success(__('The etat has been deleted.'));
        } else {
            $this->Flash->error(__('The etat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
