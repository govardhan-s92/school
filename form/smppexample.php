<?php

error_reporting(0);
/*

File: smppexample.php
Implements: exmaple for smppclass.php::SMPPCLass()
License: GNU Lesser Genercal Public License: http://www.gnu.org/licenses/lgpl.html
Commercial advertisement: Contact info@chimit.nl for SMS connectivity and more elaborate SMPP libraries in PHP and other languages.

*/

/*

Caution: Replace the following values with your own parameters.
Leaving the values like this is not going to work!

*/
include_once 'smppclass.php';
//include_once 'file:///C|/Users/Welcome/AppData/Local/Temp/smppclass_binary.php';

$smpphost = "59.162.167.36";
$smppport = 29000;
$systemid = "prabu";
$password = "rajan1";
$system_type = "prabu";
//$from = "9840132614";
$from = "WEBSMS";

$smpp = new SMPPClass();
$smpp->SetSender($from);
/* bind to smpp server */
$smpp->Start($smpphost, $smppport, $systemid, $password, $system_type);
/* send enquire link PDU to smpp server */
$smpp->TestLink();
/* send single message; large messages are automatically split */
//$smpp->Send("9600037999", "This is my SMTP Test message");
//$smpp->Send("9840132614", "This is my SMTP Test message");
/* send unicode message */
//$smpp->Send("9840132614", "&#1589;&#1576;&#1575;&#1581;&#1575;&#1604;&#1582;&#1610;&#1585;", true);
/* send message to multiple recipients at once */
$smpp->SendMulti("9840132614,9600037999", "This is my SMTP Test message");
/* unbind from smpp server */
$smpp->End();

?>