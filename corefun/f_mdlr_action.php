<?php

// The mdlr_action() function is the function called
// by the launch script after all the configurational
// initiations.

function mdlr_action ( ) {
  if ( mdlr_cseg('is_logged_on') )
  {
    return mdlr_cseg('act_as_logged_on');
  }
  return mdlr_cseg('but_not_logged_on');
}


?>