<?php
header('Content-type: text/html; charset=utf-8');
?>


<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Замовл</title>
</head>
<body>
<H1>замовлення меблів</H1>
<table border=2>
<TR><td>mebly</td><td>tzvet</td><td>kilkist</td></tr>
<?php
$fp=fopen("zam.txt","r");
if($fp)
{while(!feof($fp))
{

$stroka=fscanf($fp,"%s\t%s\t%s\t%d\n");
list($mebly,$tzvet,$kilkist)=$stroka;
//$kilkist=$fscanf($fp,"%d\t");
echo "<TR><td>$mebly</td> <td>$tzvet</td> ><td>$kilkist</td></TR>";
//echo "";
//echo "<TR><td>$kilkist</td></TR>";
}
fclose($fp);}
?>
</body>
</html>
