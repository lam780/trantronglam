<?php
/*
$a = 1;
$b = 2;
print "$a + $b =";
echo $a + $b;
*/
?>




<?php
$a = 19140684;
$name = "tran trong lam";
$class = "TH24.23";
# khai báo 3 biến mã sinh viên , tên , lớp 

$connection = $a." ".$name." ".$class;
print "$connection"."<br/>";
# lối 3 chuỗi lại 

echo strlen($connection)."<br/>";# đếm chữ 
echo str_word_count("$connection")."<br/>";# đếm từ kiểu string loại bỏ số
# tính độ dài biến lối


echo strpos("$connection","$class")."<br/>";
# tìm kiếm lớp ở vị trí thứ mấy trong biến lối <tính cả dấu cách>

echo str_replace("$class","TH24.24","$connection");
# thay thế biến lối

?>