<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuoteRequestDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuoteRequestDetailsTable Test Case
 */
class QuoteRequestDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuoteRequestDetailsTable
     */
    public $QuoteRequestDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.quote_request_details',
        'app.users',
        'app.quote_requests',
        'app.provider_messages',
        'app.quotations',
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
        $config = TableRegistry::exists('QuoteRequestDetails') ? [] : ['className' => 'App\Model\Table\QuoteRequestDetailsTable'];
        $this->QuoteRequestDetails = TableRegistry::get('QuoteRequestDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QuoteRequestDetails);

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
