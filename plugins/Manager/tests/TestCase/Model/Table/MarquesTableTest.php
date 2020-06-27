<?php
declare(strict_types=1);

namespace Manager\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Manager\Model\Table\MarquesTable;

/**
 * Manager\Model\Table\MarquesTable Test Case
 */
class MarquesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Manager\Model\Table\MarquesTable
     */
    protected $Marques;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.Manager.Marques',
        'plugin.Manager.Pieces',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Marques') ? [] : ['className' => MarquesTable::class];
        $this->Marques = TableRegistry::getTableLocator()->get('Marques', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Marques);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
