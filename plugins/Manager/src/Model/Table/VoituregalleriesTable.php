<?php
declare(strict_types=1);

namespace Manager\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Voituregalleries Model
 *
 * @property \Manager\Model\Table\VoituresTable&\Cake\ORM\Association\BelongsTo $Voitures
 *
 * @method \Manager\Model\Entity\Voituregallery get($primaryKey, $options = [])
 * @method \Manager\Model\Entity\Voituregallery newEntity($data = null, array $options = [])
 * @method \Manager\Model\Entity\Voituregallery[] newEntities(array $data, array $options = [])
 * @method \Manager\Model\Entity\Voituregallery|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Voituregallery saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Voituregallery patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Manager\Model\Entity\Voituregallery[] patchEntities($entities, array $data, array $options = [])
 * @method \Manager\Model\Entity\Voituregallery findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VoituregalleriesTable extends Table
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

        $this->setTable('voituregalleries');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Voitures', [
            'foreignKey' => 'voiture_id',
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
            ->scalar('photo')
            ->maxLength('photo', 45)
            ->allowEmptyString('photo');

        $validator
            ->scalar('path')
            ->maxLength('path', 45)
            ->allowEmptyString('path');


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
        $rules->add($rules->existsIn(['voiture_id'], 'Voitures'));

        return $rules;
    }
}
