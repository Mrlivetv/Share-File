<?php
//Configrations
include("include/config.php"); ?>

<!Doctype html>
<html>
	<head>
		<title>Delete Files</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
<style type="text/css">
			.delbtn{
				padding: 5px;
				color: #fff;
				background-color: red;
				width: 80px;
				border: none;
				cursor: pointer;
			}
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

<head>
<body>
<center>
<h1>Delete Files</h1>

<button class='btn' onClick="window.location.href=window.location.href">Refresh</button>

<a href="admin.php"><button class="btn">Cancel</button></a>

<br><br>
<?php
	$files = scandir("$folder");
	
	for($i = 2; $i < count($files); $i++){
		echo $files[$i] . " ";?><br><br><form action="?" method="POST"><button name="delete" class="delbtn" value="<?php echo $files[$i]; ?>">Delete</button></form><br/><br/><?php
	}
	if(isset($_POST['delete'])){
		$path = "$folder/" . $_POST['delete'];
		unlink($path);
echo "<script type='text/javascript'>alert('File successfully Deleted!');</script>";
echo "<script type='text/javascript'> document.location = 'delete.php'; </script>";
} 
else if(isset($_POST['delete'])){
  echo "<script type='text/javascript'>alert('Failed to delete or File does not exist!');</script>";
echo "<script type='text/javascript'> document.location = 'delete.php'; </script>";
	}

if(count($files)<=2){
					echo "No files Uploaded yet!";?><br/><br/><?php
				}
?>				

</center>
<?php
// Check for update
include("chekUpdate.php"); 
?>
</body>
</html>


