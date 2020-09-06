<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
/**
 * Concessionnaires Controller
 *
 * @property \App\Model\Table\ConcessionnairesTable $Concessionnaires
 *
 * @method \App\Model\Entity\Concessionnaire[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConcessionnairesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries', 'Villes'],
        ];
        $concessionnaires = $this->paginate($this->Concessionnaires);

        $this->set(compact('concessionnaires'));
    }

    /**
     * View method
     *
     * @param string|null $id Concessionnaire id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $concessionnaire = $this->Concessionnaires->get($id, [
            'contain' => ['Countries', 'Villes', 'Voitures'],
        ]);

        $this->set('concessionnaire', $concessionnaire);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $concessionnaire = $this->Concessionnaires->newEmptyEntity();
        if ($this->request->is('post')) {
            $concessionnaire = $this->Concessionnaires->patchEntity($concessionnaire, $this->request->getData());
            if ($this->Concessionnaires->save($concessionnaire)) {
                $this->Flash->success(__('The concessionnaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The concessionnaire could not be saved. Please, try again.'));
        }
        $countries = $this->Concessionnaires->Countries->find('list', ['limit' => 200]);
        $villes = $this->Concessionnaires->Villes->find('list', ['limit' => 200]);
        $this->set(compact('concessionnaire', 'countries', 'villes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Concessionnaire id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $concessionnaire = $this->Concessionnaires->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $concessionnaire = $this->Concessionnaires->patchEntity($concessionnaire, $this->request->getData());
            if ($this->Concessionnaires->save($concessionnaire)) {
                $this->Flash->success(__('The concessionnaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The concessionnaire could not be saved. Please, try again.'));
        }
        $countries = $this->Concessionnaires->Countries->find('list', ['limit' => 200]);
        $villes = $this->Concessionnaires->Villes->find('list', ['limit' => 200]);
        $this->set(compact('concessionnaire', 'countries', 'villes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Concessionnaire id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $concessionnaire = $this->Concessionnaires->get($id);
        if ($this->Concessionnaires->delete($concessionnaire)) {
            $this->Flash->success(__('The concessionnaire has been deleted.'));
        } else {
            $this->Flash->error(__('The concessionnaire could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
