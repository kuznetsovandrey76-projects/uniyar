<html>
  <head>
  
	<meta content="2,view.php?id=<?php echo $_POST['idg']?>" http-equiv="refresh">
  
  </head>
  <body>
    <?php
	$link = mysql_connect('mysql.lan','guest','');
					if (!$link) {
						die("Ошибка подключения: ".mssql_get_last_message());
						}
			
	mysql_select_db('test',$link);
	
	$query="UPDATE product SET product_name = '".$_POST["UserName"]."', product_text = '".$_POST["Email"]."' where id = '".$_POST['id']."'";	
	$result = mysql_query($query);
			
	if ($result) {
		echo "Данные отредактированы";
	}
	else {
		echo "Ошибка ";  
	}
	
	
	mysql_close($link);
	?>
  </body>
</html>
