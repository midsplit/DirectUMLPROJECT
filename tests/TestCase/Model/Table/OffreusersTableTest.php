<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OffreusersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OffreusersTable Test Case
 */
class OffreusersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OffreusersTable
     */
    public $Offreusers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.offreusers',
        'app.users',
        'app.files',
        'app.offresemplois'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Offreusers') ? [] : ['className' => 'App\Model\Table\OffreusersTable'];
        $this->Offreusers = TableRegistry::get('Offreusers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Offreusers);

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
