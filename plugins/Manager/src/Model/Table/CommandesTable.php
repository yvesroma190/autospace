<?php
declare(strict_types=1);

namespace Manager\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Commandes Model
 *
 * @property \Manager\Model\Table\VoituresTable&\Cake\ORM\Association\BelongsTo $Voitures
 * @property \Manager\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 *
 * @method \Manager\Model\Entity\Commande get($primaryKey, $options = [])
 * @method \Manager\Model\Entity\Commande newEntity($data = null, array $options = [])
 * @method \Manager\Model\Entity\Commande[] newEntities(array $data, array $options = [])
 * @method \Manager\Model\Entity\Commande|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Commande saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Commande patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Manager\Model\Entity\Commande[] patchEntities($entities, array $data, array $options = [])
 * @method \Manager\Model\Entity\Commande findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CommandesTable extends Table
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

        $this->setTable('commandes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Voitures', [
            'foreignKey' => 'voiture_id',
            'className' => 'Manager.Voitures',
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'className' => 'Manager.Clients',
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
            ->dateTime('date')
            ->allowEmptyDateTime('date');

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
        $rules->add($rules->existsIn(['voiture_id'], 'Voitures'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }
}
