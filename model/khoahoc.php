<?php
function list_khoahoc()
{
    $sql = "SELECT khoahoc.id, khoahoc.ten_khoa_hoc, khoahoc.hinh_anh, khoahoc.gia, danhmuckhoahoc.ten_danh_muc FROM `khoahoc` JOIN danhmuckhoahoc ON khoahoc.id_danhmuc = danhmuckhoahoc.id_danh_muc";
    $listTintuc = pdo_query($sql);
    return $listTintuc;
}
function list_danhmuckhoahoc()
{
    $sql = "SELECT * FROM danhmuckhoahoc ORDER BY id_danh_muc  desc"; // sắp xếp 
    $listdanhmuctintuc = pdo_query($sql);

    return $listdanhmuctintuc;
}
function insert_khoahoc($ten_khoa_hoc, $gia, $filename, $id_danhmuc)
{
    $sql = "INSERT INTO `khoahoc`( `ten_khoa_hoc`, `hinh_anh`, `gia`, `id_danhmuc`) 
    VALUES 
    ('$ten_khoa_hoc','$filename','$gia','$id_danhmuc')";
    pdo_execute($sql);
}
function delete_khoahoc($id)
{
    $sql = "DELETE FROM khoahoc WHERE id = $id";
    pdo_query($sql);
}
function edit_khoahoc($id)
{
    $sql = "SELECT * FROM khoahoc WHERE id = $id";
    $list_khoahocID = pdo_query_one($sql);
    return $list_khoahocID;
}
function update_khoahoc_coHinhAnh($ten_khoa_hoc, $gia, $filename, $id_danhmuc, $id){
    $sql = "UPDATE `khoahoc` 
    SET 
    `ten_khoa_hoc`='$ten_khoa_hoc',
    `hinh_anh`='$filename',
    `gia`='$gia',
    `id_danhmuc`='$id_danhmuc' 
    WHERE 
     id='$id'";
    //  echo $sql;
    //  die;
    pdo_execute($sql);
}
function update_khoahoc_KhongHinhAnh($ten_khoa_hoc, $gia, $id_danhmuc, $id){
    $sql = "UPDATE `khoahoc` 
    SET 
    ten_khoa_hoc='$ten_khoa_hoc',
  gia='$gia',
    id_danhmuc='$id_danhmuc' 
    WHERE 
     id='$id'";
    pdo_execute($sql);
}
?>