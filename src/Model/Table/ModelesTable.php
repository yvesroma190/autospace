<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Modeles Model
 *
 * @property \App\Model\Table\PiecesTable&\Cake\ORM\Association\HasMany $Pieces
 * @property \App\Model\Table\VoituresTable&\Cake\ORM\Association\HasMany $Voitures
 *
 * @method \App\Model\Entity\Modele get($primaryKey, $options = [])
 * @method \App\Model\Entity\Modele newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Modele[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Modele|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Modele saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Modele patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Modele[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Modele findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ModelesTable extends Table
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

        $this->setTable('modeles');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Marques', [
            'foreignKey' => 'marque_id',
        ]);
        $this->hasMany('Pieces', [
            'foreignKey' => 'modele_id',
        ]);
        $this->hasMany('Voitures', [
            'foreignKey' => 'modele_id',
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
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

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
        $rules->add($rules->existsIn(['marque_id'], 'Marques'));

        return $rules;
    }
}
