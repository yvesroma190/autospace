<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Typepieces Controller
 *
 * @property \App\Model\Table\TypepiecesTable $Typepieces
 *
 * @method \App\Model\Entity\Typepiece[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypepiecesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $typepieces = $this->paginate($this->Typepieces);

        $this->set(compact('typepieces'));
    }

    /**
     * View method
     *
     * @param string|null $id Typepiece id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typepiece = $this->Typepieces->get($id, [
            'contain' => ['Pieces'],
        ]);

        $this->set('typepiece', $typepiece);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typepiece = $this->Typepieces->newEmptyEntity();
        if ($this->request->is('post')) {
            $typepiece = $this->Typepieces->patchEntity($typepiece, $this->request->getData());
            if ($this->Typepieces->save($typepiece)) {
                $this->Flash->success(__('The typepiece has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typepiece could not be saved. Please, try again.'));
        }
        $this->set(compact('typepiece'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typepiece id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typepiece = $this->Typepieces->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typepiece = $this->Typepieces->patchEntity($typepiece, $this->request->getData());
            if ($this->Typepieces->save($typepiece)) {
                $this->Flash->success(__('The typepiece has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typepiece could not be saved. Please, try again.'));
        }
        $this->set(compact('typepiece'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typepiece id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typepiece = $this->Typepieces->get($id);
        if ($this->Typepieces->delete($typepiece)) {
            $this->Flash->success(__('The typepiece has been deleted.'));
        } else {
            $this->Flash->error(__('The typepiece could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
