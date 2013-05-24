<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
header('Content-type: text/html; charset=utf-8');
<head>
<title> Меблі!!!! </title>
<script language="JavaScript">
function touch()
{
alert("I was touched!");
}

function calculate()
{

var ціна=parseFloat(document.myform.ціна.value);

var кількість=parseFloat(document.myform.kilkist.value);
//alert(document.myform.mebly[0].checked);

//alert(document.myform.mebly.value);
if(document.myform.mebly[0].checked)
document.myform.result.value="Вартість замовлення="+(50*кількість);
else
if(document.myform.mebly[1].checked)
document.myform.result.value="Вартість замовлення="+(700*кількість);
else
if(document.myform.mebly[2].checked)
document.myform.result.value="Вартість замовлення="+(1000*кількість);
else
if(document.myform.mebly[3].checked)
document.myform.result.value="Вартість замовлення="+(900*кількість);
else
if(document.myform.mebly[4].checked)
document.myform.result.value="Вартість замовлення="+(600*кількість);
else
document.myform.result.value="Вартість замовлення="+(0*кількість);
}
</script>
</head>
<body>
<form name=myform action="mebls.php">
<H1>Меблі!</H1>
<p>Якісні меблі на будь-який смак за доступною ціною!</p>

<p> Що ви бажаєте замовити? </p>
<p><input type="radio" name="mebly" value="rad1">стільці <Br>
<label>
Ціна -  <input type=reset value="50 грн" name=ціна><br>
</label>
</label>
   <input type="radio" name="mebly" value="rad2">столи<Br>
<label>
ціна-  <input type=reset value="700 грн" name=ціна><br>
</label>
   <input type="radio" name="mebly" value="rad3"> кухонні меблі<Br>
<label>
ціна-  <input type=reset value="1000 грн" name=ціна><br>
</label>
 <input type="radio" name="mebly" value="rad4"> книжна шафа<Br>
<label>
ціна-  <input type=reset value="900 грн" name=ціна><br>
</label>
 <input type="radio" name="mebly" value="rad5"> сервант<Br> 
<label>
ціна-  <input type=reset value="600 грн" name=ціна><br>
</label></p>
Виберіть колір:
<select name="tzvet">
<option selected value="black">Чорний</option>
<option value="white">Білий</option>
<option value="gray">Сірий</option>

<select>
<br>
<label>
Кількість -  <input type=text name="kilkist"><br>
</label><Br>
<input type=reset value="Очистити">
<br>
<input type=button value="Порахувати" onClick="calculate();"><br>
<input type=submit value="Замовити"><br>
<textarea name="result">
</textarea>

</form>
</body>
</html>
