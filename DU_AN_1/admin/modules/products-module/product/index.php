<button type="button" class="btn btn-outline-primary mb-3">
    <a href="product-add.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
            <path
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
        </svg>
        Thêm sản phẩm
    </a>
</button>

<div class="card">
    <div class="card-header">
        Danh sách sản phẩm
    </div>

    <div class="card-body">
        <div class="row">
            <form action="">
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm theo tên, brand, slug...">
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" style="width: 30%;">Tên sản phẩm</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col" class="text-end">Hành động</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">1</th>

                    <!-- Tên sản phẩm -->
                    <td>Kính mắt thời trang nam nữ</td>

                    <!-- Ảnh sản phẩm -->
                    <td>
                        <img src="uploads/glasses.jpg" alt="Kính mắt" class="img-thumbnail" style="width: 60px; height: 40px; object-fit: cover;">
                    </td>

                    <!-- Giá -->
                    <td>450,000đ</td>

                    <!-- Brand -->
                    <td>Ray-Ban</td>

                    <!-- Slug -->
                    <td>kinh-mat-thoi-trang</td>

                    <!-- Trạng thái -->
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" checked>
                        </div>
                    </td>

                    <!-- Nút Sửa / Xóa -->
                    <td>
                        <a href="">
                            <button type="button" class="btn btn-outline-primary">Sửa</button>
                        </a>
                        <button type="button" class="btn btn-outline-danger">Xóa</button>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>

    <div class="card-footer">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>