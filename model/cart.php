<?php
function viewCard()
{
    $tong = 0;
    foreach ($_SESSION['myCart'] as $item => $value) {
        $tong = $tong + $value[5];

        echo '
    <tr>
        <td>' . $value[3] . '</td>
        <td>' . $value[1] . '</td>
        <td>' . $value[2] . '</td>
        <td>' . $value[4] . '</td>
        <td>' . $value[5] . '</td>
        <td><a href="index.php?act=deleteCard&idCard=' . $item . '"> <button>Xóa</button></a></td>
    </tr>';
    }
    echo '<tr>
            <td colspan = "4">Ton hang</td>
            <td >' . $tong . '</td>
        </tr>';

}
function list_BillCT($billCT)
{
    $tong = 0;

    echo '<tr>
                <th>Hinh</th>
                <th>sp</th>
                <th>price</th>
                <th>soluong</th>
                <th>Thanh tien</th>
        </tr>';

    foreach ($billCT as $value) {
        $tong = $tong + $value['thanhTien'];

        echo '
             <tr>
                 <td><img style="width: 110px; height:70px" alt="loading..." src="./uploads/' . $value['img'] . '"
                 alt=""></td>
                 <td>' . $value['name'] . '</td>
                 <td>' . $value['price'] . '</td>
                 <td>' . $value['soLuong'] . '</td>
                 <td>' . $value['thanhTien'] . '</td>
             </tr>';
    }
    echo '<tr>
            <td colspan = "4">Ton hang</td>
            <td >' . $tong . '</td>
        </tr>';
}
function tongDH()
{
    $tong = 0;
    foreach ($_SESSION['myCart'] as $value) {
        $tong = $tong + $value[5];
        return $tong;
    }

}
function insert_bill($user, $adress, $email, $tel, $ngayDatHang, $tongDH, $phuongThucTT)
{
    $sql = "INSERT INTO bill
    ( bill_adress, bill_email, bill_tel, bill_user, bill_ngayDatHang, bill_phuongThucTT, tongDH) 
    VALUES 
    ('$adress','$email','$tel','$user','$ngayDatHang','$phuongThucTT','$tongDH')";
    return pdo_execute_return_lastInsertId($sql);

    // trả về id oder
}
function insert_cart($idUser, $idSp, $name, $price, $img, $soLuong, $thanhTien, $idBill)
{
    $sql = "INSERT INTO cart(idUser, idSp, name, price, img, soLuong, thanhTien, idBill) 
    VALUES 
    ('$idUser','$idSp','$name','$price','$img','$soLuong','$thanhTien','$idBill')";

    return pdo_execute($sql);
}
function loadOne_bill($id)
{
    $sql = "SELECT * FROM bill WHERE id = $id";
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idBill)
{
    $sql = "SELECT * FROM cart WHERE idBill = $idBill";
    $bill = pdo_query($sql);
    return $bill;
}
?>