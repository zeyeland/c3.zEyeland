<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IslanderUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IslanderUsersTable Test Case
 */
class IslanderUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IslanderUsersTable
     */
    public $IslanderUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.islander_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('IslanderUsers') ? [] : ['className' => IslanderUsersTable::class];
        $this->IslanderUsers = TableRegistry::getTableLocator()->get('IslanderUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IslanderUsers);

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
