<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $id
 * @property int $service_id
 * @property string $name
 * @property string|null $image
 * @property string|null $url
 * @property string|null $description
 * @property int|null $lu
 * @property int|null $telecharger
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modifier
 */
class Article extends Entity
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
        'service_id' => true,
        'name' => true,
        'image' => true,
        'url' => true,
        'description' => true,
        'lu' => true,
        'imagepath'=>true,
        'telecharger' => true,
        'created' => true,
        'modifier' => true,
    ];
}
