<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BooksTagsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BooksTagsTable Test Case
 */
class BooksTagsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BooksTagsTable
     */
    protected $BooksTags;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.BooksTags',
        'app.Books',
        'app.Tags',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BooksTags') ? [] : ['className' => BooksTagsTable::class];
        $this->BooksTags = $this->getTableLocator()->get('BooksTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BooksTags);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BooksTagsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
