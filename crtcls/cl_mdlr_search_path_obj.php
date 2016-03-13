<?php

class mdlr_search_path_obj {
  
  protected $inited = false;
  protected $ptlis = array();
  protected $tst_function;
  
  public function initio ( $test_fnc ) {
    if ( $this->inited ) { return; }
    
    $this->tst_function = Closure::bind($test_fnc,$this,$this);
    
    $this->inited = true;
  }
  
  public function ptadd ( $baseloc, $items )
  {
    foreach ( $items as $eachit )
    {
      $targo = $eachit;
      if ( substr($eachit,0,1) != '/' )
      {
        $targo = ( $baseloc . '/' . $eachit );
      }
      
      if ( file_exists($targo) )
      {
        if ( is_dir($targo) )
        {
          array_push($this->ptlis,realpath($targo));
        }
      }
    }
  }
  
  public function searchfor ( $goal )
  {
    foreach ( $this->ptlis as $eachdir )
    {
      $suspf = ( $eachdir . '/' . $goal );
      if ( call_user_func($this->tst_function,$suspf) ) { return $suspf; }
    }
    return false;
  }
  
  public function searchfrdir ( $goal )
  // This function is just like searchfor() - only instead of returning the
  // actual module, it returns the location on the search path where the
  // module resides.
  {
    foreach ( $this->ptlis as $eachdir )
    {
      $suspf = ( $eachdir . '/' . $goal );
      if ( call_user_func($this->tst_function,$suspf) ) { return $eachdir; }
    }
    return false;
  }
  
};


?>