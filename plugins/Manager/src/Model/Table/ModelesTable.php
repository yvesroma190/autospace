<?php
declare(strict_types=1);

namespace Manager\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Modeles Model
 *
 * @property \Manager\Model\Table\MarquesTable&\Cake\ORM\Association\BelongsTo $Marques
 * @property \Manager\Model\Table\PiecesTable&\Cake\ORM\Association\HasMany $Pieces
 * @property \Manager\Model\Table\VoituresTable&\Cake\ORM\Association\HasMany $Voitures
 *
 * @method \Manager\Model\Entity\Modele get($primaryKey, $options = [])
 * @method \Manager\Model\Entity\Modele newEntity($data = null, array $options = [])
 * @method \Manager\Model\Entity\Modele[] newEntities(array $data, array $options = [])
 * @method \Manager\Model\Entity\Modele|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Modele saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Modele patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Manager\Model\Entity\Modele[] patchEntities($entities, array $data, array $options = [])
 * @method \Manager\Model\Entity\Modele findOrCreate($search, callable $callback = null, $options = [])
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
            'className' => 'Manager.Marques',
        ]);
        $this->hasMany('Pieces', [
            'foreignKey' => 'modele_id',
            'className' => 'Manager.Pieces',
        ]);
        $this->hasMany('Voitures', [
            'foreignKey' => 'modele_id',
            'className' => 'Manager.Voitures',
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
