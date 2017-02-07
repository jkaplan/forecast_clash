<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AgesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AgesController Test Case
 */
class AgesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ages',
        'app.profiles',
        'app.users',
        'app.social_profiles',
        'app.badges_users',
        'app.final_scores',
        'app.hail_forecasts',
        'app.historical_forecasts',
        'app.states_users',
        'app.stats',
        'app.teams_users',
        'app.tornado_forecasts',
        'app.weekly_contest_forecasts',
        'app.weekly_scores',
        'app.wind_forecasts',
        'app.education_levels',
        'app.states'
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
