<?php
header('Access-Control-Allow-Origin: *');
include_once("config.php");
$result =mysql_query("select * from postafeeds") ;

while($row = mysql_fetch_array($result)){

  
  echo'
    
        <h3>NAME:  &nbsp;&nbsp;&nbsp;'.$row['name'].'</h3>
		<h3>POSITION:   &nbsp;&nbsp;&nbsp;'.$row['position'].'</h3>
		<h3>COMPANY: &nbsp;&nbsp;&nbsp;'.$row['company'].'</h3>
		<h3>DATE HIRED: &nbsp;&nbsp;&nbsp;'.$row['datehired'].'</h3>
		<p>MESSAGE:  &nbsp;&nbsp;&nbsp;<font size="3px">'.$row['message'].'</font></p>
		<p>COUNTRY: &nbsp;&nbsp;&nbsp;<font size="3px">'.$row['country'].'</font></p>

____________________________
		';
}
?>
