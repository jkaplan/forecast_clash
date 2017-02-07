<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BadgesUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BadgesUsersTable Test Case
 */
class BadgesUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BadgesUsersTable
     */
    public $BadgesUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.badges_users',
        'app.users',
        'app.social_profiles',
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
        'app.wind_forecasts',
        'app.badges'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BadgesUsers') ? [] : ['className' => 'App\Model\Table\BadgesUsersTable'];
        $this->BadgesUsers = TableRegistry::get('BadgesUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BadgesUsers);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
