<?php
///////////////////////
//// DB Login Data ////
///////////////////////
$host = "";                //Hostname
$user = "";                //Database User
$data = "";                //Database Name
$pass = "";                //Password
$pref = "";                //Tabellenpr�fix

$file = FALSE;

////////////////////////
////// DB Connect //////
////////////////////////

@$db = mysql_connect($host, $user, $pass);
if ( $db !== FALSE )
{
    mysql_select_db($data,$db);
    unset($host);
    unset($user);
    unset($pass);
}
?>