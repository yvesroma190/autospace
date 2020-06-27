<?php
declare(strict_types=1);

namespace Manager\Model\Entity;

use Cake\ORM\Entity;

/**
 * Modele Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $marque_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \Manager\Model\Entity\Marque $marque
 * @property \Manager\Model\Entity\Piece[] $pieces
 * @property \Manager\Model\Entity\Voiture[] $voitures
 */
class Modele extends Entity
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
        'marque_id' => true,
        'created' => true,
        'modified' => true,
        'marque' => true,
        'pieces' => true,
        'voitures' => true,
    ];
}
