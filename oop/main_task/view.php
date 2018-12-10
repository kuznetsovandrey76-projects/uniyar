<html>
<head>
    <meta charset='windows-1251'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="100,view.php" http-equiv="refresh">
    <!-- ���� 3 ����-���� ** ������ ������ � ������ ������� � ������; ����� ������ ������������ ������� *�����* ��� ���� -->  
    <title>�������� �����</title>
	<style type="text/css">
	button{
		height: 40px;
		width: 50px;
	}
    table { 
		margin: 50px 50px 50px 50px!important;
	}
	/* ������� ����� ���� ���������� � ���������� ����  */
.overlay {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 10;
    display: none;
/* ��� ���������� */
    background-color: rgba(0, 0, 0, 0.65);
    position: fixed; /* ������������� ���������������� */
    cursor: default; /* ��� ������� */
}
/* ���������� ���� ���������� */
.overlay:target {
    display: block;
}
/* ����� ���������� ���� */
.popup {
    top: -100%;
    right: 0;
    left: 50%;
    font-size: 14px;
    z-index: 20;
    margin: 0;
    width: 85%;
    min-width: 320px;
    max-width: 600px;
/* ������������� ����������������, ���� ��������� ��� ��������� */
    position: fixed;
    padding: 15px;
    border: 1px solid #383838;
    background: #fefefe;
/* ���������� ����� */
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
    font: 14px/18px 'Tahoma', Arial, sans-serif;
/* ������� ���� */
    -webkit-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -moz-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -ms-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -webkit-transform: translate(-50%, -500%);
    -ms-transform: translate(-50%, -500%);
    -o-transform: translate(-50%, -500%);
    transform: translate(-50%, -500%);
    -webkit-transition: -webkit-transform 0.6s ease-out;
    -moz-transition: -moz-transform 0.6s ease-out;
    -o-transition: -o-transform 0.6s ease-out;
    transition: transform 0.6s ease-out;
}
/* ���������� ��������� ���� */
.overlay:target+.popup {
    -webkit-transform: translate(-50%, 0);
    -ms-transform: translate(-50%, 0);
    -o-transform: translate(-50%, 0);
    transform: translate(-50%, 0);
    top: 20%;
}
/* ��������� ������ �������� */
.close {
    top: -10px;
    right: -10px;
    width: 20px;
    height: 20px;
    position: absolute;
    padding: 0;
    border: 2px solid #ccc;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    border-radius: 15px;
    background-color: rgba(61, 61, 61, 0.8);
    -webkit-box-shadow: 0px 0px 10px #000;
    -moz-box-shadow: 0px 0px 10px #000;
    box-shadow: 0px 0px 10px #000;
    text-align: center;
    text-decoration: none;
    font: 13px/20px 'Tahoma', Arial, sans-serif;
    font-weight: bold;
    -webkit-transition: all ease .8s;
    -moz-transition: all ease .8s;
    -ms-transition: all ease .8s;
    -o-transition: all ease .8s;
    transition: all ease .8s;
}
.close:before {
    color: rgba(255, 255, 255, 0.9);
    content: "X";
    text-shadow: 0 -1px rgba(0, 0, 0, 0.9);
    font-size: 12px;
}
.close:hover {
    background-color: rgba(252, 20, 0, 0.8);
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);    
}
/* ����������� ������ ���� */
.popup img {
    width: 100%;
    height: auto;
}
/* ��������� �����/������ */
.pic-left, 
.pic-right {
    width: 25%;
    height: auto;
}
.pic-left {
    float: left;
    margin: 5px 15px 5px 0;
}
.pic-right {
    float: right;
    margin: 5px 0 5px 15px;
}
/* �������� �-�����, ������ */
.popup embed, 
.popup iframe {
    top: 0;
    right: 0;
    bottom: 0; 
    left: 0; 
    display:block;
    margin: auto;
    min-width: 320px;
    max-width: 600px;
    width: 100%;
}
.popup h2 { /* ��������� 2 */
    margin: 0;
    color: #008000;
    padding: 5px 0px 10px;
    text-align: left;
    text-shadow: 1px 1px 3px #adadad;
    font-weight: 500;
    font-size: 1.4em;
    font-family: 'Tahoma', Arial, sans-serif;
    line-height: 1.3;
}
/* ��������� */
.popup p {margin: 0; padding: 5px 0}
    </style>
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="signin.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	<script src='jquery.js' type='text/javascript'></script>
	 
  </head>
<body>
	<!-- �� jQuery (��������� ��� Bootstrap - � JavaScript �������) -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- �������� ��� ���������������� ������� (����), ��� �������� ��������� ����� �� ���� ������������� -->  
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
            <li class="active"><a href="index.php">Goods base</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
   <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th>Product name</th>
                  <th>Comments</th>
				  <th>Update</th>
				  <th>Delete</th>
                </tr>
            </thead>
            <tbody>
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
	
				$query="select product.id as idp, product_name, product_text, guest1.id as idg from product left join guest1 on guest1.id = product.guest_id where guest_id = '".$_GET['id']."'";
				$rsc = mysql_query($query);
	
				while($rezult=mysql_fetch_array($rsc)){
				echo  '<tr><td>'.$rezult['product_name'].'</td><td>'.$rezult['product_text'].'</td><td> <a href="#win1?'.$rezult['idp'].'" class="button">�������������</a></td><td> <a href="#win2?'.$rezult['idp'].'" class="button">�������</a></td> </tr>';
				echo '<form name="update" action="update_.php" method="post">
					<a href="#x" class="overlay" id="win1?'.$rezult['idp'].'"></a>
					<div class="popup">
					  <h2> Update </h2>
					<a class="close" href="#close"></a>
					<input type="hidden" id="inputId" name="id" value="'.$rezult['idp'].'" class="form-control"> 
					<input type="hidden" id="inputId" name="idg" value="'.$rezult['idg'].'" class="form-control"> 
					
					<label for="inputUser" class="sr-only">������� ���</label>
					<input type="text" id="inputUser" name="UserName" value="'.$rezult['product_name'].'" class="form-control" placeholder="������� ���" required autofocus>
					
					<label for="inputEmail" class="sr-only">Email address</label>
					<input type="text" id="inputEmail" name="Email" value="'.$rezult['product_text'].'" class="form-control" placeholder="������� email" required autofocus>
					
					<button class="btn btn-lg btn-primary btn-block" href="update_.php" name="submit" type="submit">��������</button>
					</div></form>';
						 
					echo '<form name="delete" action="delete_.php" method="post">
					<a href="#x" class="overlay" id="win2?'.$rezult['idp'].'"></a>
					<div class="popup">
					  <h4> Are you sure you want to delete? </h4>
					<a class="close" href="#close"></a>
					<input type="hidden" id="inputId" name="id" value="'.$rezult['idp'].'" class="form-control">
					<input type="hidden" id="inputId" name="idg" value="'.$rezult['idg'].'" class="form-control"> 
					<button class="btn btn-lg btn-primary btn-block" href="delete_.php" name="submit" type="submit">�������</button>
					</div></form>';
				}
				mysql_close($link);
			   ?>
            </tbody>
        </table>
    </div>

</body>
</html>
