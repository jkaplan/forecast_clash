<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profile Entity
 *
 * @property int $age_id
 * @property int $id
 * @property int $user_id
 * @property int $education_level_id
 * @property bool $gender
 * @property string $city
 * @property int $state_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\State $state
 */
class Profile extends Entity
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
