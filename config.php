<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
DEFINE('DEBUG', true);
DEFINE('SEND_EMAILS', true);

ini_set('max_execution_time', 600);

date_default_timezone_set('Europe/London');
setlocale(LC_MONETARY, 'en_US');

$config['sms_from'] = '';

$config['reset_password_time_out'] = 30;
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
$config['image_basepath'] = isset($_SERVER['HTTPS'])?"https://".$host."/":'http://'.$host."/";

$config['default_language'] = 'en';

$config['default_language'] = 'en';
$config['languages'] = array('en', 'es', 'fr', 'ru');

$config['jwt_token_algo'] = 'HS512';
$config['jwt_expiry_time'] = 60*60*3;
//$config['jwt_expiry_time'] = 60*60*24; // 24 hr expiry time
$config['token_issuer'] = 'STAFFER';
//Lowest Role
$config['jwt_role'] = 'customer';

$config['invitation_code_len'] = 9;
//$config['jwt_leeway_time'] = 60;
$config['random_string'] = 'abcdefghijkl-mno-pqrst-uvwxy-zAB-CDEFGHIJKLMNOPQR-STUVWXYZ0123456789';
$config['random_string_len'] = 36;

$config['application_url'] = 'https://10.10.0.8:81';
//$config['application_url'] = 'https://portal-api.bitword.co:81';


//30 minutes for OTP to expire
$config['email_expiry_time'] = 0;
$config['otp_verification_expiry'] = 0;
//Used in HWCMailer
$config['php_to_mysql_date_format'] = 'Y-m-d H:i:s';

$config['from_email_name'] = 'Bitword Support Team';
$config['from_email_address'] = 'support@bitword.co';
$config['replyto_email_address'] = 'No Replies <replies@bitword.co>';
$config['bounce_email_address'] = 'Bounced <bounce@bitword.co>';

$config['email_salutation_signoff'] = 'Regards,';
$config['email_salutation'] = 'Bitword Ltd.';
/* $config['debug_allow_emails'] = array('dmbucs@gmail.com', 'daniel.m.mayorga.v@gmail.com', 'dmayorga.analitica@gmail.com', 'sebasacsm.jsmr@gmail.com','masebas921120@hotmail.es','qualityassurancebw@outlook.com'); */
$config['debug_allow_emails'] = [];//array();
$config['debug_replace_email'] = '';

$config['servicesAddressLookup'] = array(
                                        array(
                                            "name" => "locationiq",
                                            "endpointSearch" => "https://us1.locationiq.com/v1/search.php?key=%s",
                                            "endpointReverse" => "https://us1.locationiq.com/v1/reverse.php?key=%s",
                                            "key" => "1b74424937c4a6",
                                            "enabled" => false
                                        ),
                                        /* array(
                                            "name" => "nominatim",
                                            "endpointSearch" => "https://nominatim.openstreetmap.org/search",
                                            "endpointReverse" => "https://nominatim.openstreetmap.org/reverse",
                                            "key" => null,
                                            "enabled" => true
                                        ), */
                                        array(
                                            "name" => "nominatim",
                                            "endpointSearch" => "http://10.10.0.5/nominatim/search",
                                            "endpointReverse" => "http://10.10.0.5/nominatim/reverse",
                                            "key" => null,
                                            "enabled" => true
                                        )
                                    );

$config['servicesTRM'] = array(
                                array(
                                    "name" => "ExchangeRate-API",
                                    "urlApi" => "https://app.exchangerate-api.com", //Link to register an account and generate the api key
                                    "endpointSearch" => "https://v6.exchangerate-api.com/v6/%s/latest/",
                                    "key" => "dcac67afa6a59abd96ac0fd2",
                                    "enabled" => true
                                )
                            );

$config['PassGenericGLPI'] = 'uKn<Ld!3rm>bQY#';
$config['AuthBasicAdminUserGLPI'] = 'Yml0d29yZF9wcXJzOlR4NT0vRkRBVU5uMGtvMTE=';

//Amazon SES SMTP configuration
$config['smtpConfig'] = array(
                            'protocol' => 'smtp',
                            //'smtp_host' => 'email-smtp.us-east-2.amazonaws.com',
                            'smtp_host' => 'email-smtp.us-east-1.amazonaws.com',
                            'smtp_port' => 587,
                            'smtp_user' => 'AKIAYBCEKKZ6VW6OEOUS',
                            'smtp_pass' => 'BFGygyVFZqsYInmZO7X+DZFk9kWTW8SPok4VzEdt+h7w',

			    //'smtp_user' => 'AKIA5UYZ7E64KTIIOABS',
			    //'smtp_pass' => 'BA62y75XEdCEQCrlEVwN4acyFy7esPtCL+/eHPsAKJCO',
                            'mailtype' => 'html',
                            'newline' => "\r\n",
                            'smtp_crypto' => 'tls'
                        );

//In this folder apache should has permission of write, read, execution
$config['pathApp'] = "/var/www/html";

/**
 * Indicate the current project phase, this prefix is used in the generation of the reference.
 * It should have only two characters: P => Phase and 1 => Phase number
 * */
$config['projectPhase'] = "P1";
