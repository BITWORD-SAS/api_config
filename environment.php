
<?php
error_reporting(E_ALL);
ini_set('display_errors','1');

ini_set('max_execution_time', 600);

date_default_timezone_set('America/New_York');
setlocale(LC_MONETARY, 'en_US');

// Info about API https://www.datamuse.com/api/#vocabs
define('APIRELATEDWORDS', 'https://api.datamuse.com/words');

define('GLPI', 'https://10.10.0.80/apirest.php/');

// Possible values SendGrid or SMTP
define('EMAILMODALITY', 'SMTP');
