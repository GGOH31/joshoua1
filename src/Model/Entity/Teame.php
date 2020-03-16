<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Teame Entity
 *
 * @property int $id
 * @property string $name
 * @property string $poste
 * @property string $avatare_name
 * @property string $avatare_path
 * @property int|null $valide
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $created
 */
class Teame extends Entity
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
        'poste' => true,
        'avatare_name' => true,
        'avatare_path' => true,
        'valide' => true,
        'modified' => true,
        'created' => true,
    ];
}
