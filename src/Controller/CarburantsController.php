<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Carburants Controller
 *
 * @property \App\Model\Table\CarburantsTable $Carburants
 *
 * @method \App\Model\Entity\Carburant[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarburantsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $carburants = $this->paginate($this->Carburants);

        $this->set(compact('carburants'));
    }

    /**
     * View method
     *
     * @param string|null $id Carburant id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carburant = $this->Carburants->get($id, [
            'contain' => ['Voitures'],
        ]);

        $this->set('carburant', $carburant);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carburant = $this->Carburants->newEmptyEntity();
        if ($this->request->is('post')) {
            $carburant = $this->Carburants->patchEntity($carburant, $this->request->getData());
            if ($this->Carburants->save($carburant)) {
                $this->Flash->success(__('The carburant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carburant could not be saved. Please, try again.'));
        }
        $this->set(compact('carburant'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Carburant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carburant = $this->Carburants->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carburant = $this->Carburants->patchEntity($carburant, $this->request->getData());
            if ($this->Carburants->save($carburant)) {
                $this->Flash->success(__('The carburant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carburant could not be saved. Please, try again.'));
        }
        $this->set(compact('carburant'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Carburant id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carburant = $this->Carburants->get($id);
        if ($this->Carburants->delete($carburant)) {
            $this->Flash->success(__('The carburant has been deleted.'));
        } else {
            $this->Flash->error(__('The carburant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
