<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Avatar Entity
 *
 * @property int $id
 * @property string $avatar_img
 *
 * @property \App\Model\Entity\User[] $users
 */
class Avatar extends Entity
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
        '*' => true,
        'id' => false
    ];
}
