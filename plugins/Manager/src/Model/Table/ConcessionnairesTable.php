<?php
declare(strict_types=1);

namespace Manager\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Concessionnaires Model
 *
 * @property \Manager\Model\Table\CountriesTable&\Cake\ORM\Association\BelongsTo $Countries
 * @property \Manager\Model\Table\VillesTable&\Cake\ORM\Association\BelongsTo $Villes
 * @property \Manager\Model\Table\VoituresTable&\Cake\ORM\Association\HasMany $Voitures
 *
 * @method \Manager\Model\Entity\Concessionnaire get($primaryKey, $options = [])
 * @method \Manager\Model\Entity\Concessionnaire newEntity($data = null, array $options = [])
 * @method \Manager\Model\Entity\Concessionnaire[] newEntities(array $data, array $options = [])
 * @method \Manager\Model\Entity\Concessionnaire|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Concessionnaire saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Concessionnaire patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Manager\Model\Entity\Concessionnaire[] patchEntities($entities, array $data, array $options = [])
 * @method \Manager\Model\Entity\Concessionnaire findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConcessionnairesTable extends Table
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

        $this->setTable('concessionnaires');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'className' => 'Manager.Countries',
        ]);
        $this->belongsTo('Villes', [
            'foreignKey' => 'ville_id',
            'className' => 'Manager.Villes',
        ]);
        $this->hasMany('Voitures', [
            'foreignKey' => 'concessionnaire_id',
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

        $validator
            ->scalar('bp')
            ->maxLength('bp', 45)
            ->allowEmptyString('bp');

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
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['ville_id'], 'Villes'));

        return $rules;
    }
}
