<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ForecastsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ForecastsController Test Case
 */
class ForecastsControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
