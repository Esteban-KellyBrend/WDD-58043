<html>
<head><title>My Web Page</title></head>
<?php

$content = "Welcome to PHP Programming";
$a = 5;
$_msg = 'Hello, again';
$x = 8;
$y = 8;

echo $content;
echo "<br>".$a;
echo "<br>";
echo $_msg;
//Arithmetic operations
echo "<br>";
echo $x+$y; 
echo "<br>";
echo $x-$y; 
echo "<br>";
echo $x*$y;
echo "<br>";
echo $x/$y; 
echo "<br>". $x%$y;
echo "<br>";
echo $x**$y;
//Comparison operations
echo "<br>";
if ($x==$y)
{
	echo "They are identical";
}
else
{
	echo "They are not identical";
}
//Increment/decrement operators
//for loop
/*for ($a = 5;$a>=1; $a--)
{
	echo "<br>".$a;
}
echo"<br>";*/
//while loop
echo "<br>";
$a = 5; 
while($a>=1)
{
	echo "The number is: $a \n";
	echo"<br>";
	$a-=1;  //$a=$a-1
}

//do while loop
echo "<br>";
$b = 5;
do
{
	echo "The number is: $b";
	echo "<br>";
	$b--;
}
	while ($b >= 1);
	
	
?>
</html>