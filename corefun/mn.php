<?php
// The core essential functions of the Modulary infrastructure
// are the ones that must be loaded for anything else in Modulary
// to work.
// The design-philosophy of Modulary calls for these functions
// to be minimal - as it is believed that as much as possible
// should be loaded lazily.
//
// This also means that, when possible, these core functions (and
// other parts of modulary) should be designed to support that --
// and things should be kept out of main namespaces whenever possible.
// By the way, this is also whily the "mdlr_anchr" global is an object.

if ( !defined('MDLR_ROOT') ) { exit; }

// The mdlr_action() function is the function called by the launch
// script after all the configurational initiations.
require_once(realpath(__DIR__ . "/f_mdlr_action.php"));

// The mdlr_basefile() function simply echoes the filename
// of the launch file.
require_once(realpath(__DIR__ . "/f_mdlr_basefile.php"));

// This function will run a code-segment -- that is, one of those
// PHP files in the 'codesegs' directory.
require_once(realpath(__DIR__ . "/f_mdlr_cseg.php"));


// This function does a lot like what PHP's built-in include() does
// -- except that it sets a largely-independent variable-space - by
// virtue of being a function.
//   Global access to $mdlr_anchr is auto-arranged by this function,
// though, as any Modulary code must have access to it. 
function mdlr_isovar ( $isofl )
{
  global $mdlr_anchr;
  return include($isofl);
}

?>