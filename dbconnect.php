<?php


function db_connect()
{

  date_default_timezone_set("Asia/Calcutta");

  $link = mysql_connect("localhost", "root", "")       //change the username and password according to your's
            or die('Could not connect: ' . mysql_error());
  mysql_select_db("db") or die('Could not select database');// replace db with your database
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
