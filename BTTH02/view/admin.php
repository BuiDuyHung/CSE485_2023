<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Giảng Viên</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../public/template/admin/plugins/fontawesome-free/css/all.min.css">
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
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="" class="brand-link">
                <img src="../public/template/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Danh Mục
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Quản lý điểm danh</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tạo mục điểm danh</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Quản lý điểm danh</h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
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
                                                    <option value="ABC101">Công nghệ Web-2-22</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="date" class="col-sm-2 col-form-label">Ngày:</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="date" class="" id="date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Xem</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <h1 class="text-center mt-4 mb-5">Bảng Thông Tin</h1>

            <div class="row">
                <div class="col-md-10 mx-auto">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Lớp</th>
                                <th>Sĩ số</th>
                                <th>Nghỉ học</th>
                                <th>Đi học</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>TH1</td>
                                <td>63</td>
                                <td>3</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TH2</td>
                                <td>63</td>
                                <td>0</td>
                                <td>63</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>TH3</td>
                                <td>63</td>
                                <td>2</td>
                                <td>61</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="../public/template/admin/plugins/jquery/jquery.min.js"></script>
        <script src="../public/template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../public/template/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <script src="../public/template/admin/dist/js/adminlte.min.js"></script>
        <script src="../public/template/admin/dist/js/demo.js"></script>

</body>

</html>