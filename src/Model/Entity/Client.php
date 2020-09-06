<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $tel
 * @property string|null $cel
 * @property string|null $email
 * @property string $password
 * @property string $bp
 * @property string|null $adresse
 * @property string|null $ville_id
 * @property string|null $country_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Ville $ville
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Achat[] $achats
 * @property \App\Model\Entity\Commande[] $commandes
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
        'password' => true,
        'bp' => true,
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
