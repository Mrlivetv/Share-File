<?php
//Configrations
include("include/config.php"); ?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>File Share</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<head>
    <style type="text/css">
body{
padding-top: 50px;
}

#myProgress {
  width: 100%;
  background-color: #ddd;
}
#progress-bar {
  width: 0%;
  height: 20px;
  background-color: #04AA6D;
  text-align: center;
  line-height: 20px;
  color: white;
}
            .btn-file {
                position: relative;
                overflow: hidden;
            }
            .btn-file input[type=file] {
                position: absolute;
                top: 0;
                right: 0;
                min-width: 100%;
                min-height: 100%;
                font-size: 100px;
                text-align: right;
                filter: alpha(opacity=0);
                opacity: 0;
                outline: none;
                background: white;
                cursor: inherit;
                display: block;
            }
        </style>
<style type="text/css">
			input[type="file"]{
				padding: 20px;
				background-color: #000001;
				color: #fff;
				border-radius: 5px;
				cursor: pointer;
			}
			td{
				padding: 30px;
			}
			.Share-btn{
				padding: 10px;
				color: #fff;
				background-color: #339ed4;
				width: 120px;
				border: none;
				cursor: pointer;
			}
			.Clear-btn{
			    padding: 10px;
			    color: white;
			    background-color: #FF3333;
			    width: 120px;
			    border: none;
			    cursor: pointer;
			}
			.btn{
				padding: 10px;
				color: #fff;
				background-color: #000;
				width: 120px;
				border: 1px solid #35FFFF;
				cursor: pointer;
			}
                   .btn:hover{
     color: white;
    background: #FF3333; 
     }
			.delbtn{
				padding: 5px;
				color: #fff;
				background-color: red;
				width: 80px;
				border: none;
				cursor: pointer;
			}
		</style>
        <link href="cssJS/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <script src="cssJS/jquery-3.1.1.min.js" type="text/javascript"></script>
      <script>
            $(function () {

                // We can attach the `fileselect` event to all file inputs on the page
                $(document).on('change', ':file', function () {
                    var input = $(this),
                            numFiles = input.get(0).files ? input.get(0).files.length : 1,
                            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                    input.trigger('fileselect', [numFiles, label]);
                });

                // We can watch for our custom `fileselect` event like this
                $(document).ready(function () {
                    $(':file').on('fileselect', function (event, numFiles, label) {

                        var input = $(this).parents('.input-group').find(':text'),
                                log = numFiles > 1 ? numFiles + ' files selected' : label;

                        if (input.length) {
                            input.val(log);
                        } else {
                            if (log)
                                alert(log);
                        }

                    });
                });

            });

            function hideSub() {
              $('#deleteZip').prop('checked', false);
                if ($('#sub').hasClass('hidden')) {
                    $('#sub').removeClass('hidden');
                } else {
                    $('#sub').addClass('hidden');
                }
            }
        </script>
      
        <script type="text/javascript" src="cssJS/md5.js"></script>
        <script type="text/javascript" src="cssJS/upload.js"></script>
      </head>
<body>
        <div class="col-md-3">
            <form id="formUpload" action="" method="post" enctype="multipart/form-data" multiple>
                <div class="container" style="margin-top: 20px;">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <h4 style="text-align: center;">File Share</h4>
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary">
                                    Select&hellip; <input id="formUpload-file" type="file" name="file" data-name="" data-end="" style="display: none;" multiple>
</span>
                               
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <span class="help-block">
      Select  files and upload.
                        </span>
                        <button id="submit-btn" type="submit" class="btn btn-primary">upload</button><br>
<a href="Upload from URL/index.php">Upload from URL</a>
                       <!-- <input type="checkbox" name="extractZip" id="extractZip" onclick="hideSub();">&nbsp;Unzip after upload.<br> -->
                       <span style="display: none;" id="sub" class="hidden"><input type="checkbox" name="deleteZip" id="deleteZip">&nbsp;Delete the Zip after extraction.</span><br>

<h4>Progress:</h4>
<div id="myProgress">
  <div id="progress-bar"></div>
</div>
              <br>
                        <div style="display: none"  id="statusBlock" class="help-block text-success" style="height: 40px; width: 100%; line-height: 40px; vertical-align: middle; text-align: center;">Welcome to UnZziper,&nbsp;<small>Designed by Shankha&copy;</div>
                    </div>
                </div>
            </form>

        </div>
<br>
	
		
<!--		
<button onClick="window.location.href=window.location.href">Refresh</button>
<br/>
-->

<center><a href="index.php"><button class="btn">Cancel</button></a></center>
<p></p>
<?php
$files = scandir("$folder");
	
	for($i = 2; $i < count($files); $i++){
           $filename = $files[$i];
		echo "$filename";?><form action="?" method="POST"><button style="display: none;" name="delete" class="delbtn" value="<?php echo $files[$i]; ?>">Delete</button></form><?php
	}
	if(isset($_POST['delete'])){
		$path = "$folder/" . $_POST['delete'];
		unlink($path);
      echo "<script type='text/javascript'>alert('Deleted Sucessfully!');</script>";
       echo "<script type='text/javascript'> document.location = 'send.php'; </script>";

	}

if(count($files)<=2){
					echo "No files Uploaded yet!";?><br/><br/><?php
				}
?>

</body>



