<?php
/*
 * Midknight Inventors Sign In configuration file.
 * Change any value as needed.
 */ 
 $dbuser = "chrisb32_web"; $dbpass = "km7xtrggcr3t99f"; $dbname = "chrisb32_signin";
/*
 * index.php
 */
$teamname = "MidKnight Inventors";

$rootdir = "/stuff/signin/";

/*
 * error.php
 */
$errorheader = "Oops, there was an error.";
$errorhelptext = "If you need help right now call or text Chris at (609) 533 1214."; //@todo remove this before public release

/*
 * admin.php
 */
$adminpassword = "afa8bcc80d2b1ab8192e35a2907674ae";

// displays errors
error_reporting(E_ERROR);
ini_set('display_errors', 1); //change to 0 to disable


/*
*
*
*Don't touch anything below this if you don't know what you're doing!
*
*/


function fancydie($message){
    setcookie('fancydie', $message, time() + (86400 * 30), "/"); // 86400 = 1 day
    redirect("error.php");
}

function message($message){
        setcookie('message', $message, time() + (86400 * 30), "/"); // 86400 = 1 day
    redirect("message.php");
}

function redirect($to = "index.php"){
    global $rootdir;
    exit(header('Location: '. $rootdir .$to));
}

function confirmAction($action, $name){
    $location = 'confirmation.php?a='. $action .'&u='. urlencode($name);
    redirect($location);
}
?>