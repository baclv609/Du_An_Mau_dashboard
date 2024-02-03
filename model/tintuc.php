<?php
function list_tintuc()
{
    $sql = "SELECT tintuc.id , tintuc.tieu_de, tintuc.noi_dung, tintuc.hinh_anh, danhmuctintuc.ten_danhmuc 
    FROM tintuc 
    JOIN danhmuctintuc 
    ON tintuc.id_danhMuc = danhmuctintuc.id_danhmuc WHERE 1;";
    $listTintuc = pdo_query($sql);
    return $listTintuc;
}
function list_danhmuctintuc()
{
    $sql = "SELECT * FROM danhmuctintuc ORDER BY id_danhmuc  desc"; // sắp xếp 
    $listdanhmuctintuc = pdo_query($sql);

    return $listdanhmuctintuc;
}
function insert_TinTuc($tieu_de, $noi_dung, $hinh_anh, $id_danhMuc)
{
    $sql = "INSERT INTO tintuc(tieu_de, noi_dung, hinh_anh, id_danhMuc) 
    VALUES ('$tieu_de','$noi_dung','$hinh_anh','$id_danhMuc')";
    pdo_execute($sql);
}
function delete_TinTuc($id)
{
    $sql = "DELETE FROM tintuc WHERE id = $id";
    pdo_query($sql);
}
function edit_tintuc($id)
{
    $sql = "SELECT * FROM tintuc WHERE id = $id";
    $list_tintucID = pdo_query_one($sql);
    return $list_tintucID;
}
function update_Tintuc_coHinhAnh($tieu_de, $noi_dung, $filename, $id_danhMuc,$id)
{
    $sql = "UPDATE tintuc 
SET
tieu_de='$tieu_de',
noi_dung='$noi_dung',
hinh_anh='$filename',
id_danhMuc='$id_danhMuc' 
WHERE  id='$id'";
    pdo_execute($sql);

}

function update_Tintuc_KhongHinhAnh($tieu_de, $noi_dung, $id_danhMuc,$id)
{
    $sql = "UPDATE tintuc 
SET
tieu_de='$tieu_de',
noi_dung='$noi_dung',
id_danhMuc='$id_danhMuc' 
WHERE  id='$id'";
    pdo_execute($sql);

}
?>