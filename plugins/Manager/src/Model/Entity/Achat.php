<?php
declare(strict_types=1);

namespace Manager\Model\Entity;

use Cake\ORM\Entity;

/**
 * Achat Entity
 *
 * @property int $id
 * @property string|null $client_id
 * @property string|null $piece_id
 * @property \Cake\I18n\FrozenTime|null $date
 * @property int|null $qte
 * @property float|null $pt
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \Manager\Model\Entity\Client $client
 * @property \Manager\Model\Entity\Piece $piece
 */
class Achat extends Entity
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
        'client_id' => true,
        'piece_id' => true,
        'date' => true,
        'qte' => true,
        'pt' => true,
        'created' => true,
        'modified' => true,
        'client' => true,
        'piece' => true,
    ];
}
