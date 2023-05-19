<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Giảng Viên</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../public/template/admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php" role="button">
                        Log Out
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="" class="brand-link">
                <img src="../public/template/admin/dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Giảng Viên</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../public/template/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Kiều Tuấn Dũng</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-book"></i>
                                <p class="ml-50">
                                    Điểm Danh
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./admin.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Quản lý điểm danh</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./adminCreate.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tạo mục điểm danh</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-graduation-cap"></i>
                                <p>
                                    Lớp Học Phần
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Công nghệ Web-1-22</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Công nghệ Web-2-22</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Tạo Danh Mục Điểm Danh</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Thông tin</h3>
                                </div>

                                <form action="/some-url.php" method="post">
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label for="year" class="col-sm-2 col-form-label">Năm học:</label>
                                            <div class="col-sm-10">
                                                <select id="year" name="year" class="form-select">
                                                    <option selected>Chọn năm học</option>
                                                    <option value="2021-2022">2021-2022</option>
                                                    <option value="2022-2023">2022-2023</option>
                                                    <option value="2023-2024">2023-2024</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="phase" class="col-sm-2 col-form-label">Học kỳ:</label>
                                            <div class="col-sm-10">
                                                <select id="phase" name="phase" class="form-select">
                                                    <option selected>Chọn học kỳ</option>
                                                    <option value="Học kỳ 1">Học kỳ 1</option>
                                                    <option value="Học kỳ 2">Học kỳ 2</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="stage" class="col-sm-2 col-form-label">Giai đoạn:</label>
                                            <div class="col-sm-10">
                                                <select id="stage" name="stage" class="form-select">
                                                    <option selected>Chọn giai đoạn</option>
                                                    <option value="Giai đoạn 1">Giai đoạn 1</option>
                                                    <option value="Giai đoạn 2">Giai đoạn 2</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="course" class="col-sm-2 col-form-label">Lớp học phần:</label>
                                            <div class="col-sm-10">
                                                <select id="course" name="course" class="form-select">
                                                    <option selected>Chọn lớp học phần</option>
                                                    <option value="">Công nghệ Web-2-22</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="course" class="col-sm-2 col-form-label">Lớp học chi tiết:</label>
                                            <div class="col-sm-10">
                                                <select id="course" name="course" class="form-select">
                                                    <option selected>Lớp</option>
                                                    <option value="">62TH2.1</option>
                                                    <option value="">62TH2.2</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="date" class="col-sm-2 col-form-label">Ngày:</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="date" class="" id="date">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="time" class="col-sm-2 col-form-label">Giờ:</label>
                                            <div class="col-sm-10">
                                                <input type="time" id="time" name="time" required>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Tạo</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script src="../public/template/admin/plugins/jquery/jquery.min.js"></script>
        <script src="../public/template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../public/template/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <script src="../public/template/admin/dist/js/adminlte.min.js"></script>

</body>

</html>