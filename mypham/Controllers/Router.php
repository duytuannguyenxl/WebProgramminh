<?php
//Lấy chuỗi được yêu cầu để phân tích

$query = $_SERVER['QUERY_STRING'];

//Phân tích trang được yêu cầu và 1 vài biến GET

$parsed = explode('&',$query);

//Trang được yêu cầu sẽ là phần tử đầu tiên

$page = array_shift($parsed);

//Tạo biến để chứa các biến GET

$getVars = array();

foreach ($parsed as $argument)
{
//Tách các biến GET bởi dấu ngăn cách '='

list($variable , $value) = explode('=' , $argument);
$getVars[$variable] = $value;

}

//Đường dẫn đến file controller

$target = '/controllers/'.$page.'.php';
//Include controller
echo $target;

if (file_exists($target))
{
include_once($target);

//Tùy chỉnh lại để phù hợp với tên class

$class = ucfirst($page) . '_Controller';

echo $class;
//Kiểm tra tên class có tồn tại hay không

if (class_exists($class))
{
$controller = new $class;
}
else
{

//Kiểm tra lại tên class nếu gặp lỗi này

die('class does not exist!');
}
}
else
{

//Không tìm thấy file trong 'controllers'

die('page does not exist!');
}

//Gọi hàm main trong controller
//Truyển các biến GET vào hàm main

$controller->main($getVars);
