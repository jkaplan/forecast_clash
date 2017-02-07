<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BadgesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BadgesTable Test Case
 */
class BadgesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BadgesTable
     */
    public $Badges;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.badges',
        'app.badges_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Badges') ? [] : ['className' => 'App\Model\Table\BadgesTable'];
        $this->Badges = TableRegistry::get('Badges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Badges);

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
