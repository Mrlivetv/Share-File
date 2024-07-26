<!Doctype html>
<html>
	<head>
		<title>Admin Panel</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<style type="text/css">
			.btn{
				padding: 10px;
				color: #fff;
				background-color: #4db6ac;
				width: 120px;
				border: none;
				cursor: pointer;
                                margin-bottom:5px;
			}
		
		</style>
	</head>
	<body>
       <center>
<h2>Admin Panel<h2>

<br>
<button class='btn' onClick="window.location.href=window.location.href">Refresh</button>
<button class='btn' OnClick="window.location.href='index.php';">Cancel</button>
<br>		

<a href="all-files.php"><input type="button" class='btn' value="View All" /></a>
<a href="delete.php"><input type="button" class='btn' value="Delete" /></a>

<a href="send.php"><input type="button" class='btn' value="Share" /></a>
<a href="receive.php"><input type="button" class='btn' value="Receive" /></a>

</center>
	</body>
</html>
