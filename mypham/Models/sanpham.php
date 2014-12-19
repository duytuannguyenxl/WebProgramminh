<?php
/**
* Sanpham_Model sẽ chứa dữ liệu để cung cấp cho Sanpham_Controller
*/
class Sanpham_Model
{
private $lstSanpham = array(
'1' => array(
'tensp' => 'Kem tri mun',
'mota' => 'Kem tri mun hon hop, nhap khau tu italia, tri mun hieu
qua..'
),
'2' => array(
'tensp' => 'Son moi Lipton',
'mota' => 'Son moi hang hieu, son vao moi do nhu moi bi danh'
),
'3' => array(
'tensp' => 'Kem chong nang',
'mota' => 'Kem chong nang, cang sai cang thay den'
),
'4' => array(
'tensp' => 'Kem trai cay',
'mota' => 'Kem trai cay dung de an chu hong phai de lam dep'
)
);
public function __construct()
{
}
/**
* Hàm lấy sản phẩm theo id
*@param $id id của sản phẩm
*/
public function getSanphamById($id)
{
$sanpham = $this->lstSanpham['id'];
return $sanpham;
}
}
