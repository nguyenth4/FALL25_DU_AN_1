<!-- Cart Page Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <!-- Header Form Cart -->
        <div class="d-flex align-items-center border-bottom py-3 bg-white rounded">

            <!-- Checkbox chọn tất cả -->
            <div class="form-check me-3 ms-2">
                <input class="form-check-input" type="checkbox" id="selectAllHeader">
            </div>

            <!-- Cột Sản phẩm -->
            <div class="d-flex align-items-center flex-grow-1 text-muted small fw-semibold">
                <!-- khoảng trống tương ứng hình sản phẩm -->
                <div style="width:150px;"></div>
                <div>Sản Phẩm</div>
            </div>

            <!-- Cột Đơn Giá -->
            <div class="text-muted small fw-semibold text-center" style="width:150px;">
                Đơn Giá
            </div>

            <!-- Cột Số Lượng -->
            <div class="text-muted small fw-semibold text-center" style="width:170px;">
                Số Lượng
            </div>

            <!-- Cột Số Tiền -->
            <div class="text-muted small fw-semibold text-center" style="width:150px;">
                Số Tiền
            </div>

            <!-- Cột Thao Tác -->
            <div class="text-muted small fw-semibold text-center" style="width:125px;">
                Thao Tác
            </div>
        </div>
        <!-- SHOP BLOCK -->
        <div class="bg-white border rounded mb-4 p-3">

            <div class="d-flex align-items-center border-top py-3">

                <div class="d-flex align-items-start flex-grow-1">

                    <input type="checkbox" class="me-3 ms-2">

                    <img src="assets/img/product-bestseller-1.jpg"
                        class="rounded border me-3" width="100">

                    <div>
                        <p class="fw-bold mb-1">Lumos Eyewear – Kính Mắt Thời Trang Chống Ánh Sáng Xanh</p>
                        <!-- Simple select -->
                        <div class="d-flex align-items-center">
                            <label for="phanloai" class="me-2 mb-0">Phân loại:</label>
                            <select id="phanloai" class=""
                                style="width: 150px;"
                                onchange="document.getElementById('phanloai-text').textContent = 'Phân loại: ' + this.value;">
                                <option value="Gọng đen">Gọng đen</option>
                                <option value="Gọng trắng">Gọng trắng</option>

                            </select>
                        </div>
                        <div class="d-flex align-items-center">
                            <label for="size" class="me-2 mb-0">Size:</label>
                            <select id="size" class=""
                                style="width: 150px;"
                                onchange="document.getElementById('size-text').textContent = 'Size: ' + this.value;">
                                <option value="Size tiêu chuẩn">Size tiêu chuẩn</option>
                                <option value="Size nhỏ">Size nhỏ</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="text-center" style="width:150px;">
                    <p class="fw-bold mb-0">96.800₫</p>
                </div>

                <div class="text-center" style="width:170px;">
                    <div class="input-group " style="width: 170px;">
                        <button class="btn-light">-</button>
                        <input type="text" class="form-control text-center" value="1" style="border-radius:2px;">
                        <button class="btn-light">+</button>
                    </div>
                </div>

                <div class="text-center d-flex justify-content-center align-items-center" style="width:150px;">
                    <p class="fw-bold mb-0 text-danger">96.800₫</p>
                </div>

                <div class="text-center d-flex justify-content-center align-items-center" style="width:120px;">
                    <button class="btn btn-sm text-danger">Xóa</button>
                </div>
            </div>

        </div>
        <!-- TÍNH TIỀN -->
        <div class="text-end mt-4">
            <h4 class="fw-bold">Tổng cộng: <span class="text-danger">0₫</span></h4>
            <a href="/checkout.php"><button class="btn btn-primary px-4 py-2 mt-2">Mua hàng</button></a>
        </div>
    </div>
</div>
<!-- Cart Page End -->