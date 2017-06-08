<?php
session_start();
define("HOSTNAME",'localhost');
define("DBUSERNAME",'maxsamsh_online ');
define("DBPASSWORD",'_work1234!@#$');
define("DATABASENAME",'maxsamsh_shop');

mysql_connect(HOSTNAME,DBUSERNAME,DBPASSWORD);
mysql_select_db(DATABASENAME);






?>