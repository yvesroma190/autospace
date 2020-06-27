<?php
declare(strict_types=1);

namespace Manager\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;
use Manager\Controller\PiecesController;

/**
 * Manager\Controller\PiecesController Test Case
 *
 * @uses \Manager\Controller\PiecesController
 */
class PiecesControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
