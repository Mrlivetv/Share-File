<?php
//Configrations
include("include/config.php"); ?>

<!Doctype Html>
<html>
	<head>
		<title>All Files</title>
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
			.viewbtn{
				padding: 10px;
				color: #fff;
				background-color: #339ed4;
				width: 110px;
				border: none;
				cursor: pointer;
			}
			.downbtn{
			    padding: 10px;
			    color: white;
			    background-color: #FF3333;
			    width: 110px;
			    border: none;
			    cursor: pointer;
			}
		</style>
	</head>
	<body>
		<center>
			<h1>All Files</h1>
		
<button class='btn' onClick="window.location.href=window.location.href">Refresh</button>

<a href="admin.php"><button class="btn">Cancel</button></a>
<br></br>
			<?php
				$files = scandir("$folder");
		
				for($i = 2; $i < count($files); $i++){
					$path = "$folder/" . $files[$i];
					echo $files[$i] . " ";?>
				<p></p>	
				<a href="<?php echo $path; ?>"><input type="button" class="viewbtn" value="View"></a>

				<a href="<?php echo $path; ?>" download=""><button class="downbtn">Download</button></a>
					<br/><br/>
<?php
	}
				if(count($files)<=2){
					echo "No files Uploaded yet!";?><br/><br/><?php
				}
				?>			
			<p></p>
		</center>

<script>
function myCopyFunction() {
  var myText = document.createElement("textarea")
  myText.value = document.getElementById("theList").innerHTML;
  myText.value = myText.value.replace(/&lt;/g,"<");
  myText.value = myText.value.replace(/&gt;/g,">");
  document.body.appendChild(myText)
  myText.focus();
  myText.select();
  document.execCommand('copy');
  document.body.removeChild(myText);
}
</script>
<?php
// Check for update
include("chekUpdate.php"); 
?>
	</body>
</html>



