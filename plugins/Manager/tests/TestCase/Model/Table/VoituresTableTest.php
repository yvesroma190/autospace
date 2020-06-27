<?php
declare(strict_types=1);

namespace Manager\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Manager\Model\Table\VoituresTable;

/**
 * Manager\Model\Table\VoituresTable Test Case
 */
class VoituresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Manager\Model\Table\VoituresTable
     */
    protected $Voitures;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.Manager.Voitures',
        'plugin.Manager.Categories',
        'plugin.Manager.Marques',
        'plugin.Manager.Modeles',
        'plugin.Manager.Modes',
        'plugin.Manager.Etats',
        'plugin.Manager.Carburants',
        'plugin.Manager.Concessionnaires',
        'plugin.Manager.Commandes',
        'plugin.Manager.Voituregalleries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Voitures') ? [] : ['className' => VoituresTable::class];
        $this->Voitures = TableRegistry::getTableLocator()->get('Voitures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Voitures);

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
