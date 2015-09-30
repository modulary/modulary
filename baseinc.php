<?php
// baseinc.php - The loader of the most basic parts of the modulary
// system:

// We want to have sessions running before anything else happens:
session_start();


// Let us define the root directory of everything:
define('MDLR_ROOT',__DIR__);
define('MDLR_CNFERR',__DIR__ . '/cnferr');


// First, we create the object that modulary will use as it's common
// namespace - that we call the "anchor":
$mdlr_anchr = new stdClass;

// In the anchor object is another object where all parameters through which
// this infrastructure is called will be stored: Things such as database
// info, plugin search-info, and so forth.
$mdlr_anchr->param = new stdClass;



// Now we load the core-essential function:
require(__DIR__ . "/corefun/mn.php");


?>