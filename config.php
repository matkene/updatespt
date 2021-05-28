<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$isAppOnLocalhost = true;

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'colleges_mo2';
$CFG->dbuser    = 'colleges_mo2';
$CFG->dbpass    = 'V.t2wP6wsmYYOOOrgXY35';
$CFG->prefix    = 'mo_';
$CFG->dboptions = array (
    'dbpersist' => 0,
    'dbport' => 3306,
    'dbsocket' => '0',
    'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'http://www.collegesofhealthtechnology.org';
$CFG->dataroot  = '/home/collegesofhealth/public_html/datafolder';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
