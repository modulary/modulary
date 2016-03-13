<?php

return function ( $suspecta )
{
  if ( !file_exists($suspecta . '/main_obj.php') ) { return false; }
  if ( !is_file($suspecta . '/main_obj.php') ) { return false; }
  
  return true;
}

?>