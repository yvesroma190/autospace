<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
/**
 * Modes Controller
 *
 * @property \App\Model\Table\ModesTable $Modes
 *
 * @method \App\Model\Entity\Mode[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ModesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $modes = $this->paginate($this->Modes);

        $this->set(compact('modes'));
    }

    /**
     * View method
     *
     * @param string|null $id Mode id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mode = $this->Modes->get($id, [
            'contain' => ['Voitures'],
        ]);

        $this->set('mode', $mode);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mode = $this->Modes->newEmptyEntity();
        if ($this->request->is('post')) {
            $mode = $this->Modes->patchEntity($mode, $this->request->getData());
            if ($this->Modes->save($mode)) {
                $this->Flash->success(__('The mode has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mode could not be saved. Please, try again.'));
        }
        $this->set(compact('mode'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mode id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mode = $this->Modes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mode = $this->Modes->patchEntity($mode, $this->request->getData());
            if ($this->Modes->save($mode)) {
                $this->Flash->success(__('The mode has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mode could not be saved. Please, try again.'));
        }
        $this->set(compact('mode'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mode id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mode = $this->Modes->get($id);
        if ($this->Modes->delete($mode)) {
            $this->Flash->success(__('The mode has been deleted.'));
        } else {
            $this->Flash->error(__('The mode could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
