<?php

$ourclass = new class {
  
  protected $inityet = false;
  
  // So as to allow better admin access to accounts, Modulary
  // borrows the unicoid OS-level concept of real user-ID and
  // effective user-ID.
  protected $real_uid;
  protected $efec_uid;
  
  public function initera ( $lgraw )
  {
    if ( $this->inityet ) { return; }
    
    $this->real_uid = $lgraw['real_uid'];
    $this->efec_uid = $lgraw['efec_uid'];
    
    $this->inityet = true;
  }
};
$GLOBALS["mdlr_anchr"]->lgin_do = ourclass;

$ourclass->initera($_SESSION[$lgprfx]);

?>