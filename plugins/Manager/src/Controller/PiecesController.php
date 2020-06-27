<?php
declare(strict_types=1);

namespace Manager\Controller;

/**
 * Pieces Controller
 *
 * @property \Manager\Model\Table\PiecesTable $Pieces
 *
 * @method \Manager\Model\Entity\Piece[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PiecesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Typepieces', 'Categories', 'Modeles', 'Marques', 'Etats'],
        ];
        $pieces = $this->paginate($this->Pieces);

        $this->set(compact('pieces'));
    }

    /**
     * View method
     *
     * @param string|null $id Piece id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $piece = $this->Pieces->get($id, [
            'contain' => ['Typepieces', 'Categories', 'Modeles', 'Marques', 'Etats', 'Achats', 'Piecegalleries'],
        ]);

        $this->set('piece', $piece);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $piece = $this->Pieces->newEmptyEntity();
        if ($this->request->is('post')) {
            $piece = $this->Pieces->patchEntity($piece, $this->request->getData());

            // Upload
            if(!$piece->getErrors){
                $photo = $this->request->getData('image_file');
                $name = $photo->getClientFilename();

                // Creer le dossier si inexistant
                if(!is_dir(WWW_ROOT.'img'.DS.'piece_img'))
                mkdir(WWW_ROOT.'img'.DS.'piece_img', 0775);

                $targetPath = WWW_ROOT.'img'.DS.'piece_img'.DS.$name;
                if($name)
                $photo->moveTo($targetPath);
                $piece->photo = 'piece_img/'.$name;
            }
            


            if ($this->Pieces->save($piece)) {
                $this->Flash->success(__('The piece has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The piece could not be saved. Please, try again.'));
        }
        $typepieces = $this->Pieces->Typepieces->find('list', ['limit' => 200]);
        $categories = $this->Pieces->Categories->find('list', ['limit' => 200]);
        $modeles = $this->Pieces->Modeles->find('list', ['limit' => 200]);
        $marques = $this->Pieces->Marques->find('list', ['limit' => 200]);
        $etats = $this->Pieces->Etats->find('list', ['limit' => 200]);
        $this->set(compact('piece', 'typepieces', 'categories', 'modeles', 'marques', 'etats'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Piece id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $piece = $this->Pieces->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $piece = $this->Pieces->patchEntity($piece, $this->request->getData());

            // Upload
            if(!$piece->getErrors){
                $photo = $this->request->getData('image_file');
                $name = $photo->getClientFilename();

                // Creer le dossier si inexistant
                if(!is_dir(WWW_ROOT.'img'.DS.'piece_img'))
                mkdir(WWW_ROOT.'img'.DS.'piece_img', 0775);

                $targetPath = WWW_ROOT.'img'.DS.'piece_img'.DS.$name;
                if($name)
                $photo->moveTo($targetPath);
                $piece->photo = 'piece_img/'.$name;
            }

            if ($this->Pieces->save($piece)) {
                $this->Flash->success(__('The piece has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The piece could not be saved. Please, try again.'));
        }
        $typepieces = $this->Pieces->Typepieces->find('list', ['limit' => 200]);
        $categories = $this->Pieces->Categories->find('list', ['limit' => 200]);
        $modeles = $this->Pieces->Modeles->find('list', ['limit' => 200]);
        $marques = $this->Pieces->Marques->find('list', ['limit' => 200]);
        $etats = $this->Pieces->Etats->find('list', ['limit' => 200]);
        $this->set(compact('piece', 'typepieces', 'categories', 'modeles', 'marques', 'etats'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Piece id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $piece = $this->Pieces->get($id);
        if ($this->Pieces->delete($piece)) {
            $this->Flash->success(__('The piece has been deleted.'));
        } else {
            $this->Flash->error(__('The piece could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
