<?php
declare(strict_types=1);

namespace Manager\Model\Entity;

use Cake\ORM\Entity;

/**
 * Voiture Entity
 *
 * @property int $id
 * @property string|null $photo
 * @property string|null $category_id
 * @property string|null $marque_id
 * @property string|null $modele_id
 * @property string|null $mode_id
 * @property string|null $etat_id
 * @property string|null $name
 * @property string|null $immatriculation
 * @property string|null $carburant_id
 * @property string|null $vitesse
 * @property string|null $kilometrage
 * @property string|null $annee
 * @property string|null $detail
 * @property string|null $concessionnaire_id
 * @property float|null $prix
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \Manager\Model\Entity\Category $category
 * @property \Manager\Model\Entity\Marque $marque
 * @property \Manager\Model\Entity\Modele $modele
 * @property \Manager\Model\Entity\Mode $mode
 * @property \Manager\Model\Entity\Etat $etat
 * @property \Manager\Model\Entity\Carburant $carburant
 * @property \Manager\Model\Entity\Concessionnaire $concessionnaire
 * @property \Manager\Model\Entity\Commande[] $commandes
 * @property \Manager\Model\Entity\Voituregallery[] $voituregalleries
 */
class Voiture extends Entity
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
        'photo' => true,
        'category_id' => true,
        'marque_id' => true,
        'modele_id' => true,
        'mode_id' => true,
        'etat_id' => true,
        'name' => true,
        'immatriculation' => true,
        'carburant_id' => true,
        'vitesse' => true,
        'kilometrage' => true,
        'annee' => true,
        'detail' => true,
        'concessionnaire_id' => true,
        'prix' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'marque' => true,
        'modele' => true,
        'mode' => true,
        'etat' => true,
        'carburant' => true,
        'concessionnaire' => true,
        'commandes' => true,
        'voituregalleries' => true,
    ];
}
