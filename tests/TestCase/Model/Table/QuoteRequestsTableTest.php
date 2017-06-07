<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuoteRequestsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuoteRequestsTable Test Case
 */
class QuoteRequestsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuoteRequestsTable
     */
    public $QuoteRequests;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.quote_requests',
        'app.users',
        'app.provider_messages',
        'app.quotations',
        'app.quote_request_details',
        'app.user_messages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('QuoteRequests') ? [] : ['className' => 'App\Model\Table\QuoteRequestsTable'];
        $this->QuoteRequests = TableRegistry::get('QuoteRequests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QuoteRequests);

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
