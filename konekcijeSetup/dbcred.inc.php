<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

//define('COMPANY_PIB', 'koca_test'); //koca 201
//define('COMPANY_PIB', 'massystem'); //massistem 201
//define('COMPANY_PIB', '500000000'); //mas-system 201
//define('COMPANY_PIB', '101974022'); //ARRIVA 213
//define('COMPANY_PIB', '102895592'); //NETBUS 201
//define('COMPANY_PIB', '108505711'); //BANATTRANS 201
//define('COMPANY_PIB', '100710055'); //KIKINDA 201
//define('COMPANY_PIB', '104186105'); //KOLASIN 201
//define('COMPANY_PIB', 'nfinites'); //nfinites 201
//define('COMPANY_PIB', 'oil_solut'); //oil 201
define('COMPANY_PIB', '100277615'); //novi sad 213 (jgspns)
//define('COMPANY_PIB', 'ordering_test'); //ordering_test 207/208
//define('COMPANY_PIB', 'ordering_marjan'); //ordering_marjan 207/208
//define('COMPANY_PIB', '600000000'); //online.digital012 207/208
//define('COMPANY_PIB', '500000002'); //nfinite live 201
//define('COMPANY_PIB', '500000003'); //magistro live 201
//define('COMPANY_PIB', '500000010'); //santrans live 201
//define('COMPANY_PIB', '900000010'); //World Wide Display 201
//define('COMPANY_PIB', '900000012'); //Demonstration Domain 201
//define('COMPANY_PIB', 'support'); //buslogic.net 201
//define('COMPANY_PIB', '84931084664'); //slavonija 201//nema dozvola
//define('COMPANY_PIB', '107073107'); //jgppnis 206
//define('COMPANY_PIB', 'redvoznje_test'); //redvoznje test 207/208
//define('COMPANY_PIB', '107888054'); //ALEXBON live 201
//define('COMPANY_PIB', '500000014'); //heatsink live 201
//define('COMPANY_PIB', '100512973'); //STUP 201
//define('COMPANY_PIB', '100960042'); //SUBOTICA 213
//define('COMPANY_PIB', '111803180'); //PANCEVO 213 
//define('COMPANY_PIB', '101934742'); //TRANSJUG 213



if (COMPANY_PIB == "101974022_djole") {
    define("DB_SERVER", "192.168.4.213");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
} else if (COMPANY_PIB == "koca_test") {
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
} else if (COMPANY_PIB == "testabts1") {
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "pibtestabts1global");
    define("DB_GLOBAL_WRITE", "pibtestabts1global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
} else if (COMPANY_PIB == "290120191") {
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "pib290120191global");
    define("DB_GLOBAL_WRITE", "pib290120191global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
} else if (COMPANY_PIB == "testabts2") {
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "pibtestabts1global");
    define("DB_GLOBAL_WRITE", "pibtestabts1global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
} else if (COMPANY_PIB == "massystem") {
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "pibmassystemglobal");
    define("DB_GLOBAL_WRITE", "pibmassystemglobal");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
} else if (COMPANY_PIB == "500000000") {
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "pib500000000global");
    define("DB_GLOBAL_WRITE", "pib500000000global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
} else if (COMPANY_PIB == "101974022") {
    define("DB_SERVER", "192.168.4.213");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
} else if (COMPANY_PIB == "102895592") {
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
} else if (COMPANY_PIB == "nfinites") {
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "pibnfinitesglobal");
    define("DB_GLOBAL_WRITE", "pibnfinitesglobal");
    define("DSETUP_DB_GLOBAL", "global");
    define("EMAIL_DB_GLOBAL", "global");
} else if (COMPANY_PIB == "oil_solut") {
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "piboil_solutglobal");
    define("DB_GLOBAL_WRITE", "piboil_solutglobal");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
} else if (COMPANY_PIB == "108505711") {
    define("DB_SERVER", "192.168.4.201");
    //define("DB_SERVER", "46.240.141.110");
    //define("DB_SERVER", "localhost");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
} else if (COMPANY_PIB == "100277615") {
    define("DB_SERVER", "192.168.4.213");
    //define("DB_SERVER", "localhost");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
} else if (COMPANY_PIB == "10000000") {
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "pib10000000global");
    define("DB_GLOBAL_WRITE", "pib10000000global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
} else if (COMPANY_PIB == "100710055") {
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}else if (COMPANY_PIB == "ordering_test"){
    define("DB_SERVER", "192.168.4.207");
    define("DB_GLOBAL", "global_fed");
    define("DB_GLOBAL_WRITE", "global_fed");
    define("DSETUP_DB_GLOBAL", "global_fed");
    define("DSETUP_DB_GLOBAL_WRITE", "global_fed");
    define("EMAIL_DB_GLOBAL", 'global_fed');
}else if (COMPANY_PIB == "ordering_marjan"){
    define("DB_SERVER", "192.168.4.207");
    define("DB_GLOBAL", "global_fed");
    define("DB_GLOBAL_WRITE", "global_fed");
    define("DSETUP_DB_GLOBAL", "global_fed");
    define("DSETUP_DB_GLOBAL_WRITE", "global_fed");
    define("EMAIL_DB_GLOBAL", 'global_fed');
}else if (COMPANY_PIB == "600000000"){
    define("DB_SERVER", "192.168.4.207");
    define("DB_GLOBAL", "global_fed");
    define("DB_GLOBAL_WRITE", "global_fed");
    define("DSETUP_DB_GLOBAL", "global_fed");
    define("DSETUP_DB_GLOBAL_WRITE", "global_fed");
    define("EMAIL_DB_GLOBAL", "global_fed");
}else if (COMPANY_PIB == "500000002"){
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "pib500000002global");
    define("DB_GLOBAL_WRITE", "pib500000002global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}else if (COMPANY_PIB == "500000003"){
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "pib500000003global");
    define("DB_GLOBAL_WRITE", "pib500000003global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}else if (COMPANY_PIB == "500000010"){
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "pib500000010global");
    define("DB_GLOBAL_WRITE", "pib500000010global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}else if (COMPANY_PIB == "900000010"){
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "pib900000010global");
    define("DB_GLOBAL_WRITE", "pib900000010global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}else if (COMPANY_PIB == "900000012"){
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "pib900000012global");
    define("DB_GLOBAL_WRITE", "pib900000012global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}else if (COMPANY_PIB == "support"){
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}else if (COMPANY_PIB == "84931084664"){
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}else if (COMPANY_PIB == "107073107"){
    define("DB_SERVER", "192.168.4.206");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}else if (COMPANY_PIB == "redvoznje_test"){
    //define("DB_SERVER", "192.168.4.207");
    define("DB_SERVER", "192.168.4.208");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", 'global');
}else if (COMPANY_PIB == "107888054"){
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}else if (COMPANY_PIB == "500000014"){
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "pib500000014global");
    define("DB_GLOBAL_WRITE", "pib500000014global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}else if (COMPANY_PIB == "100512973"){
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}else if (COMPANY_PIB == "100960042"){
    define("DB_SERVER", "192.168.4.213");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}else if (COMPANY_PIB == "111803180"){
    define("DB_SERVER", "192.168.4.213");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}else if (COMPANY_PIB == "101934742"){
    define("DB_SERVER", "192.168.4.201");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("DSETUP_DB_GLOBAL", "global");
    define("DSETUP_DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}



//define("DB_SERVER", "localhost");


if (DB_SERVER == "192.168.4.213") {
    define("DB_USER", "mdjordjevic");
    define("DB_PASS", ""); // 213
} else if (DB_SERVER == "192.168.4.201") {
    define("DB_USER", "mdjordjevic");
    define("DB_PASS", ""); // 201
} else if (DB_SERVER == "192.168.4.207") {
    define("DB_USER", "mdjordjevic");
    define("DB_PASS", ""); // 207
} else if (DB_SERVER == "192.168.4.208") {
    define("DB_USER", "mdjordjevic");
    define("DB_PASS", "!"); // 208
} else if (DB_SERVER == "192.168.4.206") {
    define("DB_USER", "mdjordjevic");
    define("DB_PASS", ""); // nis
} else if (DB_SERVER == "192.168.4.202") {
    //define("DB_USER", "mdjordjevic");
    //define("DB_PASS", ""); // 202
} else if (DB_SERVER == "localhost") {  
    //define("DB_USER", "ilija");
    //define("DB_PASS", "");
    define("DB_USER", "mdjordjevic_live");
    define("DB_PASS", ""); // NS  
} else if (DB_SERVER == "46.240.141.110") {
    define("DB_USER", "mdjordjevic");
    define("DB_PASS", ""); // 201
}




if (COMPANY_PIB == "84931084664"){//slavonija
    define("DB_NAME", "oib" . COMPANY_PIB);
    define("DB_NAME_GPS", "oib" . COMPANY_PIB . "gps");
}else if(COMPANY_PIB == "redvoznje_test"){//redvoznje_test
    define("DB_NAME", COMPANY_PIB);
    define("DB_NAME_GPS", COMPANY_PIB . "gps");
}else{
    define("DB_NAME", "pib" . COMPANY_PIB);
    define("DB_NAME_GPS", "pib" . COMPANY_PIB . "gps");
}
//define("DB_NAME", "pib" . COMPANY_PIB);
//define("DB_NAME_GPS", "pib" . COMPANY_PIB . "gps");
// define("DB_NAME_GPS", "pib101974022gps");
define("DB_NAME_ARCHIVE", "");

define("SMTP_SERVER", "mailcluster.loopia.se");
define("SMTP_MAIL_USERNAME", "sender@d-logic.rs");
define("SMTP_MAIL_PASSWORD", "Nemampojma465");
define("HOST", "http://" . $_SERVER ["HTTP_HOST"]);

if (DB_SERVER == "192.168.4.213") {
    define("TRANSLATION_GLOBAL_MYSQL_SERVER_ADDRESS", '192.168.4.213');
    define("TRANSLATION_GLOBAL_MYSQL_SERVER_USERNAME", "ilija");
    define("TRANSLATION_GLOBAL_MYSQL_SERVER_PASS", "stefan5656");
    define("TRANSLATION_GLOBAL_MYSQL_DATABASE_NAME", "global");
    define("TRANSLATION_LOCAL_MYSQL_DATABASE_NAME", "global");
    define("TRANSLATION_DEFAULT_LANGUAGE_ID", "1");
} else if (DB_SERVER == "192.168.4.201") {
    define("TRANSLATION_GLOBAL_MYSQL_SERVER_ADDRESS", '192.168.4.200');
    define("TRANSLATION_GLOBAL_MYSQL_SERVER_USERNAME", "ilija"); // glavesina
    define("TRANSLATION_GLOBAL_MYSQL_SERVER_PASS", "stefan5656"); // bitnoDa465budeSigurno
    define("TRANSLATION_GLOBAL_MYSQL_DATABASE_NAME", "global");
    define("TRANSLATION_LOCAL_MYSQL_DATABASE_NAME", "global");
    define("TRANSLATION_DEFAULT_LANGUAGE_ID", "1");
} else if (DB_SERVER == "192.168.4.206") {
    define("TRANSLATION_GLOBAL_MYSQL_SERVER_ADDRESS", '192.168.4.200');
    define("TRANSLATION_GLOBAL_MYSQL_SERVER_USERNAME", "ilija"); // glavesina
    define("TRANSLATION_GLOBAL_MYSQL_SERVER_PASS", "stefan5656"); // bitnoDa465budeSigurno
    define("TRANSLATION_GLOBAL_MYSQL_DATABASE_NAME", "global");
    define("TRANSLATION_LOCAL_MYSQL_DATABASE_NAME", "global");
    define("TRANSLATION_DEFAULT_LANGUAGE_ID", "1");
}

define('PDF_SERVICE_ADDRESS', '127.0.0.1:8081');
define("LOGS_DIRECTORY", "/var/www/mdjordjevic2.ticketing.rs/logs/logovi/");
// define("LOGS_DIRECTORY", "/var/www/mdjordjevic2.ticketing.rs/logs/logovi/");

define('ACL_MENU_CONFIG_SCRIPT', 'application/config/acl_menu_config.php');

/*define('ONESIGNAL_APP_ID', '48231d84-a6b6-436d-ae4f-2a1cb75bc4fb');
define('ONESIGNAL_REST_API_KEY', 'M2UyNjI1YTgtMDU4YS00OWRjLTg4ZDAtNzU5MDhjYTE3YTVh');
define('ONESIGNAL_SUBDOMAIN_NAME', 'narucivanje.online');*/

define('ONESIGNAL_APP_ID', '928d7bf6-877e-43a0-8dd9-e9591b916b54');
define('ONESIGNAL_REST_API_KEY', 'MjkwYTk3NTItYzhlYi00ZWQxLWI4MjYtZjI5ZjgxOTM2NTc5');
define('ONESIGNAL_SUBDOMAIN_NAME', 'BanatTrans');

define('GOOGLE_API_KEY', 'AIzaSyD2hYWXXGhZhcyzvzMnn9ngV31GdDvrDdY');
define('GOOGLE_SIGNIN_CLIENT_ID', '937956690078-t9frl0mh14sqqr6mr6mq4q976fagmghi.apps.googleusercontent.com');

define('EMAIL_SERVER_DEFAULT_SENDER_NAME', 'Office BusLogic');
define('EMAIL_SERVER_DEFAULT_SENDER_EMAIL', 'office@buslogic.net');

// FISKALIZACIJA
define("CIS_DEBUG", true);
if (CIS_DEBUG) {
    define("CIS_CERT_NAME", "fiscal_3.p12");
    define("CIS_CERT_PASSWORD", "5547Mako");
    define("CIS_SERVICE_URL", "https://cistest.apis-it.hr:8449/FiskalizacijaServiceTest");
} else {
}

define('MATERIAL_HOME_PAGE', '1');
define('BUSLOGIC_SECURITY_PASSWORD', 'buslogic135');

//new cadmin ticketing session duration in seconds
define('APPLICATION_SESSION_LENGTH', 86400);

define('FACEBOOK_SIGNIN_APP_ID', '815980428747980');
define('FACEBOOK_SIGNIN_APP_SECRET', 'dd2dd0345bd9909ed5eff02ded209876');


//ovo ukljuciti samo ako hoces da se generise folder /sr
define('APPLICATION_SITE_GENERATION_HOST', 'http');
define('APPLICATION_SITE_GENERATION_DOMAIN_OR_IP', DB_SERVER);
define('APPLICATION_SITE_GENERATION_PORT', '8080');


//za sajt pretragu, 
//staviti na 1 ako hocete error logove za api pozive
//staviti na 2 ako hocete error logove za api pozive i odgovore
//staviti na 3 ako hocete error logove za api pozive i odgovore i header-e
//u starom ima define('REDVOZNJE_ERROR_LOG_OLD', 1); za error log upita
define('REDVOZNJE_ERROR_LOG_NEW', 1);
