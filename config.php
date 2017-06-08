<?php
session_start();
define("HOSTNAME",'localhost');
define("DBUSERNAME",'root');
define("DBPASSWORD",'');
define("DATABASENAME",'qriyotec_qriyotech');

mysql_connect(HOSTNAME,DBUSERNAME,DBPASSWORD);
mysql_select_db(DATABASENAME);






?>