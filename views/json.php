<?php
/**
 * User: denisolvr
 * Date: 28/08/15
 */

header('Content-type: application/json');
echo json_encode($invoiceList->gerateBilling(), JSON_PRETTY_PRINT);
