<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdmineventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdmineventsTable Test Case
 */
class AdmineventsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdmineventsTable
     */
    public $Adminevents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.adminevents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Adminevents') ? [] : ['className' => 'App\Model\Table\AdmineventsTable'];
        $this->Adminevents = TableRegistry::get('Adminevents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Adminevents);

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
