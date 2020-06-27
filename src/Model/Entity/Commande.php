<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Commande Entity
 *
 * @property int $id
 * @property string|null $voiture_id
 * @property string|null $client_id
 * @property \Cake\I18n\FrozenTime|null $date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Voiture $voiture
 * @property \App\Model\Entity\Client $client
 */
class Commande extends Entity
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
        'voiture_id' => true,
        'client_id' => true,
        'date' => true,
        'created' => true,
        'modified' => true,
        'voiture' => true,
        'client' => true,
    ];
}
