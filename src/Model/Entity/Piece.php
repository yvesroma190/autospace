<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Piece Entity
 *
 * @property int $id
 * @property string|null $photo
 * @property string|null $name
 * @property string|null $typepiece_id
 * @property string|null $category_id
 * @property string|null $modele_id
 * @property string|null $marque_id
 * @property float|null $prix
 * @property string|null $etat_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Typepiece $typepiece
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Modele $modele
 * @property \App\Model\Entity\Marque $marque
 * @property \App\Model\Entity\Etat $etat
 * @property \App\Model\Entity\Achat[] $achats
 * @property \App\Model\Entity\Piecegallery[] $piecegalleries
 */
class Piece extends Entity
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
        'name' => true,
        'typepiece_id' => true,
        'category_id' => true,
        'modele_id' => true,
        'marque_id' => true,
        'prix' => true,
        'etat_id' => true,
        'created' => true,
        'modified' => true,
        'typepiece' => true,
        'category' => true,
        'modele' => true,
        'marque' => true,
        'etat' => true,
        'achats' => true,
        'piecegalleries' => true,
    ];
}
