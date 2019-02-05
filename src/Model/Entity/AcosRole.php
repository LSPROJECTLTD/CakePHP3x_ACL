<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Acosrole Entity
 *
 * @property int $id
 * @property int $aco_id
 * @property int $role_id
 * @property string $allowed
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Aco $aco
 * @property \App\Model\Entity\Role $role
 */
class Acosrole extends Entity
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
        'aco_id' => true,
        'role_id' => true,
        'allowed' => true,
        'created' => true,
        'modified' => true,
        'aco' => true,
        'role' => true
    ];
}
