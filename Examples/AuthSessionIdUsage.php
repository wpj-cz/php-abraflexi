#!/usr/bin/php -f
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

namespace Example\AbraFlexi;

include_once './config.php';

include_once '../vendor/autoload.php';

\define(
    'FLEXIBEE_AUTHSESSID',
    '00112233445566778899aabbccddeeff00112233445566778899aabbccddeeff',
);

$invoice = new \AbraFlexi\FakturaVydana();
$invoice->setDataValue('typDokl', 'FAKTURA');
$invoice->insertToFlexiBee();
