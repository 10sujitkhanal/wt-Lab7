<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["name"] = "Sujit";
$_SESSION["email"] = "sujit@gmail.com";
echo $_SESSION["name"];
?>
</body>
</html>