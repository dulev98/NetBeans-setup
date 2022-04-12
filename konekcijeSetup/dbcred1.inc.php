<?php
define("REPORTS_DIR_NAME", "reports");
if (strpos ( $_SERVER ['REQUEST_URI'], "/" . REPORTS_DIR_NAME . "/" ) !== false) {
    session_start ();
}

/**
 * MAIN CREDENTIALS
 */

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
//define('COMPANY_PIB', 'ordering_test'); //ordering_test 207
//define('COMPANY_PIB', 'ordering_marjan'); //ordering_marjan 207
//define('COMPANY_PIB', '600000000'); //online.digital012 207
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
} else if (COMPANY_PIB == "koca_test") {
    define("DB_SERVER", "192.168.4.201");
} else if (COMPANY_PIB == "testabts1") {
    define("DB_SERVER", "192.168.4.201");
} else if (COMPANY_PIB == "290120191") {
    define("DB_SERVER", "192.168.4.201");
} else if (COMPANY_PIB == "testabts2") {
    define("DB_SERVER", "192.168.4.201");
} else if (COMPANY_PIB == "massystem") {
    define("DB_SERVER", "192.168.4.201");
} else if (COMPANY_PIB == "500000000") {
    define("DB_SERVER", "192.168.4.201");
} else if (COMPANY_PIB == "101974022") {
    define("DB_SERVER", "192.168.4.213");
} else if (COMPANY_PIB == "102895592") {
    define("DB_SERVER", "192.168.4.201");
} else if (COMPANY_PIB == "nfinites") {
    define("DB_SERVER", "192.168.4.201");
} else if (COMPANY_PIB == "oil_solut") {
    define("DB_SERVER", "192.168.4.201");
} else if (COMPANY_PIB == "108505711") {
    define("DB_SERVER", "192.168.4.201");
    //define("DB_SERVER", "46.240.141.110");//sa drugog servera
    //define("DB_SERVER", "localhost");
} else if (COMPANY_PIB == "100277615") {
    define("DB_SERVER", "192.168.4.213");
    //define("DB_SERVER", "localhost");
} else if (COMPANY_PIB == "10000000") {
    define("DB_SERVER", "192.168.4.201");
} else if (COMPANY_PIB == "100710055") {
    define("DB_SERVER", "192.168.4.201");
}else if (COMPANY_PIB == "ordering_test"){
    define("DB_SERVER", "192.168.4.207");
}else if (COMPANY_PIB == "ordering_marjan"){
    define("DB_SERVER", "192.168.4.207");
}else if (COMPANY_PIB == "600000000"){
    define("DB_SERVER", "192.168.4.207");
}else if (COMPANY_PIB == "500000002"){
    define("DB_SERVER", "192.168.4.201");
}else if (COMPANY_PIB == "500000003"){
    define("DB_SERVER", "192.168.4.201");
}else if (COMPANY_PIB == "500000010"){
    define("DB_SERVER", "192.168.4.201");
}else if (COMPANY_PIB == "900000010"){
    define("DB_SERVER", "192.168.4.201");
}else if (COMPANY_PIB == "900000012"){
    define("DB_SERVER", "192.168.4.201");
}else if (COMPANY_PIB == "support"){
    define("DB_SERVER", "192.168.4.201");
}else if (COMPANY_PIB == "84931084664"){
    define("DB_SERVER", "192.168.4.201");
}else if (COMPANY_PIB == "107073107"){
    define("DB_SERVER", "192.168.4.206");
}else if (COMPANY_PIB == "redvoznje_test"){
    //define("DB_SERVER", "192.168.4.207");
    define("DB_SERVER", "192.168.4.208");
}else if (COMPANY_PIB == "107888054"){
    define("DB_SERVER", "192.168.4.201");
}else if (COMPANY_PIB == "107888054"){
    define("DB_SERVER", "192.168.4.201");
}else if (COMPANY_PIB == "100512973"){
    define("DB_SERVER", "192.168.4.201");
}else if (COMPANY_PIB == "100960042"){
    define("DB_SERVER", "192.168.4.213");
}else if (COMPANY_PIB == "111803180"){
    define("DB_SERVER", "192.168.4.213");
}else if (COMPANY_PIB == "101934742"){
    define("DB_SERVER", "192.168.4.201");
}

//define("DB_SERVER", "localhost");
//define("DB_SERVER", "192.168.4.213");
//define("DB_SERVER", "192.168.4.201");
//define("DB_SERVER", "192.168.4.207");
//define("DB_SERVER", "192.168.4.206");
//define("DB_SERVER", "192.168.4.202");
//define("DB_SERVER", "46.240.141.110");


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
} else if(DB_SERVER == "localhost"){
    //define("DB_USER", "mdjordjevic");
    //define("DB_PASS", ""); // 201
    //define("DB_USER", "ilija");
    //define("DB_PASS", "");
    define("DB_USER", "mdjordjevic_live");
    define("DB_PASS", ""); // NS
} else if(DB_SERVER == "46.240.141.110"){
    define("DB_USER", "mdjordjevic");
    define("DB_PASS", ""); // 201
}


if (COMPANY_PIB == "massystem") {
    define("DSETUP_DB_GLOBAL", "global");
    define("DB_GLOBAL", "pibmassystemglobal");
    define("DB_GLOBAL_WRITE", "pibmassystemglobal");
    define("EMAIL_DB_GLOBAL", "global");
    $miniglobal = true;
}

if (COMPANY_PIB == "500000000") {
    define("DSETUP_DB_GLOBAL", "global");
    define("DB_GLOBAL", "pib500000000global");
    define("DB_GLOBAL_WRITE", "pib500000000global");
    define("EMAIL_DB_GLOBAL", "global");
    $miniglobal = true;
}

if (COMPANY_PIB == "290120191") {
    define("DSETUP_DB_GLOBAL", "global");
    define("DB_GLOBAL", "pib290120191global");
    define("DB_GLOBAL_WRITE", "pib290120191global");
    define("EMAIL_DB_GLOBAL", "global");
    $miniglobal = true;
}

if (COMPANY_PIB == "10000000") {
    define("DSETUP_DB_GLOBAL", "global");
    define("DB_GLOBAL", "pib10000000global");
    define("DB_GLOBAL_WRITE", "pib10000000global");
    define("EMAIL_DB_GLOBAL", "global");
    $miniglobal = true;
}

if (COMPANY_PIB == "ordering_test") {
    define("DSETUP_DB_GLOBAL", "global_fed");
    define("DB_GLOBAL", "global_fed");
    define("DB_GLOBAL_WRITE", "global_fed");
    define("EMAIL_DB_GLOBAL", "global");
    $miniglobal = true;
}

if (COMPANY_PIB == "ordering_marjan") {
    define("DSETUP_DB_GLOBAL", "global_fed");
    define("DB_GLOBAL", "global_fed");
    define("DB_GLOBAL_WRITE", "global_fed");
    define("EMAIL_DB_GLOBAL", "global");
    $miniglobal = true;
}

if (COMPANY_PIB == "500000002") {
    define("DSETUP_DB_GLOBAL", "global");
    define("DB_GLOBAL", "pib500000002global");
    define("DB_GLOBAL_WRITE", "pib500000002global");
    define("EMAIL_DB_GLOBAL", "global");
    $miniglobal = true;
}

if (COMPANY_PIB == "500000003") {
    define("DSETUP_DB_GLOBAL", "global");
    define("DB_GLOBAL", "pib500000003global");
    define("DB_GLOBAL_WRITE", "pib500000003global");
    define("EMAIL_DB_GLOBAL", "global");
    $miniglobal = true;
}

if (COMPANY_PIB == "500000010") {
    define("DSETUP_DB_GLOBAL", "global");
    define("DB_GLOBAL", "pib500000010global");
    define("DB_GLOBAL_WRITE", "pib500000010global");
    define("EMAIL_DB_GLOBAL", "global");
    $miniglobal = true;
}

if (COMPANY_PIB == "900000010") {
    define("DSETUP_DB_GLOBAL", "global");
    define("DB_GLOBAL", "pib900000010global");
    define("DB_GLOBAL_WRITE", "pib900000010global");
    define("EMAIL_DB_GLOBAL", "global");
    $miniglobal = true;
}

if (COMPANY_PIB == "900000012") {
    define("DSETUP_DB_GLOBAL", "global");
    define("DB_GLOBAL", "pib900000012global");
    define("DB_GLOBAL_WRITE", "pib900000012global");
    define("EMAIL_DB_GLOBAL", "global");
    $miniglobal = true;
}

if (COMPANY_PIB == "84931084664") {//slavonija
    define("DSETUP_DB_GLOBAL", "global");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
    $miniglobal = true;
}

if (COMPANY_PIB == "redvoznje_test") {
    define("DSETUP_DB_GLOBAL", "global");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
    $miniglobal = true;
}

if (COMPANY_PIB == "107888054") {
    define("DSETUP_DB_GLOBAL", "global");
    define("DB_GLOBAL", "pib107888054global");
    define("DB_GLOBAL_WRITE", "pib107888054global");
    define("EMAIL_DB_GLOBAL", "global");
    $miniglobal = true;
}




if($miniglobal == false){
    define("DSETUP_DB_GLOBAL", "global");
    define("DB_GLOBAL", "global");
    define("DB_GLOBAL_WRITE", "global");
    define("EMAIL_DB_GLOBAL", "global");
}






if (isset ( $_SESSION ["archive_db_date"] ) && basename ( getcwd () ) == REPORTS_DIR_NAME) {
    //define("DB_SERVER", "localhost"); // REPORTS ARCHIVE DB SERVER HOST
    if (COMPANY_PIB == "84931084664") {//slavonija
        define("DB_NAME", "oib" . COMPANY_PIB . "_" . $_SESSION ["archive_db_date"]);
    }else if (COMPANY_PIB == "redvoznje_test") {//redvoznje_test
        define("DB_NAME", COMPANY_PIB . "_" . $_SESSION ["archive_db_date"]);
    }else{
        define("DB_NAME", "pib" . COMPANY_PIB . "_" . $_SESSION ["archive_db_date"]);
    }
} else {
    //define("DB_SERVER", "localhost"); // COMPANY DB SERVER HOST
    if (COMPANY_PIB == "84931084664") {//slavonija
        define("DB_NAME", "oib" . COMPANY_PIB);
    }else if (COMPANY_PIB == "redvoznje_test") {//redvoznje_test
        define("DB_NAME", COMPANY_PIB);
    }else{
        define("DB_NAME", "pib" . COMPANY_PIB);
    }
}
//define("DB_SERVER", "192.168.4.206");

/**
 * ARCHIVE SERVER FOR REPORTS (NEW)
 */
define("DB_REPORTS_ARCHIVE_SERVER", ""); // HINT: SAME AS DB_SERVER

define('SERVICE_DATA_BASE', 'global');
$serviceDatabase = SERVICE_DATA_BASE;

if (COMPANY_PIB == "84931084664") {//slavonija
    define("DB_NAME_TT", "oib" . COMPANY_PIB . "tt");
    define("DB_NAME_RES", "oib" . COMPANY_PIB . "res");
    define("DB_NAME_GPS", "oib" . COMPANY_PIB . "gps");
    define("DB_NAME_LOGS", "oib" . COMPANY_PIB . "logs");
}else{
    define("DB_NAME_TT", "pib" . COMPANY_PIB . "tt");
    define("DB_NAME_RES", "pib" . COMPANY_PIB . "res");
    define("DB_NAME_GPS", "pib" . COMPANY_PIB . "gps");
    define("DB_NAME_LOGS", "pib" . COMPANY_PIB . "logs");
}
define("DB_NAME_CITY_ID", "city_id");
define("DB_NAME_UNIQUE_STATION_ID", "global");

/**
 * SUPER ADMIN CREDENTIALS (IF ANY)
 */
define("DB_SERVER_SUPERADMIN", DB_SERVER);
define("DB_USER_SUPERADMIN", "ilija");
define("DB_PASS_SUPERADMIN", "stefan5656");
define("DB_NAME_SUPERADMIN", "superadmin");

/**
 * CREDENTIALS ABOUT ARCHIVE SERVER (OLD)
 */
define("DB_SERVER_ARCHIVE", DB_SERVER);
define("DB_USER_ARCHIVE", "");
define("DB_PASS_ARCHIVE", "");
define("DB_NAME_ARCHIVE", "archive_pib" . COMPANY_PIB);

/**
 * TIME ATT
 */
define("DB_SERVER_TIME_ATT", "remote-mysql3.pozarevac.co.yu");
define("DB_USER_TIME_ATT", "radvreme_ns");
define("DB_PASS_TIME_ATT", "radvremens");
define("DB_NAME_TIME_ATT", "radvreme_ns");
define("DB_PORT_TIME_ATT", "3306");

/**
 * LOGS
 * Notice: This folder must exist on server and must have write privileges
 *
 * @example /var/www/project_name/logs/
 * @example /var/www/name_test.d-logic.net/logs/logovi/name_test
 */
define("LOGS_DIRECTORY", "/var/www/mdjordjevic2.ticketing.rs/logs/logovi/");

$dbusername = DB_USER;
$dbpassword = DB_PASS;
$dbhost = DB_SERVER;
$dbname = DB_NAME;
$dbname_tt = DB_NAME_TT;
$dbname_res = DB_NAME_RES;
$dbname_gps = DB_NAME_GPS;
$dbname_logs = DB_NAME_LOGS;
$dbname_city_id = DB_NAME_CITY_ID;
$dbname_unique_station_id = DB_NAME_UNIQUE_STATION_ID;
$dbglobal = DB_GLOBAL;
$dbglobal_write = DB_GLOBAL_WRITE;
$dsetup_dbglobal = DSETUP_DB_GLOBAL;
$dbusername_superadmin = DB_USER_SUPERADMIN;
$dbpassword_superadmin = DB_PASS_SUPERADMIN;
$dbhost_superadmin = DB_SERVER_SUPERADMIN;
$dbname_superadmin = DB_NAME_SUPERADMIN;
$dbusername_archive = DB_USER_ARCHIVE;
$dbpassword_archive = DB_PASS_ARCHIVE;
$dbhost_archive = DB_SERVER_ARCHIVE;
$dbname_archive = DB_NAME_ARCHIVE;
$dbusername_time_att = DB_USER_TIME_ATT;
$dbpassword_time_att = DB_PASS_TIME_ATT;
$dbhost_time_att = DB_SERVER_TIME_ATT;
$dbname_time_att = DB_NAME_TIME_ATT;
$dbport_time_att = DB_PORT_TIME_ATT;

/**
 * DO NOT CHANGE THIS
 */
$url_financial_card = 'http://proizvodnja.d-logic.net/finans/financial_card.php';
$url_financial_invoice = 'http://proizvodnja.d-logic.net/finans/financial_invoice.php';

/**
 * SMTP CREDENTIALS
 */
define("MAIL_TRANSPORT_TYPE", 1); // 1 - Real send over smtp; 2 - Send to file
define("SMTP_SERVER", "mailcluster.loopia.se");
define('SMTP_MAIL_HOST', 'mailcluster.loopia.se');
define('SMTP_MAIL_CLIENT_HOSTNAME_OR_IP', 'buslogic.net');
define("SMTP_MAIL_USERNAME", "sender@d-logic.rs");
define("SMTP_MAIL_PASSWORD", "Nemampojma465");

/**
 * ONESIGNAL APP DATA
 */
define('ONESIGNAL_APP_ID', 'ask your administrator for app id');
define('ONESIGNAL_REST_API_KEY', 'ask your administrator for rest api key');
define('ONESIGNAL_SUBDOMAIN_NAME', 'ask your administrator for subdomain name');

/**
 * TICKETING APP URL
 */
$application_url = str_ireplace ( "/var/www/", "", realpath ( dirname ( __FILE__ ) ));
$application_url = str_ireplace ( "htdocs/", "", $application_url);
$application_url = str_ireplace ( "include/db_conf", "", $application_url);

define("APPLICATION_URL", (isset ( $_SERVER ['HTTPS'] ) ? "https://" : "http://") . $application_url);

define('PROGRAM_NAME', 'ticketing_old');

/**
 * Define the address for pdf creating service
 */
define('PDF_SERVICE_ADDRESS', '127.0.0.1:8081');

/**
 * adjust the parameters for global and local server as needed
 */

/*
 * define("TRANSLATION_GLOBAL_MYSQL_SERVER_ADDRESS", '192.168.4.213');
 * define("TRANSLATION_GLOBAL_MYSQL_SERVER_USERNAME", "ilija");
 * define("TRANSLATION_GLOBAL_MYSQL_SERVER_PASS", "stefan5656");
 * define("TRANSLATION_GLOBAL_MYSQL_DATABASE_NAME", "global");
 * define("TRANSLATION_LOCAL_MYSQL_DATABASE_NAME", "global");
 */

define("TRANSLATION_GLOBAL_MYSQL_SERVER_ADDRESS", '192.168.4.200');
define("TRANSLATION_GLOBAL_MYSQL_SERVER_USERNAME", "ilija");
define("TRANSLATION_GLOBAL_MYSQL_SERVER_PASS", "stefan5656");
define("TRANSLATION_GLOBAL_MYSQL_DATABASE_NAME", "global");
define("TRANSLATION_LOCAL_MYSQL_DATABASE_NAME", "global");
define("TRANSLATION_DEFAULT_LANGUAGE_ID", "1");

define('OVERRIDE_DEVICE_SETTINGS_EXPORT_FLAG', '1');
define('LIMIT_DEPARTURES_PER_LINE_FOR_TIMETABLE_EXPORT', '0');
define('ADDITIONAL_DISCOUNT', 10);

define('GOOGLE_API_KEY', 'AIzaSyD2hYWXXGhZhcyzvzMnn9ngV31GdDvrDdY');


define("DECIMAL_SEPARATOR",".");
define("THOUSANDS_SEPARATOR", ",");



//staviti na 1 ako hocete error logove samo upite za search
//staviti na 2 ako hocete error logove samo upite za search sa upitima za cenovnike
//staviti na 3 ako hocete error logove samo upite za search sa upitima za bus operatore
//staviti na 4 ako hocete error logove samo upite za search sa upitima za vremena polaska (recomended)
//staviti na 5 ako hocete error logove samo upite za search sa upitima za uzimanje drzava za svaki grad
//staviti na 6 ako hocete error logove samo upite za search sa upitom za polaske drugih prevoznika
//staviti na 10 ako hocete error logove samo za greske prilikom rezervacije
//staviti na 11 ako hocete error logove samo za greske prilikom rezervacije sa detaljima start i stop (recomended)
//staviti na 12 ako hocete error logove samo za greske prilikom rezervacije sa upitima
//staviti na 13 ako hocete error logove samo za greske prilikom rezervacije sa curl api pozivima
//staviti na 14 ako hocete error logove samo upite od booking apija za rezervacije
//define('REDVOZNJE_ERROR_LOG_OLD', 4);
