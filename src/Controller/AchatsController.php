<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Achats Controller
 *
 * @property \App\Model\Table\AchatsTable $Achats
 *
 * @method \App\Model\Entity\Achat[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AchatsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Pieces'],
        ];
        $achats = $this->paginate($this->Achats);

        $this->set(compact('achats'));
    }

    /**
     * View method
     *
     * @param string|null $id Achat id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $achat = $this->Achats->get($id, [
            'contain' => ['Clients', 'Pieces'],
        ]);

        $this->set('achat', $achat);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $achat = $this->Achats->newEmptyEntity();
        if ($this->request->is('post')) {
            $achat = $this->Achats->patchEntity($achat, $this->request->getData());
            if ($this->Achats->save($achat)) {
                $this->Flash->success(__('The achat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The achat could not be saved. Please, try again.'));
        }
        $clients = $this->Achats->Clients->find('list', ['limit' => 200]);
        $pieces = $this->Achats->Pieces->find('list', ['limit' => 200]);
        $this->set(compact('achat', 'clients', 'pieces'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Achat id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $achat = $this->Achats->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $achat = $this->Achats->patchEntity($achat, $this->request->getData());
            if ($this->Achats->save($achat)) {
                $this->Flash->success(__('The achat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The achat could not be saved. Please, try again.'));
        }
        $clients = $this->Achats->Clients->find('list', ['limit' => 200]);
        $pieces = $this->Achats->Pieces->find('list', ['limit' => 200]);
        $this->set(compact('achat', 'clients', 'pieces'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Achat id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $achat = $this->Achats->get($id);
        if ($this->Achats->delete($achat)) {
            $this->Flash->success(__('The achat has been deleted.'));
        } else {
            $this->Flash->error(__('The achat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
