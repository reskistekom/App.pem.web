<html><head><title>Statement IF</title></head>
<body>
<?php 
echo"<form action=\"$php_self\"method=\"post\">";
$nilai1=$_POST['nilai1'];
echo"Berapakah nilai PHPmu? : 
<input name=\"nilai1\" value=\"$nilai1\" size=\"3\" type=\"text\"
value=\"$nilai1\">
<input name=\"cek\" type=\"submit\" value=\"cek\"> </form>";
if($_POST['cek'])
{ echo"<br><h1>";
	if($nilai1=="")
		{echo"Anda belum menentukan nilai...!"; }
	elseif (!is_numeric($nilai1))
		{ echo"ini bukan nilai angka"; }
	else
	{
	if($nilai1<=30)
		{echo"Anda mendapat nilai huruf <b> E </b>"; }
	elseif($nilai1<=50)
		{echo"Anda mendapat nilai huruf <b> D </b>"; }
	elseif($nilai1<=70)
		{echo"Anda mendapat nilai huruf <b> C </b>"; }
	elseif($nilai1<=85)
		{echo"Anda mendapat nilai huruf <b> AB </b>"; }
	else
		{echo"Anda mendapat nilai huruf <b> A </b>"; }
	}
	echo"</h1>";
}
?>
</body>
</html>