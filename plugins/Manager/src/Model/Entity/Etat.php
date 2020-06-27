<?php
declare(strict_types=1);

namespace Manager\Model\Entity;

use Cake\ORM\Entity;

/**
 * Etat Entity
 *
 * @property int $id
 * @property string|null $name
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \Manager\Model\Entity\Piece[] $pieces
 * @property \Manager\Model\Entity\Voiture[] $voitures
 */
class Etat extends Entity
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
        'created' => true,
        'modified' => true,
        'pieces' => true,
        'voitures' => true,
    ];
}
