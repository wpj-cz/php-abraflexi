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

use AbraFlexi\DateTime;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2024-10-02 at 10:07:39.
 */
class DateTimeTest extends \PHPUnit\Framework\TestCase
{
    protected DateTime $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new DateTime();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

    /**
     * @covers \AbraFlexi\DateTime::__toString
     */
    public function testToString(): void
    {
        $this->assertIsString($this->object->__toString());
    }

    /**
     * @covers \AbraFlexi\DateTime::setFormat
     */
    public function testsetFormat(): void
    {
        $this->object->setDate(2323, 2, 3)->setTime(2, 3, 2, 3);
        $this->assertEquals('2323-02-03T02:03:02.000003++00:00', $this->object->__toString());
    }
}
