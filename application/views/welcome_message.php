<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
 <title>jn-code.xyz</title>
</head>
<body>
 <center><h1>Uploading File JN-Code.xyz</h1></center>
 <?php echo $error;?>

 <?php echo form_open_multipart('my/aksi_upload');?>

 <input type="file" name="berkas" />

 <br /><br />

 <input type="submit" value="upload" />

</form>

</body>
</html>
