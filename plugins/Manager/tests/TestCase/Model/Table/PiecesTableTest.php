<?php
declare(strict_types=1);

namespace Manager\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Manager\Model\Table\PiecesTable;

/**
 * Manager\Model\Table\PiecesTable Test Case
 */
class PiecesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Manager\Model\Table\PiecesTable
     */
    protected $Pieces;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.Manager.Pieces',
        'plugin.Manager.Typepieces',
        'plugin.Manager.Categories',
        'plugin.Manager.Modeles',
        'plugin.Manager.Marques',
        'plugin.Manager.Etats',
        'plugin.Manager.Achats',
        'plugin.Manager.Piecegalleries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pieces') ? [] : ['className' => PiecesTable::class];
        $this->Pieces = TableRegistry::getTableLocator()->get('Pieces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Pieces);

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
