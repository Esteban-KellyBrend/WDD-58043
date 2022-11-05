<html>
<head><Title>Long Quiz 2</title></head>
<body>
<?php

echo "Problem 1 <br>";
echo "Create a PHP program that will perform the following mathematical operations, to produce the required ouput. <br>";

$Salary_rate = 600;
echo "Salary rate: $Salary_rate <br>";
$Salary = $Salary_rate*15;
echo "Salary: $Salary <br>";
$Taxable_amount = $Salary*0.3;
echo "Taxable_amount: $Taxable_amount <br>";
$Net_pay = $Salary - $Taxable_amount;
echo "Net pay: $Net_pay <br>";

echo "<br>";
echo "<br>";
echo "Problem 2 <br>";
echo "Create a PHP program that will add all positive integers from 1-50 using loop statement. <br>";

$integer = 50;
$x = 1;
$sum = 0;

//Adding all postive integers from 1 to 50
while($x <= $integer) 
{
  $sum += $x;
  $x++;
}

echo "The answer for adding all positive integers from 1-50 is: $sum";

?>
</body>
</html>

