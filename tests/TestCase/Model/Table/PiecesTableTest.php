<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PiecesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PiecesTable Test Case
 */
class PiecesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PiecesTable
     */
    protected $Pieces;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Pieces',
        'app.Typepieces',
        'app.Categories',
        'app.Modeles',
        'app.Marques',
        'app.Etats',
        'app.Fournisseurs',
        'app.Achats',
        'app.Piecegalleries',
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
