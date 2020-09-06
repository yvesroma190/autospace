<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
/**
 * Voitures Controller
 *
 * @property \App\Model\Table\VoituresTable $Voitures
 *
 * @method \App\Model\Entity\Voiture[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VoituresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories', 'Marques', 'Modeles', 'Modes', 'Etats', 'Carburants', 'Concessionnaires'],
        ];
        $voitures = $this->paginate($this->Voitures);

        $this->set(compact('voitures'));
    }

    /**
     * View method
     *
     * @param string|null $id Voiture id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $voiture = $this->Voitures->get($id, [
            'contain' => ['Categories', 'Marques', 'Modeles', 'Modes', 'Etats', 'Carburants', 'Concessionnaires', 'Commandes', 'Voituregalleries'],
        ]);

        $this->set('voiture', $voiture);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $voiture = $this->Voitures->newEmptyEntity();
        if ($this->request->is('post')) {
            $voiture = $this->Voitures->patchEntity($voiture, $this->request->getData());
			
			// Upload image
            if(!$voiture->getErrors){
                $photo = $this->request->getData('image_file');
                $name = $photo->getClientFilename();

                // Creer le dossier si inexistant
                if(!is_dir(WWW_ROOT.'img'.DS.'voiture_img'))
                mkdir(WWW_ROOT.'img'.DS.'voiture_img', 0775);

                $targetPath = WWW_ROOT.'img'.DS.'voiture_img'.DS.$name;
                if($name)
                $photo->moveTo($targetPath);
                $voiture->photo = 'voiture_img/'.$name;
            }			
			
            if ($this->Voitures->save($voiture)) {
                $this->Flash->success(__('Succès.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Echec.'));
        }
        $categories = $this->Voitures->Categories->find('list', ['limit' => 200]);
        $marques = $this->Voitures->Marques->find('list', ['limit' => 200]);
        $modeles = $this->Voitures->Modeles->find('list', ['limit' => 200]);
        $modes = $this->Voitures->Modes->find('list', ['limit' => 200]);
        $etats = $this->Voitures->Etats->find('list', ['limit' => 200]);
        $carburants = $this->Voitures->Carburants->find('list', ['limit' => 200]);
        $concessionnaires = $this->Voitures->Concessionnaires->find('list', ['limit' => 200]);
        $this->set(compact('voiture', 'categories', 'marques', 'modeles', 'modes', 'etats', 'carburants', 'concessionnaires'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Voiture id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $voiture = $this->Voitures->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $voiture = $this->Voitures->patchEntity($voiture, $this->request->getData());
			
			// Upload image
            if(!$voiture->getErrors){
                $photo = $this->request->getData('image_file');
                $name = $photo->getClientFilename();

                // Creer le dossier si inexistant
                if(!is_dir(WWW_ROOT.'img'.DS.'voiture_img'))
                mkdir(WWW_ROOT.'img'.DS.'voiture_img', 0775);

                $targetPath = WWW_ROOT.'img'.DS.'voiture_img'.DS.$name;
                if($name)
                $photo->moveTo($targetPath);
                $voiture->photo = 'voiture_img/'.$name;
            }		
			
			
            if ($this->Voitures->save($voiture)) {
                $this->Flash->success(__('The voiture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The voiture could not be saved. Please, try again.'));
        }
        $categories = $this->Voitures->Categories->find('list', ['limit' => 200]);
        $marques = $this->Voitures->Marques->find('list', ['limit' => 200]);
        $modeles = $this->Voitures->Modeles->find('list', ['limit' => 200]);
        $modes = $this->Voitures->Modes->find('list', ['limit' => 200]);
        $etats = $this->Voitures->Etats->find('list', ['limit' => 200]);
        $carburants = $this->Voitures->Carburants->find('list', ['limit' => 200]);
        $concessionnaires = $this->Voitures->Concessionnaires->find('list', ['limit' => 200]);
        $this->set(compact('voiture', 'categories', 'marques', 'modeles', 'modes', 'etats', 'carburants', 'concessionnaires'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Voiture id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $voiture = $this->Voitures->get($id);
        if ($this->Voitures->delete($voiture)) {
            $this->Flash->success(__('The voiture has been deleted.'));
        } else {
            $this->Flash->error(__('The voiture could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
