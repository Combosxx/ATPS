<?php 
include "Nav.php";
//require "Nav.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-image: url('<?php echo $bgImage; ?>');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
<title>ATPS-</title>
</head>
<body>
  

    <div class="col-md-10">
      <p>easy way , easy find</p>
</div>
  </div>
</div>
<?php 
if(isset($_SESSION['erreur'])){
  $erreur=$_SESSION['erreur'];
  unset($_SESSION['erreur']);
echo "
  <script>
  alert('$erreur');
  </script> ";
}



include "footer.php";
?> 



</body>
</html>