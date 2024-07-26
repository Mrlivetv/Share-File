<?php
// Turn off all error reporting
error_reporting();

//Configrations
include("../include/config.php"); 

if (isset($_POST["submit"])) {
  $file_Format = $_POST["file_Format"];
  $file_GET_url = $_POST["file_url"];
  $file_url = "$file_GET_url#/$file_Format";
  $file_name = $_POST["file_name"];

  if (filter_var($file_url, FILTER_VALIDATE_URL)) {
    $pathinfo = pathinfo($file_url);
    if (isset($pathinfo["extension"])) {
      $file_name .= "." . $pathinfo["extension"];
      $file_content = file_get_contents($file_url);
      $fopen = fopen("../$folder/" . $file_name, "w");
      $fwrite = fwrite($fopen, $file_content);
      fclose($fopen);
      if ($fwrite) {
        $msg["success"] = "File Uploaded Successfully.";
        $_POST["file_url"] = "";
        $_POST["file_name"] = "";
      } else {
        $msg["error"] = "Something went wrong. Please try again.";
      }
    } else {
      $msg["error"] = "Please enter a file URL.";
    }
  } else {
    $msg["error"] = "Please enter a valid URL.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload from URL</title>
<link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="remote-upload">
        <h2 class="title">Upload from URL</h2>
        <?php if (isset($msg["success"])) { ?>
        <p style="color:green;margin-bottom: 1rem;"><?php echo $msg["success"]; ?> 
<a href="<?php echo "../$folder/$file_name";?>">view</a></p>
        <?php } ?>
        <form action="" method="post">
          <div class="inputBox">
            <label for="file_url" class="form-label">File URL</label>
            <input
              type="text"
              id="file_url"
              class="form-control"
              name="file_url"
              placeholder="https://exampleurl.com/file1565"
              value="<?php if (isset($_POST["file_url"])) { echo $_POST["file_url"]; } ?>"
              required
            />
            <?php if (isset($msg["error"])) { ?>
            <small style="color:red;"><?php echo $msg["error"]; ?></small>
            <?php } ?>
          </div>
          <div class="inputBox">
            <label for="file_name" class="form-label">File Name</label>
            <input
              type="text"
              id="file_name"
              class="form-control"
              name="file_name"
              value="<?php if (isset($_POST["file_name"])) { echo $_POST["file_name"]; } ?>"
              placeholder="filename"
              required
            />
          </div>


<div class="inputBox">
            <label for="file_type" class="form-label">File Type</label>

<center>    
<select name="file_Format" id="file_Format" class="form-control" style="width: 9.5em;" required>
<option value=''>Select</option>
<?php
$file_Format = $_POST['file_Format'];

// $file_Format = "Not Available";


// Include 'all-formats.php' File Here
include("include/all-formats.php");


foreach ($All_Formats as $key => $format) {
    if ($format == $file_Format) {
        echo('<option selected="selected" value='.$format.'>'.$format.'</option>');
    } else {
        echo('<option value='.$format.'>'.$format.'</option>');
    }
}

?>
</select>
</center>
          </div>


          <div class="inputBox">
<center>
            <button class="btn" name="submit" type="submit">Upload Now!</button>

<a href="#" ><button onclick="location.href = '../send.php';" class="btn">Cancel</button></a>
 </form>
</center>
          </div>
</center>


<p style="padding-bottom: 5px;"></p>
</center>

      </div>
    </div>
  </body>
</html>
