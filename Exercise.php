<html>
<head>
<title>Exercise</title>
<body align = center><h1>
<?php

$a = 58;

if ($a>=70)
{
	$grade = "Passed";
}
else if($a>=60 && $a<=69)
{
	$grade = "Remedial";
}
else
{
	$grade = "Failed";
}
echo "Grade: $a";
echo "<br>";
echo "Result: $grade";

?></h1>
</body>

</head>

</html>