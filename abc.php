<?php
echo " hi you";
//localhost/lesson01/
//index.php : file mặc định chạy nếu tồn tại
echo "<br/>";
/*
 * cú pháp comment trên nhiều dòng
 * comment : trình thông dịch sẽ bỏ qua mã lệnh(code) này và không thực thi
 */
/*
 * khái niệm Biến trong php
 * Biến: là nơi lưu trữ ( máy tính sẽ cấp phát vùng nhớ để lưu trữ giá trị)
 */
// một số kĩ thuật ( cú pháp) khai báo 1 biến trong php
// một biến trong php luôn luôn được bắt đầu bằng kí tự $
//tên biến của php không bắt đầu bằng con số hoặc khoảng trắng
$MyName = 'Tèo'; // một biến hợp lệ trong php
//$1myAge = '20';//biến không hợp lệ
//$ myEmail = 'teo@gmail.com';//biến không hợp lệ
$_myAddress = 'Ha Noi'; //hoàn toàn hợp lệ
//trong ngôn ngữ lập trình php : không quy định sẵn kiểu dữ liệu cho biến - kiểu dữ liệu của bieens sẽ được tự động nhận khi biến đó được gán 1 giá trị cụ thể
//biến trong php sẽ phân biệt chữ hoa và chữ thường
$myLove = 'A';
$myLove = 'B'; //thay đổi giá trị của biến
$MYLOVE = 'A';// không nên khai báo vì vi phạm quy chuẩn camelkey
// đây là 2 biến khác nhau hoàn toàn
// hằng số trong php- Viết hoa các từ cách nhau dấu gạch dưới
//hằng số : giá trị của nó sẽ không thay đổi
const PI = 3.14; //hằng số
define('MY_PI', 3.14); // hằng số
//PI = 3.15//sai - không thể thay đổi giá trị của hằng
echo PI;// hiển thị giá trị

