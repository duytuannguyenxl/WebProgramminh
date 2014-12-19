<?php
/**
* Lớp điều khiển view trong mô hình MVC
*/
class View_Model
{
/**
* Tạo biến để chứa các dữ liệu đưa vào template
*/
private $data = array();
/**
* Trạng thái view
*/
private $render = FALSE;
/**
* Load template
*/
public function __construct($template)
{
//Tên file
$file = SERVER_ROOT . '/views/' . strtolower($template) . '.php';
if (file_exists($file))
{
/**
* Lưu tên file vào render đến khi destroy hàm chúng ta sẽ
include file vào
*/
$this->render = $file;
}
}
/**
* Lấy dữ liệu từ controller và lưu giữ vào dât
*
* @param $variable tên biến
* @param $value giá trị
*/
public function assign($variable , $value)
{
$this->data[$variable] = $value;
}
public function __destruct()
{
//Tạo biến data chứa dữ liệu
$data = $this->data;
//Include view
include($this->render);
}
}
