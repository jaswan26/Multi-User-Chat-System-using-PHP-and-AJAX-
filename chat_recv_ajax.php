<?php

     require_once('dbconnect.php');

     db_connect();
     
     $sql = "SELECT *, date_format(chatdate,'%d-%m-%Y %r') as cdt from chat order by ID desc limit 200";
     $sql = "SELECT * FROM (" . $sql . ") as ch order by ID";
     $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
     
     // Update Row Information
     $msg="<table border='0' style='font-size: 10pt; color: blue; font-family: verdana, arial;'>";
     while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
     {
           $msg = $msg . "<tr><td>" . $line["cdt"] . "&nbsp;</td>" .
                "<td>" . $line["username"] . ":&nbsp;</td>" .
                "<td>" . $line["msg"] . "</td></tr>";
     }
     $msg=$msg . "</table>";
     
     echo $msg;

?>





