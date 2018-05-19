<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LargeGenre Entity
 *
 * @property int $id
 * @property string $large_genre_name
 * @property \Cake\I18n\Time $deleted
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\GenreProvider[] $genre_providers
 * @property \App\Model\Entity\Genre[] $genres
 */
class LargeGenre extends Entity
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
