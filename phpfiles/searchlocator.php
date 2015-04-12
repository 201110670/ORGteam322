
<?php
header('Access-Control-Allow-Origin: *');
include_once("config.php");

$categ = $_GET['q'];
$result =mysql_query("select * from postajob where  category like '%$categ%' or subcategory like '%$categ%' or jobtitle like '%$categ%' or jobdescription like '%$categ%' ") ;

while($row = mysql_fetch_array($result)){

  
  echo'
    <ul data-role="listview" data-inset="true">
<li>
        <h3>'.$row['category'].'</h3>
		<h3>'.$row['subcategory'].'</h3>
		<h3>'.$row['company'].'</h3>
		<h3>'.$row['jobtitle'].'</h3>
		<p><font size="3px">'.$row['jobdescription'].'</font></p>
		<p><font size="3px">'.$row['skillsreq'].'</font></p>
		<p><font size="3px">'.$row['pref'].'</font></p>
		<h3>'.$row['address'].'</h3>
		<h3>'.$row['contact'].'</h3>
		<h3>AgencyName:</h3>
		<h3>'.$row['agency'].'</h3>
</li>
</ul>
____________________________
		';
}
?>
