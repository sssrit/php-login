<?php
session_start();
if(strlen($_SESSION['uid'])=="")
{
  header('location:logout.php');
} else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Registraion using PHP OOPs Concept</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assests/style.css" rel="stylesheet">
    <script src="assests/css/bootstrap.min.css"></script>
</head>
<body>
  <div class="container">
<form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="" align="center">Welcome Back : <?php  echo  $_SESSION['fname'];?></legend>
    </div>

    <div class="control-group" align="center">
      <!-- Button -->
      <div class="controls">
        <a href="logout.php" class="btn btn-success" type="submit" name="signin">Logout</a>
      </div>
    </div>

  </fieldset>
</form>
</div>
<script type="text/javascript">
</script>
<script src="assests/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php } ?>