<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocialProfilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocialProfilesTable Test Case
 */
class SocialProfilesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SocialProfilesTable
     */
    public $SocialProfiles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.social_profiles',
        'app.users',
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
        'app.wind_forecasts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SocialProfiles') ? [] : ['className' => 'App\Model\Table\SocialProfilesTable'];
        $this->SocialProfiles = TableRegistry::get('SocialProfiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SocialProfiles);

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
