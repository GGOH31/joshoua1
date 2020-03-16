<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Portfolio Entity
 *
 * @property int $id
 * @property int $port_type_id
 * @property string|null $title
 * @property string $description
 * @property string|null $imagename
 * @property string|null $imagepath
 * @property int $valide
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\PortType $port_type
 */
class Portfolio extends Entity
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
        'title' => true,
        'description' => true,
        'imagename' => true,
        'imagepath' => true,
        'valide' => true,
        'created' => true,
        'modified' => true,
       
    ];
}
