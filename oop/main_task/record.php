<html>
<head>
	<meta content="2,index.php" http-equiv="refresh">
</head>
<body>
	<?php
	$DBHOST = 'eu-cdbr-west-02.cleardb.net';  /* Хост, к которому мы подключаемся */ 
	$DBUSER = 'b8f651ac54cc9d';               /* Имя пользователя */  
	$DBPASSWD = '7aeee609';                   /* Используемый пароль */  
	$DBNAME = 'heroku_0ad731d0d469fe4';       /* База данных для запросов по умолчанию */ 
	$link = mysql_connect($DBHOST, $DBUSER, $DBPASSWD);

	if(!$link) {
		die('Connection failure');
	}		

	mysql_select_db($DBNAME, $link);
	
	$fh = fopen('data.doc', 'w'); 
	/* insert field values into data.txt */ 
	$result = mysql_query("SELECT User_Name, product_name FROM guest1 left join product on guest1.id = product.guest_id"); 
	while ($row = mysql_fetch_array($result)) { 
		$num = mysql_num_fields($result) ; 
		$last = $num - 1; 
		for($i = 0; $i < $num; $i++) { 
			fwrite($fh, $row[$i]); 
			if ($i != $last) { 
				fwrite($fh, ","); 
			} 
		} 
		fwrite($fh, "\n"); 
	} 
	fclose($fh); 
	?>

</body>
</html>
