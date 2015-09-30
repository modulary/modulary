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
require_once(__DIR__ . "/f_mdlr_action.php");

// This function will run a code-segment -- that is, one of those
// PHP files in the 'codesegs' directory.
require_once(__DIR__ . "/f_mdlr_cseg.php");

?>