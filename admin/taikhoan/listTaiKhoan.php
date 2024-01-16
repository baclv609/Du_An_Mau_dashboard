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
                    <th scope="col">Mã Tài khoản</th>
                    <th scope="col">user</th>
                    <th scope="col">pass</th>
                    <th scope="col">email</th>
                    <th scope="col">adress</th>
                    <th scope="col">tel</th>
                    <th scope="col">Vai trò (role)</th>
                    <th>#</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($listTk as $value) {
                    echo '
                <tr>
                    <td scope="row">#</td>
                    <td>' . $value['id'] . '</td>
                    <td>' . $value['user'] . '</td>
                    <td>' . $value['pass'] . '</td>
                    <td>' . $value['email'] . '</td>
                    <td>' . $value['adress'] . '</td>
                    <td>' . $value['tel'] . '</td>
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