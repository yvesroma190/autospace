<?php
declare(strict_types=1);

namespace Manager\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Piecegalleries Model
 *
 * @property \Manager\Model\Table\PiecesTable&\Cake\ORM\Association\BelongsTo $Pieces
 *
 * @method \Manager\Model\Entity\Piecegallery get($primaryKey, $options = [])
 * @method \Manager\Model\Entity\Piecegallery newEntity($data = null, array $options = [])
 * @method \Manager\Model\Entity\Piecegallery[] newEntities(array $data, array $options = [])
 * @method \Manager\Model\Entity\Piecegallery|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Piecegallery saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Piecegallery patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Manager\Model\Entity\Piecegallery[] patchEntities($entities, array $data, array $options = [])
 * @method \Manager\Model\Entity\Piecegallery findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PiecegalleriesTable extends Table
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

        $this->setTable('piecegalleries');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Pieces', [
            'foreignKey' => 'piece_id',
            'className' => 'Manager.Pieces',
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
            ->scalar('path')
            ->maxLength('path', 45)
            ->allowEmptyString('path');

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
        $rules->add($rules->existsIn(['piece_id'], 'Pieces'));

        return $rules;
    }
}
