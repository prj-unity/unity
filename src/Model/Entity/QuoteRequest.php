<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * QuoteRequest Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $genre
 * @property string $name
 * @property \Cake\I18n\Time $reply_deadline
 * @property \Cake\I18n\Time $delivery_date
 * @property int $budget
 * @property string $contents
 * @property bool $deleted
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\ProviderMessage[] $provider_messages
 * @property \App\Model\Entity\Quotation[] $quotations
 * @property \App\Model\Entity\QuoteRequestDetail[] $quote_request_details
 * @property \App\Model\Entity\UserMessage[] $user_messages
 */
class QuoteRequest extends Entity
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
