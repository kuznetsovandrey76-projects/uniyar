<html>
<head>	
	<meta content="2,index.php" http-equiv="refresh">
</head>
<body>
<? 
	$link = mysql_connect('mysql.lan', 'guest', '');
	if(!$link) {
		die('Connection failure');
	}		
	mysql_select_db('test', $link);
	 
	$query = "SELECT * FROM guest"; 
	
	$tbl = mysql_query($query); 
	echo $query;
	if(!$tbl) exit("error - ".mysql_error()); 
	if(mysql_num_rows($tbl)) 
	{ 
		$line = array(); 
		while($result = mysql_fetch_row($tbl)) 
		{ 
		  $line[] = implode(";", $result); 
		} 
		file_put_contents("file.xls", implode("\r\n", $line));
	}
?> 

</body>
</html>
