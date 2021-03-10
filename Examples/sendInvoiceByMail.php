#!/usr/bin/php -f
<?php
/**
 * AbraFlexi - Example how send Invoice by email
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\AbraFlexi;

include_once './config.php';
include_once '../vendor/autoload.php';

include_once './common.php';

echo "Please recipient email addreess:";
$input     = fopen("php://stdin", "r");
$recipient = trim(fgets($input));
fclose($input);

$invoiceID = askForFlexiBeeID();

/*
 * AbraFlexi Classes accept this form of initial identifier:
 *
 * (int) 2588
 * (string) ext:ESHOP:oi1978
 * (array) ['varSym'=>'20080015']
 */

$invoice = new \AbraFlexi\FakturaVydana($invoiceID);
if ($invoice->sendByMail($recipient, 'Document sent by AbraFlexi ', 'Example How to sent document')) {
    $invoice->addStatusMessage(_('Invoice was sent'), 'success');
} else {
    $invoice->addStatusMessage(_('Mailer does not work'), 'warning');
}
