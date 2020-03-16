<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property string|null $localisation
 * @property string $email1
 * @property string|null $email2
 * @property string $contact1
 * @property string|null $contact2
 * @property int $valide
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Contact extends Entity
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
        'localisation' => true,
        'email1' => true,
        'email2' => true,
        'contact1' => true,
        'contact2' => true,
        'valide' => true,
        'created' => true,
        'modified' => true,
    ];
}
