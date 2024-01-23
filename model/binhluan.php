<?php
function insert_binhluan($idSp, $idUser, $noiDung, $ngayBinhLuan)
{
    
    $sql = "INSERT INTO binhluan(idSp, idUser, noiDung, ngayBinhLuan) VALUES ('$idSp', '$idUser', '$noiDung', '$ngayBinhLuan')";
    pdo_execute($sql);
}
function selectAll_binhluan($idUser)
{
    
    $sql = "SELECT * FROM binhluan where idUser = $idUser";
    $listBl = pdo_query_one($sql);
    return $listBl;
}
function select_binhluan()
{
    $sql = "SELECT * FROM binhluan where 1 ORDER BY id desc";
    $dsBl = pdo_query_one($sql);
    return $dsBl;
}
?>