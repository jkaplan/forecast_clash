<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AvatarsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AvatarsController Test Case
 */
class AvatarsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.avatars',
        'app.users',
        'app.social_profiles',
        'app.badges_users',
        'app.final_scores',
        'app.hail_forecasts',
        'app.historical_forecasts',
        'app.profiles',
        'app.education_levels',
        'app.states',
        'app.states_users',
        'app.ages',
        'app.stats',
        'app.teams_users',
        'app.tornado_forecasts',
        'app.weekly_contest_forecasts',
        'app.weekly_scores',
        'app.wind_forecasts'
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
