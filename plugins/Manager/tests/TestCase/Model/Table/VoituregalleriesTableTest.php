<?php
declare(strict_types=1);

namespace Manager\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Manager\Model\Table\VoituregalleriesTable;

/**
 * Manager\Model\Table\VoituregalleriesTable Test Case
 */
class VoituregalleriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Manager\Model\Table\VoituregalleriesTable
     */
    protected $Voituregalleries;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.Manager.Voituregalleries',
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
        $config = TableRegistry::getTableLocator()->exists('Voituregalleries') ? [] : ['className' => VoituregalleriesTable::class];
        $this->Voituregalleries = TableRegistry::getTableLocator()->get('Voituregalleries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Voituregalleries);

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
