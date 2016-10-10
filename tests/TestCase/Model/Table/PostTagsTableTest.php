<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PostTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PostTagsTable Test Case
 */
class PostTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PostTagsTable
     */
    public $PostTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.post_tags',
        'app.posts',
        'app.users',
        'app.permissions',
        'app.categories',
        'app.post_images',
        'app.tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PostTags') ? [] : ['className' => 'App\Model\Table\PostTagsTable'];
        $this->PostTags = TableRegistry::get('PostTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PostTags);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
