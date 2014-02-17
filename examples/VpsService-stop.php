<?php

/**
 * This example stops a vps.
 *
 * @copyright Copyright 2013 TransIP BV
 * @author TransIP BV <support@transip.nl>
 */

// Include vpsservice
require_once('Transip/VpsService.php');

try
{
	// Stop a vps
	Transip_VpsService::stop('vps-name');
	echo 'The vps has been stopped.';
}
catch(SoapFault $f)
{
	// It is possible that an error occurs when connecting to the TransIP Soap API,
	// those errors will be thrown as a SoapFault exception.
	echo 'An error occurred: ' . $f->getMessage(), PHP_EOL;
}
