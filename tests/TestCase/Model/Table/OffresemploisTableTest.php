<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OffresemploisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OffresemploisTable Test Case
 */
class OffresemploisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OffresemploisTable
     */
    public $Offresemplois;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.offresemplois',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Offresemplois') ? [] : ['className' => 'App\Model\Table\OffresemploisTable'];
        $this->Offresemplois = TableRegistry::get('Offresemplois', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Offresemplois);

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
}
