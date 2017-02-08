<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Badge Entity
 *
 * @property int $id
 * @property string $badge_name
 * @property string $badge_desc
 * @property string $badge_img
 *
 * @property \App\Model\Entity\BadgesUser[] $badges_users
 */
class Badge extends Entity
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
