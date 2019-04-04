<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectFileTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectFileTable Test Case
 */
class ProjectFileTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjectFileTable
     */
    public $ProjectFile;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProjectFile',
        'app.Projects'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProjectFile') ? [] : ['className' => ProjectFileTable::class];
        $this->ProjectFile = TableRegistry::getTableLocator()->get('ProjectFile', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjectFile);

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
