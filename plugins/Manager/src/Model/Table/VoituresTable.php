<?php
declare(strict_types=1);

namespace Manager\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Voitures Model
 *
 * @property \Manager\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 * @property \Manager\Model\Table\MarquesTable&\Cake\ORM\Association\BelongsTo $Marques
 * @property \Manager\Model\Table\ModelesTable&\Cake\ORM\Association\BelongsTo $Modeles
 * @property \Manager\Model\Table\ModesTable&\Cake\ORM\Association\BelongsTo $Modes
 * @property \Manager\Model\Table\EtatsTable&\Cake\ORM\Association\BelongsTo $Etats
 * @property \Manager\Model\Table\CarburantsTable&\Cake\ORM\Association\BelongsTo $Carburants
 * @property \Manager\Model\Table\ConcessionnairesTable&\Cake\ORM\Association\BelongsTo $Concessionnaires
 * @property \Manager\Model\Table\CommandesTable&\Cake\ORM\Association\HasMany $Commandes
 * @property \Manager\Model\Table\VoituregalleriesTable&\Cake\ORM\Association\HasMany $Voituregalleries
 *
 * @method \Manager\Model\Entity\Voiture get($primaryKey, $options = [])
 * @method \Manager\Model\Entity\Voiture newEntity($data = null, array $options = [])
 * @method \Manager\Model\Entity\Voiture[] newEntities(array $data, array $options = [])
 * @method \Manager\Model\Entity\Voiture|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Voiture saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Voiture patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Manager\Model\Entity\Voiture[] patchEntities($entities, array $data, array $options = [])
 * @method \Manager\Model\Entity\Voiture findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VoituresTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('voitures');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'className' => 'Manager.Categories',
        ]);
        $this->belongsTo('Marques', [
            'foreignKey' => 'marque_id',
            'className' => 'Manager.Marques',
        ]);
        $this->belongsTo('Modeles', [
            'foreignKey' => 'modele_id',
            'className' => 'Manager.Modeles',
        ]);
        $this->belongsTo('Modes', [
            'foreignKey' => 'mode_id',
            'className' => 'Manager.Modes',
        ]);
        $this->belongsTo('Etats', [
            'foreignKey' => 'etat_id',
            'className' => 'Manager.Etats',
        ]);
        $this->belongsTo('Carburants', [
            'foreignKey' => 'carburant_id',
            'className' => 'Manager.Carburants',
        ]);
        $this->belongsTo('Concessionnaires', [
            'foreignKey' => 'concessionnaire_id',
            'className' => 'Manager.Concessionnaires',
        ]);
        $this->hasMany('Commandes', [
            'foreignKey' => 'voiture_id',
            'className' => 'Manager.Commandes',
        ]);
        $this->hasMany('Voituregalleries', [
            'foreignKey' => 'voiture_id',
            'className' => 'Manager.Voituregalleries',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('photo')
            ->maxLength('photo', 45)
            ->allowEmptyString('photo');

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        $validator
            ->scalar('immatriculation')
            ->maxLength('immatriculation', 45)
            ->allowEmptyString('immatriculation');

        $validator
            ->scalar('vitesse')
            ->maxLength('vitesse', 45)
            ->allowEmptyString('vitesse');

        $validator
            ->scalar('kilometrage')
            ->maxLength('kilometrage', 45)
            ->allowEmptyString('kilometrage');

        $validator
            ->scalar('annee')
            ->maxLength('annee', 45)
            ->allowEmptyString('annee');

        $validator
            ->scalar('detail')
            ->maxLength('detail', 45)
            ->allowEmptyString('detail');

        $validator
            ->numeric('prix')
            ->allowEmptyString('prix');

            //Upload photo
        $validator
        ->allowEmptyFile('photo')
        ->add('photo', [
            'mimeType' => [
                'rule' => [ 'mimeType', [ 'photo/jpeg', 'photo/png', 'photo/jpg' ]],
                'message' => 'SVP, veuillez choisir une image de type jpeg, jpg ou png.',
                ],
            'fileSize' => [
                'rule' => [ 'fileSize', '<=', '1MB.' ],
                'message' => 'La taille de l\'image ne doit pas excéder 1MB.',
            ],
        ]);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['marque_id'], 'Marques'));
        $rules->add($rules->existsIn(['modele_id'], 'Modeles'));
        $rules->add($rules->existsIn(['mode_id'], 'Modes'));
        $rules->add($rules->existsIn(['etat_id'], 'Etats'));
        $rules->add($rules->existsIn(['carburant_id'], 'Carburants'));
        $rules->add($rules->existsIn(['concessionnaire_id'], 'Concessionnaires'));

        return $rules;
    }
}
