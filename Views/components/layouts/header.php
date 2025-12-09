<!-- Topbar Start -->
<div class="container-fluid px-5 d-none border-bottom d-lg-block">
    <div class="row gx-0 align-items-center">
        <div class="col-lg-4 text-center text-lg-start mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a href="#" class="text-muted me-2">Hỗ trợ</a><small> / </small>
                <a href="#" class="text-muted mx-2">Bảo hành</a><small> / </small>
                <a href="#" class="text-muted ms-2">Liên hệ</a>
            </div>
        </div>

        <div class="col-lg-4 text-center d-flex align-items-center justify-content-center">
            <small class="text-dark">Gọi ngay:</small>
            <a href="#" class="text-muted">(+84) 0813349216</a>
        </div>

        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                

                <div class="dropdown">
                    <a href="#" class="dropdown-toggle text-muted ms-2" data-bs-toggle="dropdown"><small>
                        <i class="fa fa-user me-2"></i> Tài khoản</small></a>
                    <div class="dropdown-menu rounded">
                        <a href="#" class="dropdown-item">Đăng nhập</a>
                        <a href="#" class="dropdown-item">Yêu thích</a>
                        <a href="#" class="dropdown-item">Giỏ hàng</a>
                        <a href="#" class="dropdown-item">Thông báo</a>
                        <a href="#" class="dropdown-item">Cài đặt</a>
                        <a href="#" class="dropdown-item">Tài khoản của tôi</a>
                        <a href="#" class="dropdown-item">Đăng xuất</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-5 py-4 d-none d-lg-block">
    <div class="row gx-0 align-items-center text-center">
        <div class="col-md-4 col-lg-3 text-center text-lg-start">
            <div class="d-inline-flex align-items-center">
                <a href="" class="navbar-brand p-0">
                    <h1 class="display-5 text-primary m-0">
                        <i class="fas fa-glasses text-secondary me-2"></i>LUMOS
                    </h1>
                </a>
            </div>
        </div>

        <div class="col-md-4 col-lg-6 text-center">
            <div class="position-relative ps-4">
                <div class="d-flex border rounded-pill">
                    <input class="form-control border-0 rounded-pill w-100 py-3" type="text"
                        placeholder="Tìm kính bạn muốn?">
                    <select class="form-select text-dark border-0 border-start rounded-0 p-3" style="width: 200px;">
                        <option value="All Category">Tất cả loại kính</option>
                        <option value="">Kính cận</option>
                        <option value="">Kính râm</option>
                        <option value="">Kính thời trang</option>
                        <option value="">Gọng kính</option>
                    </select>
                    <button type="button" class="btn btn-primary rounded-pill py-3 px-5" style="border: 0;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-lg-3 text-center text-lg-end">
            <div class="d-inline-flex align-items-center">
                <a href="#" class="text-muted d-flex align-items-center justify-content-center me-3">
                    <span class="rounded-circle btn-md-square border">
                        <i class="fas fa-random"></i>
                    </span>
                </a>
                <a href="#" class="text-muted d-flex align-items-center justify-content-center me-3">
                    <span class="rounded-circle btn-md-square border">
                        <i class="fas fa-heart"></i>
                    </span>
                </a>
                <a href="#" class="text-muted d-flex align-items-center justify-content-center">
                    <span class="rounded-circle btn-md-square border">
                        <i class="fas fa-shopping-cart"></i>
                    </span>
                    <span class="text-dark ms-2">0 VNĐ</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar p-0">
    <div class="row gx-0 bg-primary px-5 align-items-center">
        <div class="col-lg-3 d-none d-lg-block">
            <nav class="navbar navbar-light position-relative" style="width: 250px;">
                <button class="navbar-toggler border-0 fs-4 w-100 px-0 text-start" type="button"
                    data-bs-toggle="collapse" data-bs-target="#allCat">
                    <h4 class="m-0"><i class="fa fa-bars me-2"></i>Danh mục</h4>
                </button>

                <div class="collapse navbar-collapse rounded-bottom" id="allCat">
                    <div class="navbar-nav ms-auto py-0">
                        <ul class="list-unstyled categories-bars">
                            <li><div class="categories-bars-item"><a href="#">Kính cận</a><span>(12)</span></div></li>
                            <li><div class="categories-bars-item"><a href="#">Kính râm</a><span>(8)</span></div></li>
                            <li><div class="categories-bars-item"><a href="#">Kính thời trang</a><span>(15)</span></div></li>
                            <li><div class="categories-bars-item"><a href="#">Gọng kính</a><span>(20)</span></div></li>
                            <li><div class="categories-bars-item"><a href="#">Kính trẻ em</a><span>(5)</span></div></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="col-12 col-lg-9">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars fa-1x"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                        <a href="shop.php" class="nav-item nav-link">Sản phẩm</a>
                        <a href="single.php" class="nav-item nav-link">Chi tiết</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Trang</a>
                            <div class="dropdown-menu m-0">
                                <a href="bestseller.php" class="dropdown-item">Bán chạy</a>
                                <a href="cart.php" class="dropdown-item">Giỏ hàng</a>
                                <a href="checkout.php" class="dropdown-item">Thanh toán</a>
                                <a href="page-not-found.php" class="dropdown-item">404</a>
                            </div>
                        </div>

                        <a href="contact.php" class="nav-item nav-link me-2">Liên hệ</a>
                    </div>

                    <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mb-3 mb-lg-0">
                        <i class="fa fa-phone-alt me-2"></i> 0123 456 789
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
