 <?php
//
// PHASE: BOOTSTRAP
//
define('BAKAOU_INSTALL_PATH', dirname(__FILE__));
define('BAKAOU_SITE_PATH', BAKAOU_INSTALL_PATH . '/site');

require(BAKAOU_INSTALL_PATH.'/src/CBakaou/bootstrap.php');

$ba = CBakaou::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$ba->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$ba->ThemeEngineRender();

 //   echo "<h1>I'm Lydia - index.php</h1>";
 //   echo "<p>You are most welcome!</p>";
 //   echo "<p>REQUEST_URI - " . htmlentities($_SERVER['REQUEST_URI']) . "</p>";
 //   echo "<p>SCRIPT_NAME - " . htmlentities($_SERVER['SCRIPT_NAME']) . "</p>";