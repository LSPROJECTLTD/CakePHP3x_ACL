<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PatrimoniosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PatrimoniosTable Test Case
 */
class PatrimoniosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PatrimoniosTable
     */
    public $Patrimonios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Patrimonios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Patrimonios') ? [] : ['className' => PatrimoniosTable::class];
        $this->Patrimonios = TableRegistry::getTableLocator()->get('Patrimonios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Patrimonios);

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
