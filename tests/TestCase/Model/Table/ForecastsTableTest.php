<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ForecastsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ForecastsTable Test Case
 */
class ForecastsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ForecastsTable
     */
    public $Forecasts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.forecasts',
        'app.users',
        'app.social_profiles',
        'app.badges_users',
        'app.badges',
        'app.final_scores',
        'app.historical_forecasts',
        'app.profiles',
        'app.education_levels',
        'app.states',
        'app.states_users',
        'app.ages',
        'app.stats',
        'app.teams_users',
        'app.weekly_contest_forecasts',
        'app.weekly_scores',
        'app.weather_events'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Forecasts') ? [] : ['className' => 'App\Model\Table\ForecastsTable'];
        $this->Forecasts = TableRegistry::get('Forecasts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Forecasts);

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
