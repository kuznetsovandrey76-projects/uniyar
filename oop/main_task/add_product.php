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
	
	$query="INSERT INTO product(guest_id, product_name, product_text) VALUES ('".$_POST["id"]."','".$_POST["ProductName"]."','".$_POST["Comments"]."')";	
	$result = mysql_query($query);
			
	if ($result) {
			echo "Данные добавлены";
	}
	else {
			echo "Что-то пошло не так :)";  
	}
	
	
	mysql_close($link);
	?>

  </body>
</html>