<?php
$logonormal= "https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";
$logoaniversario= "https://s3.amazonaws.com/images.seroundtable.com/googles-18th-birthday-logo-1474898702.gif";
$nascimento= "07-08";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML com if reduzido em PHP</title>
</head>
<body style="text-align:center;">
<!-- Restante de estrutura-->
<img src="<?php echo (date("m-d")==$nascimento? $logoaniversario:$logonormal);?>" style="width:400px";><br> 
<input type="text" name="buscar" placeholder="O que deseja saber?">



<?php echo date("m-d");?>
    
</body>
</html>