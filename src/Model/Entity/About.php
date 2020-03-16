<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * About Entity
 *
 * @property int $id
 * @property string $description
 * @property string|null $image_name
 * @property string|null $image_path
 * @property string|null $video_name
 * @property string|null $video_path
 * @property string|null $subtexte_title
 * @property string|null $subtexte
 * @property string|null $subtext1
 * @property string|null $subtext_title1
 * @property string|null $subtext2
 * @property string|null $subtext_title2
 * @property string|null $subicone
 * @property int|null $valide
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class About extends Entity
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
        'description' => true,
        'image_name' => true,
        'image_path' => true,
        'video_name' => true,
        'video_path' => true,
        'subtexte_title' => true,
        'subtexte' => true,
        'subtext1' => true,
        'subtext_title1' => true,
        'subtext2' => true,
        'subtext_title2' => true,
        'subicone' => true,
        'valide' => true,
        'created' => true,
        'modified' => true,
    ];
}
