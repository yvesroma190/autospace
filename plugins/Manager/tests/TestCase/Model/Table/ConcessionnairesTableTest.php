<?php
declare(strict_types=1);

namespace Manager\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Manager\Model\Table\ConcessionnairesTable;

/**
 * Manager\Model\Table\ConcessionnairesTable Test Case
 */
class ConcessionnairesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Manager\Model\Table\ConcessionnairesTable
     */
    protected $Concessionnaires;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.Manager.Concessionnaires',
        'plugin.Manager.Countries',
        'plugin.Manager.Villes',
        'plugin.Manager.Voitures',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Concessionnaires') ? [] : ['className' => ConcessionnairesTable::class];
        $this->Concessionnaires = TableRegistry::getTableLocator()->get('Concessionnaires', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Concessionnaires);

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
