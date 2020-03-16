<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeamesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeamesTable Test Case
 */
class TeamesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TeamesTable
     */
    public $Teames;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Teames',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Teames') ? [] : ['className' => TeamesTable::class];
        $this->Teames = TableRegistry::getTableLocator()->get('Teames', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Teames);

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
