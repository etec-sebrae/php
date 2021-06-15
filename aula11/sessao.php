<?php
session_start();
if (isset($_SESSION['contador'])) {
   $_SESSION['contador'] += 1;
} else {
   $_SESSION['contador'] = 1;
}
$msg = "Quantidade de acesso: " .  $_SESSION['contador'];
?>
<html>
<head>
   <title>PHP session</title>
</head>
<body>
   <?php echo ($msg); ?>
</body>
</html>