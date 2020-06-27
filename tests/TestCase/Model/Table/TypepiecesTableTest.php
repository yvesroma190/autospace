<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypepiecesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypepiecesTable Test Case
 */
class TypepiecesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypepiecesTable
     */
    protected $Typepieces;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Typepieces',
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
        $config = TableRegistry::getTableLocator()->exists('Typepieces') ? [] : ['className' => TypepiecesTable::class];
        $this->Typepieces = TableRegistry::getTableLocator()->get('Typepieces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Typepieces);

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
}
