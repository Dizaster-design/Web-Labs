<?php
//task 1
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:

$order = &$very_bad_unclear_name;
$order .= ", and 10 chicken legs";



// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";
echo "\n\n";


//task 2
$variable = 1;
echo $variable;
echo "\n";

$number = 12.1;
echo $number;
echo "\n";

echo 5 + 9 - 2;
echo "\n";

$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo "Разница между расходами в этом месяце и прошлом ", $lastMonth - $thisMonth;
echo "\n\n";

//task11
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "В среденем ушло: ", $days_per_language, " дней(дня)";
echo "\n\n";

//task 12
echo 8**2;
echo "\n\n";

//task 13
$my_num = 64;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
echo "\n\n";

//task 14
$a = 10;
$b = 3;
echo $a % $b, "\n";
if($a % $b == 0) {
    echo "Делится\n";
} else echo "Делится с остатком ", $a % $b, "\n\n";

$st = pow(2, 10);
echo sqrt(245), "\n";

$array = [4, 2, 5, 19, 13, 0, 10];
$count = 0;
foreach($array as $element) $sum += pow($element, 2);
echo $count, "\n";

echo round(sqrt(379)), "\n";
echo round(sqrt(379), 1), "\n";
echo round(sqrt(379), 2), "\n";

$rootArray = ['floor' => floor(sqrt(587)), 'ceil' => ceil(sqrt(587))];
print_r($rootArray);
echo "\n";

$numbersArray = [4, -2, 5, 19, -130, 0, 10];
echo min($numbersArray);
echo "\n";
echo max($numbersArray);
echo "\n";

echo rand(1, 100), "\n";


$randomArray = [];
for ($i = 0; $i < 10; $i++) {
    $randomArray[$i] = rand();
}
print_r($randomArray);
echo "\n";

$a = 9;
$b = 10;
echo abs($a - $b), "\n";

$arrayOld = [1, 2, -1, -2, 3, -3];
$absArray = [];
for ($i = 0; $i<sizeof($arrayOld); $i++) {
    $absArray[$i] = abs($arrayOld[$i]);
}
print_r($absArray);
echo "\n";

$integerNumber = 30;
$divisorArray = [];
for ($i = 1; $i <= $a; $i++) {
    if ($integerNumber % $i === 0) {
        $divisorArray[] = $i;
    }
}
print_r($divisorArray);

$nums = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$count1 = 0;
$count2 = 0;
for ($i = 0; $i <= sizeof($nums); $i++) {
    $count1 += $nums[$i];
    $count2 += 1;
    if ($count1 > 10){
        echo $count2;
        break;
    }
}
echo "\n\n";
//task 15
function printStringReturnNumber()
{
    echo "Сколько вам лет?: ";
    return 19;
}
$my_num = printStringReturnNumber();
echo $my_num;
echo "\n\n";

//task 16
function increaseEnthusiasm(string $string)
{
    return $string."!";
}
echo increaseEnthusiasm("Привет"), "\n";

function repeatThreeTimes(string $string)
{
    return $string.$string.$string;
}
echo repeatThreeTimes("NO"), "\n";
echo increaseEnthusiasm(repeatThreeTimes("Hello")), "\n";

function cut(string $string, int $l = 10)
{
    return substr($string,0, $l);
}
$cut = cut("Я Паша Рыжков");
echo $cut, "\n";

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function printArray($array, $i = 0)
{
    if($i<sizeof($array)){
        echo $array[$i], "\n";
        printArray($array, $i + 1);
    }
}
printArray($array);
echo "\n";
function sumDigits($number)
{
    $sum = 0;
    while($number>0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    if($sum > 9) {
        return sumDigits($sum);
    }
    return $sum;
}
$number = 13545;
echo sumDigits($number), "\n\n";
//task17
function sumArray2D($array)
{
    $sum = 0;
    foreach($array as $innerArray) {
        foreach($innerArray as $value) {
            $sum += $value;
        }
    }
    return $sum;
}
$array = [[1, 2, 3], [4, 5], [6]];
echo sumArray2D($array), "\n";

$number = 1;
$array2D = [];
for ($i = 0; $i < 3; $i++) {
    $innerArray = [];
    for($j = 0; $j < 3; $j++) {
        $innerArray[] = $number;
        $number++;
    }
    $array2D[] = $innerArray;
}
print_r($array2D);

$array = [2, 5, 3, 9];
$result = $array[0] * $array[1] + $array[2] * $array[3];
echo $result, "\n";

$user = ['name' => "Pavel", 'surname' => "", 'Ryzhkov' => "Alexandrovich"];
echo $user['name'], " ", $user['surname'], " ", $user['patronymic'], "\n";

$date = ['year'=> 2024, 'month' => "03", 'day' => "19"];
echo $date['year'], "-", $date['month'], "-", $date['day'], "\n";

$arr = ['a','b','c','d','e'];
echo sizeof($arr), "\n";

$len = count($arr);
echo $arr[$len-1], "\n";
echo $arr[$len-2], "\n";
echo "\n\n";

// task 18
function sumGreaterThanTen(int $a, int $b)
{
    if (($a + $b) > 10){
        return ($a + $b) > 10;
    }
}
echo sumGreaterThanTen(20, 45), "\n";

function areEqual(int $a, int $b)
{
    if ($a == $b) return True;
    else return False;
}
echo areEqual(2, 3), "\n";

$test = 0;
echo ($test == 0) ? "Верно\n" : "";

$age = 21;
if($age < 10 || $age > 99) echo "$age за пределами  (10-99)\n";
else {
    $sum = array_sum(str_split($age));
    if ($sum <= 9) {
        echo "Сумма цифр однозначная: $sum\n";
    } else {
        echo "Сумма цифр двузначна: $sum\n";
    }
}

$arr = [32, 321, 453];
if(sizeof($arr) == 3) {
    $sum = array_sum($arr);
    echo "Массив состоит из 3 элементов. Сумма равна ", array_sum($arr), "\n";
}
else echo "Массив состоит из ", sizeof($arr), " элементов";
echo "\n\n";

// task 19
$pyramidSize = 20;
echo "\n";
for($i = 1; $i <= $pyramidSize; $i++) {
    for($j = 1; $j <= $i; $j++) echo 'x';
    echo "\n";
}
echo "\n\n";

//task 20
$numbers = [3, 1, 4, 5, 6, 7, 7, 8, 8];
$average = array_sum($numbers) / sizeof($numbers);
echo $average, "\n";

$end = 100;
$sum = ($end * ($end + 1)) / 2;
echo $sum;

$sqrtNumbers = array_map("sqrt", $numbers);
print_r($sqrtNumbers);
echo "\n";

$numbers = range(1, 26);
$letters = range('a', 'z');
$result = array_combine($letters, $numbers);
print_r($result);
echo "\n";

$string = '1234567890';
$pairs = str_split($string, 2);
$arr = array_map("intval",$pairs);
$sum = array_sum($arr);
echo $sum;










