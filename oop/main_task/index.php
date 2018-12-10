  т<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="100,index.php" http-equiv="refresh">
    <!--
   
    -->
     <link rel="stylesheet" href="css/style.css">
    <title>Customer base</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="signin.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	<script src='jquery.js' type='text/javascript'></script>
	 
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<div class="container">
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Customer base</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
        <h1 class="form-signin-heading">  -   </h1>
		<div><a href="#win3" class="button">Create</a></div>
		<div><a href="record.php" class="button">Record .doc</a></div>
		<div><a href="record_.php" class="button">Record .xls</a></div>
		<?php
		echo '<form name="add_" action="insert.php" method="post">
					<a href="#x" class="overlay" id="win3"></a>
					<div class="popup">
					  <h2> Редактировать </h2>
					<a class="close" href="#close"></a>
					
					<label for="inputUser" class="sr-only">Введите имя</label>
					<input type="text" id="inputUser" name="UserName" placeholder="Введите имя" class="form-control" placeholder="Введите имя" required autofocus>
					
					<label for="inputEmail" class="sr-only">Email address</label>
					<input type="email" id="inputEmail" name="Email" placeholder="Введите email" class="form-control" placeholder="Введите email" required autofocus>
					
					<label for="inputPassword" class="sr-only">Message</label>
					<input type="text" id="inputPassword" name="Message" placeholder="Введите сообщение" class="form-control" placeholder="Введите сообщение" required>
					<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Обновить</button>
					</div></form>';
		?>
	<div>
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
					  <th>Name</th>
					  <th>E-mail</th>
					  <th>Message</th>
					  <th>Update</th>
					  <th>Delete</th>
					  <th>Add product</th>
					  <th>View product</th>
					</tr>
				</thead>
				<tbody>
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
					$query = "SELECT id, User_Name, E_mail, Message FROM guest1 ORDER BY id DESC";
					$rsc = mysql_query($query);
		
					while($rezult=mysql_fetch_array($rsc)){
					echo  '<tr><td>'.$rezult['User_Name'].'</td><td>'.$rezult['E_mail'].'</td><td>'.$rezult['Message'].'</td><td> <a href="#win1?'.$rezult['id'].'" class="button">Редактировать</a></td><td> <a href="#win2?'.$rezult['id'].'" class="button">Удалить</a></td> <td> <a href="#win4?'.$rezult['id'].'" class="button">Add product</a></td> <td><a href="view.php?id='.$rezult['id'].'" class="button">View product</a></td></tr>';
					echo '<form name="update" action="update.php" method="post">
					<a href="#x" class="overlay" id="win1?'.$rezult['id'].'"></a>
					<div class="popup">
					  <h2> Update </h2>
					<a class="close"title="Çàêðûòü" href="#close"></a>
					<input type="hidden" id="inputId" name="id" value="'.$rezult['id'].'" class="form-control">
					
					<label for="inputUser" class="sr-only">Введите имя</label>
					<input type="text" id="inputUser" name="UserName" value="'.$rezult['User_Name'].'" class="form-control" placeholder="Введите имя" required autofocus>
					
					<label for="inputEmail" class="sr-only">Email address</label>
					<input type="email" id="inputEmail" name="Email" value="'.$rezult['E_mail'].'" class="form-control" placeholder="Введите email" required autofocus>
					
					<label for="inputPassword" class="sr-only">Message</label>
					<input type="text" id="inputPassword" name="Message" value="'.$rezult['Message'].'" class="form-control" placeholder="Введите сообщение" required>
					<button class="btn btn-lg btn-primary btn-block" href="update.php" name="submit" type="submit">Обновить</button>
					</div></form>';
						 
					echo '<form name="delete" action="delete.php" method="post">
					<a href="#x" class="overlay" id="win2?'.$rezult['id'].'"></a>
					<div class="popup">
					  <h4> Are you sure you want to delete? </h4>
					<a class="close"title="Çàêðûòü" href="#close"></a>
					<input type="hidden" id="inputId" name="id" value="'.$rezult['id'].'" class="form-control">
					<button class="btn btn-lg btn-primary btn-block" href="delete.php" name="submit" type="submit">Удалить</button>
					</div></form>';
					
					echo '<form name="add_product" action="add_product.php" method="post">
					<a href="#x" class="overlay" id="win4?'.$rezult['id'].'"></a>
					<div class="popup">
					  <h2> Add product </h2>
					<a class="close"title="Çàêðûòü" href="#close"></a>
					<input type="hidden" id="inputId" name="id" value="'.$rezult['id'].'" class="form-control">
					
					<label for="inputUser" class="sr-only">Product name</label>
					<input type="text" id="inputUser" name="ProductName" class="form-control" placeholder="Product name" required autofocus>
					
					<label for="inputEmail" class="sr-only">Ñomments</label>
					<input type="text" id="inputComments" name="Comments"  class="form-control" placeholder="Comments" required autofocus>
					
					<button class="btn btn-lg btn-primary btn-block" href="add_product.php" name="submit" type="submit">Add</button>
					</div></form>';
						 }	 
		
					mysql_close($link);
				   ?>
				</tbody>
			</table>
		</div>

	</div>
  </body>
</html>