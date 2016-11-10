<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PostulerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PostulerTable Test Case
 */
class PostulerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PostulerTable
     */
    public $Postuler;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.postuler',
        'app.users',
        'app.offresemplois',
        'app.files'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Postuler') ? [] : ['className' => 'App\Model\Table\PostulerTable'];
        $this->Postuler = TableRegistry::get('Postuler', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Postuler);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
