<?php
/*
channel => @mirzapanel
*/
//-----------------------------database-------------------------------
$dbname = "xampp_db"; //  نام دیتابیس
$usernamedb = "xampp_user"; // نام کاربری دیتابیس
$passworddb = "secret"; // رمز عبور دیتابیس
$connect = mysqli_connect("mysql", $usernamedb, $passworddb, $dbname);
if ($connect->connect_error) {
    die("The connection to the database failed:" . $connect->connect_error);
}
mysqli_set_charset($connect, "utf8mb4");
//-----------------------------info-------------------------------

$APIKEY = "**TOKEN**"; // توکن ربات خود را وارد کنید
$adminnumber = "5522424631";// آیدی عددی ادمین
$domainhosts = "botmirza.fadad.net/bot";// دامنه  هاست و مسیر سورس
$usernamebot = "marzbaninfobot"; //نام کاربری ربات  بدون @