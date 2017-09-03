<?php


function db_connect()
{

  date_default_timezone_set("Asia/Calcutta");

  $link = mysql_connect("localhost", "root", "")
            or die('Could not connect: ' . mysql_error());
  mysql_select_db("db") or die('Could not select database');
  return true;
}



function quote($strText)
{
    $Mstr = addslashes($strText);
    return "'" . $Mstr . "'";
}


function isdate($d)
{
   $ret = true;
   try
   {
       $x = date("d",$d);
   }
   catch (Exception $e)
   {
       $ret = false;
   }
   echo $x;
   return $ret;
}

 
?>
