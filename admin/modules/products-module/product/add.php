<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                Thêm sản phẩm
            </div>
            <div class="card-body">

                <!-- Tên sản phẩm -->
                <div class="mb-3">
                    <label for="title" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="title" placeholder="Nhập tên sản phẩm">
                </div>

                <!-- Ảnh-->
                <div class="mb-3">
                    <label for="img" class="form-label">Ảnh sản phẩm</label>
                    <input type="file" class="form-control" id="img" name="image" accept="image/*">
                </div>

                <!-- Giá-->
                <div class="mb-3">
                    <label for="price" class="form-label">Giá</label>
                    <input type="text" class="form-control" id="price" placeholder="Nhập giá sản phẩm">
                </div>

                <!-- Brand-->
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" id="brand" placeholder="Nhập Brand">
                </div>

                <!-- Slug -->
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" placeholder="slug-tu-dong-hoac-tu-nhap">
                </div>

                <!-- Trạng thái -->
                <div class="mb-3">
                    <label for="status" class="form-label">Trạng thái</label>
                    <select class="form-select" id="status">
                        <option value="1" selected>Hiển thị</option>
                        <option value="0">Ẩn</option>
                    </select>
                </div>

            </div>
        </div>
    </div>

    <!-- Cột phải -->
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header">
                Hành động
            </div>
            <div class="card-body">

                <div class="d-grid gap-2">
                    <button class="btn btn-success">Lưu sản phẩm</button>
                    <a href="product.php" class="btn btn-secondary">Quay lại</a>
                </div>

            </div>
        </div>
    </div>
</div>