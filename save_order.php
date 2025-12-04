<?php
// دریافت اطلاعات از AJAX
$name  = $_POST["name"];
$phone = $_POST["phone"];
$product = $_POST["product"];
$date = date("Y-m-d H:i:s");

// متن ذخیره‌شده در فایل
$orderText = "نام: $name\nشماره: $phone\nمحصول: $product\nتاریخ: $date\n-----------------------\n";

// ذخیره در فایل orders.txt
file_put_contents("orders.txt", $orderText, FILE_APPEND);

echo "success";
?>
