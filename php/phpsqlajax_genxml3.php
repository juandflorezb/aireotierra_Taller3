<?php
require("phpsqlajax_dbinfo.php");

function parseToXML($htmlStr) 
{ 
$xmlStr=str_replace('<','&lt;',$htmlStr); 
$xmlStr=str_replace('>','&gt;',$xmlStr); 
$xmlStr=str_replace('"','&quot;',$xmlStr); 
$xmlStr=str_replace("'",'&#39;',$xmlStr); 
$xmlStr=str_replace("&",'&amp;',$xmlStr); 
return $xmlStr; 
} 

// Opens a connection to a MySQL server
$connection=mysql_connect ("localhost", "root", '');
if (!$connection) {
  die('Not connected : ' . mysql_error());
}

// Set the active MySQL database
$db_selected = mysql_select_db("yourbeer", $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Select all the rows in the markers table
$query = "SELECT * FROM locations WHERE 1";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

// Echo result as json 
echo '{"result":[';

while ($row = mysql_fetch_array($result)) {

  $jtemp['name'] = $row['name'];
  $jtemp['lat'] = $row['lat'];
  $jtemp['lng'] = $row['lng'];
  $jtemp['type'] = $row['type'];

  //header("Content-Type: text/json");
  echo json_encode($jtemp);
  echo ',';
	//return $jtemp;
}

echo '0]}';

?>