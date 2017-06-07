<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quotation Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $provider_id
 * @property int $quote_request_id
 * @property string $contents
 * @property bool $deleted
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Provider $provider
 * @property \App\Model\Entity\QuoteRequest $quote_request
 */
class Quotation extends Entity
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
