<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GenreProvidersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GenreProvidersTable Test Case
 */
class GenreProvidersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GenreProvidersTable
     */
    public $GenreProviders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.genre_providers',
        'app.providers',
        'app.provider_messages',
        'app.users',
        'app.quote_requests',
        'app.quotations',
        'app.quote_request_details',
        'app.user_messages',
        'app.messages',
        'app.large_genres',
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
        $config = TableRegistry::exists('GenreProviders') ? [] : ['className' => 'App\Model\Table\GenreProvidersTable'];
        $this->GenreProviders = TableRegistry::get('GenreProviders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GenreProviders);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
