<?php
//$conn = oci_connect('WEBUSR', 'Web_2017', "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST =172.30.0.27)(PORT = 1521)))(CONNECT_DATA=(SID=POLICY)))");

$conn = oci_connect('WEBUSR', 'Web_2017', "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=172.30.0.44)(PORT=1521))(CONNECT_DATA=(SERVER=dedicated)(SERVICE_NAME=POLICY)))");

if (!$conn) {
    echo 'Mail Sarver Error';
   // $e = oci_error();
   // trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR); 
    
}
?>
