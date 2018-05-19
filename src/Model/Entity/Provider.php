<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Provider Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $pref
 * @property string $addr_1
 * @property string $addr_2
 * @property string $tel
 * @property string $region
 * @property string $service_type
 * @property string $catchphrase
 * @property string $genre
 * @property string $profile1
 * @property string $profile2
 * @property string $profile3
 * @property string $profile4
 * @property string $example
 * @property string $image1
 * @property string $image2
 * @property string $image3
 * @property \Cake\I18n\Time $deleted
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\ProviderMessage[] $provider_messages
 * @property \App\Model\Entity\Quotation[] $quotations
 * @property \App\Model\Entity\UserMessage[] $user_messages
 */
class Provider extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
