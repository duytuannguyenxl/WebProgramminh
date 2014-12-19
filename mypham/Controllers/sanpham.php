<?php 
//Tự động include file chứa các class được gọi
function __autoload($className)
{
//tách tên class bởi dấu _
list($filename , $suffix) = explode('_' , $className);
//Lấy đường dẫn đến file
$file = SERVER_ROOT . '/models/' . strtolower($filename) . '.php';
//Include file
if (file_exists($file))
{
include_once($file);
}
else
{
//File không tồn tại
die("File '$filename' định nghĩa lớp '$className' không tồn tại.");
}
}

//**
* Đây là file điều khiển của trang sanpham
*/
class Sanpham_Controller
{
/**
* Tên template nằm trong thư mục 'views' trong mô hình MVC
* để hiện thông tin sản phẩm
*/
public $template = 'sanpham';
/**
* Đây là hàm mặc định sẽ được gọi từ router.php
*
* @param array $getVars chứa các biến GET từng trang index.php
*/
public function main(array $getVars)
{
$sanphamModel = new Sanpham_Model();
$sanpham = $sanphamModel->getSanphamById('1');
//Tạo 1 view mới, truyền vào template mà ta cần hiển thị
$viewModel = new View_Model($this->template);
//Truyển biến cho phần view
$viewModel->assign('tensp',$sanpham['tensp']);
$viewModel->assign('mota',$sanpham['mota']);
}
}
?>
