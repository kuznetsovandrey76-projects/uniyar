<html>
  <head>
	<meta content="2,view.php?id=<?php echo $_POST['idg']?>" http-equiv="refresh">
  </head>
  <body>
    <?php
	$link = mysql_connect('mysql.lan','guest','');
					if (!$link) {
						die("������ �����������: ".mssql_get_last_message());
						}
			
					mysql_select_db('test',$link);
	
	$query="DELETE FROM product where id = '".$_POST['id']."'";	
	$result = mysql_query($query);
			
	if ($result) {
		echo "������ �������";
	}
	else {
		echo "������ ";  
	}
	
	mysql_close($link);
	?>

  </body>
</html>
