<?php
defined('BASEPATH') OR exit('No direct script access allowed');

define('MYSQL_DEFAULT_HOST', '10.10.0.20');
define('MYSQL_DEFAULT_USER', 'apibitword');
define('MYSQL_DEFAULT_PASS', 'PZhsJtE3?o6>8');
define('MYSQL_DEFAULT_DATABASE', 'db_bitword');

define('MYSQL_TRAFFIC_HOST', '10.10.0.20');
define('MYSQL_TRAFFIC_USER', 'apibitword');
define('MYSQL_TRAFFIC_PASS', 'PZhsJtE3?o6>8');
define('MYSQL_TRAFFIC_DATABASE', 'traffic');

define('MYSQL_MAP_HOST', '10.10.0.20');
define('MYSQL_MAP_USER', 'geonames');
define('MYSQL_MAP_PASS', 'ak27u0y4GS#R');
define('MYSQL_MAP_DATABASE', 'geonames2');

$privateKey = <<<EOD
-----BEGIN RSA PRIVATE KEY-----
MIIBUwIBADANBgkqhkiG9w0BAQEFAASCAT0wggE5AgEAAkEAuj0HSfVtz7sRIOKm
GW5Tl2mym6G93He+2CImrlfMRYKhk3kENGQQqCVBOw7/CFfmwjEYwsJyvnACVOFG
gdXuKwIDAQABAkB1M5DRt1U65FOcKWY0HN0YLVlMXdYY13bPl3ZWQ0R2/PGE+dYX
/s3+iZPvT8esA2kRAUUSvq/c0w4i7Sp3KFiBAiEA7mjBnNT6avMF0hqKLbcYzhVx
exWPKGwZDNa9ACXwjcECIQDH+tUhFZrCDzpYX1fBDMAd8SrcqPmMSA4U236sPZNO
6wIga/27pcS7YfKPMmqfKLIFZGRGMRDE9fRxLGWg2w5UdoECIHAtwb7EWsK/PhBy
s0xEtcRWE6AiXZIWnWeP1RgTln2vAiBluSao5D/OpFRxMcRGK00H3S7FJOY2cT7t
nf/b5I7Gzg==
-----END RSA PRIVATE KEY-----
EOD;

$publicKey = <<<EOD
-----BEGIN PUBLIC KEY-----
MFwwDQYJKoZIhvcNAQEBBQADSwAwSAJBALo9B0n1bc+7ESDiphluU5dpspuhvdx3
vtgiJq5XzEWCoZN5BDRkEKglQTsO/whX5sIxGMLCcr5wAlThRoHV7isCAwEAAQ==
-----END PUBLIC KEY-----
EOD;

define('JWT_PRIVATE_KEY', $privateKey);
define('JWT_PUBLIC_KEY', $publicKey);
define('JWT_KEY', 'iUr.ekXY4mCC;z6ukABBR2QY9KbWzmCt]sufKr2s2=Efu^HiDAY9M%>eqp]nmbiq');

define('SENDGRID_API_KEY', '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');

define('LOCATION_IQ_KEY', '1b74424937c4a6');
