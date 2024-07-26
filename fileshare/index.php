<!Doctype Html>
<html>
	<head>
		<title>File Share</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Dosis:800|Montserrat:700" rel="stylesheet">

		<style type="text/css">
*{
  box-sizing: border-box;
  background-color: white;
  padding-top:;
}
                       body{
padding-top: 50px;
}
.title{
  color: #2d7eff;
  font: 2.5em "Dosis", sans-serif;
  letter-spacing: 1px;
  text-align: center;
}

@media (min-width: 417px) and (max-width: 567px) {
 .title {
    font-size: 3em;
  }
}
@media (min-width: 568px) {
 .title {
    font-size: 4em;
  }
}

			td{
				padding: 30px;
			}
			.btn{
				padding: 10px;
				color: #fff;
				background-color: #333333;
				width: 120px;
				border: 1px solid #35FFFF;
				cursor: pointer;
			}
.btn:hover {
color:white;
background: #FF4444;
border: 2px solid #35FFFF;
}
.border {
border: 2px solid skyblue;
  border-radius: 25px;
border-style: ridge;
background: #4d7eff;
}
		</style>
	</head>
	<body>
		<center>
			<h1 class="title" onClick="window.location.href='admin.php';">File Share</h1>
<div class="border">
<h4 style="color: skyblue; background:#4d7eff;">---------------------</h4>			
			<a href="send.php" ><input class="btn" type="button" value="Share" /></a><br><br/>

			<a href="receive.php" ><input class="btn" type="button" value="Receive" /></a>
<br>
<h4 style="color: skyblue; background:#4d7eff;">---------------------</h4>
</div>
		</center>
	</body>
</html>
