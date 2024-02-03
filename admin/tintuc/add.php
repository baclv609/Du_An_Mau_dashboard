<div class=" mt-5">
    <div class="row">
        <!-- Form Title -->
        <div class="row formTitle">
            <h1>Thêm mới Sản phẩm</h1>
        </div>

        <!-- Form Content -->
        <div class="formContent">
            <form action="index.php?act=addTinTuc" method="post" enctype="multipart/form-data">
                <div class="row">
                    
                    <!-- left -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tenSanPham" class="form-label">tieu_de</label>
                            <input required type="text" class="form-control" name="tieu_de" id="tenSanPham"
                                placeholder="tieu_de">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">noi_dung</label>
                            <input required type="text" class="form-control" name="noi_dung" id="price" placeholder="noi_dung">
                        </div>

                        <div class="mb-3">
                            <label for="id_danhMuc" class="form-label">Tên Danh mục</label>
                            <select class="form-select" name="id_danh_muc" id="id_danhMuc">
                                <?php
                                foreach ($listdanhmuctintuc as $key => $value) {
                                    echo '<option value="' . $value["id_danhmuc"] . '">' . $value["ten_danhmuc"] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- right -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Hình ảnh</label>
                            <input type="file" class="form-control" name="image" id="image" >
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="submit" value="Thêm mới">
                    <input type="reset" class="btn btn-secondary" value="Reset">
                    <a href="index.php?act=tintuc" class="btn btn-outline-primary">Danh Sách</a>
                </div>
            </form>
        </div>
    </div>
</div>