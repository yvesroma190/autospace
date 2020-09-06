<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fournisseur Entity
 *
 * @property int $id
 * @property string $name
 * @property string $tel
 * @property string $cel
 * @property string $email
 * @property string $bp
 * @property string $adresse
 * @property string $ville_id
 * @property string $country_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Ville $ville
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Piece[] $pieces
 */
class Fournisseur extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'tel' => true,
        'cel' => true,
        'email' => true,
        'bp' => true,
        'adresse' => true,
        'ville_id' => true,
        'country_id' => true,
        'created' => true,
        'modified' => true,
        'ville' => true,
        'country' => true,
        'pieces' => true,
    ];
}
