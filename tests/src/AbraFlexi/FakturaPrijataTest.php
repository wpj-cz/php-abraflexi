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

use AbraFlexi\FakturaPrijata;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2024-10-02 at 10:07:02.
 */
class FakturaPrijataTest extends \PHPUnit\Framework\TestCase
{
    protected FakturaPrijata $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new FakturaPrijata();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

    //    /**
    //     * @covers \AbraFlexi\FakturaPrijata::getLabels
    //     *
    //     * @todo   Implement testgetLabels().
    //     */
    //    public function testgetLabels(): void
    //    {
    //        $this->assertEquals('', $this->object->getLabels());
    //        // Remove the following lines when you implement this test.
    //        $this->markTestIncomplete('This test has not been implemented yet.');
    //    }
    //
    //    /**
    //     * @covers \AbraFlexi\FakturaPrijata::setLabel
    //     *
    //     * @todo   Implement testsetLabel().
    //     */
    //    public function testsetLabel(): void
    //    {
    //        $this->assertEquals('', $this->object->setLabel());
    //        // Remove the following lines when you implement this test.
    //        $this->markTestIncomplete('This test has not been implemented yet.');
    //    }
    //
    //    /**
    //     * @covers \AbraFlexi\FakturaPrijata::unsetLabel
    //     *
    //     * @todo   Implement testunsetLabel().
    //     */
    //    public function testunsetLabel(): void
    //    {
    //        $this->assertEquals('', $this->object->unsetLabel());
    //        // Remove the following lines when you implement this test.
    //        $this->markTestIncomplete('This test has not been implemented yet.');
    //    }
    //
    //    /**
    //     * @covers \AbraFlexi\FakturaPrijata::unsetLabels
    //     *
    //     * @todo   Implement testunsetLabels().
    //     */
    //    public function testunsetLabels(): void
    //    {
    //        $this->assertEquals('', $this->object->unsetLabels());
    //        // Remove the following lines when you implement this test.
    //        $this->markTestIncomplete('This test has not been implemented yet.');
    //    }
    //
    //    /**
    //     * @covers \AbraFlexi\FakturaPrijata::getFirmaObject
    //     *
    //     * @todo   Implement testgetFirmaObject().
    //     */
    //    public function testgetFirmaObject(): void
    //    {
    //        $this->assertEquals('', $this->object->getFirmaObject());
    //        // Remove the following lines when you implement this test.
    //        $this->markTestIncomplete('This test has not been implemented yet.');
    //    }
    //
    //    /**
    //     * @covers \AbraFlexi\FakturaPrijata::getSumFromAbraFlexi
    //     *
    //     * @todo   Implement testgetSumFromAbraFlexi().
    //     */
    //    public function testgetSumFromAbraFlexi(): void
    //    {
    //        $this->assertEquals('', $this->object->getSumFromAbraFlexi());
    //        // Remove the following lines when you implement this test.
    //        $this->markTestIncomplete('This test has not been implemented yet.');
    //    }
    //
    //    /**
    //     * @covers \AbraFlexi\FakturaPrijata::getSubItems
    //     *
    //     * @todo   Implement testgetSubItems().
    //     */
    //    public function testgetSubItems(): void
    //    {
    //        $this->assertEquals('', $this->object->getSubItems());
    //        // Remove the following lines when you implement this test.
    //        $this->markTestIncomplete('This test has not been implemented yet.');
    //    }
    //
    //    /**
    //     * @covers \AbraFlexi\FakturaPrijata::setSubitems
    //     *
    //     * @todo   Implement testsetSubitems().
    //     */
    //    public function testsetSubitems(): void
    //    {
    //        $this->assertEquals('', $this->object->setSubitems());
    //        // Remove the following lines when you implement this test.
    //        $this->markTestIncomplete('This test has not been implemented yet.');
    //    }
    //
    //    /**
    //     * @covers \AbraFlexi\FakturaPrijata::getSubMenuName
    //     *
    //     * @todo   Implement testgetSubMenuName().
    //     */
    //    public function testgetSubMenuName(): void
    //    {
    //        $this->assertEquals('', $this->object->getSubMenuName());
    //        // Remove the following lines when you implement this test.
    //        $this->markTestIncomplete('This test has not been implemented yet.');
    //    }
    //
    //    /**
    //     * @covers \AbraFlexi\FakturaPrijata::getSubObjects
    //     *
    //     * @todo   Implement testgetSubObjects().
    //     */
    //    public function testgetSubObjects(): void
    //    {
    //        $this->assertEquals('', $this->object->getSubObjects());
    //        // Remove the following lines when you implement this test.
    //        $this->markTestIncomplete('This test has not been implemented yet.');
    //    }
    //
    //    /**
    //     * @covers \AbraFlexi\FakturaPrijata::getEmail
    //     *
    //     * @todo   Implement testgetEmail().
    //     */
    //    public function testgetEmail(): void
    //    {
    //        $this->assertEquals('', $this->object->getEmail());
    //        // Remove the following lines when you implement this test.
    //        $this->markTestIncomplete('This test has not been implemented yet.');
    //    }
    //
    //    /**
    //     * @covers \AbraFlexi\FakturaPrijata::getRecipients
    //     *
    //     * @todo   Implement testgetRecipients().
    //     */
    //    public function testgetRecipients(): void
    //    {
    //        $this->assertEquals('', $this->object->getRecipients());
    //        // Remove the following lines when you implement this test.
    //        $this->markTestIncomplete('This test has not been implemented yet.');
    //    }
    //
    //    /**
    //     * @covers \AbraFlexi\FakturaPrijata::docTypeToPurpose
    //     *
    //     * @todo   Implement testdocTypeToPurpose().
    //     */
    //    public function testdocTypeToPurpose(): void
    //    {
    //        $this->assertEquals('', $this->object->docTypeToPurpose());
    //        // Remove the following lines when you implement this test.
    //        $this->markTestIncomplete('This test has not been implemented yet.');
    //    }
    //
    //    /**
    //     * @covers \AbraFlexi\FakturaPrijata::getChanges
    //     *
    //     * @todo   Implement testgetChanges().
    //     */
    //    public function testgetChanges(): void
    //    {
    //        $this->assertEquals('', $this->object->getChanges());
    //        // Remove the following lines when you implement this test.
    //        $this->markTestIncomplete('This test has not been implemented yet.');
    //    }
    //
    //    /**
    //     * @covers \AbraFlexi\FakturaPrijata::_getRecordCode
    //     *
    //     * @todo   Implement test_getRecordCode().
    //     */
    //    public function testGetRecordCode(): void
    //    {
    //        $this->assertEquals('', $this->object->_getRecordCode());
    //        // Remove the following lines when you implement this test.
    //        $this->markTestIncomplete('This test has not been implemented yet.');
    //    }
}
