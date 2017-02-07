<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SocialProfile Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $provider
 * @property string $identifier
 * @property string $profile_url
 * @property string $website_url
 * @property string $photo_url
 * @property string $display_name
 * @property string $description
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $language
 * @property string $age
 * @property string $birth_day
 * @property string $birth_month
 * @property string $birth_year
 * @property string $email
 * @property string $email_verified
 * @property string $phone
 * @property string $address
 * @property string $country
 * @property string $region
 * @property string $city
 * @property string $zip
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\User $user
 */
class SocialProfile extends Entity
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
