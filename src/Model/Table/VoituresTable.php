<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Voitures Model
 *
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\MarquesTable&\Cake\ORM\Association\BelongsTo $Marques
 * @property \App\Model\Table\ModelesTable&\Cake\ORM\Association\BelongsTo $Modeles
 * @property \App\Model\Table\ModesTable&\Cake\ORM\Association\BelongsTo $Modes
 * @property \App\Model\Table\EtatsTable&\Cake\ORM\Association\BelongsTo $Etats
 * @property \App\Model\Table\CarburantsTable&\Cake\ORM\Association\BelongsTo $Carburants
 * @property \App\Model\Table\ConcessionnairesTable&\Cake\ORM\Association\BelongsTo $Concessionnaires
 * @property \App\Model\Table\CommandesTable&\Cake\ORM\Association\HasMany $Commandes
 * @property \App\Model\Table\VoituregalleriesTable&\Cake\ORM\Association\HasMany $Voituregalleries
 *
 * @method \App\Model\Entity\Voiture get($primaryKey, $options = [])
 * @method \App\Model\Entity\Voiture newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Voiture[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Voiture|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Voiture saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Voiture patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Voiture[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Voiture findOrCreate($search, callable $callback = null, $options = [])
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
        ]);
        $this->belongsTo('Marques', [
            'foreignKey' => 'marque_id',
        ]);
        $this->belongsTo('Modeles', [
            'foreignKey' => 'modele_id',
        ]);
        $this->belongsTo('Modes', [
            'foreignKey' => 'mode_id',
        ]);
        $this->belongsTo('Etats', [
            'foreignKey' => 'etat_id',
        ]);
        $this->belongsTo('Carburants', [
            'foreignKey' => 'carburant_id',
        ]);
        $this->belongsTo('Concessionnaires', [
            'foreignKey' => 'concessionnaire_id',
        ]);
        $this->hasMany('Commandes', [
            'foreignKey' => 'voiture_id',
        ]);
        $this->hasMany('Voituregalleries', [
            'foreignKey' => 'voiture_id',
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
