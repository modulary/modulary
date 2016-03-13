<?php

// This is the rudimentary version -- which assumes that everything is stored
// in the session variable:
if ( !defined('MDLR_ROOT') ) { exit; } // Do not runn except as part of infrastructure:

// We fetch the parametric object:
$prams = $GLOBALS["mdlr_anchr"]->param;

// If the login prefix has not been set, explain that much and
// exit.
if ( !isset($prams->ssnp_login) )
{
  require MDLR_CNFERR . '/no-session-login-prefix.php';
  exit(2);
}

// Obtain the prefix of login info in the session:
$lgprfx = $prams->ssnp_login;

// Make sure the login sub-session exists:
$wearegood = array_key_exists($lgprfx,$_SESSION);
if ( $wearegood ) { $wearegood = isset($_SESSION[$lgprfx]); }
if ( $wearegood ) { $wearegood = is_array($_SESSION[$lgprfx]); }
if ( !($wearegood) )
{
  return false;
}

if ( !isset($GLOBALS["mdlr_anchr"]->lgin_do) )
{
  require(realpath(__DIR__ . '/cls-lgin_do.php'));
}

return true;

?>