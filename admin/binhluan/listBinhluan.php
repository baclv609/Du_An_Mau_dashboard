<div class="row ">
    <div class="d-flex justify-content-between m-3">

        <h3 class="fs-4 mb-2">Danh sách Tài khoản</h3>

        <div class="">
            <a href="index.php?act=addSp" class="btn btn-primary">Nhập thêm</a>
        </div>
    </div>
    <div class="col">
        <table class="table bg-white rounded shadow-sm  table-hover">

            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">noiDung</th>
                    <th scope="col">idSp</th>
                    <th scope="col">idUser</th>
                    <th scope="col">ngayBinhLuan</th>
                    <th scope="col">Vai trò (role)</th>
                    <th>#</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($listBinhluan as $value) {
                    echo '
                        <tr>
                            <td scope="row">#</td>
                            <td>' . $value['id'] . '</td>
                            <td>' . $value['noiDung'] . '</td>
                            <td>' . $value['idSp'] . '</td>
                            <td>' . $value['idUser'] . '</td>
                            <td>' . $value['ngayBinhLuan'] . '</td>
                            <td>' . $value['role'] . '</td>
                            <td><a href="index.php?act=editDm&id=' . $value['id'] . '"><input type="button" value="Sửa"></a>  <a href="index.php?act=deleteDm&id=' . $value['id'] . '"><input type="button" value="Xóa"></a></td>
                        </tr>
                    ';
                }

                ?>
            </tbody>
        </table>
    </div>



</div>