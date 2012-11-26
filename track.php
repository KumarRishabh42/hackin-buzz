<pre>
<?php

//require_once 'CAS.php';

$logfile="newlugguwuggujuggu.txt";
$ip=$_SERVER['REMOTE_ADDR'];



$logdetails= date("F j, Y, g:i a");
$fp=fopen($logfile, "a");
/*if(phpCAS::isAuthenticated()){
        fwrite($fp, "Authenticated $logdetails $ip ");
        fwrite($fp, phpCAS::getUser()."\n");
}
else*/ {
        fwrite($fp, "$logdetails $ip\n");
}
fclose();

?>
</pre>
