<?php
$b = array ("one" => "a","two" => "b","three" => "c",);
echo $b["one"];
$c = array (
    "name"=>"huy",
    "year" => "9/9/1999",
    "age"=> "24",    
    "sex" => "Female",
);
echo "<br>";
echo "Tên sinh viên:" .$c['name'] ."<br> Ngày sinh:" .$c['year'];
// Hiển thị những nội dung tên phải ở trong input

echo "<br>";
echo "Tên: <input value'".$c['name']."'> , <br> Tuổi: <input value'".$c['year']."'>";
echo "Tên:<input value='". $c['name'] ."'>";
?>