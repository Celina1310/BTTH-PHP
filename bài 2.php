<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$a = " hoc phAn phP ";
$b = "hoc";

echo  " 1. Số kí tự là: ",strlen($a),"<br>"; /*1*/

echo " 2. Số kí từ là: ",str_word_count($a),"<br>";/*2*/

echo " 3. Sau khi đảo lại là: ",strrev($a),"<br>";/*3*/

echo " 4. Vị trí của từ PHP là: ",strpos($a, "C"), "<br>";/*4*/

echo " 5. Sau khi thay thế là: ",str_replace("HOC", "BAI",$a,), "<br>"; /*5 */

echo " 6. Có bắt đầu bằng chuỗi khác không: ", strcmp($a, $b), "<br>"; /*6*/

echo " 7.Chuyển đổi chuỗi thành chữ hoa: ", strtoupper($a),"<br>"; /*7*/

echo " 8. Chuyển đổi thành chữ thường: ", strtolower($a),"<br>"; /*8*/

echo  " 9. Chuyển đổi thành một chuỗi in hoa chữ cái đầu tiên: ", ucwords($a),"<br>"; /*9*/

echo " 10. Loại bỏ khoảng trắng ở đầu và ở cuối chuỗi: ", trim($a), "<br>"; /*10*/

echo " 11. Loại bỏ ký tự đầu tiên của chuỗi được kết quả như sau: " .ltrim($a,"a") ,"<br>"; /*11*/

/*12*/
echo "12. Sau khi loại bỏ ký tự cuối cùng là: ".rtrim($a,"p"),"<br>";

/*13*/
$chuoi = "pink, red, blue";
$delimiter = ",";
$mang = explode($delimiter, $chuoi);
echo "13. Sau khi tách chuỗi thành 1 mảng là: " . implode(", ", $mang) . "<br>";

/*14*/
$array = array('Apple', 'Banana', 'Orange', 'Mango');
$implode_result = implode(', ', $array);
echo "14. ", $implode_result . "<br>";

/*15*/
$chuoi_goc = "Hello";
$chuoi_muon_them = "123";
$chuoi_ket_qua_dau = str_pad($chuoi_goc, strlen($chuoi_goc) + strlen($chuoi_muon_them), $chuoi_muon_them, STR_PAD_LEFT);
echo "15. Chuỗi sau khi thêm vào đầu: " . $chuoi_ket_qua_dau . "<br>";

/*16*/
$chuoigoc = "Hello, World";
$chuoikt = "World";
if (strrchr($chuoigoc, $chuoikt) === $chuoikt) {
    echo " 16. Chuỗi '$chuoigoc' kết thúc bằng chuỗi '$chuoikt'.<br>";
} else {
    echo " 16. Chuỗi '$chuoigoc' không kết thúc bằng chuỗi '$chuoikt'.<br>";
}

/*17*/
if (strstr($chuoigoc, $chuoikt)) {
    echo " 17. Chuỗi '$chuoigoc' chứa chuỗi '$chuoikt'.<br>";
} else {
    echo " 17. Chuỗi '$chuoigoc' không chứa chuỗi '$chuoikt'.<br>";
}

/*18*/
$chuoi_ban_dau = "Hello, World!123";
$chuoi_moi = preg_replace('/[^a-zA-Z0-9]/', '_', $chuoi_ban_dau);
echo "18. " ,$chuoi_moi . "<br>";

/*19*/
$y = 30.5;
if (is_int($y)) {
    echo '19. Biến là kiểu số nguyên<br>';
} else {
    echo '19. Biến không phải số nguyên<br>';
}

/*20*/
$email = "ngoc@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo " 20. $email là địa chỉ email hợp lệ<br>";
} else {
    echo "20. $email không phải là địa chỉ email hợp lệ<br>";
}




?> 

</body>
</html>