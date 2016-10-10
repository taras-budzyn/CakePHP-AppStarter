<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PostImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PostImagesTable Test Case
 */
class PostImagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PostImagesTable
     */
    public $PostImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.post_images',
        'app.posts',
        'app.users',
        'app.permissions',
        'app.categories',
        'app.post_tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PostImages') ? [] : ['className' => 'App\Model\Table\PostImagesTable'];
        $this->PostImages = TableRegistry::get('PostImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PostImages);

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
