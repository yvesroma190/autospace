<?php
declare(strict_types=1);

namespace Manager\Controller;

/**
 * Modeles Controller
 *
 * @property \Manager\Model\Table\ModelesTable $Modeles
 *
 * @method \Manager\Model\Entity\Modele[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ModelesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Marques'],
        ];
        $modeles = $this->paginate($this->Modeles);

        $this->set(compact('modeles'));
    }

    /**
     * View method
     *
     * @param string|null $id Modele id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modele = $this->Modeles->get($id, [
            'contain' => ['Marques', 'Pieces', 'Voitures'],
        ]);

        $this->set('modele', $modele);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modele = $this->Modeles->newEmptyEntity();
        if ($this->request->is('post')) {
            $modele = $this->Modeles->patchEntity($modele, $this->request->getData());
            if ($this->Modeles->save($modele)) {
                $this->Flash->success(__('The modele has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modele could not be saved. Please, try again.'));
        }
        $marques = $this->Modeles->Marques->find('list', ['limit' => 200]);
        $this->set(compact('modele', 'marques'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Modele id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modele = $this->Modeles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modele = $this->Modeles->patchEntity($modele, $this->request->getData());
            if ($this->Modeles->save($modele)) {
                $this->Flash->success(__('The modele has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modele could not be saved. Please, try again.'));
        }
        $marques = $this->Modeles->Marques->find('list', ['limit' => 200]);
        $this->set(compact('modele', 'marques'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Modele id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modele = $this->Modeles->get($id);
        if ($this->Modeles->delete($modele)) {
            $this->Flash->success(__('The modele has been deleted.'));
        } else {
            $this->Flash->error(__('The modele could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
