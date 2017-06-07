<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProviderMessagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProviderMessagesTable Test Case
 */
class ProviderMessagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProviderMessagesTable
     */
    public $ProviderMessages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.provider_messages',
        'app.users',
        'app.providers',
        'app.quotations',
        'app.quote_requests',
        'app.quote_request_details',
        'app.user_messages',
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
        $config = TableRegistry::exists('ProviderMessages') ? [] : ['className' => 'App\Model\Table\ProviderMessagesTable'];
        $this->ProviderMessages = TableRegistry::get('ProviderMessages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProviderMessages);

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
