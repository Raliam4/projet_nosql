<?php
$dbconn = pg_connect('host=web-pgsql port=5432 dbname=nobel_prices user=remi password=Motdepasse95')
    or die('Could not connect');
     
echo '<pre>' . var_export(pg_version($dbconn), true) . '</pre>';

pg_close($dbconn);
?>
