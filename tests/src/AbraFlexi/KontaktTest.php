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

use AbraFlexi\Kontakt;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2024-10-02 at 10:07:21.
 */
class KontaktTest extends \PHPUnit\Framework\TestCase
{
    protected Kontakt $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new Kontakt();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

//    /**
//     * @covers \AbraFlexi\Kontakt::authenticate
//     *
//     * @todo   Implement testauthenticate().
//     */
//    public function testauthenticate(): void
//    {
//        $this->assertEquals('', $this->object->authenticate());
//        // Remove the following lines when you implement this test.
//        $this->markTestIncomplete('This test has not been implemented yet.');
//    }
//
//    /**
//     * @covers \AbraFlexi\Kontakt::getLabels
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
//     * @covers \AbraFlexi\Kontakt::setLabel
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
//     * @covers \AbraFlexi\Kontakt::unsetLabel
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
//     * @covers \AbraFlexi\Kontakt::unsetLabels
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
//     * @covers \AbraFlexi\Kontakt::getFirmaObject
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
//     * Prepare Contact entry.
//     *
//     * @param array $initialData
//     *
//     * @return \AbraFlexi\Kontakt
//     */
//    public static function makeTestContact($initialData = [])
//    {
//        $contact = new \AbraFlexi\Kontakt();
//        $address = new \AbraFlexi\Adresar();
//        $contact->takeData(array_merge([
//            'jmeno' => \Ease\Functions::randomString(8),
//            'poznam' => 'AbraFlexi Test Contact',
//            'firma' => $address->getLastInsertedId(),
//        ], $initialData));
//
//        if ($contact->sync()) {
//            $contact->addStatusMessage($contact->getApiURL().' '.\AbraFlexi\Functions::uncode((string) $contact->getDataValue('jmeno').' '.$contact->getDataValue('email')), 'success');
//        } else {
//            $contact->addStatusMessage(json_encode($contact->getData()), 'debug');
//        }
//
//        return $contact;
//    }
}
