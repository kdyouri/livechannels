<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LiveChannelsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LiveChannelsTable Test Case
 */
class LiveChannelsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LiveChannelsTable
     */
    protected $LiveChannels;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LiveChannels',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LiveChannels') ? [] : ['className' => LiveChannelsTable::class];
        $this->LiveChannels = $this->getTableLocator()->get('LiveChannels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LiveChannels);

        parent::tearDown();
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
