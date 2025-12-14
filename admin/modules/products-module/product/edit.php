<form action="index.php?role=admin&module=products&action=update" method="POST" enctype="multipart/form-data">

    <!-- ID sản phẩm -->
    <input type="hidden" name="id" value="<?= $product['product_id'] ?>">

    <div class="row">
        <!-- Cột trái -->
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    Cập nhật sản phẩm
                </div>

                <div class="card-body">

                    <!-- Tên sản phẩm -->
                    <div class="mb-3">
                        <label class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="title"
                            value="<?= htmlspecialchars($product['title']) ?>" required>
                    </div>

                    <!-- Ảnh hiện tại -->
                    <div class="mb-3">
                        <label class="form-label">Ảnh hiện tại</label><br>
                        <?php if (!empty($product['image'])): ?>
                            <img src="<?= $product['image'] ?>" class="img-thumbnail mb-2"
                                style="width: 120px; height: auto;">
                        <?php else: ?>
                            <p class="text-muted">Chưa có ảnh</p>
                        <?php endif; ?>
                    </div>

                    <!-- Ảnh mới -->
                    <div class="mb-3">
                        <label class="form-label">Ảnh mới (nếu muốn thay)</label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                    </div>

                    <!-- Giá -->
                    <div class="mb-3">
                        <label class="form-label">Giá</label>
                        <input type="number" class="form-control" name="price" value="<?= $product['price'] ?>"
                            required>
                    </div>

                    <!-- Giá khuyến mãi -->
                    <div class="mb-3">
                        <label class="form-label">Giá khuyến mãi</label>
                        <input type="number" class="form-control" name="sale_price"
                            value="<?= $product['sale_price'] ?>" placeholder="Để trống nếu không khuyến mãi">
                    </div>

                    <!-- Brand -->
                    <div class="mb-3">
                        <label class="form-label">Brand</label>
                        <input type="text" class="form-control" name="brand"
                            value="<?= htmlspecialchars($product['brand']) ?>">
                    </div>

                    <!-- Trạng thái -->
                    <div class="mb-3">
                        <label class="form-label">Trạng thái</label>
                        <select class="form-select" name="is_active">
                            <option value="1" <?= $product['is_active'] ? 'selected' : '' ?>>
                                Hiển thị
                            </option>
                            <option value="0" <?= !$product['is_active'] ? 'selected' : '' ?>>
                                Ẩn
                            </option>
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
                        <button type="submit" class="btn btn-primary">
                            Cập nhật sản phẩm
                        </button>
                        <a href="index.php?role=admin&module=products" class="btn btn-secondary">
                            Quay lại
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>