 <?php
//
// PHASE: BOOTSTRAP
//
define('SAMIR_INSTALL_PATH', dirname(__FILE__));
define('SAMIR_SITE_PATH', SAMIR_INSTALL_PATH . '/site');

require(SAMIR_INSTALL_PATH.'/src/CSamir/bootstrap.php');

$sa = CSamir::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$sa->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$sa->ThemeEngineRender();

 //   echo "<h1>I'm Lydia - index.php</h1>";
 //   echo "<p>You are most welcome!</p>";
 //   echo "<p>REQUEST_URI - " . htmlentities($_SERVER['REQUEST_URI']) . "</p>";
 //   echo "<p>SCRIPT_NAME - " . htmlentities($_SERVER['SCRIPT_NAME']) . "</p>";