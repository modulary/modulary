<?php


// This function will run a code-segment -- that is, one of those
// PHP files in the 'codesegs' directory.

function mdlr_cseg ( $codeparam )
{
  return require ( MDLR_ROOT . "/codesegs/cs-" . $codeparam . ".php" );
}

?>