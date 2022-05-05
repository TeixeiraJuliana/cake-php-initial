<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CommentsPostsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CommentsPostsTable Test Case
 */
class CommentsPostsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CommentsPostsTable
     */
    public $CommentsPosts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CommentsPosts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CommentsPosts') ? [] : ['className' => CommentsPostsTable::class];
        $this->CommentsPosts = TableRegistry::getTableLocator()->get('CommentsPosts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CommentsPosts);

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
