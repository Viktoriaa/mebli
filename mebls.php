<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php

$mebly=$_REQUEST['mebly'];
echo "mebly=$mebly <br>";
$tzvet=$_REQUEST['tzvet'];
echo "tzvet=$tzvet <br>";
$kilkist=$_REQUEST['kilkist'];
echo "kilkist=$kilkist <br>";

$fp=fopen("zam.txt","a");
fputs($fp,"$mebli\t$tzvet\t$kilkist\n");
fclose($fp);

?>
</body>
</html>