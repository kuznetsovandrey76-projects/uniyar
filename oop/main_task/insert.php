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
				
				if (!$link) {
					die("Error: ".mssql_get_last_message());
				}
		
				mysql_select_db($DBNAME, $link);
				$boolean_var = TRUE;
				
				if ($boolean_var){		
					$query= "INSERT INTO guest1(User_Name, E_mail, Message) VALUES ('".$_POST["UserName"]."','".$_POST["Email"]."','".$_POST["Message"]."')";	
					
					$result = mysql_query($query);
						
					if ($result) {
						echo "Данные добавлены";
					}
					else {
						echo "Что-то пошло не так :)";  
					}
				}
				
				mysql_close($link);
		?>
  </body>
</html>
