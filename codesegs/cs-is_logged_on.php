<?php

// This is the rudimentary version -- which assumes that everything is stored
// in the session variable:
if ( !defined('MDLR_ROOT') ) { exit; } // Do not runn except as part of infrastructure:

// We fetch the parametric object:
$prams = $GLOBALS["mdlr_anchr"]->param;

// If the login prefix has not been set, explain that much and
// exit.
if ( !($prams->ssnp_login) )
{
  require MDLR_CNFERR . '/no-session-login-prefix.php';
  return false;
}

// Obtain the prefix of login info in the session:
$lgprfx = $prams->ssnp_login;

// Return FALSE if not logged on:
if ( !($_SESSION[$lgprfx . "on"]) ) { return false; }


// Set up user-info:
$userinf = new stdClass;
$userinf->euid= $_SESSION[$lgprfx . "euid"]; // Effective user-ID
$userinf->ruid= $_SESSION[$lgprfx . "ruid"]; // Real user-ID


// Attach the user-info to the anchor object:
$GLOBALS["mdlr_anchr"]->userinf = $userinf;


// Return success:
return true;

?>