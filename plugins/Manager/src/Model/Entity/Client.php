<?php
declare(strict_types=1);

namespace Manager\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $tel
 * @property string|null $cel
 * @property string|null $email
 * @property string|null $adresse
 * @property string|null $ville_id
 * @property string|null $country_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \Manager\Model\Entity\Ville $ville
 * @property \Manager\Model\Entity\Country $country
 * @property \Manager\Model\Entity\Achat[] $achats
 * @property \Manager\Model\Entity\Commande[] $commandes
 */
class Client extends Entity
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
        'ville_id' => true,
        'country_id' => true,
        'created' => true,
        'modified' => true,
        'ville' => true,
        'country' => true,
        'achats' => true,
        'commandes' => true,
    ];
}
