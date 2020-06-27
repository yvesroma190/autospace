<?php
declare(strict_types=1);

namespace Manager\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Etats Model
 *
 * @property \Manager\Model\Table\PiecesTable&\Cake\ORM\Association\HasMany $Pieces
 * @property \Manager\Model\Table\VoituresTable&\Cake\ORM\Association\HasMany $Voitures
 *
 * @method \Manager\Model\Entity\Etat get($primaryKey, $options = [])
 * @method \Manager\Model\Entity\Etat newEntity($data = null, array $options = [])
 * @method \Manager\Model\Entity\Etat[] newEntities(array $data, array $options = [])
 * @method \Manager\Model\Entity\Etat|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Etat saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Etat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Manager\Model\Entity\Etat[] patchEntities($entities, array $data, array $options = [])
 * @method \Manager\Model\Entity\Etat findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EtatsTable extends Table
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

        $this->setTable('etats');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Pieces', [
            'foreignKey' => 'etat_id',
            'className' => 'Manager.Pieces',
        ]);
        $this->hasMany('Voitures', [
            'foreignKey' => 'etat_id',
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

        return $rules;
    }
}
