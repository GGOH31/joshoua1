<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $id
 * @property string $title
 * @property string $icon
 * @property string|null $description
 * @property int $valide
 * @property string|null $image_name
 * @property string|null $image_path
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Service extends Entity
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
        'title' => true,
        'icon' => true,
        'description' => true,
        'valide' => true,
        'image_name' => true,
        'image_path' => true,
        'created' => true,
        'modified' => true,
    ];
}
