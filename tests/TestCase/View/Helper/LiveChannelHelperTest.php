<?php
declare(strict_types=1);

namespace App\Test\TestCase\View\Helper;

use App\View\Helper\LiveChannelHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\LiveChannelHelper Test Case
 */
class LiveChannelHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\View\Helper\LiveChannelHelper
     */
    protected $LiveChannel;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->LiveChannel = new LiveChannelHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LiveChannel);

        parent::tearDown();
    }
}
