<?php
//6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
$array = array(3, 9, 7, 6, 1);
sort($array);
print_r($array);
echo "<br>";
//7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
    function factorial($n)
    {
        if ($n == 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }
    $number = 7;
    echo "Giai thừa của $number là: " . factorial($number);
    echo "<br>";
//8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
function findPrimes($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
}
$start = 10;
$end = 50;
echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
findPrimes($start, $end);
echo "<br>";
//9.Viết chương trình PHP để tính tổng của các số trong một mảng.
function tinhTong($mang) {
    $tong = 0;
    foreach ($mang as $so) {
        $tong += $so;
    }
    return $tong;
}
$mang = array(8, 2, 7, 2, 5);
echo "Tổng của mảng là: " . tinhTong($mang);
//10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function printFibonacci($start, $end) {
    $num1 = 0;
    $num2 = 1;

    while ($num1 <= $end) {
        if ($num1 >= $start) {
            echo $num1 . " ";
        }
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
    }
}
$start = 10;
$end = 100;
echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
printFibonacci($start, $end);
echo "<br>";
//11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $numberOfDigits = strlen((string)$number);
    
    while ($temp != 0) {
        $remainder = $temp % 10;
        $sum += $remainder ** $numberOfDigits;
        $temp = (int)($temp / 10);
    }
    
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}
$number = 173; 
if (isArmstrong($number)) {
    echo "$number là số Armstrong";
} else {
    echo "$number không phải là số Armstrong";
}
echo "<br>";
//12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function chenPhanTu($mang, $viTri, $phanTu) {
    array_splice($mang, $viTri, 0, $phanTu);
    return $mang;
}
$mang = array(1, 7, 3, 8, 5);
$phanTu = 6;
$viTri = 3;
$mang = chenPhanTu($mang, $viTri, $phanTu);
print_r($mang);
echo "<br>";
//13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function loaiBoTrungLap($mang) {
    $mang = array_unique($mang);
    return $mang;
}
$mang = array(1, 2, 2, 3, 4, 4, 5, 5);
$mang = loaiBoTrungLap($mang);
print_r($mang);
echo "<br>";
//14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function timViTri($mang, $phanTu) {
    $viTri = array_search($phanTu, $mang);
    return $viTri;
}
$mang = array(1, 3, 7, 9, 5);
$phanTu = 3;
$viTri = timViTri($mang, $phanTu);
echo "Phần tử " . $phanTu . " nằm ở vị trí: " . $viTri;
echo "<br>";
//15.Viết chương trình PHP để đảo ngược một chuỗi.
function daoNguocChuoi($chuoi) {
    $chuoiDaoNguoc = strrev($chuoi);
    return $chuoiDaoNguoc;
}
$chuoi = "Xin chao, Map la Meo!";
$chuoiDaoNguoc = daoNguocChuoi($chuoi);
echo "Chuỗi đảo ngược: " . $chuoiDaoNguoc;
echo "<br>";
//16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.
$array = array("element1", "element2", "element3", "element4");
$length = count($array);
echo "Số lượng phần tử trong mảng là: " . $length;
echo "<br>";
//17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function isPalindrome($string) {
    $string = strtolower($string);
    $reverse = strrev($string);
    if ($string == $reverse) {
        return "Chuỗi này là chuỗi Palindrome.";
    } else {
        return "Chuỗi này không phải là chuỗi Palindrome.";
    }
}

$string = "madam";
echo isPalindrome($string);
echo "<br>";
//18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
$array = array("element1", "element2", "element3", "element1", "element2", "element1");
$value = "element1";
$count = array_count_values($array);
echo "Phần tử '" . $value . "' xuất hiện " . $count[$value] . " lần trong mảng.";
echo "<br>";
//19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
$array = array(5, 2, 8, 3, 1);
    rsort($array);
    print_r($array);
echo "<br>";
//20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
$array = array("element2", "element3", "element4");
array_unshift($array, "element1");
print_r($array);
array_push($array, "element5");
print_r($array);
echo "<br>";
//21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondLargest($array) {
    if(count($array) < 2){
        return null;
    }
    rsort($array);
    return $array[1];
}

$array = array(1, 2, 3, 4, 5);
$secondLargest = findSecondLargest($array);

echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
echo "<br>";
//22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function findGCD($a, $b) {
    if ($b == 0)
        return $a;
    return findGCD($b, $a % $b);
}
function findLCM($a, $b) {
    return ($a * $b) / findGCD($a, $b);
}
$a = 15;
$b = 20;
$gcd = findGCD($a, $b);
$lcm = findLCM($a, $b);

echo "Ước số chung lớn nhất của $a và $b là: " . $gcd;
echo "\n";
echo "Bội số chung nhỏ nhất của $a và $b là: " . $lcm;
echo "<br>";
//23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function isPerfectNumber($n) {
    $sum = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $n;
}

$number = 28;
if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không phải là số hoàn hảo.";
}
echo "<br>";
//24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOddNumber($arr) {
    return max(array_filter($arr, function ($num) {
        return $num % 2 != 0;
    }));
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$largestOddNumber = findLargestOddNumber($arr);

echo "Số lẻ lớn nhất trong mảng là: $largestOddNumber";
echo "<br>";
//25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function check_prime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
$n = 53;
if(check_prime($n))
    echo "{$n} là số nguyên tố";
else
    echo "{$n} là không là số nguyên tố";
 echo "<br>";
//26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositiveNumber($array) {
    $max = -1;

    foreach ($array as $num) {
        if ($num > 0 && $num > $max) {
            $max = $num;
        }
    }

    return $max;
}
$array = [1, 2, -3, 4, 5, -6, 7, 8, -9];
$largestPositiveNumber = findLargestPositiveNumber($array);
echo "Số dương lớn nhất trong mảng là: $largestPositiveNumber";
echo "<br>";
//27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegativeNumber($array) {
    $max = -1;
    foreach ($array as $num) {
        if ($num < 0 && $num > $max) {
            $max = $num;
        }
    }
    return $max;
}
$array = [1, 2, -3, 4, 5, -6, 7, 8, -9];
$largestNegativeNumber = findLargestNegativeNumber($array);
echo "Số âm lớn nhất trong mảng là: $largestNegativeNumber";
echo "<br>";
//28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOddNumbers($n) {
    $sum = 0;

    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }
    return $sum;
}
$n = 10;
$sumOddNumbers = sumOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến $n là: $sumOddNumbers";
echo "<br>";
//29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findPerfectSquares($min, $max) {
    $perfectSquares = [];

    for ($i = $min; $i <= $max; $i++) {
        $sqrt = sqrt($i);

        if ($sqrt == floor($sqrt)) {
            $perfectSquares[] = $i;
        }
    }
    return $perfectSquares;
}
$min = 1;
$max = 100;
$perfectSquares = findPerfectSquares($min, $max);
echo "Các số chính phương trong khoảng từ $min đến $max là: " . implode(", ", $perfectSquares);
echo "<br>";
//30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. 
function isSubstring($haystack, $needle) {
    return strpos($haystack, $needle) !== false;
}
$haystack = "Hello, world!<br> Toi la meo map";
$needle = "world";
if (isSubstring($haystack, $needle)) {
    echo "Chuỗi $needle là chuỗi con của chuỗi $haystack";
} else {
    echo "Chuỗi $needle không phải là chuỗi con của chuỗi $haystack";
}
echo "<br>";
?>
