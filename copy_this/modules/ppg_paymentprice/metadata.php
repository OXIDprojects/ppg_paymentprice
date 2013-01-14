<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'ppg_paymentprice',
    'title'        => 'PPG / Calculating of the payment price',
    'description'  => array(
        'de' => 'Die in den Versionen 4.7.x fehlerhafte Behandlung von negativen Zahlungsabschlaegen wird hiermit korrigiert.',
        'en' => 'Fix for the false calculating auf the payment discount in versions 4.7.x.',
    ),
    'thumbnail'    => '',
    'version'      => '0.1',
    'author'       => 'Paul Gaida',
    'url'          => 'http://www.paramente-gaida.de',
    'email'        => 'info@paramente-gaida.de',
    'extend'       => array(
        'oxpayment'     => 'ppg_paymentprice/ppg_paymentprice',
    ),
);
?>