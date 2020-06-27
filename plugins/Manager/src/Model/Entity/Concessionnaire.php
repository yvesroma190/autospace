<?php
declare(strict_types=1);

namespace Manager\Model\Entity;

use Cake\ORM\Entity;

/**
 * Concessionnaire Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $tel
 * @property string|null $cel
 * @property string|null $email
 * @property string|null $adresse
 * @property string|null $bp
 * @property string|null $country_id
 * @property string|null $ville_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \Manager\Model\Entity\Country $country
 * @property \Manager\Model\Entity\Ville $ville
 * @property \Manager\Model\Entity\Voiture[] $voitures
 */
class Concessionnaire extends Entity
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
        'adresse' => true,
        'bp' => true,
        'country_id' => true,
        'ville_id' => true,
        'created' => true,
        'modified' => true,
        'country' => true,
        'ville' => true,
        'voitures' => true,
    ];
}
