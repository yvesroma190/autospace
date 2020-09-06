<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FournisseursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FournisseursTable Test Case
 */
class FournisseursTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FournisseursTable
     */
    protected $Fournisseurs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Fournisseurs',
        'app.Villes',
        'app.Countries',
        'app.Pieces',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fournisseurs') ? [] : ['className' => FournisseursTable::class];
        $this->Fournisseurs = TableRegistry::getTableLocator()->get('Fournisseurs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Fournisseurs);

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
