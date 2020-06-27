<?php
declare(strict_types=1);

namespace Manager\Controller;

/**
 * Voituregalleries Controller
 *
 * @property \Manager\Model\Table\VoituregalleriesTable $Voituregalleries
 *
 * @method \Manager\Model\Entity\Voituregallery[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VoituregalleriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Voitures'],
        ];
        $voituregalleries = $this->paginate($this->Voituregalleries);

        $this->set(compact('voituregalleries'));
    }

    /**
     * View method
     *
     * @param string|null $id Voituregallery id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $voituregallery = $this->Voituregalleries->get($id, [
            'contain' => ['Voitures'],
        ]);

        $this->set('voituregallery', $voituregallery);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $voituregallery = $this->Voituregalleries->newEmptyEntity();
        if ($this->request->is('post')) {
            $voituregallery = $this->Voituregalleries->patchEntity($voituregallery, $this->request->getData());

            //Reccuperation de l'ID de la voiture associé à l'image ajoutée
            $this->loadModel('Voitures');
            $voiture = $this->Voitures->get($id);
            $voituregallery->voiture_id =  $voiture->id;

            // Upload image
            if(!$voituregallery->getErrors){
                $photo = $this->request->getData('image_file');
                $name = $photo->getClientFilename();

                // Creer le dossier si inexistant
                if(!is_dir(WWW_ROOT.'img'.DS.'voiture_img'))
                mkdir(WWW_ROOT.'img'.DS.'voiture_img', 0775);

                $targetPath = WWW_ROOT.'img'.DS.'voiture_img'.DS.$name;
                if($name)
                $photo->moveTo($targetPath);
                $voituregallery->photo = 'voiture_img/'.$name;
            }


            if ($this->Voituregalleries->save($voituregallery)) {
                $this->Flash->success(__('The voituregallery has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('The voituregallery could not be saved. Please, try again.'));
        }
        $voitures = $this->Voituregalleries->Voitures->find('list', ['limit' => 200]);
        $this->set(compact('voituregallery', 'voitures'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Voituregallery id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $voituregallery = $this->Voituregalleries->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $voituregallery = $this->Voituregalleries->patchEntity($voituregallery, $this->request->getData());

            // Upload
            if(!$voituregallery->getErrors){
                $photo = $this->request->getData('image_file');
                $name = $photo->getClientFilename();

                // Creer le dossier si inexistant
                if(!is_dir(WWW_ROOT.'img'.DS.'voiture_img'))
                mkdir(WWW_ROOT.'img'.DS.'voiture_img', 0775);

                $targetPath = WWW_ROOT.'img'.DS.'voiture_img'.DS.$name;
                if($name)
                $photo->moveTo($targetPath);
                $voituregallery->photo = 'voiture_img/'.$name;
            }



            if ($this->Voituregalleries->save($voituregallery)) {
                $this->Flash->success(__('The voituregallery has been saved.'));

                return $this->redirect(['controller' => 'Voitures', 'action' => 'index']);
            }
            $this->Flash->error(__('The voituregallery could not be saved. Please, try again.'));
        }
        $voitures = $this->Voituregalleries->Voitures->find('list', ['limit' => 200]);
        $this->set(compact('voituregallery', 'voitures'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Voituregallery id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $voituregallery = $this->Voituregalleries->get($id);
        if ($this->Voituregalleries->delete($voituregallery)) {
            $this->Flash->success(__('The voituregallery has been deleted.'));
        } else {
            $this->Flash->error(__('The voituregallery could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
