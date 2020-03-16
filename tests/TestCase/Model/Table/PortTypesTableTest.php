<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PortTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PortTypesTable Test Case
 */
class PortTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PortTypesTable
     */
    public $PortTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PortTypes',
        'app.Portfolios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PortTypes') ? [] : ['className' => PortTypesTable::class];
        $this->PortTypes = TableRegistry::getTableLocator()->get('PortTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PortTypes);

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
