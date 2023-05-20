<?php
    session_start();
    if(!isset($_SESSION['isLoginAdmin'])){
        header("Location: ../index.php");
    }
?>
<?php include('../include/adminsite.php'); ?>
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

</body>

</html>