<div class=" mt-5">
    <div class="row">
        <!-- Form Title -->
        <div class="row formTitle">
            <h1>Thêm mới Sản phẩm</h1>
        </div>

        <!-- Form Content -->
        <div class="formContent">
            <form action="index.php?act=updatekhoahoc" method="post" enctype="multipart/form-data">
                <div class="row">
                    <input required type="text" hidden class="form-control" value="<?= $list_khoahocID['id'] ?>"
                        name="id">
                    <!-- left -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tenSanPham" class="form-label">ten_khoa_hoc</label>
                            <input required type="text" class="form-control" required value="<?= $list_khoahocID['ten_khoa_hoc'] ?>"
                                name="ten_khoa_hoc" placeholder="tieu_de">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">gia</label>
                            <input required type="text" class="form-control" name="gia"
                                value="<?= $list_khoahocID['gia'] ?>" required placeholder="noi_dung">
                        </div>

                        <div class="mb-3">
                            <label for="id_danhMuc" class="form-label">Tên Danh mục</label>
                            <select class="form-select" name="id_danhmuc">
                                <?php
                                foreach ($list_danhmuckhoahoc as $key => $value) {
                                    echo '<option ' . ($value["id_danh_muc"] == $list_khoahocID['id_danhmuc'] ? "selected" : "") . ' value="' . $value["id_danh_muc"] . '">' . $value["ten_danh_muc"] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- right -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Hình ảnh</label>
                            <input type="file" class="form-control" name="hinh_anh"
                                value=" <?= $list_khoahocID['hinh_anh'] ?>" id="image">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="submit" value="Cap nhat">
                    <input type="reset" class="btn btn-secondary" value="Reset">
                    <a href="index.php?act=listkhoahoc" class="btn btn-outline-primary">Danh Sách</a>
                </div>
            </form>
        </div>
    </div>
</div>