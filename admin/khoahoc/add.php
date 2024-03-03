<div class=" mt-5">
    <div class="row">
        <!-- Form Title -->
        <div class="row formTitle">
            <h1>Thêm mới Sản phẩm</h1>
        </div>

        <!-- Form Content -->
        <div class="formContent">
            <form action="index.php?act=addKhoahoc" method="post" enctype="multipart/form-data">
                <div class="row">
                    
                    <!-- left -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tenSanPham" class="form-label">ten_khoa_hoc</label>
                            <input type="text" class="form-control" required name="ten_khoa_hoc" id="tenSanPham"
                                placeholder="ten_khoa_hoc">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Giá tiền</label>
                            <input type="text" class="form-control" required name="gia" id="gia" placeholder="Giá tiền">
                        </div>

                        <div class="mb-3">
                            <label for="id_danhMuc" class="form-label">Tên Danh mục</label>
                            <select class="form-select" name="id_danhmuc" id="id_danhMuc">
                                <?php
                                foreach ($list_danhmuckhoahoc as $key => $value) {
                                    echo '<option value="' . $value["id_danh_muc"] . '">' . $value["ten_danh_muc"] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- right -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Hình Ảnh</label>
                            <input type="file" class="form-control" required name="hinh_anh" id="hinh_anh">
                        </div>

                    </div>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="submit" value="Thêm mới">
                    <input type="reset" class="btn btn-secondary" value="Reset">
                    <a href="index.php?act=listkhoahoc" class="btn btn-outline-primary">Danh Sách</a>
                </div>

                <?php
                if (isset($thongBao) && ($thongBao !== "")) {
                    echo $thongBao;
                }
                ?>
            </form>
        </div>
    </div>
</div>