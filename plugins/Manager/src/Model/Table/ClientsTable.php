<?php
declare(strict_types=1);

namespace Manager\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clients Model
 *
 * @property \Manager\Model\Table\VillesTable&\Cake\ORM\Association\BelongsTo $Villes
 * @property \Manager\Model\Table\CountriesTable&\Cake\ORM\Association\BelongsTo $Countries
 * @property \Manager\Model\Table\AchatsTable&\Cake\ORM\Association\HasMany $Achats
 * @property \Manager\Model\Table\CommandesTable&\Cake\ORM\Association\HasMany $Commandes
 *
 * @method \Manager\Model\Entity\Client get($primaryKey, $options = [])
 * @method \Manager\Model\Entity\Client newEntity($data = null, array $options = [])
 * @method \Manager\Model\Entity\Client[] newEntities(array $data, array $options = [])
 * @method \Manager\Model\Entity\Client|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Client saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Client patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Manager\Model\Entity\Client[] patchEntities($entities, array $data, array $options = [])
 * @method \Manager\Model\Entity\Client findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClientsTable extends Table
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

        $this->setTable('clients');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Villes', [
            'foreignKey' => 'ville_id',
            'className' => 'Manager.Villes',
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'className' => 'Manager.Countries',
        ]);
        $this->hasMany('Achats', [
            'foreignKey' => 'client_id',
            'className' => 'Manager.Achats',
        ]);
        $this->hasMany('Commandes', [
            'foreignKey' => 'client_id',
            'className' => 'Manager.Commandes',
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

        $validator
            ->scalar('tel')
            ->maxLength('tel', 45)
            ->allowEmptyString('tel');

        $validator
            ->scalar('cel')
            ->maxLength('cel', 45)
            ->allowEmptyString('cel');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 45)
            ->allowEmptyString('adresse');

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
        $rules->add($rules->existsIn(['ville_id'], 'Villes'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));

        return $rules;
    }
}
