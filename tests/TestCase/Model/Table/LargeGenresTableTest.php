<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LargeGenresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LargeGenresTable Test Case
 */
class LargeGenresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LargeGenresTable
     */
    public $LargeGenres;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.large_genres',
        'app.genre_providers',
        'app.genres'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LargeGenres') ? [] : ['className' => 'App\Model\Table\LargeGenresTable'];
        $this->LargeGenres = TableRegistry::get('LargeGenres', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LargeGenres);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
