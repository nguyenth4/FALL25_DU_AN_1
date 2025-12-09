<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                Chỉnh sửa danh mục
            </div>
            <div class="card-body">

                <!-- Tên danh mục -->
                <div class="mb-3">
                    <label for="ten-danh-muc" class="form-label">Tên danh mục</label>
                    <input type="text" class="form-control" id="ten-danh-muc" name="name" value="" placeholder="Nhập tên danh mục">
                </div>

                <!-- Slug -->
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="" placeholder="slug-tu-dong-hoac-tu-nhap">
                </div>

                <!-- Trạng thái -->
                <div class="mb-3">
                    <label for="status" class="form-label">Trạng thái</label>
                    <select class="form-select" id="status" name="status">
                        <option value="1">Hiển thị</option>
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
                    <button class="btn btn-primary">Cập nhật danh mục</button>
                    <a href="category-list.php" class="btn btn-secondary">Quay lại</a>
                </div>

            </div>
        </div>
    </div>
</div>