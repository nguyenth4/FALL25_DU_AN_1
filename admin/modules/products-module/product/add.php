<form action="index.php?role=admin&module=products&action=store" method="POST" enctype="multipart/form-data">

    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    Thêm sản phẩm
                </div>
                <div class="card-body">

                    <!-- Tên sản phẩm -->
                    <div class="mb-3">
                        <label class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>

                    <!-- Ảnh -->
                    <div class="mb-3">
                        <label class="form-label">Ảnh sản phẩm</label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                    </div>

                    <!-- Giá -->
                    <div class="mb-3">
                        <label class="form-label">Giá</label>
                        <input type="number" class="form-control" name="price" required>
                    </div>

                    <!-- Giá khuyến mãi -->
                    <div class="mb-3">
                        <label class="form-label">Giá khuyến mãi</label>
                        <input type="number" class="form-control" name="sale_price"
                            placeholder="Để trống nếu không khuyến mãi">
                    </div>

                    <!-- Brand -->
                    <div class="mb-3">
                        <label class="form-label">Brand</label>
                        <input type="text" class="form-control" name="brand">
                    </div>

                    <!-- Slug -->
                    <div class="mb-3">
                        <label class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>

                    <!-- Trạng thái -->
                    <div class="mb-3">
                        <label class="form-label">Trạng thái</label>
                        <select class="form-select" name="is_active">
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
                        <button type="submit" class="btn btn-success">
                            Lưu sản phẩm
                        </button>
                        <a href="?role=admin&module=products" class="btn btn-secondary">
                            Quay lại
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>