<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Slide Entity
 *
 * @property int $id
 * @property string|null $image_name
 * @property string $image_path
 * @property string $description_texte
 * @property int $valide
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $created
 */
class Slide extends Entity
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
        'image_name' => true,
        'image_path' => true,
        'description_texte' => true,
        'valide' => true,
        'modified' => true,
        'created' => true,
    ];
}
