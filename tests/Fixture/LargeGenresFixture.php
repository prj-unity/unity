<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LargeGenresFixture
 *
 */
class LargeGenresFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '大ジャンルID', 'autoIncrement' => true, 'precision' => null],
        'large_genre_name' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '大ジャンル名', 'precision' => null, 'fixed' => null],
        'deleted' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '削除フラグ', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '作成日時', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '更新日時', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'large_genre_name' => 'Lorem ipsum dolor ',
            'deleted' => '2018-05-19 06:41:52',
            'created' => '2018-05-19 06:41:52',
            'modified' => '2018-05-19 06:41:52'
        ],
    ];
}
