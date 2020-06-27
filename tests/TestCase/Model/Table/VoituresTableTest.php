<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VoituresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VoituresTable Test Case
 */
class VoituresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VoituresTable
     */
    protected $Voitures;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Voitures',
        'app.Categories',
        'app.Marques',
        'app.Modeles',
        'app.Modes',
        'app.Etats',
        'app.Carburants',
        'app.Concessionnaires',
        'app.Commandes',
        'app.Voituregalleries',
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
