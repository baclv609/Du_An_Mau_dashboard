<div class="row my-5">


    <div>
        <h3 class="fs-4 mb-3">Danh sách tin tức</h3>
    </div>
    <div class="col-md-6 mb-3">
        <div class="d-flex justify-content-md-end">
            <a href="index.php?act=addTinTuc" class="btn btn-primary">Nhập thêm</a>
        </div>
    </div>
    <div class="row mb10 formDanhsach_loai">

        <div class="col my-3">
            <table id="example" class="table table-striped" style="width:100%">
                <thead class="table bg-white rounded shadow-sm table-hover">
                    <tr>
                        <th scope="col" width="50" class="bg-white">#</th>
                        <th scope="col">id</th>
                        <th scope="col">tieu_de</th>
                        <th scope="col">noi_dung</th>
                        <th scope="col">hinh_anh</th>
                        <th scope="col">ten_danhmuc</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($listTintuc)) {
                        foreach ($listTintuc as $value) {
                            echo '
                                 <tr>
                                     <td class="bg-white">#</td>
                                     <th scope="row" class="bg-white">' . $value['id'] . '</th>
                                     <td class="bg-white">' . $value['tieu_de'] . '</td>
                                     <td class="bg-white">' . $value['noi_dung'] . ' </td>
                                     <td class="bg-white"><img src="../uploads/' . $value["hinh_anh"] . '" style="width: 110px; height:70px" alt="loading..."></td>
                                     <td class="bg-white">' . $value['ten_danhmuc'] . ' </td>
                                     <td class="bg-white"><a class="btn btn-warning" href="index.php?act=editTintuc&id=' . $value['id'] . '">Sửa</a>  
                                     <a  class="btn btn-danger" href="index.php?act=delete_TinTuc&id=' . $value['id'] . '" onclick="return confirm(\'Bạn muốn xóa ?\')">Xóa</a></td>
                                 </tr>';
                        }
                    } else {
                        echo '<tr><td colspan="8" style="text-align: center">No data available</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>

</div>