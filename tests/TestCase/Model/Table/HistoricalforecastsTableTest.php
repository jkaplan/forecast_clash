<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistoricalforecastsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistoricalforecastsTable Test Case
 */
class HistoricalforecastsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HistoricalforecastsTable
     */
    public $Historicalforecasts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.historicalforecasts',
        'app.users',
        'app.social_profiles',
        'app.badges_users',
        'app.badges',
        'app.final_scores',
        'app.forecasts',
        'app.weather_events',
        'app.historical_forecasts',
        'app.profiles',
        'app.education_levels',
        'app.states',
        'app.states_users',
        'app.ages',
        'app.stats',
        'app.teams_users',
        'app.weekly_contest_forecasts',
        'app.weekly_scores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Historicalforecasts') ? [] : ['className' => 'App\Model\Table\HistoricalforecastsTable'];
        $this->Historicalforecasts = TableRegistry::get('Historicalforecasts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Historicalforecasts);

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
