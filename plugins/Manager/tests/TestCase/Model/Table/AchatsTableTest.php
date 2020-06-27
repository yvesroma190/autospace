<?php
declare(strict_types=1);

namespace Manager\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Manager\Model\Table\AchatsTable;

/**
 * Manager\Model\Table\AchatsTable Test Case
 */
class AchatsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Manager\Model\Table\AchatsTable
     */
    protected $Achats;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.Manager.Achats',
        'plugin.Manager.Clients',
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
        $config = TableRegistry::getTableLocator()->exists('Achats') ? [] : ['className' => AchatsTable::class];
        $this->Achats = TableRegistry::getTableLocator()->get('Achats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Achats);

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
