<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EducationlevelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EducationlevelsTable Test Case
 */
class EducationlevelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EducationlevelsTable
     */
    public $Educationlevels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.educationlevels'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Educationlevels') ? [] : ['className' => 'App\Model\Table\EducationlevelsTable'];
        $this->Educationlevels = TableRegistry::get('Educationlevels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Educationlevels);

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
