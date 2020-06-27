<?php
declare(strict_types=1);

namespace Manager\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pieces Model
 *
 * @property \Manager\Model\Table\TypepiecesTable&\Cake\ORM\Association\BelongsTo $Typepieces
 * @property \Manager\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 * @property \Manager\Model\Table\ModelesTable&\Cake\ORM\Association\BelongsTo $Modeles
 * @property \Manager\Model\Table\MarquesTable&\Cake\ORM\Association\BelongsTo $Marques
 * @property \Manager\Model\Table\EtatsTable&\Cake\ORM\Association\BelongsTo $Etats
 * @property \Manager\Model\Table\AchatsTable&\Cake\ORM\Association\HasMany $Achats
 * @property \Manager\Model\Table\PiecegalleriesTable&\Cake\ORM\Association\HasMany $Piecegalleries
 *
 * @method \Manager\Model\Entity\Piece get($primaryKey, $options = [])
 * @method \Manager\Model\Entity\Piece newEntity($data = null, array $options = [])
 * @method \Manager\Model\Entity\Piece[] newEntities(array $data, array $options = [])
 * @method \Manager\Model\Entity\Piece|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Piece saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Manager\Model\Entity\Piece patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Manager\Model\Entity\Piece[] patchEntities($entities, array $data, array $options = [])
 * @method \Manager\Model\Entity\Piece findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PiecesTable extends Table
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

        $this->setTable('pieces');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Typepieces', [
            'foreignKey' => 'typepiece_id',
            'className' => 'Manager.Typepieces',
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'className' => 'Manager.Categories',
        ]);
        $this->belongsTo('Modeles', [
            'foreignKey' => 'modele_id',
            'className' => 'Manager.Modeles',
        ]);
        $this->belongsTo('Marques', [
            'foreignKey' => 'marque_id',
            'className' => 'Manager.Marques',
        ]);
        $this->belongsTo('Etats', [
            'foreignKey' => 'etat_id',
            'className' => 'Manager.Etats',
        ]);
        $this->hasMany('Achats', [
            'foreignKey' => 'piece_id',
            'className' => 'Manager.Achats',
        ]);
        $this->hasMany('Piecegalleries', [
            'foreignKey' => 'piece_id',
            'className' => 'Manager.Piecegalleries',
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
        $rules->add($rules->existsIn(['typepiece_id'], 'Typepieces'));
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['modele_id'], 'Modeles'));
        $rules->add($rules->existsIn(['marque_id'], 'Marques'));
        $rules->add($rules->existsIn(['etat_id'], 'Etats'));

        return $rules;
    }
}
