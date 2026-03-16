<?php
//1
echo "задание 1: ";
$arr1 = ['a', 'b', 'c', 'd', 'e'];
$result1 = array_map('strtoupper', $arr1);
print_r($result1);
echo "<br>";
//2
$arr = [10, 20, 30, 40, 50];
$lastElement = $arr[count($arr) - 1];
echo "задание 2: $lastElement<br>";
//3
$arr = [1, 5, 3, 9, 2];
if (in_array(3, $arr)) {
	echo "задание 3: элемент 3 найден<br>";
} else {
	echo "задание 3: элемент 3 не найден<br>";
}
//4
echo "задание 4: ";
$arr4_1 = [1, 2, 3];
$arr4_2 = ['a', 'b', 'c'];
$result4 = array_merge($arr4_1, $arr4_2);
print_r($result4);
echo "<br>";
//5
echo "задание 5: ";
$arr5 = [1, 2, 3, 4, 5];
$result5 = array_slice($arr5, 1, 3);
print_r($result5);
echo "<br>";
//6
echo "задание 6: ";
$arr6 = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($arr6);
$values = array_values($arr6);
print_r($keys);
print_r($values);
echo "<br>";
//7
echo "задание 7: ";
$keys7 = ['a', 'b', 'c'];
$values7 = [1, 2, 3];
$result7 = array_combine($keys7, $values7);
print_r($result7);
echo "<br>";
//8
echo "задание 8: ";
$arr8 = ['a', '-', 'b', '-', 'c', '-', 'd'];
$position = array_search('-', $arr8);
echo $position . "\n";
echo "<br>";
//9
echo "задание 9 (ksort): ";
$arr9 = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
$sortKeys = $arr9;
ksort($sortKeys);
print_r($sortKeys);
echo "<br>";

echo "задание 9 (asort): ";
$sortAssoc = $arr9;
asort($sortAssoc);
print_r($sortAssoc);
echo "<br>";
//10
$str = '1234567890';
$sum = array_sum(str_split($str));
echo "задание 10: $sum<br>";
//11
echo "задание 11: ";
$result11 = array_fill(0, 10, 'x');
print_r($result11);
echo "<br>";
//12
echo "задание 12: ";
$arr12_1 = [1, 2, 3, 4, 5];
$arr12_2 = [3, 4, 5, 6, 7];
$result12 = array_intersect($arr12_1, $arr12_2);
print_r($result12);
?>
