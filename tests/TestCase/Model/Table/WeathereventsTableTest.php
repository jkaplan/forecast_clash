<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WeathereventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WeathereventsTable Test Case
 */
class WeathereventsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WeathereventsTable
     */
    public $Weatherevents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.weatherevents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Weatherevents') ? [] : ['className' => 'App\Model\Table\WeathereventsTable'];
        $this->Weatherevents = TableRegistry::get('Weatherevents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Weatherevents);

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
