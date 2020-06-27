<?php
declare(strict_types=1);

namespace Manager\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Manager\Model\Table\PiecegalleriesTable;

/**
 * Manager\Model\Table\PiecegalleriesTable Test Case
 */
class PiecegalleriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Manager\Model\Table\PiecegalleriesTable
     */
    protected $Piecegalleries;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.Manager.Piecegalleries',
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
        $config = TableRegistry::getTableLocator()->exists('Piecegalleries') ? [] : ['className' => PiecegalleriesTable::class];
        $this->Piecegalleries = TableRegistry::getTableLocator()->get('Piecegalleries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Piecegalleries);

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
