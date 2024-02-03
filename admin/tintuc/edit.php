<div class=" mt-5">
    <div class="row">
        <!-- Form Title -->
        <div class="row formTitle">
            <h1>Thêm mới Sản phẩm</h1>
        </div>

        <!-- Form Content -->
        <div class="formContent">
            <form action="index.php?act=updateTintuc" method="post" enctype="multipart/form-data">
                <div class="row">
                    <input required type="text" hidden class="form-control" value="<?= $list_tintucID['id'] ?>"
                        name="id">
                    <!-- left -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tenSanPham" class="form-label">tieu_de</label>
                            <input required type="text" class="form-control" required value="<?= $list_tintucID['tieu_de'] ?>"
                                name="tieu_de" placeholder="tieu_de">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">noi_dung</label>
                            <input required type="text" class="form-control" name="noi_dung"
                                value="<?= $list_tintucID['noi_dung'] ?>" required placeholder="noi_dung">
                        </div>

                        <div class="mb-3">
                            <label for="id_danhMuc" class="form-label">Tên Danh mục</label>
                            <select class="form-select" name="id_danh_muc">
                                <?php
                                foreach ($listdanhmuctintuc as $key => $value) {
                                    echo '<option ' . ($value["id_danhmuc"] == $list_tintucID['id_danhMuc'] ? "selected" : "") . ' value="' . $value["id_danhmuc"] . '">' . $value["ten_danhmuc"] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- right -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Hình ảnh</label>
                            <input type="file" class="form-control" name="image"
                                value=" <?= $list_tintucID['hinh_anh'] ?>" id="image">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="submit" value="Cap nhat">
                    <input type="reset" class="btn btn-secondary" value="Reset">
                    <a href="index.php?act=tintuc" class="btn btn-outline-primary">Danh Sách</a>
                </div>
            </form>
        </div>
    </div>
</div>