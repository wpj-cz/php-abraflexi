<?php

declare(strict_types=1);

/**
 * This file is part of the EaseCore package.
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Test\AbraFlexi;

use AbraFlexi\Hooks;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2024-10-02 at 10:07:36.
 */
class HooksTest extends \PHPUnit\Framework\TestCase
{
    protected Hooks $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new Hooks();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

    /**
     * @covers \AbraFlexi\Hooks::register
     *
     * @todo   Implement testregister().
     */
    public function testregister(): void
    {
        $this->assertEquals('', $this->object->register());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers \AbraFlexi\Hooks::refreshWebHook
     *
     * @todo   Implement testrefreshWebHook().
     */
    public function testrefreshWebHook(): void
    {
        $this->assertEquals('', $this->object->refreshWebHook());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers \AbraFlexi\Hooks::unregister
     *
     * @todo   Implement testunregister().
     */
    public function testunregister(): void
    {
        $this->assertEquals('', $this->object->unregister());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers \AbraFlexi\Hooks::recordExists
     *
     * @todo   Implement testrecordExists().
     */
    public function testrecordExists(): void
    {
        $this->assertEquals('', $this->object->recordExists());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}
