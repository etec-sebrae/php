<?php
setcookie("nome","", time()-60,"/","",0);
setcookie("idade","", time()-60,"/","",0);
?>

<html>
    <head>
        <title>Cookies em PHP </title>
    </head>
    <body>
        <?php echo "Deletando o  cookies" ?>
    </body>
</html>