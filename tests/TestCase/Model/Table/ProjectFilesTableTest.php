<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectFilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectFilesTable Test Case
 */
class ProjectFilesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjectFilesTable
     */
    public $ProjectFiles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProjectFiles',
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
        $config = TableRegistry::getTableLocator()->exists('ProjectFiles') ? [] : ['className' => ProjectFilesTable::class];
        $this->ProjectFiles = TableRegistry::getTableLocator()->get('ProjectFiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjectFiles);

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
