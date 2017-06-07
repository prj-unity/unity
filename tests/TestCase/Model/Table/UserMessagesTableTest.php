<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserMessagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserMessagesTable Test Case
 */
class UserMessagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserMessagesTable
     */
    public $UserMessages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_messages',
        'app.users',
        'app.providers',
        'app.provider_messages',
        'app.quotations',
        'app.quote_requests',
        'app.quote_request_details',
        'app.messages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserMessages') ? [] : ['className' => 'App\Model\Table\UserMessagesTable'];
        $this->UserMessages = TableRegistry::get('UserMessages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserMessages);

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
