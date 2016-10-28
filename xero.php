<?php

require_once 'WavFile.php';
require_once 'WavMaker.php';
require_once 'XeroOAuth-PHP/lib/XeroOAuth.php';

define ( "XRO_APP_TYPE", "Private" );
define ( "OAUTH_CALLBACK", "oob" );
$useragent = "XeroOAuth-PHP Private App Test";

//Xero private auth stuff
$signatures = array(
    'consumer_key'     => 'MH8HTDDNZDFEXDMCMQVF6PSNMN6W6R',
    'shared_secret'    => 'XQBTZNLKVKVWAETWKU07ONL6CJXKCJ',
    // API versions
    'core_version'=> '2.0',
    'payroll_version'=> '1.0',
    'file_version' => '1.0'
);

if (XRO_APP_TYPE=="Private"||XRO_APP_TYPE=="Partner") {
    $signatures['rsa_private_key'] = 'XeroOAuth-PHP/certs/privatekey.pem';
    $signatures['rsa_public_key'] = 'XeroOAuth-PHP/certs/publickey.cer';
}


$XeroAPI = new WavFile(dirname(__FILE__) . '/samples/XeroAPI.wav');

$wav = new WavMaker(2, 44100, 16); 

$wav->appendWav($XeroAPI);

$wav->save(dirname(__FILE__) . '/based.wav');
shell_exec("afplay based.wav");

?>