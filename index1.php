<?php
// viết php để hiện thị 1-2-3-4-5-6-7-8-9-10 trên 1 dòng
for ($x = 0; $x <= 10; $x++) {
    if ($x < 10) {
        echo ($x . "-");
    } else {
        echo $x . "<br>";
    }
}
?>

<?php
// tính tổng dãy số nguyên từ 1 - 20
$tong = 0;
for ($x = 1; $x <= 20; $x++) {
    $tong += $x;
};
echo ("tông của dãy số là: " . $tong) . "<br>";
?>

<?php
// tính giai thừa của 1 số và hiển thị kết quả
$n = 10;
$giaiThua = 1;
for ($i = 1; $i <= 10; $i++) {
    $giaiThua *= $i;
}
echo $giaiThua;
?>

<?php
// hàm kiểm tra số nguyên tố
function kiemTra($n)
{
    for ($x = 2; $x < $n; $x++) {
        if ($n % $x == 0) {
            return 0;
        }
    }
    return 1;
}
$a = kiemTra(3);
if ($a == 0)
    echo 'Đây không phải là số nguyên tố' . "<br>";
else
    echo 'Đây là số nguyên tố' . "<br>";
?>

<?php
// hàm sắp sếp mảng
function sapXep($a)
{
    for ($x = 0; $x < count($a); $x++) {
        $min = $x;
        for ($y = $x + 1; $y < count($a); ++$y) {
            if ($a[$y] < $a[$min]) {
                $temp = $a[$min];
                $a[$min] = $a[$y];
                $a[$y] = $temp;
            }
        }
    }
    return $a;
}
$a = array(12, 45, 0, 84, 29, -7);
print_r(sapXep($a));
?>

<?php
// giải phương trình bậc hai:  4x^2 + 6x -5 = 0
    $a = 4;
    $b = 6;
    $c = -5;
    $d = ($b*$b) - (4*$a*$c);


    if ($d < 0){
        echo  'Phương trình vô nghiệp';
    }
    else if ($d == 0){
        echo  'Phương trình nghiệp kép x1 = x2 = ' . (-$b/2*$a);
    }
    else {
        echo  'Phương trình có hai nghiệp phân biệt, x1 = ' . ((-$b + sqrt($d))/2*$a);
        echo  ',x2 = ' . ((-$b - sqrt($d))/2*$a);
    }
?>
