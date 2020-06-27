<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Piecegallery Entity
 *
 * @property int $id
 * @property string|null $piece_id
 * @property string|null $photo
 * @property string|null $path
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Piece $piece
 */
class Piecegallery extends Entity
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
        'piece_id' => true,
        'photo' => true,
        'path' => true,
        'created' => true,
        'modified' => true,
        'piece' => true,
    ];
}
