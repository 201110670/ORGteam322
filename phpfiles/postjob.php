<?php include 'config.php' ?>
<?php
					$cat=$_GET['cat'];
					$subcat=$_GET['subcat'];
					$company=$_GET['company'];
					$jobtitle=$_GET['jobtitle'];
					$jobdes=$_GET['jobdes'];
					$skillsreq=$_GET['skillsreq'];
					$pref=$_GET['pref'];
					$address=$_GET['address'];
					$contact=$_GET['contact'];
	mysql_query("insert into postajob(category,subcategory,company,jobtitle,jobdescription,skillsreq,pref,address,contact) 
						values('".$cat."','".$subcat."','".$company."','".$jobtitle."','".$jobdes."','".$skillsreq."','".$pref."','".$address."','".$contact."')");
						
					
?>